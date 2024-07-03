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
        <h1>Ebenezer College of Pharmacy</h1>
        <ul>
          <li><a href="<?php echo site_url('welcome/index'); ?>">Home</a></li>
          <li><a href="<?php echo site_url('welcome/college'); ?>">College</li>
          <li><a href="<?php echo site_url('welcome/pharmacy'); ?>">Ebenezer College of Pharmacy</a></li>
          <!--<li>Courses</li>-->
          <li class="last_breadcrumb"><?php
          $uri3 = $this->uri->segment(3);
          if($uri3 == 'bpharm') { echo 'B.PHARM'; }
          else if($uri3 == 'dpharm') { echo 'D.PHARM'; }
          else if($uri3 == 'mpharm') { echo 'M.PHARM'; }


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
      if($uri3 == 'bpharm')
      {

       ?>
      <h2 class="col-sm-12"> B.PHARM</h2>
        <div class="col-lg-12 col-md-12">
          <div class="news-item bxw">
            <div class="news-item-img">
              <img src="assets/img/news1.jpg" alt="">
            </div>
            <div class="news-item-content">

                <h8><b>Course: </b>B.PHARM</h8><br><p>&nbsp;</p>
                <h8><b>Eligibility: </b>10+2 with marks in science stream (PCM PCB PCMB/PC Si computer Science/PC & Electronics.</h8><p>&nbsp;</p>
                <h8><b>Duration: </b>4 years</h8>
              </a> 
              <p>&nbsp;</p>
              <p>The degree is the basic prerequisite for registration to practice as a pharmacist in many countries. It’s about understanding the properties and impacts of medicines and developing the skills required to counsel patients about their use. Pharmacists have the opportunity to improve health and even save lives.</p><p>&nbsp;</p>
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
else if($uri3 == 'dpharm')
{
       ?>
       <h2 class="col-sm-12"> D.PHARM </h2>
        <div class="col-lg-12 col-md-12">
          <div class="news-item bxw">
            <div class="news-item-img">
              <img src="assets/img/news2.jpg" alt="">
            </div>
            <div class="news-item-content">

              <a href="#">
                <h8><b>Course: </b>D.PHARM</h8><br><p>&nbsp;</p>
                <h8><b>Eligibility: </b>10+2 with 40% Marks in Science Stream(PCM/PCB)</h8><p>&nbsp;</p>
                <h8><b>Duration: </b>2 years</h8>
              </a>
              <p>&nbsp;</p>
              <p>D. Pharmacy has been designed to prepare candidates to work under the supervision of a licensed pharmacist in hospitals, community pharmacies, and other related pharmaceutical fields.</p><p>&nbsp;</p>
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
else if($uri3 == 'mpharm')
{
       ?>
       <h2 class="col-sm-12"> M.PHARM </h2>
            <div class="col-lg-12 col-md-12">
              <div class="news-item bxw">
                <div class="news-item-img">
                  <img src="assets/img/news2.jpg" alt="">
                </div>
                <div class="news-item-content">

                  <a href="#">
                    <h8><b>Course: </b>M.PHARM</h8><br><p>&nbsp;</p>
                    <h8><b>Eligibility: </b>B. Pharmacy/ Any other degree course in Pharmacy recognised as equivalent by RGHUS or PCI or AICTE with 55% marks.</h8><p>&nbsp;</p>
                    <h8><b>Duration: </b>2 Years</h8>
                  </a>
                  <p>&nbsp;</p>
                  <p>M. Pharm course provides an alternative means to gain qualification for registration to practice as a pharmacist for graduates with a bachelor’s degree in any science or medical science that includes the required prerequisites It focuses on specialization in the field of pharmacy.</p><p>&nbsp;</p>
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
       ?>
      </div>
    </div>
  </section>

</div>
</section>


  <?php

  $this->load->view('include/html-bottom');
  $this->load->view('include/footer');

  ?>
