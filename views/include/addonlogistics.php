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
          <li><a href="<?php echo site_url('welcome/degreecollege'); ?>">Ebenezer Degree College</a></li>
          <li><a href="<?php echo site_url('welcome/coursedetail/addon'); ?>">Addon Programs</a></li>
          <li class="last_breadcrumb">Logistics & Port Management</li>

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
            <!--<img src="https://ebenezercollege.edu.in/assets/img/courseimg/cloud2.jpg" alt="">-->
			<img src="https://ebenezercollege.edu.in/assets/img/courseimg/addonimg/Mailer_Logistics-1.png" alt="">
			<div class="form-groups form-action-d-flex addon-main-apply-btn">
                <center>   <a style="background:#2E5C88; font-size: 1.5375rem;" class="btn btn-primary" href="https://ebenezercollege.edu.in/index.php/welcome/applynow/step1">Apply Now</a></center>
                  </div>
          </div>
          <!--<div class="news-item-content">
             <center>  
			  <img src="https://ebenezercollege.edu.in/assets/img/courseimg/addonimg/Mailer_Logistics-1.png" alt="">
			 <!--<h3 class="addon-heading">Logistics & Port Management </h3><br></center>-->

           <!-- <p>The Logistics and Port Management programme is designed to help students gain the essential knowledge and tools of logistics, transport and port operations management.</p><hr>-->
              
<!--<div class="row">
<div class="col-lg-6 col-md-6">

            <h3>Course Syllabus:</h3>
            <li> Digital Logistics Management</li>
            <li> Retail and shipping Business Management</li>
            <li> Port Management</li>
            <li> Logistics Analytics Management</li><p>&nbsp;</p>
</div>
<div class="col-lg-6 col-md-6">
            <h3>Course structure:</h3>
            <li> 10 Industry Visits</li>
            <li> 15 days Project work</li>
            <li> 30 days Internship</li>
            <li> 20 Hours Workshop</li>
            <li> 200 Hours Classroom training</li><p>&nbsp;</p>
</div>
<div class="col-lg-6 col-md-6">
            <h3> Certifications from:</h3>
                <b><p>Powered by : NextStep Institute of Logistics & Aviation</br>
                  In association with:</p></b><p>&nbsp;</p>
                  <li>LSC (Logistics Skill Council)</li>
                  <li>MSME (Ministry of Micro, Small & Medium Enterprises)</li>
                  <li>CILT (Chartered Institute of Logistics and Transport)</li>
</div>

</div>-->
          </div>
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
