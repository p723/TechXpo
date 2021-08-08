<?php include ("../../assets/header/dashboardheader.php"); ?>
<?php 
$errors = array();
$success = array();
    //if user clicks on login button
if(isset($_POST['loginadmin'])){

        $email = mysqli_real_escape_string($con, $_POST['ademail']);

        $password = mysqli_real_escape_string($con, $_POST['adpass']);
        $check_email = "SELECT * FROM auth_data WHERE email = '$email'";
        $res = mysqli_query($con, $check_email);
        if(mysqli_num_rows($res) > 0){
            $fetch = mysqli_fetch_assoc($res);
            $fetch_pass = $fetch['password'];
            if(password_verify($password, $fetch_pass)){
                $_SESSION['ademail'] = $email;
                $_SESSION['adpass'] = $password;
                header('location: ../Admin-Dashboard');
     
            }else{
                $errors['email'] = "Incorrect email or password!";
            }
        }else{
            $errors['email'] = "It's look like you're not yet a member! Click on the bottom link to signup.";
        }
    }
 ?>
<style></style>
    <div id="auth">

        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    <div class="auth-logo">
                        <a href="index.php"><img src="../../assets/images/logo/logo.png" alt="Logo"></a>
                    </div>
                    <h2 class="auth-title">Admin panel - Log in.</h2>
                    <p class="auth-subtitle mb-2">Log in with your data that you entered during registration.</p>

                    <form action="Admin-login" method="POST" >
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
                                <div class="alert m-4 alert-success text-center">
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
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" name="ademail" class="form-control form-control-xl" placeholder="Username">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" name="adpass" class="form-control form-control-xl" placeholder="Password">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>
                        <button type="submit" name="loginadmin" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Log in</button>
                    </form>
                    <div class="text-center mt-5 text-lg fs-4">
                        <p><a class="font-bold" href="auth-forgot-password.php">Forgot password?</a>.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right">

                </div>
            </div>
        </div>

    </div>
<?php include ("../../assets/footer/dashboardfooter.php"); ?>