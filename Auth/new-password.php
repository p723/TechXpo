<?php include("../assets/header/header.php") ?>
<title>Create Password</title>
</head>

<body>
      <div class="main">
         <div class="row">
             <form style="width: 460px;" class="mt-auto" action="new-password.php" method="POST" autocomplete="" accept-charset="utf-8">
                 <h1 class="text-left text-primary heading">Change Password</h1>
                                     
                                        <!--errors-->
                    <?php 
                    if(isset($_SESSION['info'])){

                        ?>
                        <div class="alert alert-success text-center m-3" style="padding: 0.4rem 0.4rem">
                            <?php echo $_SESSION['info']; ?>
                        </div>
                        <?php
                    }
                    ?>
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
                                      <!--errors-->
               <?php
                   //if user click change password button
                   if(isset($_POST['change-password'])){
                       $_SESSION['info'] = "";
                       $password = mysqli_real_escape_string($con, $_POST['password']);
                       $cpassword = mysqli_real_escape_string($con, $_POST['repassword']);
                       if($password !== $cpassword){
                           $errors['password'] = "Confirm password not matched!";
                       }else{
                           $code = 0;
                           $email = $_SESSION['email']; //getting this email using session
                           $encpass = password_hash($password, PASSWORD_BCRYPT);
                           $update_pass = "UPDATE auth_data SET otp = 0, password = '$encpass' WHERE email = '$email'";
                           $run_query = mysqli_query($con, $update_pass);
                           if($run_query){
                               $info = "Your password changed. Now you can login with your new password.";
                               $_SESSION['info'] = $info;
                               header('Location: password-changed.php');
                           }else{
                               $errors['db-error'] = "Failed to change your password!";
                           }
                       }
                   }
                   
               ?>
                <div class="form-floating m-3">
                   <input class="form-control p-4" type="password" name="password" id="floatingInput" placeholder="@" required/>
                   <label for="floatingInput">Password</label>
                </div>
                <div class="form-floating m-3">
                   <input type="password" class="form-control p-4" name="repassword" id="floatingPassword" placeholder="name@example.com" required>
                   <label for="floatingPassword">Re-Password</label>
                </div>

                <div class="d-flex m-3">
                   <div class="">
                   <button class="btn btn-primary p-2" type="submit" name="change-password" >Change Password</button>
                 </div>
                 </div>
             </form>
            </div>
      </div>   
<?php include("../assets/footer/footer.php") ?>