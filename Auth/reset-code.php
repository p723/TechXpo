<?php include("../assets/header/header.php") ?>
<title>OTP Verification</title>
<style>
   .main form{
      width: 400px;
   }
</style>
</head>

<body>

    <div class="main">
         <div class="row">
             <form action="Verify-otp" id="vrcode" method="POST" accept-charset="utf-8">
                                    <?php 
session_start();
                    if(isset($_SESSION['info'])){

                        ?>
                        <div class="alert alert-success text-center" style="padding: 0.4rem 0.4rem">
                            <?php echo $_SESSION['info']; ?>
                        </div>
                        <?php
                    }
                    ?>
                <h1 class="text-left text-primary heading">OTP verifycation</h1>
                   <div class="form-floating m-4">
                      <input class="form-control" type="text" id="floatingInput" name="otp" placeholder="@" required/>
                      <label for="floatingInput">Enter OTP</label>
                   </div>
                   <div class="d-flex">
                      <button class="btn btn-primary m-4 p-2" style="width: 100%;" type="submit" name="verify-reset-otp">verify</button>
                   </div>
                   <?php
                       //if user click check reset otp button
                       if(isset($_POST['verify-reset-otp'])){
                           $_SESSION['info'] = "";
                           $otp_code = mysqli_real_escape_string($con, $_POST['otp']);
                           $check_code = "SELECT * FROM auth_data WHERE otp = $otp_code";
                           $code_res = mysqli_query($con, $check_code);
                           if(mysqli_num_rows($code_res) > 0){
                               $fetch_data = mysqli_fetch_assoc($code_res);
                               $email = $fetch_data['email'];
                               $_SESSION['email'] = $email;
                               $info = "Please create a new password that you don't use on any other site.";
                               $_SESSION['info'] = $info;
                               $_SESSION['infoo'] = "";
                               header('location: new-password.php');
                               exit();
                           }else{
                               $errors['otp-error'] = "You've entered incorrect code!";
                           }
                       }
                   
                   ?>
             </form>
                 </div>
            </div>
<?php include("../assets/footer/footer.php") ?>