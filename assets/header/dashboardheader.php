<!DOCTYPE html>
<html lang="en">
<?php require_once "../../assets/backend/dbcon/connection.php"; ?>
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Dashboard - Mazer Admin Dashboard</title>
   	<link rel="stylesheet" href="../../assets/vendor/datatables/css/jquery.dataTables.min.css">
		<link rel="stylesheet" href="../../assets/css/table.css">
	  
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="../../assets/vendor/iconly/bold.css">
   <link rel="stylesheet" href="../../assets/vendor/perfect-scrollbar/perfect-scrollbar.css">
   <link rel="stylesheet" href="../../assets/vendor/bootstrap-icons/bootstrap-icons.css">
   <?php $link = basename($_SERVER['PHP_SELF']); $linkl = "auth-login.php"; $link2 = "auth-register.php"; $link3 = "auth-forgot-password.php"; if($link == $linkl or $link == $link2 or $link == $link3 ){ ?>
       <link rel="stylesheet" href="../../assets/css/auth.css">
   <?php } ?>
   <link rel="stylesheet" href="../../assets/vendor/bootstrap/css/bootstrap.css">
   <link rel="stylesheet" href="../../assets/css/app.css">
   <link rel="shortcut icon" href="../../assets/images/favicon.svg" type="image/x-icon">
   <link rel="stylesheet" href="../../assets/vendor/toastify/toastify.css">
   <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">

</head>

<body>
   <div id="app">
      <?php if($link !== $linkl & $link !== $link2 & $link !== $link3 ){ 
      include("../../assets/sidebar/sidebar.php"); } ?>
     