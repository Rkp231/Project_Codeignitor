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
          <h1>Colleges</h1>
          <ul>
            <li><a href="<?php echo site_url('welcome/index'); ?>">Home</a></li>

            <li class="last_breadcrumb">Colleges</li>
          </ul>
        </div>
      </div>
    </div>
	</div>
  </section>

                <div class="container mt80 collage-page-mt">
                  <div class="row">


                    <a class="pull-left col-md-6" href="<?php echo site_url('welcome/degreecollege'); ?>">
                    <div class="col-md-12" style="padding-right:0px !important; padding-left:10px !important;">
                      <div class="feature-item bxw wow fadeInUp hoverpop" >
                        <img src="<?php echo base_url(); ?>assets/img/2-degreecollege.jpg" alt="">
                        <h3><b>Ebenezer Degree College</b></h3>
                        <p><b>Where a degree can change your life through <span class="spclass"> Experiential-Learning.</span></b></p>
                        <h6>Affiliated to Bangalore North University.</h6><p>&nbsp;</p>
                        <p class="link2">Read More</p>
                        </div>
                    </div></a>
                    <a class="pull-left col-md-6" href="<?php echo site_url('welcome/schoolandcollegeofnursing'); ?>">
                      <div class="col-md-12" style="padding-right:0px !important; padding-left:10px !important;">
                        <div class="feature-item bxw wow fadeInUp hoverpop" data-wow-delay=".6s">
                          <img src="<?php echo base_url(); ?>assets/img/1-nursingcollege1.jpg" alt="">
                          <h3><b>Ebenezer School and College of Nursing</b></h3>
                          <p><b>Be a modern avatar of <span class="spclass">Empathy</span>, be a Nurse.</b></p>
                          <h6>Affiliated to Rajiv Gandhi University of Health Science.</h6><p>&nbsp;</p>
                          <p class="link2">Read More</p>
                        </div>
                      </div></a>

                    <a class="pull-left col-md-6" href="<?php echo site_url('welcome/pmedical'); ?>">
                    <div class="col-md-12" style="padding-right:0px !important; padding-left:10px !important;">
                      <div class="feature-item bxw wow fadeInUp hoverpop" data-wow-delay=".8s">
                        <img src="<?php echo base_url(); ?>assets/img/3-paramedical.jpg" alt="">
                        <h3><b>Ebenezer Paramedical College</b></h3>
                        <p><b>A trained paramedic is a saviour in <span class="spclass">Emergency Care.</span></b></p>
                        <h6>Affiliated to Rajiv Gandhi University of Health Science.</h6><p>&nbsp;</p>
                        <p class="link2">Read More</p>
                      </div>
                    </div></a>

                    <a class="pull-left col-md-6" href="<?php echo site_url('welcome/pharmacy'); ?>">
                    <div class="col-md-12" style="padding-right:0px !important; padding-left:10px !important;">
                      <div class="feature-item bxw wow fadeInUp hoverpop" data-wow-delay=".8s">
                        <img src="<?php echo base_url(); ?>assets/img/4-pharmacy.jpg" alt="">
                        <h3><b>Ebenezer College of Pharmacy</b></h3>
                        <p><b><span class="spclass">Expertise</span> to be a people's trusted ally against health issues.</b></p>
                        <h6>Affiliated to Rajiv Gandhi University of Health Science.</h6><p>&nbsp;</p>
                        <p class="link2">Read More</p>
                      </div>
                    </div></a>
                  </div>
                </div>





  <?php
  $this->load->view('include/html-bottom');
  $this->load->view('include/footer');
  ?>
