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
          <li><a href="<?php echo site_url('welcome/college'); ?>">College</li>
          <li><a href="<?php echo site_url('welcome/degreecollege'); ?>">Ebenezer Degree College</li>
          <li><a href="<?php echo site_url('welcome/coursedetail/addon'); ?>">Addon Programs</li>
          <li class="last_breadcrumb">Aviation & Airline Management</li>

        </ul>
            </div>
    </div>
  </div>
  </div>
</section>

<section class="curriculum pt100 pb80">
  <div class="container">
<section class="news mtb80">
  <!--<h3><center> Add on Programs </center></h3>-->
  <div class="container">
    <div class="row">


      <div class="col-lg-12 col-md-12">
        <div class="news-item bxw">
          <div class="news-item-img">
            <!--<img src="assets/img/courseimg/ww.jpg" alt="">-->
			<img src="https://ebenezercollege.edu.in/assets/img/courseimg/addonimg/EMailer_Aviation-1.png" alt="">
			<div class="form-groups form-action-d-flex addon-main-apply-btn">
                <center>   <a style="background:#2E5C88; font-size: 1.5375rem;" class="btn btn-primary" href="https://ebenezercollege.edu.in/index.php/welcome/applynow/step1">Apply Now</a></center>
                  </div>
          </div>
          <!---<div class="news-item-content">

            <center>  <h3>Aviation & Airline Management</h3><br></center>
            </a>

            <p>Study the operation of airlines, airports, aircraft manufacturers and the business related to the aerospace industry. The program will train students in air traffic control, aviation maintenance, air carrier operations, airline operations and other airlines operations.</p><hr>

<div class="row">
<div class="col-lg-6 col-md-6">

            <h3>Course Syllabus:</h3>
            <li> Future Air Cargo Executive Management (FACE)</li>
            <li> Aviation Security Management (ASM)</li>
            <li> Airline Industry Retail Management (AIR)</li>
            <li> Airport Ground operation Management (AGO)</li><p>&nbsp;</p>
</div>
<div class="col-lg-6 col-md-6">
            <h3>Course structure:</h3>
            <li> 05 Industry Visits</li>
            <li> 15 days Project work</li>
            <li> 30 days Internship</li>
            <li> 20 Hours Workshop</li>
            <li> 200 Hours Classroom training</li><p>&nbsp;</p>
</div>
<div class="col-lg-6 col-md-6">
            <h3> Certifications from:</h3>
                <b><p>Powered by : BIA&L- Bangalore Institute of Aviation and Logistics</br>
                  In association with:</p></b><p>&nbsp;</p>
                  <li>IATA</li>
                  <li> CITY & GUILDS</li>
                  <li>NSDC (AASSC)</li>
</div>
</div>
          </div>-->
        </div>
      </div>




    </div>
  </div>
</section>


</div>
</section>


  <?php

  $this->load->view('include/html-bottom');
  $this->load->view('include/footer');

  ?>
