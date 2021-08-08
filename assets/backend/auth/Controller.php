<?php
session_start();
include("../assets/backend/dbcon/connection.php");
$email = "";
$username = "";
$errors = array();
$success = array();


//if user click on signup button
if (isset($_POST['signup'])) {

         //getting input values
         $un = mysqli_real_escape_string($con, $_POST['username']);
         $username = "@$un";
         $email = mysqli_real_escape_string($con, $_POST['email']);
         $phone = mysqli_real_escape_string($con, $_POST['phone']);
         $password = mysqli_real_escape_string($con, $_POST['password']);
         $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
         $inputac = mysqli_real_escape_string($con, $_POST['inputac']);
         if ($inputac == "you know who I am") {
                  $rule = 1;
         } else {
                  $rule = 0;
         }

         //Checking both password are same or not
         if ($password !== $cpassword) {
                  $errors['password'] = "Confirm password not matched!";
         }
         //  if($phone > 10){
         //   $errors['phone'] = "Your phone number must be only 10 digits";
         //   }
         $username_check = "SELECT * FROM auth_data WHERE username = '$username'";
         $username_res = mysqli_query($con, $username_check);
         if (mysqli_num_rows($username_res) > 0) {
                  $errors['username'] = "username that you have entered is already exist!";
         }
         $phone_check = "SELECT * FROM auth_data WHERE phone = '$phone'";
         $phone_res = mysqli_query($con, $phone_check);
         if (mysqli_num_rows($phone_res) > 0) {
                  $errors['phone'] = "Phone that you have entered is already exist!";
         }
         $email_check = "SELECT * FROM auth_data WHERE email = '$email'";
         $email_res = mysqli_query($con, $email_check);
         if (mysqli_num_rows($email_res) > 0) {
                  $errors['email'] = "Email that you have entered is already exist!";
         }
         if (count($errors) === 0) {
                  $code = rand(999999, 111111);
                  if ($code) {
                           $otp_mail['one-time-pass'] = $code;
                  } else {
                           $errors['one-time-pass'] = "otp not set";
                  }

                  $encpass = password_hash($password, PASSWORD_BCRYPT);
                  $status = "notverified";
                  $insert_data = "INSERT INTO auth_data (username, email, phone, password, otp, status, Rule) values('$username', '$email', '$phone', '$encpass', '$code', '$status', '$rule')";
                  $data_check = mysqli_query($con, $insert_data);
                  if ($data_check) {
                           header('location: /login');
                  } else {
                           $errors['db-error'] = "Failed while inserting data into database!";
                  }

         }
}

//if user clicks on login button
if (isset($_POST['login'])) {

         $email = mysqli_real_escape_string($con, $_POST['email']);

         $password = mysqli_real_escape_string($con, $_POST['password']);
         $check_email = "SELECT * FROM auth_data WHERE email = '$email'";
         $res = mysqli_query($con, $check_email);
         if (mysqli_num_rows($res) > 0) {
                  $fetch = mysqli_fetch_assoc($res);
                  $fetch_pass = $fetch['password'];
                  if (password_verify($password, $fetch_pass)) {
                           ?>
                           <script>
                                    alert("pranav")
                           </script>
                           <?php
                           $status = $fetch['status'];
                           if ($status == 'notverified') {
                                    $info = "It's look like you haven't still verify your email - $email";
                                    $_SESSION['info'] = $info;
                           }

                           $_SESSION['email'] = $email;
                           $_SESSION['password'] = $password;
                           header('location: ../Home');

                  } else {
                           $errors['email'] = "Incorrect email or password!";

                           ?>

                           <script>
                                    swal("This modal will disappear soon!");
                           </script>
                           <?php
                  }
         } else {
                  $errors['email'] = "It's look like you're not yet a member! Click on the bottom link to signup.";
         }
}



//if user click verification code submit button
if (isset($_POST['check'])) {
         $_SESSION['info'] = "";
         $otp_code = mysqli_real_escape_string($con, $_POST['otp']);
         $check_code = "SELECT * FROM auth_data WHERE otp = $otp_code";
         $code_res = mysqli_query($con, $check_code);
         if (mysqli_num_rows($code_res) > 0) {
                  ?>
                  <script>
                           alert('jsjsjsjsis')
                  </script>
                  <?php
                  $fetch_data = mysqli_fetch_assoc($code_res);
                  $fetch_code = $fetch_data['otp'];
                  $email = $fetch_data['email'];
                  $code = 0;
                  $status = 'verified';
                  $update_otp = "UPDATE auth_data SET otp = $code, status = '$status' WHERE otp = $fetch_code";
                  $update_res = mysqli_query($con, $update_otp);
                  if ($update_res) {
                           $_SESSION['name'] = $name;
                           $_SESSION['email'] = $email;
                           header('location: ../Home');
                           exit();
                  } else {
                           $errors['otp-error'] = "Failed while updating code!";
                  }
         } else {
                  $errors['otp-error'] = "You've entered incorrect code!";
         }
}

?>