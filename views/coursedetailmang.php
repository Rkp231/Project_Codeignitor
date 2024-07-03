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
          <h1>Courses</h1>
          <ul>
            <li><a href="<?php echo site_url('welcome/index'); ?>">Home</a></li>
            <li><a href="<?php echo site_url('welcome/college'); ?>">College</a></li>
            <li><a href="<?php echo site_url('welcome/degreecollege'); ?>">Ebenezer Degree College</a></li>
            <!---<li><a href="">Courses</a></li>-->
            <li class="last_breadcrumb"><?php
            $uri3 = $this->uri->segment(3);
            if($uri3 == 'bba-general') { echo 'BBA GENERAL'; }
            else if($uri3 == 'bba-aviation') { echo 'BBA AVIATION'; }
            else if($uri3 == 'bba-advance') { echo 'BBA ADVANCE'; }
            else if($uri3 == 'bba-addon') { echo 'BBA ADDON'; }
            else if($uri3 == 'bca-general') { echo 'BCA GENERAL'; }
            else if($uri3 == 'bca-advance') { echo 'BCA ADVANCE'; }
            else if($uri3 == 'bca-addon') { echo 'BCA ADDON'; }
            else if($uri3 == 'bcom-general') { echo 'B.COM GENERAL'; }
            else if($uri3 == 'bcom-logistics') { echo 'B.COM LOGISTICS'; }
            else if($uri3 == 'bcom-advance') { echo 'B.COM ADVANCE '; }
            else if($uri3 == 'bcom-addon') { echo 'B.COM ADDON'; }
            else if($uri3 == 'addon') { echo 'ADDON Program'; }
   ?></li>
          </ul>
        </div>
      </div>
    </div>
	</div>
  </section>


  <section class="curriculum pt100 pb80 coursedetailmang-section">
    <div class="container">

<?php
$this->load->view('include/coursedetail');
 ?>


    </div>
  </section>



  <?php
/*
  $this->load->view('include/html-bottom');
  $this->load->view('include/footer');
*/
  ?>
