<?php include("../assets/header/header.php") ?>
<?php $email = $_SESSION['email']; echo $email; $selectq = "select * from auth_data where email='$email'"; $quary = mysqli_query($con, $selectq); $res = mysqli_fetch_array($quary); ?>
<?php if ($email == false) {
         header('location: ../Home');
} ?>
<title>Email Verification</title>
<style>
         .main form {
                  width: 400px;
                  text-align: center;
         }
@media (max-width: 940px) {
                  .smail {
                           margin-top: 30%!important;
                  }
         }
         .btn {
                  height: 42px;
         }
         .change .spinner-border {
                  display: none;

         }
         .change.show .spinner-border {
                  display: inline-block;
         }
         .change .btn-text {}
         .change.show .btn-text {
                  display: none;

         }
</style>
</head>

<body>

<div class="main">
<div class="row">
<form action="reset-pass.php" method="POST" autocomplete="" class="smail" id="smail" accept-charset="utf-8">
<?php
if (isset($_SESSION['info'])) {
?>
<div class="alert alert-success text-center" style="padding: 0.4rem 0.4rem">
<?php echo $_SESSION['info']; ?>
</div>
<?php
}
?>
<h1 class="text-left text-primary heading">Email Verification</h1>
<p class="text-left heading">
Please click on send Email to verify your<br /> 👇 Email 👇
</p>
<div class="d-flex mt-3">
<!--  <a class="btn btn-primary m-4 p-2" style="width: 100%;" onclick="sendE()">Send Email</a>-->
<button type="button" onclick="sendEmail()" id="myBtn" class="btn btn-primary w-100 change p-1">
<span class="spinner-border spinner-border-lg" id="spinner" role="status" aria-hidden="true">
</span><span class="btn-text">Send Email</span></button>
</div>
<script id="erasable" type="text/javascript">
function sendEmail() {
document.querySelector('.change').classList.toggle("show");
document.getElementById("myBtn").disabled = true;
let vemail = '<?php echo $res['email'] ?>';
let message = 'Hay <h3><?php echo $res['username'] ?></h3><br/><br/> your One Time Password (OTP) to verify your email <br/> OTP = <?php echo $res['otp'] ?> <br/><br/>Or Verify Hear:- http://localhost:8003/Auth/token.php?token=<?php echo $res['token'] ?>'
Email.send({
Host: "smtp.gmail.com",
Username: "techxpo.contact@gmail.com",
Password: "bxcwktbtgebbfdfm",
To: vemail,
From: "techxpo.contact@gmail.com",
Subject: "Email Verification OTP [<?php echo $res['otp'] ?>]",
Body: message,
}).then(function () {
document.querySelector('.change').classList.toggle("show");
document.getElementById("myBtn").disabled = false;
Swal.fire({
title: 'Mail Send..!',
text: "The one time password send on <?php echo $res['email'] ?>",
icon: 'success',
confirmButtonColor: '#3085d6',
confirmButtonText: 'Ok!'
}).then((result) => {
if (result.isConfirmed) {
location.replace('Verify-Email');
}
})
});
}
document.getElementById('erasable').innerHTML = "";
</script>

</form>
</div>
</div>
<?php include("../assets/footer/footer.php") ?>