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
        <h1>Ebenezer Paramedical College</h1>
        <ul>
          <li><a href="<?php echo site_url('welcome/index'); ?>">Home</a></li>
          <li><a href="<?php echo site_url('welcome/college'); ?>">College</li>
          <li><a href="<?php echo site_url('welcome/pmedical'); ?>">Ebenezer Paramedical College</a></li>
          <!--<li>Courses</li>-->
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
  <div class="container">


  <section class="news mtb80">
    <div class="container">


    <div class="row">
      <?php
      $uri3 = $this->uri->segment(3);
      if($uri3 == 'dmlt')
      {

       ?>
      <h2 class="col-sm-12"> Diploma in Medical Laboratory Technology (DMLT)</h2>
        <div class="col-lg-12 col-md-12">
          <div class="news-item bxw">
            <div class="news-item-img">
              <img src="assets/img/news1.jpg" alt="">
            </div>
            <div class="news-item-content">

                <h8><b>Course: </b>Diploma in Medical Laboratory Technology (DMLT)</h8><br><p>&nbsp;</p>
                <h8><b>Eligibility: </b>10+2 in Science/ SSLC.</h8><p>&nbsp;</p>
                <h8><b>Duration: </b>2/3 years</h8>
              </a>
              <p>&nbsp;</p>
              <p>DMLT is a course that helps students climb the ladder to become a medical lab technician. The Medical Lab Technician is an allied healthcare course known as Paramedical which trains the candidates to provide technical support to the doctors and surgeons working in the healthcare system. Medical lab technology executives are an inseparable part of the medical system.</p><p>&nbsp;</p>
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
else if($uri3 == 'dmrt')
{
       ?>
       <h2 class="col-sm-12"> Diploma in Medical Record Technology (DMRT) </h2>
        <div class="col-lg-12 col-md-12">
          <div class="news-item bxw">
            <div class="news-item-img">
              <img src="assets/img/news2.jpg" alt="">
            </div>
            <div class="news-item-content">

              <a href="#">
                <h8><b>Course: </b>Diploma in Medical Record Technology (DMRT)</h8><br><p>&nbsp;</p>
                <h8><b>Eligibility: </b>10+2 in Science/ SSLC.</h8><p>&nbsp;</p>
                <h8><b>Duration: </b>2/3 years</h8>
              </a>
              <p>&nbsp;</p>
              <p>The course plays a key role in not only maintaining the patient records but promotes research of quality, in financial and legal interests of the patient and the Hospital with an excellent statistical reporting system.</p><p>&nbsp;</p>
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
else if($uri3 == 'dmxt')
{
       ?>
       <h2 class="col-sm-12"> Diploma in X-Ray Technology (DMXT) </h2>
            <div class="col-lg-12 col-md-12">
              <div class="news-item bxw">
                <div class="news-item-img">
                  <img src="assets/img/news2.jpg" alt="">
                </div>
                <div class="news-item-content">

                  <a href="#">
                    <h8><b>Course: </b>Diploma in X-Ray Technology (DMXT)</h8><br><p>&nbsp;</p>
                    <h8><b>Eligibility: </b>10+2 in Science/ SSLC</h8><p>&nbsp;</p>
                    <h8><b>Duration: </b>2/3 Years</h8>
                  </a>
                  <p>&nbsp;</p>
                  <p>Diploma in X-Ray Technology is an undergraduate radiology course that is an electromagnetic radiation that penetrates within the human body and creates images of those structures on photographic film. Students learn how to prepare patients undergoing X-rays and electrocardiogram procedures and endure the procedures carefully. They also perform venipuncture and injections as well as conduct back office laboratory tests.</p><p>&nbsp;</p>
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

else if($uri3 == 'dhi')
{
       ?>
<h2 class="col-sm-12">DIPLOMA IN HEALTH INSPECTOR (DHI) </h2>
                <div class="col-lg-12 col-md-12">
                  <div class="news-item bxw">
                    <div class="news-item-img">
                      <img src="assets/img/news2.jpg" alt="">
                    </div>
                    <div class="news-item-content">

                      <a href="#">
                        <h8><b>Course: </b>DIPLOMA IN HEALTH INSPECTOR (DHI)</h8><br><p>&nbsp;</p>
                        <h8><b>Eligibility: </b>10+2 in Science/ SSLC</h8><p>&nbsp;</p>
                        <h8><b>Duration: </b>2/3 years</h8>
                      </a>
                      <p>&nbsp;</p>
                      <p>Diploma in Health Inspector is a popular choice amongst candidates looking to pursue a career in Public Health, Sanitation, and Private Medical Bodies. The students not only require a good knowledge of Biology and Basic Medical Practices but also need to have an urge to serve the patients suffering from hygiene issues.</p><p>&nbsp;</p>
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
          else if($uri3 == 'dot')
          {
           ?>
           <h2 class="col-sm-12">DIPLOMA IN OPERATION THEATRE TECHNOLOGY (DOT)</h2>
                           <div class="col-lg-12 col-md-12">
                             <div class="news-item bxw">
                               <div class="news-item-img">
                                 <img src="assets/img/news2.jpg" alt="">
                               </div>
                               <div class="news-item-content">

                                 <a href="#">
                                   <h8><b>Course: </b>DIPLOMA IN OPERATION THEATRE TECHNOLOGY (DOT)</h8><br><p>&nbsp;</p>
                                   <h8><b>Eligibility: </b>10+2 in Science/ SSLC</h8><p>&nbsp;</p>
                                   <h8><b>Duration: </b>2/3 years</h8>
                                 </a>
                                 <p>&nbsp;</p>
                                 <p>This program is designed to build a trained and qualified professional who will assist medical professionals in the operation theatre of hospitals, intensive care units as well as emergency departments.
                                 </p><p>&nbsp;</p>
                                 <div ="row">
                                 <div class="form-groups form-action-d-flex mb-3">
                                 <center>   <a style="background:#2E5C88; font-size: 1.5375rem;" class="btn btn-primary " href="<?php echo site_url('welcome/applynow/step1'); ?>">Apply Now</a></center>
                                   </div>
                                   </div>
                               </div>
                             </div>
                           </div>
           <?php }?>
      </div>
    </div>
  </section>

</div>
</section>


  <?php

  $this->load->view('include/html-bottom');
  $this->load->view('include/footer');

  ?>
