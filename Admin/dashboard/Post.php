<?php 
session_start();
$email = $_SESSION['ademail'];

$password = $_SESSION['adpass'];
if($email != false && $password != false){
    $sql = "SELECT * FROM auth_data WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);

        $status = $fetch_info['status'];
        $code = $fetch_info['otp'];
        if($status == "verified"){
            if($code != 0){
                header('Location: ../Forgot-Password');
            }
        }else{
            header("Location: ../Verify");
        }
    }else{
       
    }
}else{
    header('Location: ../Admin-login');
}
include ("../../assets/header/dashboardheader.php");
?>
            <div id="main">
                    <header class="mb-3">
                       <a href="#" class="burger-btn d-block d-xl-none">
                          <i class="bi bi-justify fs-3"></i>
                       </a>
                    </header>
            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Add Post</h3>
                            <p class="text-subtitle text-muted"></p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Add Post</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
          <?php
          require_once("../../assets/backend/dbcon/connection.php");
$errors = array();
$success = array();
$warning = array();
          //if user click on Publish
if(isset($_POST['addpost'])){
          
          $filename = $_FILES["banner"]["name"];
          $tempname = $_FILES["banner"]["tmp_name"];    
          $folder = "../uploads/".$filename;
          if (move_uploaded_file($tempname, $folder))  {
                     //getting input values
                     $title = mysqli_real_escape_string($con, $_POST['title']);
                     $metadisc = mysqli_real_escape_string($con, $_POST['metadisc']);
                     $banneralt = mysqli_real_escape_string($con, $_POST['banneralt']);
                     $catagory = mysqli_real_escape_string($con, $_POST['catagory']);
                     $content = mysqli_real_escape_string($con, $_POST['content']);
                     $date = date('d, M, y');
                     $status = 1;
                        if(count($errors) === 0){
                           $insert_blog = "INSERT INTO blog_content (title, meta_disc, banner, banneralt, catagory, content, date, status) values('$title', '$metadisc', '$filename', '$banneralt','$catagory', '$content', '$date', $status)";
                           //echo($insert_blog);
                           //die();
                           $data_check = mysqli_query($con, $insert_blog);
                        if($data_check){
                           $success['blogpost'] = "Blog posted";
                        }
                        else{
                           $errors['db-error'] = "Failed while inserting data into database!";
      }
    }
   }else{
  echo "<script>alert ('please provide image...!')</script>";
  exit();
 }
}

//if user click on draft
if(isset($_POST['draftpost'])){
          
          $filename = $_FILES["banner"]["name"];
          $tempname = $_FILES["banner"]["tmp_name"];    
          $folder = "../uploads/".$filename;
          if (move_uploaded_file($tempname, $folder))  {
                     //getting input values
                     $title = mysqli_real_escape_string($con, $_POST['title']);
                     $metadisc = mysqli_real_escape_string($con, $_POST['metadisc']);
                     $catagory = mysqli_real_escape_string($con, $_POST['catagory']);
                     $content = mysqli_real_escape_string($con, $_POST['content']);
                     $date = date('d, M, y');
                     $status = 0;
                        if(count($errors) === 0){
                           $insert_blog = "INSERT INTO blog_content (title, meta_disc, banner, catagory, content, date, status) values('$title', '$metadisc', '$filename', '$catagory', '$content', '$date', $status)";
                           //echo($insert_blog);
                           //die();
                           $data_check = mysqli_query($con, $insert_blog);
                        if($data_check){
                           $warning['draftpost'] = "Blog saved in draft";
                        }
                        else{
                           $errors['db-error'] = "Failed while inserting data into database!";
      }
    }
   }else{
  echo "<script>alert ('please provide image...!')</script>";
  exit();
 }
}
          ?>
                                  <?php if(count($errors) == 1){ ?>
                                <div class="alert m-3 alert-danger text-center">
                                 <?php foreach($errors as $showerror){ echo $showerror; } ?>
                                </div>
                                <?php }elseif(count($errors) > 1){ ?>
                                <div class="alert m-3 alert-danger">
                                <?php foreach($errors as $showerror){ ?>
                                <li><?php echo $showerror; echo $code; ?></li>
                                <?php } ?>
                                </div>
                                <?php } ?>
                                <?php if(count($success) == 1){ ?>
                                <div class="alert m-4 alert-success text-center">
                                 <?php foreach($success as $showsucces){ echo $showsucces; } ?>
                                </div>
                                <?php }elseif(count($success) > 1){ ?>
                                <div class="alert m-3 alert-success">
                                <?php foreach($success as $showsucces){ ?>
                                 <li><?php echo $showsucces; echo $code; ?></li>
                                <?php } ?>
                                </div>
                                <?php } ?>
                                <?php if(count($warning) == 1){ ?>
                                <div class="alert m-4 alert-warning text-center">
                                <?php foreach($warning as $showwarning){ echo $showwarning; } ?>
                                </div>
                                <?php } ?>
                                <div class="card-header">
                                    <h4 class="card-title">Add Post</h4>
                                </div>
                                <div class="card-body p-0">
                                             <form action="" method="POST" class="mt-5" enctype="multipart/form-data">
             <div class="text-left mb-2">
                <h1 class="m-3 text-primary">Add Post</h1>
             </div>
             <div class="from-group m-3">
                <input type="text" class="form-control form-control-xl" name="title" placeholder="Post Title" id="title">
             </div>
             <div class="from-group m-3">
                <input type="text" class="form-control form-control-xl" name="metadisc" placeholder="Meta Discription" id="meta">
             </div>
             <div class="form-group m-3">
                <input type="file" class="form-control form-control-xl" name="banner" id="img">
             </div>
              <div class="from-group m-3">
                <input type="text" class="form-control form-control-xl" name="banneralt" placeholder="Alt Text" id="banneralt">
             </div>
             <div class="from-group m-3">
                <input type="text" class="form-control form-control-xl" name="catagory" placeholder="Catagory" id="catagory">
             </div>
             <div class="m-3">
                <textarea rows="10" name="content" id="editor"></textarea>
             </div>
             <div class="form-group m-3">
                <input type="submit" class="btn btn-primary mr-3 px-3" name="addpost" value="Publish">
                <input type="submit" class="btn btn-secondary px-2" name="draftpost" value="Save to Draft">
             </div>
          </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

<?php include ("../../assets/footer/dashboardfooter.php"); ?>
