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
        <h1>Training & Placement</h1>
        <ul>
          <li><a href="<?php echo site_url('welcome/index'); ?>">Home</a></li>

          <li class="last_breadcrumb">Training & Placement</li>
        </ul>
      </div>
    </div>
  </div>
  </div>
</section>

<section class="news-single pt60 pb50 tandp-main-section">
    <div class="container">
      <div class="row">
        <div class="col">

          <h8 style="font-size:20px !important;">Our training is not limited to the present day and age. We go beyond on-going circumstances to ensure that our students stand tough globally, creating a valuable impact in the future. We have a dedicated team that works towards placing our students in the best of openings, offering opportunities that will lead them to ultimate success. </h8>
        </div>
      </div>
    </div>

    <div class="curriculum-pro mt20 pt150">
       <div class="container ">
         <div class="row">
           <div class="col-lg-6 curriculum-pro-text">
             <h2 class="wow fadeInUp" data-wow-delay=".3s">What We Offer ?</h2>
			 <ul>
             <li>Preparation for global competitiveness</li>
             <li>Sustaining a comfortable and supportive atmosphere</li>
             <li>Promoting and encouraging student achievements</li>
             <li>Committing to adopt dynamic technology and innovative teaching methodology</li>
			 </ul>
			 <hr>

             <p>An institution may be able to place you once, but proper training will ensure to place you throughout your lifetime.<br><hr>We assure you of placement with an extensive training program that is designed by industry experts.<br> Training will be a core part of the student’s timetable, as important as a subject class.<br><hr>We believe that an UNTRAINED EDUCATED is as same as AN UNSHARPENED SWORD. </p>

           </div>
		   <div class="col-lg-6 curriculum-pro-img">
		   <img src="<?php echo base_url(); ?>assets/img/curriculum-pro-bg.jpg" alt="">
		   </div>
        <?php /*<div class="col-lg-7">
             <div class="curriculum-pro-counter wow fadeInRight" data-wow-delay=".3s">
               <ul>
                 <li><span class="curriculum-pro-g1">15</span><i class="fas fa-plus curriculum-pro-g1"></i>
                   <p>Courses</p>
                 </li>
                 <li><span class="curriculum-pro-g2">100</span><i class="fas fa-percent curriculum-pro-g2"></i>
                   <p>Publications</p>
                 </li>
                 <li><span class="curriculum-pro-g3">1000</span><i class="fas fa-plus curriculum-pro-g3"></i>
                   <p>Students</p>
                 </li>

               </ul>
             </div>
           </div> */ ?>
         </div>
       </div>
     </div>
  </section>
  <section class="mt100 mt-pt-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12 wow fadeInUp" data-wow-delay=".3s">
          <div class="bxw pandt-text">
            <div class="item-text">
              <h2>PLACEMENT TRAINING IS AS IMPORTANT AS UNIVERSITY SYLLABUS</h2>
              <p>Our training is not limited to the present day and age. We go beyond on-going circumstances to ensure that our students stand tough globally, creating a valuable impact in the future. We have a dedicated team which works towards placing our students in the best of openings; opportunities that will lead them to ultimate success.</p>
<p>&nbsp;</p>
<p>The Industry Designed Programme is a full-fledged training programme that drills students in Digital Marketing skills, market research, advanced excel and other imperative skills. This programme opens opportunities to intern internationally for a month and in India for 3 months.</p>



        <!--      <a href="#" class="link2">More information <i class="ti-angle-right"></i></a>-->
            </div><p>&nbsp;</p>
            <h2>PLACEMENT PARTNERS</h2><p>&nbsp;</p>
            <div class="item-with-img">
              <img src="<?php echo base_url(); ?>assets/img/placements.jpg" alt="">

            </div>
          </div>
        </div>


        <p>&nbsp;</p><p>&nbsp;</p>
        <p>&nbsp;</p><p>&nbsp;</p>
         <p>&nbsp;</p><p>&nbsp;</p>



      </div>
    </div>
  </section>


  <?php
  $this->load->view('include/html-bottom');
  $this->load->view('include/footer');

  ?>
