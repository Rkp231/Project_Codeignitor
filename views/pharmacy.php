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
        <h1>Ebenezer College of Pharmacy</h1>
        <ul>
          <li><a href="<?php echo site_url('welcome/index'); ?>">Home</a></li>
          <li><a href="<?php echo site_url('welcome/college'); ?>">College</li>
            <li><a href="<?php echo site_url('welcome/pharmacy'); ?>">Ebenezer College of Pharmacy </li>
          <li class="last_breadcrumb">Pharmacy Courses</li>


        </ul>
      </div>
    </div>
  </div>
  </div>
</section>


<section class="news mtb80">
    <div class="container"><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>



<section class="curriculum pb80 mt-70">
    <div class="container course_category">
      <div class="row">

        <div class="col-md-4">
          <a href="<?php echo site_url('welcome/pharmacycourse/bpharm'); ?>">
            <div class="curriculum-subject wow fadeInDown" data-wow-delay=".2s">
			<img src="<?php echo base_url(); ?>assets/img/courseimg/phm.jpg" alt="">
              <h3> B.PHARM</h3>
              <p>The degree is the basic prerequisite for registration to practice as a pharmacist in many countries.</p>
            </div>
          </a>
        </div>
        <div class="col-md-4">
          <a href="<?php echo site_url('welcome/pharmacycourse/dpharm'); ?>">
            <div class="curriculum-subject wow fadeInDown" data-wow-delay=".3s">
			<img src="<?php echo base_url(); ?>assets/img/courseimg/d3.jpg" alt="">
              <h3>D.PHARM</h3>
              <p>D. Pharmacy has been designed to prepare candidates to work under the supervision of a licensed pharmacist in hospitals, community pharmacies, and other related pharmaceutical fields.</p>
            </div>
          </a>
        </div>
        <div class="col-md-4">
          <a href="<?php echo site_url('welcome/pharmacycourse/mpharm'); ?>">
            <div class="curriculum-subject wow fadeInDown" data-wow-delay=".4s">
			<img src="<?php echo base_url(); ?>assets/img/courseimg/job.jpg" alt="">
              <h3>M.PHARM</h3>
              <p>Interested in the field of healthcare? Initiate your career as a pharmacist and navigate through the intriguing nature of pharmaceutical drugs, it’s use and their effects through this course.</p>
            </div>
          </a>
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
