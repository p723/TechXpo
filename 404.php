<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php echo $fetch_info['username'] ?> | Home</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="http://techxpo.live/assets/img/favicon.png" rel="icon">
  <link href="http://techxpo.live/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="http://techxpo.live/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="http://techxpo.live/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="http://techxpo.live/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="http://techxpo.live/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="http://techxpo.live/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="http://techxpo.live/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="http://techxpo.live/assets/vendor/sweetalert2/css/sweetalert2.min.css" rel="stylesheet">
  <link rel="stylesheet" href="http://techxpo.live/assets/vendor/toastify/toastify.css">
  <!-- Template Main CSS File -->
  <link href="http://techxpo.live/assets/css/style.css" rel="stylesheet">
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
  background-image: url('http://techxpo.live//assets/img/error/emoji.png');
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
        <span>AndroidBitz</span>
         <img class="logo-img" src="http://techxpo.live/assets/img/logo.png" alt="">
      </a>

      <nav id="navbar" class="navbar">
        <ul class="text-center">
          <li><a class="nav-link scrollto active" href="../User/profile.php">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="Blog">Blog</a></li>
          <li><a class="nav-link scrollto" href="Admin-dashboard">Admin - Dashboard</a></li>
          <li><a class="nav-link scrollto" href="../Contact">Contact</a></li>
          <li><a class="nav-link scrollto" href="../Logout" >Logout</a></li>
          <li class="d-none"><a class="nav-link scrollto" href="#services" >Services not ready</a></li>
          <li class="d-none"><a class="nav-link scrollto" href="#portfolio">Portfolio not ready</a></li>
          <li class="d-none"><a class="nav-link scrollto" href="../Profile">Profile</a></li>
          <li class="d-none"><a class="getstarted scrollto" href="../contact">Contact for work</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

	<div id="notfound">
		<div class="notfound">
			<div class="notfound-404"></div>
			<h1>404</h1>
			<h2>Oops! Page Not Be Found</h2>
			<p>Sorry but the page you are looking for does not exist.</p>
			<a  href="../Home">Back to homepage</a><span class="text-secondary">OR</span><a onclick="window.history.back()">Go Back</a>
		</div>
	</div>
 <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.php" class="logo d-flex align-items-center">
              <img src="http://techxpo.live/assets/img/logo.png" alt="">
              <span>AndroidBiz</span>
            </a>
            <p>Follow Me On Social Media</p>
            <div class="social-links mt-3 mb-3">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram bx bxl-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin bx bxl-linkedin"></i></a>
            </div>
          </div>
<!--
          <div class="col-lg-2 col-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="index.php">Home</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="privacy-policy.php">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>
-->
          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Contact Us</h4>
            <p>
              <strong>Phone:</strong> +91 99609-35244 <br>
              <strong>Email:</strong> Pranavbhatkar789@gmail.com<br>
            </p>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>AndroidBiz</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
         Designed by <a href="#">Pranav Bhatkar</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="http://techxpo.live/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
  <script src="http://techxpo.live/assets/vendor/aos/aos.js"></script>
  <script src="http://techxpo.live/assets/vendor/php-email-form/validate.js"></script>
  <script src="http://techxpo.live/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="http://techxpo.live/assets/vendor/purecounter/purecounter.js"></script>
  <script src="http://techxpo.live/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="http://techxpo.live/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="http://techxpo.live/assets/vendor/sweetalert2/js/sweetalert2.min.js"></script>
  <script src="http://techxpo.live/assets/vendor/toastify/toastify.js"></script>
  <!-- Template Main JS File -->
  <script src="http://techxpo.live/assets/js/main.js"></script>

</body>

</html>
