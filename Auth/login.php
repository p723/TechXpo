<?php include("../assets/header/header.php") ?>
    <title>Login</title>
</head>

<body>
      <div class="main">
         <div class="row">
             <form class="mt-auto" action="login" method="POST" autocomplete="" accept-charset="utf-8">
                 <h1 class="text-left text-primary heading">Login</h1>
                <p class="text-left heading">Welcome back login to your account</p>
                                     
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
                <div class="form-floating m-4">
                   <input class="form-control" type="email" name="email" id="floatingInput" placeholder="@" required/>
                   <label for="floatingInput">Email</label>
                </div>
                <div class="form-floating m-4">
                   <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="name@example.com" required>
                   <label for="floatingPassword">Password</label>
                </div>

                <div class="d-flex justify-content-between mt-4.5">
                   <p>Don't have an account?<br /><span class=""><a class="text-decoration-none" href="signup">Create Account</a></samp><br/>    
                   <a class="text-decoration-underline" href="forgot-password">Forgot Password?</a></p>
                   <div class="">
                   <button class="btn btn-primary" type="submit" name="login" >Login In</button>
                 </div>
                 </div>
             </form>
             <label class="switch">
					<input type="checkbox" id="switch" onclick="change()" <?php if($_COOKIE["theme"] == "dark") { echo "checked"; }?>>
					<span class="slider round"></span>
				</label>
            </div>
      </div>   
<?php include("../assets/footer/footer.php") ?>