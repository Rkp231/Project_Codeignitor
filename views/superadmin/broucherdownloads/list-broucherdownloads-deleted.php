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


        <!--DataTables-->
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Fake / Deleted</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="basic-datatables" class="display table table-striped table-hover" >
                  <thead>
                    <tr>
                      <th>SNo</th>
                      <th>Profile Detail</th>
                       <th>Date of download</th>
                      <th>Status</th>
                      <th>Move to</th>
                    </tr>
                  </thead>

                  <tbody>

                    <?php
                     $listdownloadbroucherslist = $this->msuperadmin->listdownloadbroucherslistbystatus(3);
                     $i=1;
                    foreach ($listdownloadbroucherslist as $arrayRow) {
                      $bid =    $arrayRow->bid;
                      $name =    $arrayRow->name;
                      $mobileno =    $arrayRow->mobileno;
                      $emailid =    $arrayRow->emailid;
                      $status =    $arrayRow->status;

                      $sday =    $arrayRow->sday;
                      $smonth =    $arrayRow->smonth;
                      $syear =    $arrayRow->syear;
                      $subdatetime = $arrayRow->subdatetime;

                     ?>
                    <tr>
                      <td><small><?php echo $i; ?></small></td>
                      <td><small><?php echo $name."<br/>".$emailid."<br/>".$mobileno.""; ?></small></td>
                       <td><small><?php echo $subdatetime; ?></small></td>
                      <td><?php if($status==1){ ?>
                          <button class="btn-round btn-warning btn-xs">New</button>
                        <?php } else if($status==2) { ?>
                          <button class="btn-round btn-success btn-xs">Lead</button>
                        <?php } else if($status==3) { ?>
                          <button class="btn-round btn-danger btn-xs">Fake / Deleted</button>
                        <?php } ?>
                      </td>
                      <td>
                        <a href="<?php echo site_url('superadmin/broucherdownloadsts/'.$bid.'/1/listformbroucherdownloadsdeleted') ?>" class="btn btn-warning btn-xs ">New</a>
                        <a href="<?php echo site_url('superadmin/broucherdownloadsts/'.$bid.'/2/listformbroucherdownloadsdeleted') ?>" class="btn btn-danger btn-xs">Lead</a>

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
