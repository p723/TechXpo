          <?php require("../../assets/backend/dbcon/connection.php");
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
          $postid = $_GET['id'];
      $uquery = "SELECT * FROM blog_content WHERE id = '$postid' ";
      $sdata = mysqli_query($con, $uquery);
      $postdata = mysqli_fetch_array($sdata);
          
$errors = array();
$success = array();
$warning = array();
          //if user click on Publish
if(isset($_POST['addpost'])){
   $filename = $_FILES["banneri"]["name"];
   $oldimg = $postdata['banner'];echo($filename); echo($oldimg);
   if ($filename !== "") {
         $delete = unlink("../../Admin/uploads/".$oldimg);
         if ($delete) {
          $tempname = $_FILES["banneri"]["tmp_name"];    
          $folder = "../uploads/".$filename;
          if(move_uploaded_file($tempname, $folder)){
                               //getting input values
                     $title = mysqli_real_escape_string($con, $_POST['title']);
                     $metadisc = mysqli_real_escape_string($con, $_POST['metadisc']);
                     $catagory = mysqli_real_escape_string($con, $_POST['catagory']);
                     $content = mysqli_real_escape_string($con, $_POST['content']);
                     $date = date('d, M, Y');
                     $status = 1;
                        if(count($errors) === 0){
                           $Update_blog = "UPDATE blog_content SET title='$title', meta_disc='$metadisc', banner='$filename', catagory='$catagory', content='$content', date='$date', status='$status' WHERE id='$postid'";
                          // echo($Update_blog);
                         //  die();
                           $data_check = mysqli_query($con, $Update_blog);
                        if($data_check){
                           $success['blogpost'] = "Blog Updated & Posted";
                           header('Location: ../../Posts-Maneger');
                        }
                        else{
                           $errors['db-error'] = "Failed while inserting data into database!";
      }
                        }
    }else{
  echo "<script>alert ('please provide image...!')</script>";
  exit();
 }}else {
    echo "<script>alert ('please provide image...!')</script>";
 }
   }else {
                   //getting input values
                     $title = mysqli_real_escape_string($con, $_POST['title']);
                     $metadisc = mysqli_real_escape_string($con, $_POST['metadisc']);
                     $catagory = mysqli_real_escape_string($con, $_POST['catagory']);
                     $content = mysqli_real_escape_string($con, $_POST['content']);
                     $date = date('d, M, Y');
                     $status = 1;
                        if(count($errors) === 0){
                           $Update_blog = "UPDATE blog_content SET title='$title', meta_disc='$metadisc', catagory='$catagory', content='$content', date='$date', status='$status' WHERE id='$postid'";
                           //echo($Update_blog);
                         //  die();
                           $data_check = mysqli_query($con, $Update_blog);
                        if($data_check){
                           $success['blogpost'] = "Blog Updated & Posted";
                           header('Location: ../../Posts-Maneger');
                        }
                        else{
                           $errors['db-error'] = "Failed while inserting data into database!";
      }
                        
    }
   }
   
}

//if user click on draft
if(isset($_POST['draftpost'])){
   $filename = $_FILES["banneri"]["name"];
   $oldimg = $postdata['banner'];echo($filename); echo($oldimg);
   if ($filename !== "") {
         $delete = unlink("../../Admin/uploads/".$oldimg);
         if ($delete) {
          $tempname = $_FILES["banneri"]["tmp_name"];    
          $folder = "../uploads/".$filename;
          if(move_uploaded_file($tempname, $folder)){
                               //getting input values
                     $title = mysqli_real_escape_string($con, $_POST['title']);
                     $metadisc = mysqli_real_escape_string($con, $_POST['metadisc']);
                     $catagory = mysqli_real_escape_string($con, $_POST['catagory']);
                     $content = mysqli_real_escape_string($con, $_POST['content']);
                     $date = date('d, M, Y');
                     $status = 0;
                        if(count($errors) === 0){
                           $Update_blog = "UPDATE blog_content SET title='$title', meta_disc='$metadisc', banner='$filename', catagory='$catagory', content='$content', date='$date', status='$status' WHERE id='$postid'";
                          // echo($Update_blog);
                         //  die();
                           $data_check = mysqli_query($con, $Update_blog);
                        if($data_check){
                           $success['blogpost'] = "Blog Updated & Posted";
                           header('Location: ../../Posts-Maneger');
                        }
                        else{
                           $errors['db-error'] = "Failed while inserting data into database!";
      }
                        }
    }else{
  echo "<script>alert ('please provide image...!')</script>";
  exit();
 }}else {
    echo "<script>alert ('please provide image...!')</script>";
 }
   }else {
                   //getting input values
                     $title = mysqli_real_escape_string($con, $_POST['title']);
                     $metadisc = mysqli_real_escape_string($con, $_POST['metadisc']);
                     $catagory = mysqli_real_escape_string($con, $_POST['catagory']);
                     $content = mysqli_real_escape_string($con, $_POST['content']);
                     $date = date('d, M, Y');
                     $status = 0;
                        if(count($errors) === 0){
                           $Update_blog = "UPDATE blog_content SET title='$title', meta_disc='$metadisc', catagory='$catagory', content='$content', date='$date', status='$status' WHERE id='$postid'";
                           //echo($Update_blog);
                         //  die();
                           $data_check = mysqli_query($con, $Update_blog);
                        if($data_check){
                           $success['blogpost'] = "Blog Updated & Posted";
                           header('Location: ../../Posts-Maneger');
                        }
                        else{
                           $errors['db-error'] = "Failed while inserting data into database!";
      }
                        
    }
   }
   
}
          ?>
<?php include ("../../assets/header/dashboardheader.php"); 
      
      
                  
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
                <input type="text" class="form-control form-control-xl" name="title" placeholder="Post Title" id="title" value="<?php echo $postdata['title']; ?>">
             </div>
             <div class="from-group m-3">
                <input type="text" class="form-control form-control-xl" name="metadisc" placeholder="Meta Discription" id="meta" value="<?php echo $postdata['meta_disc']; ?>">
             </div>
             <div class="form-group m-3">
                <img class="text-center" src="../Admin/Uploads/<?php echo $postdata['banner']; ?>">
                <input type="file" class="form-control form-control-xl" name="banneri" id="img" value="">
             </div>
             <div class="from-group m-3">
                <input type="text" class="form-control form-control-xl" name="catagory" placeholder="Catagory" id="catagory" value="<?php echo $postdata['catagory']; ?>">
             </div>
             <div class="m-3">
                <textarea rows="10" name="content" id="editor"><?php echo $postdata['content']; ?></textarea>
             </div>
             <div class="form-group m-3">
                <input type="submit" class="btn btn-primary mr-3 px-3" name="addpost" value="Update">
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