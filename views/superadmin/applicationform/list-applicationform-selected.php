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



        <!--DataTables-->
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Selected</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="basic-datatables" class="display table table-striped table-hover" >
                  <thead>
                    <tr>
                      <th>SNo</th>
                      <th>Profile Detail</th>
                      <th>Program</th>
                      <th>Date of download</th>
                      <th>Status</th>
                      <th>Move to</th>
                    </tr>
                  </thead>

                  <tbody>


                     <?php
                      $listapplicationformlist = $this->msuperadmin->listapplicationformlistbystatus(2);
                       $i=1;
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
                       $subdatetime = $arrayRow->subdatetime;


                      ?>
                    <tr>
                      <td><small><?php echo $i; ?></small></td>
                      <td>
                        <a target="_blank" href="<?php echo site_url('superadmin/applicationform/detailform/'.$applicationid.''); ?>">
                        <small>
                        <?php

                        echo $salut." ".$name."<br/>";
                        echo $studentmobileno."<br/>";
                        echo $studentemail."<br/>";

                        ?>
                      </small>
                      </a></td>
                      <td><small>
                        <?php
                        $program = $arrayRow->program;
                        echo $program;


                        ?>
                      </small></td>
                      <td><small><?php echo $subdatetime; ?></small></td>
                      <td><?php if($status==1){ ?>
                          <button class="btn-round btn-warning btn-xs">New</button>
                        <?php } else if($status==2) { ?>
                          <button class="btn-round btn-success btn-xs">Selected</button>
                        <?php } else if($status==3) { ?>
                          <button class="btn-round btn-danger btn-xs">Rejected</button>
                        <?php } ?>
                      </td>
                      <td>
                        <a href="<?php echo site_url('superadmin/applicationformsts/'.$applicationid.'/1/listformselected') ?>" class="btn btn-warning btn-xs ">New</a>
                        <a href="<?php echo site_url('superadmin/applicationformsts/'.$applicationid.'/3/listformselected') ?>" class="btn btn-danger btn-xs">Reject</a>

                      </td>
                    </tr>
                      <?php $i++; } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>


        <!--END dataTables-->









      </div>
    </div>
  </div>
  <?php
   $this->load->view('superadmin/include/footer');
   ?>
</div>
