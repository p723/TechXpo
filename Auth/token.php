<?php include("./header&footer/header.php") ?>
<?php $t = $_GET['token']; echo $email; $selectq="select * from auth_data where token='$t'"; $quary=mysqli_query($con, $selectq); $res=mysqli_fetch_array($quary); ?>
<?php                 echo($t);   echo($res['token']);
if($t = $res['token']){
 $code = 0;
 $status = 'verified';
 $update_otp = "UPDATE auth_data SET otp = $code, status = '$status' WHERE token ='$t'";
 $update_res = mysqli_query($con, $update_otp);
 if($update_res){
 $_SESSION['name'] = $name;
 $_SESSION['email'] = $email;
 header("location: ../Public/index.php")
 ?>
 </head>
 <body>
 <?php 
 }else{
 $errors['otp-error'] = "Failed while updating code!";
 } }else{header('location: user-otp.php'); }?>
<?php include("../assets/footer/footer.php") ?>