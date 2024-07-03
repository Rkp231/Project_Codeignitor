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
          <li class="last_breadcrumb">Advance Program</li>

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
            <img src="assets/img/news1.jpg" alt="">
			<img src="https://ebenezercollege.edu.in/assets/img/courseimg/addonimg/EMailer_Advance-1.png" alt="">
			<div class="form-groups form-action-d-flex addon-main-apply-btn">
                <center>   <a style="background:#2E5C88; font-size: 1.5375rem;" class="btn btn-primary" href="https://ebenezercollege.edu.in/index.php/welcome/applynow/step1">Apply Now</a></center>
                  </div>
          </div>
          <!--<div class="news-item-content">

            <center>  <h3>Advance Program</h3><br></center>
            </a>

            <p>The Advance Program offers students to choose an add program along with essential international exposure through a 10 days industry visit in a foreign land. This opportunity improves a student’s understanding of the operations and quality standards of international organizations, thus adding value to their experiences. It gives them the much needed outlook to function in organizations beyond Indian borders by gaining knowledge and through a first-hand view of operations. </p><hr>

<div class="row">
<div class="col-lg-12 col-md-12">
            <h3>Program offers:</h3>
            <li> 01 Certified Add On Program </li>
            <li> 05 Industry visits</li>
            <li> 01 day workshop in an established University abroad</li>
            <li> Visit tourist attractions</li>
            <li> Round trip flight fare</li>
            <li> Scrumptious food and comfortable accommodation</li><p>&nbsp;</p>
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
