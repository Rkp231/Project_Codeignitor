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
        <h1>Ebenezer Degree College</h1>
        <ul>
          <li><a href="<?php echo site_url('welcome/index'); ?>">Home</a></li>
          <li><a href="<?php echo site_url('welcome/college'); ?>">College</a></li>
          <li><a href="<?php echo site_url('welcome/degreecollege'); ?>">Ebenezer Degree College</a></li>
          <li class="last_breadcrumb">Courses</li>
          <li><?php
          $uri3 = $this->uri->segment(3);
          if($uri3 == 'bba-general') { echo 'BBA GENERAL'; }
          else if($uri3 == 'bba-aviation') { echo 'BBA AVIATION'; }
          else if($uri3 == 'bba-advace') { echo 'BBA ADVANCE'; }
          else if($uri3 == 'bba-addon') { echo 'BBA ADDON'; }
          else if($uri3 == 'bca-gerenal') { echo 'BCA GENERAL'; }
          else if($uri3 == 'bca-advace') { echo 'BCA ADVANCE'; }
          else if($uri3 == 'bca-addon') { echo 'BCA ADDON'; }
          else if($uri3 == 'bcom-general') { echo 'B.COM GENERAL'; }
          else if($uri3 == 'bcom-logistics') { echo 'B.COM LOGISTICS'; }
          else if($uri3 == 'bcom-advance') { echo 'B.COM ADVANCE '; }
          else if($uri3 == 'bcom-addon') { echo 'B.COM ADDON'; }
          else if($uri3 == 'addon') { echo 'ADDON Programs'; }
 ?></li>
        </ul>
      </div>
    </div>
  </div>
  </div>
</section>


