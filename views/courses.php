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
          <h1>Courses</h1>
          <ul>
            <li><a href="<?php echo site_url('welcome/index'); ?>">Home</a></li>
            <li><a href="<?php echo site_url('welcome/college'); ?>">College</a></li>
            <li><a href="<?php echo site_url('welcome/degreecollege'); ?>">Ebenezer Degree College</a></li>
            <li class="last_breadcrumb">Courses</li>
          </ul>
        </div>
      </div>
    </div>
	</div>
  </section>


  <section class="curriculum pt100 pb80">
    <div class="container">
      <center><h2> Course Categories</h2></center>
      <div class="row">
        <div class="col-md-4">
          <a href="<?php echo site_url('welcome/coursedetail/bba-general'); ?>">
            <div class="curriculum-subject wow fadeInDown" data-wow-delay=".2s">
              <h3>BBA GENERAL</h3>
              <p>Bachelor of Business Administration focuses on management and administration studies which help build entrepreneurial skills through specialization in marketing, finance, and HR management.</p>
            </div>
          </a>
        </div>
        <div class="col-md-4">
          <a href="<?php echo site_url('welcome/coursedetail/bba-aviation'); ?>">
            <div class="curriculum-subject wow fadeInDown" data-wow-delay=".3s">
              <h3>BBA AVIATION</h3>
              <p>Open up opportunities in the aviation sector by gaining in-depth knowledge of air transport, airport operations, passenger forecasting, airport planning, marketing, and more.</p>
            </div>
          </a>
        </div>
        <!--<div class="col-md-4">
          <a href="<?php echo site_url('welcome/coursedetail/bba-advance'); ?>">
            <div class="curriculum-subject wow fadeInDown" data-wow-delay=".4s">
              <h3>BBA ADVANCE</h3>
              <p>Candidates who possessskills such as leadership, communication, team building, technology, and managerial are best suited for this course which focuses on the shipping sector.</p>
            </div>
          </a>
        </div>-->
        <div class="col-md-4">
          <a href="<?php echo site_url('welcome/coursedetail/bba-addon'); ?>">
            <div class="curriculum-subject wow fadeInDown" data-wow-delay=".4s">
              <h3>BBA ADDON</h3>
              <p>Candidates who possessskills such as leadership, communication, team building, technology, and managerial are best suited for this course which focuses on the shipping sector.</p>
            </div>
          </a>
        </div>
        <div class="col-md-4">
          <a href="<?php echo site_url('welcome/coursedetail/bca-general'); ?>">
            <div class="curriculum-subject wow fadeInDown" data-wow-delay=".2s">
              <h3>BCA GENERAL</h3>
              <p>Bachelor in Computer Application comprises subjects like database, networking, data structure, core programming languages like 'C' and 'java' for tech enthusiasts.</p>
            </div>
          </a>
        </div>
        <div class="col-md-4">
          <a href="<?php echo site_url('welcome/coursedetail/bca-advance'); ?>">
            <div class="curriculum-subject wow fadeInDown" data-wow-delay=".3s">
              <h3>BCA ADVANCE</h3>
              <p>Prepares students for careers in IT-enabled businesses and the information communication technology skills required to handle the emerging field of big data.</p>
            </div>
          </a>
        </div>
        <div class="col-md-4">
          <a href="<?php echo site_url('welcome/coursedetail/bca-addon'); ?>">
            <div class="curriculum-subject wow fadeInDown" data-wow-delay=".3s">
              <h3>BCA ADDON</h3>
              <p>Prepares students for careers in IT-enabled businesses and the information communication technology skills required to handle the emerging field of big data.</p>
            </div>
          </a>
        </div>
        <div class="col-md-4">
          <a href="<?php echo site_url('welcome/coursedetail/bcom-general'); ?>">
            <div class="curriculum-subject wow fadeInDown" data-wow-delay=".4s">
              <h3>B.COM GENERAL</h3>
              <p>Excel in subjects related to commerce and finances, understand the basics of financial accounting which will open doors of opportunities for you in the corporate world.</p>
            </div>
          </a>
        </div>
        <div class="col-md-4">
          <a href="<?php echo site_url('welcome/coursedetail/bcom-logistics'); ?>">
            <div class="curriculum-subject wow fadeInDown" data-wow-delay=".2s">
              <h3>B.COM Logistics</h3>
              <p>Prepare yourself for a career in transport and logistics, deep dive into the field of supply chain management and logistics management which is a critical aspect of eCommerce.</p>
            </div>
          </a>
        </div>
        <div class="col-md-4">
          <a href="<?php echo site_url('welcome/coursedetail/bcom-advance'); ?>">
            <div class="curriculum-subject wow fadeInDown" data-wow-delay=".2s">
              <h3>B.COM ADVANCE</h3>
              <p>Interested in the field of healthcare? Initiate your career as a pharmacist and navigate through the intriguing nature of pharmaceutical drugs, it’s use and their effects through this course.</p>
            </div>
          </a>
        </div>
        <!--<div class="col-md-4">
          <a href="<?php echo site_url('welcome/coursedetail/bcom-addon'); ?>">
            <div class="curriculum-subject wow fadeInDown" data-wow-delay=".2s">
              <h3>B.COM ADDON</h3>
              <p>Join the healthcare domain with a Nursing degree. This course trains students as a first level nursing operation expert and offers the opportunity to become a Registered Nurse.</p>
            </div>
          </a>
        </div>-->
      </div>
    </div>

    <!--<div class="container">
      <center><h2>ADDON Programs</h2></center>
      <div class="row">
        <div class="col-md-4">
          <a href="<?php echo site_url('welcome/coursedetail/addon'); ?>">
            <div class="curriculum-subject wow fadeInDown" data-wow-delay=".2s">
              <h3>ADDON Programs</h3>
              <p>In an endeavor to make the world a stage for you, our institution has designed courses that cater to national and international requirements.</p>
            </div>
          </a>
        </div>
      </div>
      </div>-->


  </section>

  <!--========================================================
                        CURRICULUM
  =========================================================
  <div class="curriculum mb70 mt20">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
            <div class="wow fadeInUp" data-wow-delay=".3s">
              <div class="accordion-container bxw">
                <div class="set">
                  <a href="#">
                    Education leaders
                    <i class="ti-angle-right"></i>
                  </a>
                  <div class="content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eu erat a lectus laoreet tincidunt. Maecenas in lorem volutpat, euismod quam feugiat, facilisis nunc. Proin vitae dignissim lectus.</p>
                  </div>
                </div>
                <div class="set">
                  <a href="#">
                    Inquiry
                    <i class="ti-angle-right"></i>
                  </a>
                  <div class="content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eu erat a lectus laoreet tincidunt. Maecenas in lorem volutpat, euismod quam feugiat, facilisis nunc. Proin vitae dignissim lectus.</p>
                  </div>
                </div>
                <div class="set">
                  <a href="#">
                    Community
                    <i class="ti-angle-right"></i>
                  </a>
                  <div class="content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eu erat a lectus laoreet tincidunt. Maecenas in lorem volutpat, euismod quam feugiat, facilisis nunc. Proin vitae dignissim lectus.</p>
                  </div>
                </div>
                <div class="set">
                  <a href="#">
                    Diversity
                    <i class="ti-angle-right"></i>
                  </a>
                  <div class="content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eu erat a lectus laoreet tincidunt. Maecenas in lorem volutpat, euismod quam feugiat, facilisis nunc. Proin vitae dignissim lectus.</p>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <div class="col-md-4 wow fadeInUp" data-wow-delay=".4s">
          <div class="our-value-carousel-2 rmt40 our-value owl-carousel owl-theme">
            <div class="item">
              <div class="our-value-img">
                <img src="<?php echo base_url(); ?>assets/img/value-video-1.jpg" alt="">
                <i data-src="#" data-fancybox class="fas fa-play"></i>
              </div>
              <a href="#">consectetur adipiscing elit.</a>
            </div>
            <div class="item">
              <div class="our-value-img">
                <img src="<?php echo base_url(); ?>assets/img/value-video-2.jpg" alt="">
                <i data-src="#" data-fancybox class="fas fa-play"></i>
              </div>
              <a href="#">Morbi nec ex mi.</a>
            </div>
            <div class="item">
              <div class="our-value-img">
                <img src="<?php echo base_url(); ?>assets/img/value-video-3.jpg" alt="">
                <i data-src="#" data-fancybox class="fas fa-play"></i>
              </div>
              <a href="#">Vivamus at porttitor nulla. </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>-->

  <?php

  $this->load->view('include/html-bottom');
  $this->load->view('include/footer');

  ?>
