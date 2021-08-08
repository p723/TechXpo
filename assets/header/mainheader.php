<!DOCTYPE html>

<html lang="en">


<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php echo $fetch_info['username'] ?> | Home</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/sweetalert2/css/sweetalert2.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../../assets/vendor/toastify/toastify.css">
  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">
        <style>

#notfound {
  position: relative;
  height: 100vh;
}

#notfound .notfound {
  position: absolute;
  left: 50%;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
}

.notfound {
  max-width: 560px;
  width: 100%;
  padding-left: 160px;
  line-height: 1.1;
}

.notfound .notfound-404 {
  position: absolute;
  left: 0;
  top: 0;
  display: inline-block;
  width: 140px;
  height: 140px;
  background-image: url('assets/img/error/emoji.png');
  background-size: cover;
}

.notfound .notfound-404:before {
  content: '';
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-transform: scale(2.4);
      -ms-transform: scale(2.4);
          transform: scale(2.4);
  border-radius: 50%;
  background-color: #f9f9f9;
  z-index: -1;
}

.notfound h1 {
  color: #4154f1;
}

.notfound h2 {
  color: #012970;
}

.notfound p {
  
}

.notfound a {
  font-size: 17px;
  cursor: pointer;
  text-decoration: none;
  color: #4154f1;
  margin: 0 5px 0 5px;
}

@media only screen and (max-width: 767px) {
  .notfound .notfound-404 {
    width: 110px;
    height: 110px;
    display: flex;
    justify-content: center;
    left: 36%;
    }
  .notfound {
    text-align: center;
    padding-left: 15px;
    padding-right: 15px;
    padding-top: 110px;
  }
}

         
      </style>
</head>

<body onload="admin()">

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="../Home" class="logo d-flex align-items-center">
        <span>TechXpo</span>
         <img class="logo-img" src="../assets/img/logo.png" alt="">
      </a>

      <nav id="navbar" class="navbar">
        <ul class="text-center">
        <?php
              if($fetch_info['Rule'] == '1'){ ?>
         <li><a class="nav-link scrollto" href="../Admin-dashboard">Admin - Dashboard</a></li>
  <?php } ?>
          <li><a class="nav-link scrollto active" href="../Home">Home</a></li>
             <?php $link = basename($_SERVER['PHP_SELF']); $linkl = "index.php"; if($link == $linkl ){ ?>
        <li><a class="nav-link scrollto" href="#about">About</a></li>
   <?php } ?>
          <li><a class="nav-link scrollto" href="Blog">Blog</a></li>
          <li><a class="nav-link scrollto" href="../Contact">Contact</a></li>
         <?php if($_SESSION['email'] != false && $_SESSION['password'] != false){ ?>
          <li><a class="nav-link scrollto" href="../Logout" >Logout</a></li>
         <?php }else{ ?>
          <li class=""><a class="getstarted scrollto" href="../login" >Login</a></li>
          <?php } ?>
          <li class="d-none"><a class="nav-link scrollto" href="../Profile">Profile</a></li>
          <li class="d-none"><a class="getstarted scrollto" href="../contact">Contact for work</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
