<?php

$uri1 = $this->uri->segment(1);
$uri2 = $this->uri->segment(2);
$uri3 = $this->uri->segment(3);
$uri4 = $this->uri->segment(4);
?>
<div class="main-panel">
  <div class="container">
    <div class="page-inner">
      <div class="page-header">
        <h4 class="page-title">Broucher Downloads</h4>

      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <div class="card-head-row">
                <div class="card-title">Downloads List</div>
                <div class="card-tools">
                  <ul class="nav nav-pills nav-secondary nav-pills-no-bd nav-sm" id="pills-tab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="pills-today"  href="" role="tab" aria-selected="true">New</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="pills-week" href="" role="tab" aria-selected="false">Lead</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="pills-month"  href="" role="tab" aria-selected="false">Fake</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!--Challenge List-->
            <div class="card-body">

              <?php
               $listdownloadbroucherslist = $this->msuperadmin->listdownloadbroucherslist();
              foreach ($listdownloadbroucherslist as $arrayRow) {
                $bid =    $arrayRow->bid;
                $name =    $arrayRow->name;
                $mobileno =    $arrayRow->mobileno;
                $emailid =    $arrayRow->emailid;
                $status =    $arrayRow->status;

                $sday =    $arrayRow->sday;
                $smonth =    $arrayRow->smonth;
                $syear =    $arrayRow->syear;

               ?>

              <div class="separator-dashed"></div>
              <div class="d-flex">
                <div class="avatar avatar-online">
                  <span class="avatar-title rounded-circle border border-white bg-info">J</span>
                </div>
                <div class="flex-1 ml-3 pt-1">

                  <h6 class="mb-1">
                    <?php

                    echo $name."<br/>";
                    echo $mobileno."<br/>";
                    echo $emailid."<br/>";

                    ?>


                  </h6>

                </div>

                <div class="flex-1 ml-3 pt-1">

                  <span class="text-muted"><?php



                  ?></span>
                </div>


                <div class="float-right pt-1">
                  <small class="text-muted">
                    <?php
                    $subdatetime = $arrayRow->subdatetime;
                     echo $subdatetime; ?>
                  </small>
                </div>
              </div>
            <?php } ?>






            </div>
            <!--END Challenge LISt-->

          </div>
        </div>


      </div>
    </div>
  </div>
  <?php
   $this->load->view('superadmin/include/footer');
   ?>
</div>
