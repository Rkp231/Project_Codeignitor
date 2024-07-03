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
          <li><a href="<?php echo site_url('welcome/schoolandcollegeofnursing'); ?>">Ebenezer School and College of Nursing</a></li>
          <li class="last_breadcrumb">Courses</li>

        </ul>
            </div>
    </div>
  </div>
  </div>
</section>



<section class="curriculum pt100 pb80">
    <div class="container course_category">
      <div class="row">

        <div class="col-md-6">
          <a href="<?php echo site_url('welcome/nursingcollege/gnm-critical-care'); ?>">
            <div class="curriculum-subject wow fadeInDown" data-wow-delay=".2s">
			<img src="<?php echo base_url(); ?>assets/img/placement-students.jpg" alt="">
              <h3>GNM + Critical Care</h3>
              <p> This course helps young professionals to apply relevant knowledge from biological and behavioural science in carrying out nursing activities in the healthcare system.</p>
            </div>
          </a>
        </div>
        <div class="col-md-6">
          <a href="<?php echo site_url('welcome/nursingcollege/bscnursing-internationalnursing'); ?>">
            <div class="curriculum-subject wow fadeInDown" data-wow-delay=".3s">
			<img src="<?php echo base_url(); ?>assets/img/placement-students.jpg" alt="">
              <h3>B.Sc Nursing + International Nursing </h3>
              <p>This course trains students as a first level nursing operation expert and offers the opportunity to become a Registered Nurse.</p>
            </div>
          </a>
        </div>
        <div class="col-md-6">
          <a href="<?php echo site_url('welcome/nursingcollege/pbbsc-nursing'); ?>">
            <div class="curriculum-subject wow fadeInDown" data-wow-delay=".4s">
			<img src="<?php echo base_url(); ?>assets/img/placement-students.jpg" alt="">
              <h3>PBB.Sc Nursing</h3>
              <p>PBBSc Nursing course is to prepare young professionals to assure responsibility as nurse specialists, consultants, educators, clinical practitioners and administrators in professional organisations, which fosters improvement of quality healthcare.</p>
            </div>
          </a>
        </div>
        <div class="col-md-6">
          <a href="<?php echo site_url('welcome/nursingcollege/msc-nursing'); ?>">
            <div class="curriculum-subject wow fadeInDown" data-wow-delay=".2s">
			<img src="<?php echo base_url(); ?>assets/img/placement-students.jpg" alt="">
              <h3>M.Sc Nursing</h3>
              <p>The MSc Nursing programme builds upon and extends competence acquired at the graduate levels and emphasizes application of relevant theories into specific nursing practice, education, administration and development of research skills and to prepare the nurses to improve the quality and evidence based nursing care in the practice of nursing.</p>
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
