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
        <h4 class="page-title">Application From </h4>

      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <div class="card-head-row">
                <div class="card-title">Profile Detail : </div>



                <?php

                 $listapplicationformlist = $this->msuperadmin->listapplicationformdetail($uri4);
                foreach ($listapplicationformlist as $rowArray) {
                  $applicationid =    $rowArray->applicationid;
                  $emailid =    $rowArray->emailid;
                  $profileid =    $rowArray->profileid;
                  $status =    $rowArray->status;

                  $sday =    $rowArray->sday;
                  $smonth =    $rowArray->smonth;
                  $syear =    $rowArray->syear;

                  $salut = $rowArray->salut;
                  $name = $rowArray->name;
                  $gender = $rowArray->gender;
                  $dob = $rowArray->dob;
                  $catagory = $rowArray->catagory;
                  $studentmobileno = $rowArray->studentmobileno;
                  $studentemail = $rowArray->studentemail;


                 ?>






              </div>
            </div>
            <!--Challenge List-->
            <div class="card-body">







            <p>&nbsp;</p>

            <table>
              <tr><td class="bcolor">Status :</td><td><?php if($status==1){ ?>
                  <button class="btn-round btn-warning btn-xs ">New</button>
                <?php } else if($status==2) { ?>
                  <button class="btn-round btn-success btn-xs ">Selected</button>
                <?php } else if($status==3) { ?>
                  <button class="btn-round btn-danger btn-xs ">Rejected</button>
                <?php } ?></td></tr>
              <tr><td class="bcolor">Program :</td><td><?php echo $rowArray->program; ?></td></tr>
            </table>

            <p>&nbsp;</p>
            <h2>Personal Details :</h2>
            <p>&nbsp;</p>
            <table class="overviewfont">

              <tr>
                <td><span class="bcolor">FULL NAME :</span> <?php echo $rowArray->salut; ?> <?php echo $rowArray->name; ?> </td>
                <td width="150">&nbsp;</td>
                <td><span class="bcolor">GENDER :</span> <?php echo $rowArray->gender; ?>  </td>
                <td width="150">&nbsp;</td>
                <td><span class="bcolor">DATE OF BIRTH :</span> <?php echo $rowArray->dob; ?>  </td>
              </tr>

              <tr>
                <td><span class="bcolor">CATEGORY :</span> <?php echo $rowArray->catagory; ?>  </td>
                <td width="150">&nbsp;</td>
                <td><span class="bcolor">NATIONALITY :</span> <?php echo $rowArray->nationality; ?>  </td>
                <td width="150">&nbsp;</td>
                <td><span class="bcolor">RELIGION :</span> <?php echo $rowArray->religion; ?>  </td>
              </tr>

              <tr>
                <td><span class="bcolor">MOBILE :</span> <?php echo $rowArray->studentmobileno; ?>  </td>
                <td width="150">&nbsp;</td>
                <td><span class="bcolor">STUDENT EMAIL :</span> <?php echo $rowArray->studentemail; ?>  </td>
                <td width="150">&nbsp;</td>
                <td><span class="bcolor">   </td>
              </tr>

              <tr>
                <td><span class="bcolor">FATHER'S NAME :</span> <?php echo $rowArray->fathersname; ?>  </td>
                <td width="150">&nbsp;</td>
                <td><span class="bcolor">LANDLINE NO / MOBILE NO :</span> <?php echo $rowArray->fathersmobileno; ?>  </td>
                <td width="150">&nbsp;</td>
                <td><span class="bcolor">OCCUPATION :</span> <?php echo $rowArray->fathersoccupation; ?>  </td>
              </tr>

              <tr>
                <td><span class="bcolor">ANNUAL INCOME :</span> <?php echo $rowArray->fathersannualincome; ?>  </td>
                <td width="150">&nbsp;</td>
                <td><span class="bcolor">MOTHER'S NAME :</span> <?php echo $rowArray->mothersname; ?>  </td>
                <td width="150">&nbsp;</td>
                <td><span class="bcolor">LANDLINE NO / MOBILE NO :</span> <?php echo $rowArray->mothersmobileno; ?>  </td>
              </tr>


              <tr>
                <td><span class="bcolor">OCCUPATION :</span> <?php echo $rowArray->mothersoccupation; ?>  </td>
                <td width="150">&nbsp;</td>
                <td><span class="bcolor">ANNUAL INCOME :</span> <?php echo $rowArray->mothersannualincome; ?>  </td>
                <td width="150">&nbsp;</td>
                <td><span class="bcolor">PRESENT ADDRESS  :</span> <?php echo $rowArray->presentaddress; ?>  </td>
              </tr>


              <tr>
                <td><span class="bcolor">DISTRICT :</span> <?php echo $rowArray->predistrict; ?>  </td>
                <td width="150">&nbsp;</td>
                <td><span class="bcolor">ZIPCODE :</span> <?php echo $rowArray->prezipcode; ?>  </td>
                <td width="150">&nbsp;</td>
                <td><span class="bcolor">STATE  :</span> <?php echo $rowArray->prestate; ?>  </td>
              </tr>

              <tr>
                <td><span class="bcolor">COUNTRY :</span> <?php echo $rowArray->precountry; ?>  </td>
                <td width="150">&nbsp;</td>
                <td><span class="bcolor">PERMANENT ADDRESS :</span> <?php echo $rowArray->permenantaddress; ?>  </td>
                <td width="150">&nbsp;</td>
                <td><span class="bcolor">DISTRICT  :</span> <?php echo $rowArray->perdistrict; ?>  </td>
              </tr>

              <tr>
                <td><span class="bcolor">ZIPCODE :</span> <?php echo $rowArray->perzipcode; ?>  </td>
                <td width="150">&nbsp;</td>
                <td><span class="bcolor">STATE :</span> <?php echo $rowArray->perstate; ?>  </td>
                <td width="150">&nbsp;</td>
                <td><span class="bcolor">COUNTRY  :</span> <?php echo $rowArray->percountry; ?>  </td>
              </tr>


             </table>



             <p>&nbsp;</p>
             <p>&nbsp;</p>
            <h2>Academic Details :</h2>
            <p>&nbsp;</p>


            <table class="overviewfont">

              <tr>
                <td>&nbsp;</td>
                <td width="30">&nbsp;</td>
                <td><span class="bcolor">SSLC / 10th Std</span> </td>
                <td width="150">&nbsp;</td>
                <td><span class="bcolor">11 PUC / 12th Std</span>    </td>

              </tr>

              <tr>
                <td><span class="bcolor">Institutions Last Attended</span></td>
                <td width="30">&nbsp;</td>
                <td><?php echo $rowArray->sinstitutename; ?> </td>
                <td width="150">&nbsp;</td>
                <td><?php echo $rowArray->pinstitutename; ?>  </td>
              </tr>

              <tr>
                <td><span class="bcolor">Board / University</span></td>
                <td width="30">&nbsp;</td>
                <td><?php echo $rowArray->sboard; ?> </td>
                <td width="150">&nbsp;</td>
                <td><?php echo $rowArray->pboard; ?>  </td>
              </tr>

              <tr>
                <td><span class="bcolor">Regitration Number</span></td>
                <td width="30">&nbsp;</td>
                <td><?php echo $rowArray->sregnum; ?> </td>
                <td width="150">&nbsp;</td>
                <td><?php echo $rowArray->pregnum; ?>  </td>
              </tr>


              <tr>
                <td><span class="bcolor">Year of Passing</span></td>
                <td width="30">&nbsp;</td>
                <td><?php echo $rowArray->syearpas; ?> </td>
                <td width="150">&nbsp;</td>
                <td><?php echo $rowArray->pyearpas; ?>  </td>
              </tr>


              <tr>
                <td><span class="bcolor">Class Obtained</span></td>
                <td width="30">&nbsp;</td>
                <td><?php echo $rowArray->sclass; ?> </td>
                <td width="150">&nbsp;</td>
                <td><?php echo $rowArray->pclass; ?>  </td>
              </tr>


              <tr>
                <td><span class="bcolor">Percentage of Marks</span></td>
                <td width="30">&nbsp;</td>
                <td><?php echo $rowArray->smarkpercentage; ?> </td>
                <td width="150">&nbsp;</td>
                <td><?php echo $rowArray->pmarkpercentage; ?>  </td>
              </tr>



            </table>

            <p>&nbsp;</p>
            <p>&nbsp;</p>

            <h2>Uploaded Documents :</h2>
            <p>&nbsp;</p>

            <?php
            $listapplicationformbyprofid = $this->musers->listattachformbyprofid($profileid);
            foreach ($listapplicationformbyprofid as $rowArray) {
              $applicationid =    $rowArray->applicationid;
              $birthcertificate =    $rowArray->birthcertificate;
              if(empty($birthcertificate)) { $birthcertificate = '0'; }

              $tenstd =    $rowArray->tenstd;
              if(empty($tenstd)) { $tenstd = '0'; }

              $twlstd =    $rowArray->twlstd;
              if(empty($twlstd)) { $twlstd = '0'; }

              $aadhrname =    $rowArray->aadhrname;
              if(empty($aadhrname)) { $aadhrname = '0'; }

              $birthcertificate_loc = 'assets/pdf/birthcertificates/' . $birthcertificate;
              $tenstd_loc = 'assets/pdf/tenstd/' . $tenstd;
              $twlstd_loc = 'assets/pdf/twelstd/' . $twlstd;
              $aadhrname_loc = 'assets/pdf/aadher/' . $aadhrname;
            }

            ?>

            <div class="row">

            <div class="col-sm-3">
            <h4>Birth Certificate</h4>
            <?php if (file_exists($birthcertificate_loc)){ ?>
              <a target="_blank" href="<?php echo base_url().$birthcertificate_loc; ?>" >
                  <img src="<?php echo base_url(); ?>assets/img/PDF_icon.png" height="40" />
              </a>
            <?php } ?>
            </td>
            </div>


            <div class="col-sm-3">
            <h4>10th Std MarkSheet</h4>
            <?php if (file_exists($tenstd_loc)){ ?>
            <a target="_blank" href="<?php echo base_url().$tenstd_loc; ?>" >
                <img src="<?php echo base_url(); ?>assets/img/PDF_icon.png" height="40" />
            </a>
          <?php } ?>
            </td>
            </div>


            <div class="col-sm-3">
            <h4>12th Std MarkSheet</h4>
            <?php if (file_exists($twlstd_loc)){ ?>
            <a target="_blank" href="<?php echo base_url().$twlstd_loc; ?>" >
                <img src="<?php echo base_url(); ?>assets/img/PDF_icon.png" height="40" />
            </a>
          <?php } ?>
            </td>
            </div>


            <div class="col-sm-3">
            <h4>Aadhar Card</h4>
            <?php if (file_exists($aadhrname_loc)){ ?>
            <a target="_blank" href="<?php echo base_url().$aadhrname_loc; ?>" >
                <img src="<?php echo base_url(); ?>assets/img/PDF_icon.png" height="40" />
            </a>
          <?php } ?>
            </td>
            </div>


          </div>

						<p>&nbsp;</p>
						<p>&nbsp;</p>

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
