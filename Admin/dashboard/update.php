<?php require "../../assets/backend/dbcon/connection.php"; 
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
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../assets/vendor/bootstrap/css/bootstrap.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="../../assets/css/authstyle.css" type="text/css" media="all" />
    <title>Sign up</title>
</head>

<body>
      <div class="main">
         <div class="row">
            <?php
            $errors = array();
            $success = array();
            
            $uid = $_GET['id'];
            
            $uquery = "SELECT * FROM auth_data WHERE id = '$uid' ";
            
            $sdata = mysqli_query($con, $uquery);
            
            $audata = mysqli_fetch_array($sdata);
            
            
//if user click on signup button
if(isset($_POST['updateu'])){
   $idu = $_GET['id'];
   //getting input values
   $unu = $_POST['usernameu'];
   $usernameu = "$unu";
   $emailu = $_POST['emailu'];
   $phoneu = $_POST['phoneu'];
   $statusu = $_POST['statusu'];
   
      
          $update_pass = "UPDATE auth_data SET username='$usernameu', email='$emailu', phone=$phoneu, status='$statusu' WHERE id=$idu";

            $run_query = mysqli_query($con, $update_pass);

            if($run_query){
                header('Location: ../User-Maneger');
            }else{
                $errors['db-error'] = "Failed to change your password!";
            }
}

             
            ?>
             <form action="../Update-user-info/<?php echo $audata['id'] ?>" method="POST" autocomplete="" accept-charset="utf-8">
                <h1 class="text-left text-primary heading">Update</h1>
                <p class="text-left heading">Update user information</p>
                <!--errors-->
                  <?php
                if(count($errors) == 1){
                 ?>
                <div class="alert m-3 alert-danger text-center">
                 <?php
                  foreach($errors as $showerror){
                    echo $showerror;
                   }
                  ?>
                </div>
                <?php
            }elseif(count($errors) > 1){
                        ?>
                        <div class="alert m-3 alert-danger">
                            <?php
                            foreach($errors as $showerror){
                                ?>
                                <li><?php echo $showerror; echo $code; ?></li>
                                <?php
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                  <?php
                if(count($success) == 1){
                 ?>
                <div class="alert m-3 alert-success text-center">
                 <?php
                  foreach($success as $showsucces){
                    echo $showsucces;
                   }
                  ?>
                </div>
                <?php
            }elseif(count($success) > 1){
                        ?>
                        <div class="alert m-3 alert-success">
                            <?php
                            foreach($success as $showsucces){
                                ?>
                                <li><?php echo $showsucces; echo $code; ?></li>
                                <?php
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                <!--errors-->
                <div class="form-floating m-4">
                   <input class="form-control" type="text" id="floatingInput" name="usernameu" placeholder="@" value="<?php echo $audata['username'] ?>" />
                   <label for="floatingInput">Username</label>
                </div>
                <div class="form-floating m-4">
                   <input class="form-control" type="email" id="floatingInput" name="emailu" placeholder="@" value="<?php echo $audata['email'] ?>" />
                   <label for="floatingInput">Email</label>
                </div>
                <div class="form-floating m-4">
                   <input class="form-control" type="tel" id="floatingInput" name="phoneu" placeholder="@" value="<?php echo $audata['phone'] ?>" />
                   <label for="floatingInput">Phone</label>
                </div>
                <div class="form-floating m-4">
                                   <input class="form-control" type="text" id="floatingInput" name="statusu" placeholder="@" value="<?php echo $audata['status'] ?>" />
                                   <label for="floatingInput">Status</label>
                                </div>
                <div class="form-group m-4">
                   <input class="btn btn-primary p-2" style="width: 100%;" type="submit" name="updateu" value="Update" />
                 </div>
             </form>
            </div>
      </div>   
</body>

</html>