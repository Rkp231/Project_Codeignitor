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
          <h1>Student Corner</h1>
          <ul>
            <li><a href="<?php echo site_url('welcome/index'); ?>">Home</a></li>
            <li class="last_breadcrumb">Student Corner</li>
          </ul>
        </div>
      </div>
    </div>
	</div>
  </section>
  <!--========================================================
                        NEWS
  =========================================================-->
  <section class="news-single pt60 pb50 pt-news-single">
   <div class="container">
    <!--   <div class="row">
        <div class="col">

          <h1>Testimony</h1>
          <p>"Successful and happy individuals make a successful nation". Success includes good health care, positive attitude and professionalism. The institution helps you to acquire dynamic therapeutic and practical knowledge which helps to achieve success nationally and internationally</p>
        </div>
      </div>
    </div>
    <div class="news-item-img mtb50">
      <img src="<?php echo base_url(); ?>assets/img/news-single.jpg" alt="">
      <i data-src="#" data-fancybox class="fas fa-play"></i>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="mb30">Bachelor Of Education</h2>
          <p>The Bachelor of Education (B.Ed) programme aims at developing the understanding and competencies required by practicing teachers for an effective teaching-learning process at the secondary stage. The programme also provides opportunities of sharing experiences gained by practicing teachers.</p>

          <p class="mt30">It enables in-service teachers to select and organize learning experiences according to the requirement of learners. Besides, it provides knowledge and develops in them an understanding of areas such as educational evaluation, school management, etc.</p><p>&nbsp;</p>
        </div>
      </div>-->

      <div class="row mt30">
        <div class="col-md-8">
          <h2>Facilities</h2>
          <p>Don’t limit your college experience to classes alone. Life at Ebenezer Group of Institutions also allows you to gain knowledge and skills outside the classroom, giving you a wide range of opportunities to explore your interests, develop new ones, and to discover the world. <a href="<?php echo site_url('welcome/facilities'); ?>" class="link2">Read More</a></p>
        </div>
        <div class="col-md-4 rmt30">
          <img src="<?php echo base_url(); ?>assets/img/studentcorner/facilities.png" alt="">
        </div>
     </div>


     <div class="row mt30">

       <div class="col-md-4 rmt30">
         <img class="facilities-desktop-img" src="<?php echo base_url(); ?>assets/img/studentcorner/clubsassioc.png" alt="">
		 <h2 class="facilities-mob-text">Club & associations</h2>
         <p class="facilities-mob-text">Several skills and talents have been unearthed amongst our students and to allow these talents to flourish, numerous clubs, associations and cells have been started for likeminded individuals to meet and polish their skills. <a href="<?php echo site_url('welcome/clubandassociation'); ?>" class="link2">Read More</a></p>
       </div>

       <div class="col-md-8">
         <h2 class="facilities-desktop-text">Club & associations</h2>
         <p class="facilities-desktop-text">Several skills and talents have been unearthed amongst our students and to allow these talents to flourish, numerous clubs, associations and cells have been started for likeminded individuals to meet and polish their skills. <a href="<?php echo site_url('welcome/clubandassociation'); ?>" class="link2">Read More</a></p>
		  <img class="facilities-mob-img" src="<?php echo base_url(); ?>assets/img/studentcorner/clubsassioc.png" alt="">
       </div>
     </div>


      </div>

  </section>

  <?php

  $this->load->view('include/html-bottom');
  $this->load->view('include/footer');

  ?>
