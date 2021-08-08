<?php require_once("../assets/backend/dbcon/connection.php"); ?>
<?php 

$email = $_SESSION['email'];

$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM auth_data WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);

        $status = $fetch_info['status'];
        $code = $fetch_info['otp'];
        if($status == "verified"){
            if($code != 0){
                header('Location: ../Forgot-Password');
            }
        }else{
            header("Location: ../Verify");
        }
    }else{
       
    }
}
?>
<?php include ("../assets/header/mainheader.php"); ?>
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="../Home">Home</a></li>
          <li>Blog</li>
        </ol>
        <h2>Blog</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">
<?php
         $limit = 3;
         if (isset($_GET['page'])) {

            $page = $_GET['page'];
         }else {
            $page = 1;
         }
         $offset = ($page - 1) * $limit;
         $selectblog="select * from blog_content WHERE status=1 ORDER BY id DESC LIMIT $offset,$limit" ;
         $blogquary=mysqli_query($con, $selectblog);
         if(mysqli_num_rows($blogquary) > 0){
            while($blog=mysqli_fetch_array($blogquary)){
             //$tit = preg_replace('/[^\p{L}\p{N}\s]/', '', $blog['title']);
             $tit1 = str_replace(" ", "-", $blog['title']);
?>
            <article class="entry mb-5">

              <div class="entry-img">
               <a href="../Posts/<?php echo $tit1 ?>" ><img href="../Posts/<?php echo $tit1 ?>" src="../Admin/uploads/<?php echo $blog['banner'] ?>" alt="<?php echo $blog['banner-alt'] ?>" class="img-fluid"></a>
              </div>

              <h2 class="entry-title">
                <a href="../Posts/<?php echo $tit1 ?>"><?php echo $blog['title'] ?></a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blogp">John Doe</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blogp"><?php echo $blog['date'] ?></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blogp">12 Comments</a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  <?php echo substr($blog['content'],0,160) . "..."; ?>
                </p>
                <div class="read-more btn">
                  <a href="../Posts/<?php echo $tit1 ?>">Read More</a>
                </div>
              </div>

            </article><!-- End blog entry -->
<?php }}else{ ?>
            <article class="entry">
              <h2 class="entry-title">
                <a>No posts yet.</a>
              </h2>
            </article>
            
            <?php } 
            $sql = "SELECT * FROM blog_content";
            $result = mysqli_query($con, $sql);
            
            if (mysqli_num_rows($result) > 0) {
               $total = mysqli_num_rows($result);
               $totalp = ceil($total / $limit);
               echo(' <div class="blog-pagination m-3"><ul class="justify-content-center">');
               for ($i = 1; $i <= $totalp; $i++) {
                  if ($i == $page) {
                     $active = "active";
                  } else {
                     $active = "";
                  }
                  
                   echo('<li class="'.$active.'"><a href="/Blog/'.$i.'">'.$i.'</a></li>');
               }
               echo('</ul></div>');
            }
            ?>



          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            <div class="sidebar">

              <h3 class="sidebar-title">Search</h3>
              <div class="sidebar-item search-form">
                <form action="">
                  <input type="text">
                  <button type="submit"><i class="bi bi-search"></i></button>
                </form>
              </div><!-- End sidebar search formn-->

              <h3 class="sidebar-title">Categories</h3>
              <div class="sidebar-item categories">
                <ul class="d-none">
                  <li><a href="#">General <span>(25)</span></a></li>
                  <li><a href="#">Lifestyle <span>(12)</span></a></li>
                  <li><a href="#">Travel <span>(5)</span></a></li>
                  <li><a href="#">Design <span>(22)</span></a></li>
                  <li><a href="#">Creative <span>(8)</span></a></li>
                  <li><a href="#">Educaion <span>(14)</span></a></li>
                </ul>
              </div><!-- End sidebar categories-->

              <h3 class="sidebar-title">Recent Posts</h3>
<?php
         $selectrecent="SELECT * FROM blog_content WHERE status=1 ORDER BY id DESC LIMIT 5" ;
         $recentquary=mysqli_query($con, $selectrecent);
         if(mysqli_num_rows($recentquary) > 0){
            while($recentblog=mysqli_fetch_array($recentquary)){
?>
              <div class="sidebar-item recent-posts">
                <div class="post-item clearfix">
                  <a href="../Posts/<?php echo $tit1 ?>"><img  src="../Admin/uploads/<?php echo $recentblog['banner'] ?>" alt="<?php echo $recentblog['banner-alt'] ?>"></a>
                  <h4><a href="../Posts/<?php echo $tit1 ?>"><?php echo $recentblog['title'] ?></a></h4>
                  <time><?php echo $recentblog['date'] ?></time>
                </div>
              </div><!-- End sidebar recent posts-->
<?php }}else{ ?> <div class="sidebar-item recent-posts">
                <div class="post-item clearfix">
                  <h4><a>No posts yet.</a></h4>
                </div>
              </div> <?php } ?>
              <h3 class="sidebar-title">Tags</h3>
              <div class="sidebar-item tags">
                <ul class="d-none">
                  <li><a href="#">App</a></li>
                  <li><a href="#">IT</a></li>
                  <li><a href="#">Business</a></li>
                  <li><a href="#">Mac</a></li>
                  <li><a href="#">Design</a></li>
                  <li><a href="#">Office</a></li>
                  <li><a href="#">Creative</a></li>
                  <li><a href="#">Studio</a></li>
                  <li><a href="#">Smart</a></li>
                  <li><a href="#">Tips</a></li>
                  <li><a href="#">Marketing</a></li>
                </ul>
              </div><!-- End sidebar tags-->

            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->

 <?php include ("../assets/footer/mainfooter.php"); ?>
