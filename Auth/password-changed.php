<?php
session_start();
if($_SESSION['info'] == false){

    header('Location: login.php');  
}
?>
<?php include("../assets/header/header.php") ?>
<title>Password changed</title>
<style>
   .main form{
      width: 400px;
   }
   .btn{
      float: center;
   }
</style>
</head>

<body>
      <div class="main">
         <div class="row">
             <form class="mt-auto" action="password-changed.php" method="POST" autocomplete="" accept-charset="utf-8">
                                 <?php 

            if(isset($_SESSION['info'])){

                ?>
                <div class="alert alert-success text-center">
                <?php echo $_SESSION['info']; ?>
                </div>
                <?php
            }
            ?>
                 <div class="">
                   <button class="btn btn-primary" type="submit" name="login-now" >Sign In</button>
                 </div>
                 <?php
                   //if login now button click
                     if(isset($_POST['login-now'])){
                         header('Location: login.php');
                     }
                 ?>
                 </div>
             </form>
            </div>
      </div>   
<?php include("../assets/footer/footer.php") ?>