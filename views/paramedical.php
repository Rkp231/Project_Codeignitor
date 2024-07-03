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
        <h1>Ebenezer School and College of Nursing</h1>
        <ul>
          <li><a href="<?php echo site_url('welcome/index'); ?>">Home</a></li>
          <li><a href="<?php echo site_url('welcome/college'); ?>">College</li>
          <li><a href="<?php echo site_url('welcome/pmedical'); ?>">Ebenezer Paramedical College</a></li>
          <li>Courses</li>
          <li class="last_breadcrumb"><?php
          $uri3 = $this->uri->segment(3);
          if($uri3 == 'dmlt') { echo 'Diploma in Medical Laboratory Technology (DMLT)'; }
          else if($uri3 == 'dmrt') { echo 'Diploma in Medical Record Technology (DMRT)'; }
          else if($uri3 == 'dmxt') { echo 'Diploma in X-Ray Technology (DMXT)'; }
          else if($uri3 == 'dhi') { echo 'Diploma in Health Inspector (DHI)'; }
          else if($uri3 == 'dot') { echo 'DIPLOMA IN OPERATION THEATRE TECHNOLOGY (DOT)'; }

 ?></li>

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
			<img src="<?php echo base_url(); ?>assets/img/courseimg/book.jpg" alt="">
              <h3>Diploma in Medical Laboratory Technology (DMLT)</h3>
              <p>DMLT is a course that helps students climb the ladder to become a medical lab technician.</p>
            </div>
          </a>
        </div>
        <div class="col-md-4">
          <a href="<?php echo site_url('welcome/paramedicalcourse/dmrt'); ?>">
            <div class="curriculum-subject wow fadeInDown" data-wow-delay=".3s">
			<img src="<?php echo base_url(); ?>assets/img/courseimg/book.jpg" alt="">
              <h3>Diploma in Medical Record Technology (DMRT)</h3>
              <p>The course plays a key role in not only maintaining the patient records but promotes research of quality.</p>
            </div>
          </a>
        </div>
        <div class="col-md-4">
          <a href="<?php echo site_url('welcome/paramedicalcourse/dmxt'); ?>">
            <div class="curriculum-subject wow fadeInDown" data-wow-delay=".4s">
			<img src="<?php echo base_url(); ?>assets/img/placement-students.jpg" alt="">
              <h3>Diploma in X-Ray Technology (DMXT)</h3>
              <p>Diploma in X-Ray Technology is an undergraduate radiology course that is an electromagnetic radiation that penetrates within the human body and creates images of those structures on photographic film.</p>
            </div>
          </a>
        </div>
        <div class="col-md-4">
          <a href="<?php echo site_url('welcome/paramedicalcourse/dhi'); ?>">
            <div class="curriculum-subject wow fadeInDown" data-wow-delay=".2s">
			<img src="<?php echo base_url(); ?>assets/img/placement-students.jpg" alt="">
              <h3>Diploma in Health Inspector (DHI)</h3>
              <p>Diploma in Health Inspector is a popular choice amongst candidates looking to pursue a career in Public Health, Sanitation, and Private Medical Bodies.</p>
            </div>
          </a>
        </div>
        <div class="col-md-4">
          <a href="<?php echo site_url('welcome/paramedicalcourse/dot'); ?>">
            <div class="curriculum-subject wow fadeInDown" data-wow-delay=".2s">
              <h3>Diploma in Operation Theatre Technology (DOT)</h3>
              <p>This program is designed to build a trained and qualified professional who will assist medical professionals in the operation theatre</p>
            </div>
          </a>
        </div>



      </div>
    </div>
  </section>


<?php

$this->load->view('include/html-bottom');
$this->load->view('include/footer');

?>
