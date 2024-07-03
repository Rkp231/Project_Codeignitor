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
        <h1>Add On Programs</h1>
        <ul>
          <li><a href="<?php echo site_url('welcome/index'); ?>">Home</a></li>
          <li><a href="<?php echo site_url('welcome/courses'); ?>">Courses</a></li>
          <li class="last_breadcrumb"><a href="<?php echo site_url('welcome/addonpro'); ?>">Add On Programs</li>

        </ul>
      </div>
    </div>
  </div>
  </div>
</section>


<section class="news mtb80">
    <div class="container">


<?php
$this->load->view('include/addonpro');
 ?>


  </div>
</section>




<?php
/*
$this->load->view('include/html-bottom');
$this->load->view('include/footer');
*/
?>
