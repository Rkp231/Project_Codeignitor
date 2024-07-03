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
        <h4 class="page-title">Application From</h4>

      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <div class="card-head-row">
                <div class="card-title">Form List</div>
                <div class="card-tools">
                  <ul class="nav nav-pills nav-secondary nav-pills-no-bd nav-sm" id="pills-tab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="pills-today"  href="" role="tab" aria-selected="true">Active</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="pills-week" href="" role="tab" aria-selected="false">Inactive</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="pills-month"  href="" role="tab" aria-selected="false">Closed</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!--Challenge List-->
            <div class="card-body">

              <?php
               $listapplicationformlist = $this->msuperadmin->listapplicationformlist();
              foreach ($listapplicationformlist as $arrayRow) {
                $applicationid =    $arrayRow->applicationid;
                $emailid =    $arrayRow->emailid;
                $profileid =    $arrayRow->profileid;
                $status =    $arrayRow->status;

                $sday =    $arrayRow->sday;
                $smonth =    $arrayRow->smonth;
                $syear =    $arrayRow->syear;

                $salut = $arrayRow->salut;
                $name = $arrayRow->name;
                $gender = $arrayRow->gender;
                $dob = $arrayRow->dob;
                $catagory = $arrayRow->catagory;
                $studentmobileno = $arrayRow->studentmobileno;
                $studentemail = $arrayRow->studentemail;


               ?>

              <div class="separator-dashed"></div>
              <div class="d-flex">
                <div class="avatar avatar-online">
                  <span class="avatar-title rounded-circle border border-white bg-info">J</span>
                </div>
                <div class="flex-1 ml-3 pt-1">
                  <a target="_blank" href="<?php echo site_url('superadmin/applicationform/detailform/'.$applicationid.''); ?>">
                  <h6 class="text-uppercase fw-bold mb-1">
                    <?php

                    echo $salut." ".$name."<br/>";
                    echo $studentmobileno."<br/>";
                    echo $studentemail."<br/>";

                    ?>


                  </h6>
                </a>

                </div>

                <div class="flex-1 ml-3 pt-1">

                  <span class="text-muted"><?php
                  $program = $arrayRow->program;
                  echo "Program :".$program;


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
