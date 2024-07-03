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
    <div class="container">
      <div class="row">
        <div class="col">
          <h1>Library</h1>
          <ul>
            <li><a href="<?php echo site_url('welcome/index'); ?>">Home</a></li>

            <li>Library</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!--========================================================
                          Library
  =========================================================-->





<?php

$this->load->view('include/html-bottom');
$this->load->view('include/footer');

?>
