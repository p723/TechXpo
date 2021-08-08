<?php include("../assets/header/header.php") ?>
<?php $email = $_SESSION['email']; if($email==false){header('location: ../Public/index.php');} ?>
<title>Email Verifycation</title>
<style>
   .main form{
      width: 400px;
      text-align: center;
   }
</style>
</head>

<body>

    <div class="main">
         <div class="row">
             <form action="Verify-Email" id="vrcode" method="POST" accept-charset="utf-8">
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
                                      <!--errors-->
                <h1 class="text-left text-primary heading">OTP verifycation 📟</h1>
                <p class="text-left heading">Please enter the OTP which send on📨<br/><span class="text-primary"><?php echo $_SESSION['email']; ?></span><br/> 👇</p>
                   <div class="form-floating m-4">
                      <input class="form-control" type="number" id="floatingInput" name="otp" placeholder="@" required/>
                      <label for="floatingInput">Enter OTP</label>
                   </div>
                   <div class="d-flex">
                      <button class="btn btn-primary m-4 p-2" style="width: 100%;" type="submit" name="check">verify</button>
                   </div>
             </form>
                 </div>
            </div>
<?php include("../assets/footer/footer.php") ?>