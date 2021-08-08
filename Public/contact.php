<?php
session_start();
?>
<?php include ("../assets/header/mainheader.php"); ?>
<main id="main">
         <!-- ======= Contact Section ======= -->

         <section id="contact" class="contact">


                  <div class="container" data-aos="fade-up">

                           <header class="section-header mt-3">
                                    <p style="color: rgb(65, 84, 241);">
                                             Contact Us
                                    </p>
                           </header>

                           <div class="row gy-4">

                                    <div class="col-lg-6">

                                             <div class="row gy-4">
                                                      <div class="col-md-6">
                                                               <div class="info-box">
                                                                        <i class="bi bi-geo-alt"></i>
                                                                        <h3>Address</h3>
                                                                        <p>
                                                                                 108 Shingnapur Amravati,<br>Maharashtra, MH 444802
                                                                        </p>
                                                               </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                               <div class="info-box">
                                                                        <i class="bi bi-telephone"></i>
                                                                        <h3>Call Us</h3>
                                                                        <p>
                                                                                 +91 99609-35244<br>+91 73873-06847
                                                                        </p>
                                                               </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                               <div class="info-box">
                                                                        <i class="bi bi-envelope"></i>
                                                                        <h3>Email Us</h3>
                                                                        <p>
                                                                                 <a href="mailto:Pranavbhatkar729@gmail.com">Pranavbhatkar729@gmail.com</a><br><a href="mailto:Pranavbhatkar789@gmail.com">pranavbhatkar789@gmail.com</a>
                                                                        </p>
                                                               </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                               <div class="info-box">
                                                                        <i class="bi bi-clock"></i>
                                                                        <h3>Open Hours</h3>
                                                                        <p>
                                                                                 Monday - Friday<br>9:00AM - 05:00PM
                                                                        </p>
                                                               </div>
                                                      </div>
                                             </div>

                                    </div>

                                    <div class="col-lg-6">
                                             <form action="forms/contact.php" method="post" class="php-email-form">
                                                      <div class="row gy-4">

                                                               <div class="col-md-6">
                                                                        <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                                                               </div>

                                                               <div class="col-md-6 ">
                                                                        <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                                                               </div>

                                                               <div class="col-md-12">
                                                                        <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                                                               </div>

                                                               <div class="col-md-12">
                                                                        <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                                                               </div>

                                                               <div class="col-md-12 text-center">
                                                                        <div class="loading">
                                                                                 Loading
                                                                        </div>
                                                                        <div class="error-message"></div>
                                                                        <div class="sent-message">
                                                                                 Your message has been sent. Thank you!
                                                                        </div>

                                                                        <button type="submit">Send Message</button>
                                                               </div>

                                                      </div>
                                             </form>

                                    </div>

                           </div>

                  </div>

         </section>
         <!-- End Contact Section -->

</main>
<?php include ("../assets/footer/mainfooter.php"); ?>
