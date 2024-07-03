<?php
$this->load->view('include/html-top');
$this->load->view('include/inline-header');
$this->load->view('include/header-top');
 $this->load->view('include/header');
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
          <!--<li>Courses</li>-->
          <li class="last_breadcrumb"><?php
          $uri3 = $this->uri->segment(3);
          if($uri3 == 'gnm-critical-care') { echo 'GNM + Critical Care'; }
          else if($uri3 == 'bscnursing-internationalnursing') { echo 'B.Sc Nursing + International Nursing'; }
          else if($uri3 == 'pbbsc-nursing') { echo 'PBBSC Nursing'; }
          else if($uri3 == 'msc-nursing') { echo 'M.Sc Nursing'; }

 ?></li>

        </ul>
            </div>
    </div>
  </div>
  </div>
</section>

<section class="curriculum pt100 pb80">
  <div class="container">


  <section class="news mtb80">
    <div class="container">


    <div class="row">
      <?php
      $uri3 = $this->uri->segment(3);
      if($uri3 == 'gnm-critical-care')
      {

       ?>
      <h2 class="col-sm-12"> GNM + Critical Care</h2>
        <div class="col-lg-12 col-md-12">
          <div class="news-item bxw">
            <div class="news-item-img">
              <img src="assets/img/news1.jpg" alt="">
            </div>
            <div class="news-item-content">

                <h8><b>Course: </b>GNM + Critical Care</h8><br><p>&nbsp;</p>
                <h8><b>Eligibility: </b>10+2 with 40% marks and more in any stream.</h8><p>&nbsp;</p>
                <h8><b>Duration: </b>3 years</h8>
              </a>
              <p>&nbsp;</p>
              <p>The General Nursing and Midwifery programme aims at preparing nursing professionals to take up responsibility as a health team member in the healthcare delivery system. This course helps young professionals to apply relevant knowledge from biological and behavioural science in carrying out nursing activities in the healthcare system.</br> Our add on program International Nursing opens opportunities to work abroad and secure a highly rewarding job in countries like Canada, USA, Ireland, New Zealand and Australia.</p><p>&nbsp;</p>

              <h3>Course Syllabus:</h3>
              <li> Introduction to Critical Care Nursing</li>
              <li> Nutrition for the Critically Ill Patients Nosocomial Infections</li>
              <li> Process of ventilation and intubation</li>
              <li> Principles of Wound, Pain, Burns Management</li><p>&nbsp;</p>

              <div ="row">
              <div class="form-groups form-action-d-flex mb-3">
              <center>   <a style="background:#2E5C88; font-size: 1.5375rem;" class="btn btn-primary " href="<?php echo site_url('welcome/applynow/step1'); ?>">Apply Now</a></center>
                </div>
                </div>
            </div>
          </div>
        </div>
      <?php
}
else if($uri3 == 'bscnursing-internationalnursing')
{
       ?>
       <h2 class="col-sm-12"> B.Sc Nursing + International Nursing </h2>
        <div class="col-lg-12 col-md-12">
          <div class="news-item bxw">
            <div class="news-item-img">
              <img src="assets/img/news2.jpg" alt="">
            </div>
            <div class="news-item-content">

              <a href="#">
                <h8><b>Course: </b>B.Sc Nursing + International Nursing</h8><br><p>&nbsp;</p>
                <h8><b>Eligibility: </b>10 +2 with 45% marks or more in PCB.</h8><p>&nbsp;</p>
                <h8><b>Duration: </b>4 years</h8>
              </a>
              <p>&nbsp;</p>
              <p>Join the healthcare domain with a Nursing degree. This course trains students as a first level nursing operation expert and offers the opportunity to become a Registered Nurse. These experts will be trained to work in tandem with physicians, medical professionals, pharmacists and the entire healthcare system.</br> Our add on Critical Care aims at enabling nursing professionals (RN and RNRM) to develop and apply advanced nursing care knowledge and skills for providing comprehensive nursing care to critically ill patients in intensive care settings.</p><p>&nbsp;</p>

              <h3>Course Syllabus:</h3>
              <li>International Nursing License</li>
              <li>Exposure living with family status in Foreign countries</li>
              <li>Benefits being an international Nurse</li>
              <li>Exposure to various specialization in Nursing</li>
              <li>Effective communication</li>
              <div ="row">
              <div class="form-groups form-action-d-flex mb-3">
              <center>   <a style="background:#2E5C88; font-size: 1.5375rem;" class="btn btn-primary " href="<?php echo site_url('welcome/applynow/step1'); ?>">Apply Now</a></center>
                </div>
                </div>
            </div>
            </div>
            </div>
<?php
}
else if($uri3 == 'pbbsc-nursing')
{
       ?>
       <h2 class="col-sm-12"> PBBSC Nursing </h2>
            <div class="col-lg-12 col-md-12">
              <div class="news-item bxw">
                <div class="news-item-img">
                  <img src="assets/img/news2.jpg" alt="">
                </div>
                <div class="news-item-content">

                  <a href="#">
                    <h8><b>Course: </b>PBBSC Nursing</h8><br><p>&nbsp;</p>
                    <h8><b>Eligibility: </b>Pass in G.N.M</h8><p>&nbsp;</p>
                    <h8><b>Duration: </b>2 Years</h8>
                  </a>
                  <p>&nbsp;</p>
                  <p>PBBSc Nursing course is to prepare young professionals to assure responsibility as nurse specialists, consultants, educators, clinical practitioners and administrators in professional organisations, which fosters improvement of quality healthcare.</p><p>&nbsp;</p>
                  <div ="row">
                  <div class="form-groups form-action-d-flex mb-3">
                  <center>   <a style="background:#2E5C88; font-size: 1.5375rem;" class="btn btn-primary " href="<?php echo site_url('welcome/applynow/step1'); ?>">Apply Now</a></center>
                    </div>
                    </div>
                </div>
            </div>
          </div>
<?php
}

else if($uri3 == 'msc-nursing')
{
       ?>
<h2 class="col-sm-12"> M.Sc Nursing </h2>
                <div class="col-lg-12 col-md-12">
                  <div class="news-item bxw">
                    <div class="news-item-img">
                      <img src="assets/img/news2.jpg" alt="">
                    </div>
                    <div class="news-item-content">

                      <a href="#">
                        <h8><b>Course: </b>M.Sc Nursing</h8><br><p>&nbsp;</p>
                        <h8><b>Eligibility: </b>Pass in BSc Nursing/ PB.BSc Nursing with 55% marks, min. 1 year of work experience after BSc Nursing and PBBSc Nursing</h8><p>&nbsp;</p>
                        <h8><b>Duration: </b>2 years</h8>
                      </a>
                      <p>&nbsp;</p>
                      <p>The MSc Nursing programme builds upon and extends competence acquired at the graduate levels and emphasizes application of relevant theories into specific nursing practice, education, administration and development of research skills and to prepare the nurses to improve the quality and evidence based nursing care in the practice of nursing.</p><p>&nbsp;</p>
                      <div ="row">
                      <div class="form-groups form-action-d-flex mb-3">
                      <center>   <a style="background:#2E5C88; font-size: 1.5375rem;" class="btn btn-primary " href="<?php echo site_url('welcome/applynow/step1'); ?>">Apply Now</a></center>
                        </div>
                        </div>
                    </div>
                  </div>
                </div>
<?php } ?>
      </div>
    </div>
  </section>

</div>
</section>


  <?php

  $this->load->view('include/html-bottom');
  $this->load->view('include/footer');

  ?>