<section class="curriculum pt100 pb80">
  <div class="container course_category">
  <center><h2> Course Categories</h2></center>
    <div class="row">

      <div class="col-md-4">
        <a href="<?php echo site_url('welcome/coursedetail/bba-general'); ?>">
          <div class="curriculum-subject wow fadeInDown" data-wow-delay=".2s">
		   <img src="<?php echo base_url(); ?>assets/img/courseimg/c2.jpg" alt="">
            <h3>BBA GENERAL</h3>
            <p>Bachelor of Business Administration focuses on management and administration studies which help build entrepreneurial skills through specialization in marketing, finance, and HR management.</p>
          </div>
        </a>
      </div>
      <div class="col-md-4">
        <a href="<?php echo site_url('welcome/coursedetail/bba-aviation'); ?>">
          <div class="curriculum-subject wow fadeInDown" data-wow-delay=".3s"> 
		  <img src="<?php echo base_url(); ?>assets/img/courseimg/ba.jpg" alt="">
            <h3>BBA AVIATION</h3>
            <p>Open up opportunities in the aviation sector by gaining in-depth knowledge of air transport, airport operations, passenger forecasting, airport planning, marketing, and more.</p>
          </div>
        </a>
      </div>
      <div class="col-md-4">
        <a href="<?php echo site_url('welcome/coursedetail/bba-advance'); ?>">
          <div class="curriculum-subject wow fadeInDown" data-wow-delay=".4s">
		  <img src="<?php echo base_url(); ?>assets/img/courseimg/edit1.jpg" alt="">
            <h3>BBA ADVANCE</h3>
            <!--<p>Candidates who possessskills such as leadership, communication, team building, technology, and managerial are best suited for this course which focuses on the shipping sector.</p>-->
			<p>BBA Advance is one of the most popular bachelor degree programmes with us. Alongside the BBA Advance students will be given International industry exposure. The BBA Advance course is the gateway to numerous job opportunities in a plethora of sectors like Marketing, Education, Finance, Sales, and Government.</p>
          </div>
        </a>
      </div>
      <div class="col-md-4">
        <a href="<?php echo site_url('welcome/coursedetail/bba-addon'); ?>">
          <div class="curriculum-subject wow fadeInDown" data-wow-delay=".4s">
		  <img src="<?php echo base_url(); ?>assets/img/courseimg/computer.jpg" alt="">
            <h3>BBA ADDON</h3>
            <!--<p>Candidates who possessskills such as leadership, communication, team building, technology, and managerial are best suited for this course which focuses on the shipping sector.</p>-->
			<p>Open up opportunities in the aviation sector by gaining in-depth knowledge of air transport, financial accounting, airport operations, passenger forecasting, airport planning, marketing, etc.</p>
          </div>
        </a>
      </div>
      <div class="col-md-4">
        <a href="<?php echo site_url('welcome/coursedetail/bca-general'); ?>">
          <div class="curriculum-subject wow fadeInDown" data-wow-delay=".2s">
		  <img src="<?php echo base_url(); ?>assets/img/courseimg/bcagenerals.jpg" alt="">
            <h3>BCA GENERAL</h3>
            <p>Bachelor in Computer Application comprises subjects like database, networking, data structure, core programming languages like 'C' and 'java' for tech enthusiasts.</p>
          </div>
        </a>
      </div>
      <div class="col-md-4">
        <a href="<?php echo site_url('welcome/coursedetail/bca-advance'); ?>">
          <div class="curriculum-subject wow fadeInDown" data-wow-delay=".3s">
		  <img src="<?php echo base_url(); ?>assets/img/courseimg/bcaa2.png" alt="">
            <h3>BCA ADVANCE</h3>
            <!--<p>Prepares students for careers in IT-enabled businesses and the information communication technology skills required to handle the emerging field of big data.</p>-->
			<p>Students master their skills in cloud computing, Dev Ops Program, Artifitial Inteligence, and more. With technology being an enabler across industries today, the opportunities available to BCA graduates are ample.</p>
          </div>
        </a>
      </div>
      <div class="col-md-4">
        <a href="<?php echo site_url('welcome/coursedetail/bca-addon'); ?>">
          <div class="curriculum-subject wow fadeInDown" data-wow-delay=".3s">
		  <img src="<?php echo base_url(); ?>assets/img/courseimg/BCA ADDON 2.png" alt="">
            <h3>BCA ADDON</h3>
            <!--<p>Prepares students for careers in IT-enabled businesses and the information communication technology skills required to handle the emerging field of big data.</p>-->
			<p>
			Open up opportunities in the aviation sector by gaining in-depth knowledge of air transport, financial accounting, airport operations, passenger forecasting, airport planning, marketing, etc.
			</p>
          </div>
        </a>
      </div>
      <div class="col-md-4">
        <a href="<?php echo site_url('welcome/coursedetail/bcom-general'); ?>">
          <div class="curriculum-subject wow fadeInDown" data-wow-delay=".4s">
		  <img src="<?php echo base_url(); ?>assets/img/courseimg/cal2.jpg" alt=""> 
            <h3>B.COM GENERAL</h3>
            <p>Excel in subjects related to commerce and finances, understand the basics of financial accounting which will open doors of opportunities for you in the corporate world.</p>
          </div>
        </a>
      </div>
      <div class="col-md-4">
        <a href="<?php echo site_url('welcome/coursedetail/bcom-logistics'); ?>">
          <div class="curriculum-subject wow fadeInDown" data-wow-delay=".2s">
		  <img src="<?php echo base_url(); ?>assets/img/courseimg/bcom2.jpg" alt="">
            <h3>B.COM LOGISTICS</h3>
            <p>Prepare yourself for a career in transport and logistics, deep dive into the field of supply chain management and logistics management which is a critical aspect of eCommerce.</p>
          </div>
        </a>
      </div>
      <div class="col-md-4">
        <a href="<?php echo site_url('welcome/coursedetail/bcom-advance'); ?>">
          <div class="curriculum-subject wow fadeInDown" data-wow-delay=".2s">
		  <img src="<?php echo base_url(); ?>assets/img/courseimg/B.COM ADVANCE2.jpg" alt="">
            <h3>B.COM ADVANCE</h3>
            <!--<p>Interested in the field of healthcare? Initiate your career as a pharmacist and navigate through the intriguing nature of pharmaceutical drugs, it’s use and their effects through this course.</p>-->
			<p>A Bachelors in Commerce allows students to excel in subjects related to commerce and finance. Understand the basics of financial accounting which will open doors of opportunities for you in the corporate world.</p>
          </div>
        </a>
      </div>
      <div class="col-md-4">
        <a href="<?php echo site_url('welcome/coursedetail/bcom-addon'); ?>">
          <div class="curriculum-subject wow fadeInDown" data-wow-delay=".2s">
		  <img src="<?php echo base_url(); ?>assets/img/courseimg/bill.jpg" alt="">
            <h3>B.COM ADDON</h3>
            <!--<p>Join the healthcare domain with a Nursing degree. This course trains students as a first level nursing operation expert and offers the opportunity to become a Registered Nurse.</p>-->
			<p>Open up opportunities in the aviation sector by gaining in-depth knowledge of air transport, financial accounting, airport operations, passenger forecasting, airport planning, marketing, etc.</p>
          </div>
        </a>
      </div>

    </div>
  </div>

  <!--<div class="container course_category">
    <center><h2>ADDON PROGRAMS</h2></center>
    <div class="row">
      <div class="col-md-4">
        <a href="<?php echo site_url('welcome/coursedetail/addon'); ?>">
          <div class="curriculum-subject wow fadeInDown" data-wow-delay=".2s">
		  <img src="<?php echo base_url(); ?>assets/img/courseimg/degree2.jpeg" alt="">
            <h3>ADDON PROGRAMS</h3>
            <p>In an endeavor to make the world a stage for you, our institution has designed courses that cater to national and international requirements.</p>
          </div>
        </a>
      </div>
    </div>
    </div>-->

</section>




<?php

$this->load->view('include/html-bottom');
$this->load->view('include/footer');

?>
