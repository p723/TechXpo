<?php include("../assets/header/header.php") ?>
    <title>Sign up</title>
</head>
<body>
      <div class="main">
         <div class="row">
             <form action="signup" method="POST" autocomplete="" accept-charset="utf-8">
                <h1 class="text-left text-primary heading">Sign Up</h1>
                <p class="text-left heading">Welcome please create your account</p>
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
                   <input class="form-control" type="text" id="floatingInput" name="username" placeholder="@" required/>
                   <label for="floatingInput">Username</label>
                </div>
                <div class="form-floating m-4">
                   <input class="form-control" type="email" id="floatingInput" name="email" placeholder="@" required/>
                   <label for="floatingInput">Email</label>
                </div>
                <div class="form-floating m-4">
                   <input class="form-control" type="tel" id="floatingInput" name="phone" placeholder="@" required/>
                   <label for="floatingInput">Phone</label>
                </div>
                <div class="form-floating m-4">
                   <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="name@example.com" required>
                   <label for="floatingPassword">Password</label>
                </div>
                <div class="form-floating m-4">
                   <input type="password" class="form-control" id="floatingRePassword" name="cpassword" placeholder="name@example.com" required>
                   <label for="floatingRePassword">Re-Password</label>
                </div>
                <div class="form-group m-4">
                   <input type="checkbox" id="check" onclick="accessc()" class="form-check-input">
                   <label for="check">You Have Any Access Code</label>
                </div>
                   <div class="form-floating m-4" id="inputac1">
                      <input type="text" class="form-control" id="inputac" name="inputac" placeholder="@" >
                      <label for="inputac">Access Code</label>
                   </div>

                <div class="d-flex justify-content-between mt-4.5">
                   <p>Allready have an account?<br /><span class=""><a class="text-decoration-none" href="login">Login here</a></span></p>
                   <div class="">
                   <button class="btn btn-primary" type="submit" name="signup" >Sign Up</button>
                 </div>
                 </div>
             </form>
            </div>
      </div>   
      <script>
         document.getElementById("inputac1").style.display = "none";
         function accessc() {
			    var check = document.getElementById("check");
             var inputas1 = document.getElementById("inputac1");
         
			    if(check.checked){
			        inputas1.style.display = "block";
			    } else {
			      inputas1.style.display = "none";
			    }
			}
         
      </script>
<?php include("../assets/footer/footer.php") ?>