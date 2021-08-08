<?php require_once("../assets/backend/dbcon/connection.php"); session_start(); ?>
<?php

$email = $_SESSION['email'];
if (isset($email)) {
    $sql = "SELECT * FROM auth_data WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
    }else{
       
    }
}
?>
<?php include ("../assets/header/mainheader.php"); ?>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">This is my first complete responsive website</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">I know i am not a professional web developer but,i have some skills</h2>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="../Contact" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Contact for work</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="../assets/img/hero-img.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">

      <div class="container" data-aos="fade-up">
        <div class="row gx-0">

          <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <h3>Who I Am</h3>
              <h2>Let Mi Introduce Myself</h2>
              <p>
                I Am a Medium Level Developer.My Name Is Pranav Bhatkar I Make This Website With The Help Of HTML CSS JavaScript PHP AJAX Bootstrap and use some library's called Googleapis GoogleFonts FontAusome etc.
              </p>
              <div class="text-center text-lg-start">
                <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                  <span>Read More</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>

          <!--<div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
            <img src="../assets/img/about.jpg" class="img-fluid" alt="">
          </div>-->

        </div>
      </div>

    </section><!-- End About Section -->

    <!-- ======= Values Section ======= -->
    <section id="values" class="values">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>What I Know</h2>
          <p>Frontend & Backend <br/> At Basic to Midium Level</p>
        </header>

        <div class="row">

          <div class="col-lg-4">
            <div class="box" data-aos="fade-up" data-aos-delay="200">
              <img src="../assets/img/values-1.png" class="img-fluid" alt="">
              <h3>Frontend</h3>
              <p>Frontend is structure of website or <a href="" class="link">UI</a>.<br/> Frontend languages HTML CSS JavaScript etc <a href="#" class="link">Know More</a></p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="fade-up" data-aos-delay="400">
              <img src="../assets/img/values-2.png" class="img-fluid" alt="">
              <h3>Backend</h3>
              <p>Backend is process that run/work in the background.<br/>Languages i used in Backend PHP AJAX <br><a href="#" class="link">Know More</a></p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="fade-up" data-aos-delay="600">
              <img src="../assets/img/values-3.png" class="img-fluid" alt="">
              <h3>Time to make this website.</h3>
              <p>I will work 20 days to complete this. <br> I am improving </p>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Values Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="1" data-purecounter-duration="1" class="purecounter"></span>
                <p>Happy Clients</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-journal-richtext" style="color: #ee6c20;"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="1" data-purecounter-duration="1" class="purecounter"></span>
                <p>Projects</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-headset" style="color: #15be56;"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="24" data-purecounter-duration="1" class="purecounter"></span>
                <p>Hours Of Support</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-people" style="color: #bb0852;"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="1" data-purecounter-duration="1" class="purecounter"></span>
                <p>Hard Workers</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Knowledge</h2>
          <p>Languages i know</p>
        </header>

        <div class="row">

          <div class="col-lg-6">
            <img src="../assets/img/features.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 mt-5 mt-lg-0 d-flex">
            <div class="row align-self-center gy-4">

              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <img src="https://img.icons8.com/color/48/000000/html-5--v1.png"/>
                  <h3>HTML</h3>
                </div>
              </div>

              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="300">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <img src="https://img.icons8.com/color/48/000000/css3.png"/>
                  <h3>CSS</h3>
                </div>
              </div>

              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="400">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <img src="https://img.icons8.com/color/48/000000/javascript.png"/>
                  <h3>JavaScript</h3>
                </div>
              </div>

              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="500">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <img src="https://img.icons8.com/officel/40/000000/php-logo.png"/>
                  <h3>PHP</h3>
                </div>
              </div>

              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="600">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <img src="https://img.icons8.com/color/48/000000/python.png"/>
                  <h3>Python</h3>
                </div>
              </div>

              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="700">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <img src="https://img.icons8.com/plasticine/40/000000/react.png"/>
                  <h3>React</h3>
                </div>
              </div>

            </div>
          </div>

        </div> <!-- / row -->
      </div>
    </section><!-- End Features Section -->
    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-blog-posts" class="recent-blog-posts">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Blog</h2>
          <p>Recent posts form our Blog</p>
        </header>

        <div class="row">
<?php

         $selectrecent="SELECT * FROM blog_content WHERE status=1 ORDER BY id DESC LIMIT 3" ;

         $recentquary=mysqli_query($con1, $selectrecent);
         if(mysqli_num_rows($recentquary) > 0){
            while($recentblog=mysqli_fetch_array($recentquary)){
                    $tit1 = str_replace(" ", "-", $recentblog['title']);
?>
          <div class="col-lg-4">
            <div class="post-box">
              <div class="posyt-img"><img href="Posts/<?php echo $tit1 ?>" src="../Admin/uploads/<?php echo $recentblog['banner'] ?>" class="img-fluid" alt=""></div>
              <span class="post-date"><?php echo $recentblog['date'] ?></span>
              <h3 href="Posts/<?php echo $tit1 ?>" class="post-title"><?php echo $recentblog['title'] ?></h3>
              <a href="Posts/<?php echo $tit1 ?>" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
<?php }}else{ ?>
                    <div class="col-lg-4">
                      <div class="post-box" style="color: #fff !important;">
                        <h3 class="post-title mb-0">No Posts Yet.</h3>
                      </div>
                    </div><?php
} ?>
        </div>

      </div>

    </section><!-- End Recent Blog Posts Section -->
  </main><!-- End #main -->
  <?php if($fetch_info['Rule'] == "1"){ ?>
<script>/*
(function () {var script=document.createElement('script');

script.src="//cdn.jsdelivr.net/npm/eruda";
document.body.appendChild(script); script.onload = function () { eruda.init() } })();
 admin()*/
  function admin(){
    Toastify({
        text: "Congratulations your admin",
        duration: 6000,
        close:true,
        gravity:"top",
        position: "center",
        backgroundColor: "linear-gradient(to right, #00b09b, #96c93d)",
    }).showToast();
   }
</script>
<?php } ?>
 <?php include ("../assets/footer/mainfooter.php"); ?>
