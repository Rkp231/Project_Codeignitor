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
        <h1>PARAMEDICAL COURSES</h1>
        <ul>
          <li><a href="<?php echo site_url('welcome/index'); ?>">Home</a></li>
          <li><a href="<?php echo site_url('welcome/college'); ?>">College</li>
          <li><a href="<?php echo site_url('welcome/pmedical'); ?>">Ebenezer Paramedical College</li>
          <li class="last_breadcrumb">Paramedical Courses</li>

        </ul>
      </div>
    </div>
  </div>
  </div>
</section>


<section class="curriculum pt100 pb80">
    <div class="container course_category">

            <div class="row">

              <div class="col-md-4">
                <a href="<?php echo site_url('welcome/paramedicalcourse/dmlt'); ?>">
                  <div class="curriculum-subject wow fadeInDown" data-wow-delay=".2s">
				  <img src="<?php echo base_url(); ?>assets/img/courseimg/whatapp.jpeg" alt="">
                    <h3>DIPLOMA IN MEDICAL LABORATORY TECHNOLOGY (DMLT)</h3> 
                    <p>DMLT is a course that helps students climb the ladder to become a medical lab technician.</p>
                  </div>
                </a>
              </div>
              <div class="col-md-4">
                <a href="<?php echo site_url('welcome/paramedicalcourse/dmrt'); ?>">
                  <div class="curriculum-subject wow fadeInDown" data-wow-delay=".3s">
				  <img src="<?php echo base_url(); ?>assets/img/courseimg/data.jpg" alt="">
                    <h3>DIPLOMA IN MEDICAL RECORD TECHNOLOGY (DMRT)</h3>
                    <p>The course plays a key role in not only maintaining the patient records but promotes research of quality.</p>
                  </div>
                </a>
              </div>
              <div class="col-md-4">
                <a href="<?php echo site_url('welcome/paramedicalcourse/dmxt'); ?>">
                  <div class="curriculum-subject wow fadeInDown" data-wow-delay=".4s">
				  <img src="<?php echo base_url(); ?>assets/img/courseimg/11.jpg" alt="">
                    <h3>DIPLOMA IN X-RAY TECHNOLOGY (DMXT)</h3>
                    <p>Diploma in X-Ray Technology is an undergraduate radiology course that is an electromagnetic radiation that penetrates within the human body and creates images of those structures on photographic film.</p>
                  </div>
                </a>
              </div>
              <div class="col-md-4">
                <a href="<?php echo site_url('welcome/paramedicalcourse/dhi'); ?>">
                  <div class="curriculum-subject wow fadeInDown" data-wow-delay=".2s">
				  <img src="<?php echo base_url(); ?>assets/img/courseimg/dr.jpg" alt="">
                    <h3>DIPLOMA IN HEALTH INSPECTOR (DHI)</h3>
                    <p>Diploma in Health Inspector is a popular choice amongst candidates looking to pursue a career in Public Health, Sanitation, and Private Medical Bodies.</p>
                  </div>
                </a>
              </div>
              <div class="col-md-4">
                <a href="<?php echo site_url('welcome/paramedicalcourse/dot'); ?>">
                  <div class="curriculum-subject wow fadeInDown" data-wow-delay=".2s">
				  <img src="<?php echo base_url(); ?>assets/img/courseimg/young.jpg" alt="">
                    <h3>DIPLOMA IN OPERATION THEATRE TECHNOLOGY (DOT)</h3>
                    <p>This program is designed to build a trained and qualified professional who will assist medical professionals in the operation theatre</p>
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
