<?php include("../assets/header/header.php") ?>  
<title>Forgot Password</title>
    <style>
       .btn{
                height: 42px;
             }
             .change .spinner-border{
            display: none;

       }
       .change.show .spinner-border{
            display: inline-block;
       }
       .change .btn-text{

          
       }
       .change.show .btn-text{
          display: none;
          
       }

          .main form{
             width: 400px;

          }

    </style>
</head>

<body>

    <div class="main">
         <div class="row">
             <form action="reset-pass.php" method="POST" autocomplete="" class="smail" id="smail" accept-charset="utf-8">
                      <?php
    //if user click continue button in forgot password form
    if(isset($_POST['verify-reser-otp'])){
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $check_email = "SELECT * FROM auth_data WHERE email='$email'";
        $run_sql = mysqli_query($con, $check_email);
        if(mysqli_num_rows($run_sql) > 0){
            $code = rand(999999, 111111);
            $insert_code = "UPDATE auth_data SET otp = $code WHERE email = '$email'";
            $run_query =  mysqli_query($con, $insert_code);
            if($run_query){
               $_SESSION['email'] = $email;
               $infoo = "Your Email is Verified <br/>Please click sendEmail button to get otp";
               $_SESSION['infoo'] = $infoo;
               $info = "We've sent a passwrod reset otp to your email - $email";
               $_SESSION['info'] = $info;
               ?>
                                      <?php 
                       $snemail = $_SESSION['email'];
                       $selectq="select * from auth_data where email='$snemail'" ; 
                       $quary=mysqli_query($con, $selectq); 
                       $res=mysqli_fetch_array($quary); 
                       
                       ?>
               <h1 class="text-left text-primary heading">Sending Email</h1>
       
                      <?php 
               
                                   if(isset($_SESSION['infoo'])){
                                       ?>
                                                               <div class="alert alert-success text-center" style="padding: 0.4rem 0.4rem">
                            <?php echo $_SESSION['infoo']; ?>
                        </div>
                        <?php
                    }
                    ?>
               <div class="d-flex">
                <!-- <a class="btn btn-primary m-4 p-2" style="width: 100%;" onclick="sendEmail()">sendEmail</a>-->
                      <button type="button" onclick="sendEmail()" id="myBtn" class="btn btn-primary w-100 change p-1">
               <span class="spinner-border spinner-border-lg" id="spinner" role="status" aria-hidden="true">
               </span><span class="btn-text">Send Email</span></button>
               </div>
                     <script type="text/javascript"> 
                  function sendEmail() { 
                     document.querySelector('.change').classList.toggle("show");
                     document.getElementById("myBtn").disabled = true;
                     let vemail = '<?php echo $res['email'] ?>';
                     let message = 'Hay <?php echo $res['username'] ?> your One Time Password (OTP) to reset your password <br/> OTP = <?php echo $res['otp'] ?>'
                     Email.send({ 
                       Host: "smtp.gmail.com", 
                       Username: "pranavbhatkar789@gmail.com", 
                       Password: "vevadnygdiqylvkj", 
                       To: vemail, 
                       From: "pranavbhatkar789@gmail.com", 
                       Subject: "Password Reset OTP", 
                       Body: message, 
                     }).then(function (message) { 
                        document.querySelector('.change').classList.toggle("show");
                     document.getElementById("myBtn").disabled = false;
                         Swal.fire({
  title: 'Mail Send..!',
  text: "The one time password send on <?php echo $res['email'] ?>",
  icon: 'success',
  confirmButtonColor: '#3085d6',
  confirmButtonText: 'Ok.!'
}).then((result) => {
  if (result.isConfirmed) {
      location.replace('reset-code.php');

  }
})
                       }); 
                  }
                 </script> 
               <?php
               
            }else{
                $errors['db-error'] = "Something went wrong!";
            }
        }else{
            $errors['email'] = "This email address does not exist!";
        }
    }else {
       ?>

       		
       <h1 class="text-left text-primary heading">Reset password</h1>
       <p class="text-left heading">Enter your email to send an One Time Password (OTP)</p>
      <div class="form-floating m-4">
         <input class="form-control vemail" type="text" id="floatingInput" name="email" placeholder="@" required/>
         <label for="floatingInput">Email</label>
      </div>
   <div class="d-flex">
         <button class="btn btn-primary m-4 p-2" style="width: 100%;" type="submit" name="verify-reser-otp">verify</button>
      </div>
                   <?php
    }
   ?>
             </form>
          </div>
            </div>
<?php include("../assets/footer/footer.php") ?>