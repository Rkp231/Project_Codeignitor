<?php
$this->load->view('include/html-top');
$this->load->view('include/inline-header');
$this->load->view('include/header-top');
 $this->load->view('include/header');
 $this->load->view('include/rightnav');
?>

  <!--========================================================
                          BREADCRUMB
  =========================================================-->
  <section class="breadcrumb breadcrumb-img">
  <div class="breadcrumb-background">
    <div class="container">
      <div class="row">
        <div class="col">
          <h1>Contact Us</h1>
          <ul>
            <li><a href="<?php echo site_url('welcome/index'); ?>">Home</a></li>
            <li class="last_breadcrumb">Contact Us</li>
          </ul>
        </div>
      </div>
    </div>
	</div>
  </section>
  <!--========================================================
                          APPLY
  =========================================================-->
  <div class="container mt80 contact_page_mt">
    <div class="row">
      <div class="col">
        <h2 class="wow fadeInUp title-big contact-title" data-wow-delay=".3s">To get in touch with us, feel free to mail or call and our team will get back to you at an earliest. <a href="#" class="link"> info@ebenezercollege.edu.in</a></h2>
      </div>
    </div>
  </div>

  <div class="mt80 contact-mt80">
    <div class="container-fluid apply-form-padding">
      <div class="row no-gutters">
        <div class="col-lg-6 wow fadeInLeft" data-wow-delay=".3s">

          <!--<img src="<?php echo base_url(); ?>assets/img/apply-img.jpg" class="h-100 w-100" alt="">-->

          <div class="col-md-12">
            <div class="feature-item bxw wow fadeInUp hoverpop" data-wow-delay=".6s">
            <!--  <img src="<?php echo base_url(); ?>assets/img/icon2.png" alt="">-->
              <h3> <a href="#">Address</a></h3>
              <p>EBENEZER GROUP OF INSTITUTIONS <br/>
Ebenezer Nagar, No.19, 1st Main Rd, Kothanur Post, Bengaluru, Karnataka 560077.</p>
            </div>
          </div>
          <div class="col-md-12">
            <div class="feature-item bxw wow fadeInUp hoverpop" data-wow-delay=".7s">
            <!--  <img src="<?php echo base_url(); ?>assets/img/icon2.png" alt=""> -->
              <h3> <a href="#">Phone/Mobile Number</a></h3>
              <p> +91 8050024004 </p>
            </div>
          </div>
          <div class="col-md-12">
            <div class="feature-item bxw wow fadeInUp hoverpop" data-wow-delay=".8s">
          <!--    <img src="<?php echo base_url(); ?>assets/img/icon3.png" alt=""> -->
              <h3> <a href="#">Email Address</a></h3>
              <p>info@ebenezercollege.edu.in.</p>
              <p>admissions@ebenezercollege.edu.in.</p>
            </div>
          </div>

        </div>
        <div class="col-lg-6 wow fadeInRight" data-wow-delay=".3s">
          <div class="apply-form bxw contact_form">
            <div class="text-center">
              <h2>Get In Touch</h2>

            </div>
            <form action="#">
              <div class="row">
                <div class="col-md-6">
                  <input type="text" class="form-control" placeholder="First Name">
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control" placeholder="Last Name">
                </div>
                <div class="col-md-6">
                  <input type="email" class="form-control" placeholder="Your Email Address">
                </div>
                <div class="col-md-6">
                  <input type="tel" class="form-control" placeholder="Phone">
                </div>
                <div class="col-md-12">
                  <input type="text" class="form-control" placeholder="Message">
                </div>

                <div  class="col-md-12 mt20">
                  <center><button type="submit" class="btn-2 contact_submit_btn">Send Message</button></center>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php /*
  <div class="container mt80">
      <div class="row">


        <div class="col-md-4">
          <div class="feature-item bxw wow fadeInUp hoverpop" data-wow-delay=".6s">
            <img src="<?php echo base_url(); ?>assets/img/icon2.png" alt="">
            <h3> <a href="#">Address</a></h3>
            <p>Ebenezer Nagar, Kothanur Post, Bangalore, Karnataka, India - 560077.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="feature-item bxw wow fadeInUp hoverpop" data-wow-delay=".7s">
            <img src="<?php echo base_url(); ?>assets/img/icon2.png" alt="">
            <h3> <a href="#">Phone/Mobile Number</a></h3>
            <p> +91 8050024004 </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="feature-item bxw wow fadeInUp hoverpop" data-wow-delay=".8s">
            <img src="<?php echo base_url(); ?>assets/img/icon3.png" alt="">
            <h3> <a href="#">Email Address</a></h3>
            <p>info@ebenezercollege.edu.in.</p>
            <p>admissions@ebenezercollege.edu.in.</p>
          </div>
        </div>



      </div>
    </div>

    */ ?>

 

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3886.474722880439!2d77.65198291528256!3d13.069072282716983!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1b9c2fe08b69%3A0x2a7d86f078188072!2sEbenezer%20Group%20of%20Institutions!5e0!3m2!1sen!2sin!4v1615314045244!5m2!1sen!2sin" width="100%" height="526"  style="border:0;" allowfullscreen="" loading="lazy"></iframe>




  <!--  <p>&nbsp;</p>
    <img src="<?php echo base_url(); ?>assets/img/googlemap.png" class="img-responsive"/>
  -->


  <?php

  $this->load->view('include/html-bottom');
  $this->load->view('include/footer');

  ?>
