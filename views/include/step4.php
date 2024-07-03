<div id="content">
	
	<div class="form-container">
		
		<div id="tmm-form-wizard" class="container substrate">
			
			<div class="row">
				
				<div class="col-xs-12">
					<h2 class="form-login-heading">Applicants<span>Form Wizard</span></h2>
				</div>
				
			</div><!--/ .row-->
			
			<div class="row stage-container">
				
				<div class="stage tmm-success col-md-3 col-sm-3">
					<div class="stage-header head-icon head-icon-lock"></div>
					<div class="stage-content">
						<h3 class="stage-title">Registration</h3>
						<div class="stage-info">
							Verify your email id
						</div>
					</div>
				</div><!--/ .stage-->
				
				<div class="stage tmm-success col-md-3 col-sm-3">
					<div class="stage-header head-icon head-icon-user"></div>
					<div class="stage-content">
						<h3 class="stage-title">Application Form</h3>
						<div class="stage-info">
							Fill your educational information
						</div>
					</div>
				</div><!--/ .stage-->
				
				<div class="stage tmm-success col-md-3 col-sm-3">
					<div class="stage-header head-icon head-icon-payment"></div>
					<div class="stage-content">
						<h3 class="stage-title">Upload Documents</h3>
						<div class="stage-info">
							Verify your identity
						</div>
					</div>
				</div><!--/ .stage-->
				
				<div class="stage tmm-current col-md-3 col-sm-3">
					<div class="stage-header head-icon head-icon-details"></div>
					<div class="stage-content">
						<h3 class="stage-title">Confirm Your Details</h3>
						<div class="stage-info">
							Overview your application form
						</div>
					</div>
				</div><!--/ .stage-->
				
			</div><!--/ .row-->
			
			<div class="row">
				
				<div class="col-xs-12">
					
					<div class="form-header">
						<div class="form-title form-icon title-icon-payment">
							<b>Overview your</b> application form
						</div>
						<div class="steps steps-mob">
							Steps 4 - 4
						</div>
					</div><!--/ .form-header-->
					
				</div>
				
			</div><!--/ .row-->
			
			
			<?php
				//  $ebe_email = $this->session->userdata('ebe_email');
				//	$wl_profileid = $this->session->userdata('ebe_profileid');
				$ebe_email='';
				$wl_profileid='';
				if (isset($_COOKIE["ebe_email"]))
				{
					$ebe_email = $_COOKIE["ebe_email"];
				}
				if (isset($_COOKIE["ebe_profileid"]))
				{	
					$wl_profileid = $_COOKIE["ebe_profileid"];
				}
				
				if(empty($wl_profileid)) {
					redirect('welcome/applynow/step1');
				}
				
				
				
				$findaccountactive = $this->musers->findaccountactive($wl_profileid);
				if($findaccountactive<1) { ?>
				
				
				
				<div class="col-xs-12">
					<p>&nbsp;</p>
					<center><h2><span class="r1">Verification link sent to your Email Id. Please confirm to continue</span></h2></center>
					<p>&nbsp;</p>
				</div>
				
				<?php
					$divaction = 'blurdiv';
					} else {
					$divaction = 'notblurdiv';
				}  ?>
				
				<div class="<?php echo $divaction; ?>">
					
					
					
					<?php
						$listapplicationformbyprofid = $this->musers->listapplicationformbyprofid($wl_profileid);
						foreach ($listapplicationformbyprofid as $rowArray) {
							$applicationid =    $rowArray->applicationid;
						?>
						
						
						<p>&nbsp;</p>
						
						<table>
							<tr>
								<td class="bcolor">Program :</td><td><?php echo $rowArray->program; ?></td>
								<?php if(!empty($rowArray->add_on_program))
									{
										if($rowArray->add_on_logistic=='Logistic and Port Management')
										{
										?>
										<td width="150">&nbsp;</td>
										
										<td class="bcolor">Addon Program :</td><td><?php echo $rowArray->add_on_logistic; ?></td>
										
										<?php
										}
										else if($rowArray->add_on_aviation=='Aviation and Airlines Management')
										{
										?>
										<td width="150">&nbsp;</td>
										
										<td class="bcolor">Addon Program :</td><td><?php echo $rowArray->add_on_aviation; ?></td>
										
										<?php
										}
										else if($rowArray->add_on_iata=='IATA')
										{
										?>
										<td width="150">&nbsp;</td>
										
										<td class="bcolor">Addon Program :</td><td><?php echo $rowArray->add_on_iata; ?></td>
										
										<?php
										}	
										else if($rowArray->add_on_it=='IT Professional Programme')
										{
										?>
										<td width="150">&nbsp;</td>
										
										<td class="bcolor">Addon Program :</td><td><?php echo $rowArray->add_on_it; ?></td>
										
										<?php
											
										} 
										else if($rowArray->add_on_advance=='Advance Programme')
										{
										?>
										<td width="150">&nbsp;</td>
										
										<td class="bcolor">Addon Program :</td><td><?php echo $rowArray->add_on_advance; ?></td>
										
										<?php
											
										} 
										else if($rowArray->add_on_intern=='International Internship')
										{
										?>
										<td width="150">&nbsp;</td>
										
										<td class="bcolor">Addon Program :</td><td><?php echo $rowArray->add_on_intern; ?></td>
										
										<?php
											
										} 
										
									}
									
								?>
							</tr>
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
								<td><span class="bcolor">BLOOD GROUP :</span> <?php echo $rowArray->bloodgroup; ?>  </td>
								<td width="150">&nbsp;</td>
								<td><span class="bcolor">MOBILE :</span> <?php echo $rowArray->studentmobileno; ?>  </td>
								<td width="150">&nbsp;</td>
								<td><span class="bcolor">STUDENT EMAIL :</span> <?php echo $rowArray->studentemail; ?>  </td>
							</tr>
							
							<tr>
								<td><span class="bcolor">FATHER'S NAME :</span> <?php echo $rowArray->fathersname; ?>  </td>
								<td width="150">&nbsp;</td>
								<td><span class="bcolor">LANDLINE NO / MOBILE NO :</span> <?php echo $rowArray->fathersmobileno; ?>  </td>
								<td width="150">&nbsp;</td>
								<td><span class="bcolor">FATHER'S EMAIL :</span> <?php echo $rowArray->fatheremailid; ?>  </td>
								
								
							</tr>
							
							<tr>
								<td><span class="bcolor">OCCUPATION :</span> <?php echo $rowArray->fathersoccupation; ?>  </td>
								<td width="150">&nbsp;</td>
								<td><span class="bcolor">OCCUPATION :</span> <?php echo $rowArray->fathersoccupation; ?>  </td>
								<td width="150">&nbsp;</td>
								<td><span class="bcolor">FATHER'S ANNUAL INCOME :</span> <?php echo 'Rs'.$rowArray->fathersannualincome; ?>  </td>
								
							</tr>
							
							<tr>
								<td>
								<span class="bcolor">MOTHER'S NAME :</span> <?php echo $rowArray->mothersname; ?>  </td>
								<td width="150">&nbsp;</td>
								<td><span class="bcolor">LANDLINE NO / MOBILE NO :</span> <?php echo $rowArray->mothersmobileno; ?>  </td>
								<td width="150">&nbsp;</td>
								<td><span class="bcolor">MOTHER'S EMAIL :</span> <?php echo $rowArray->motheremailid; ?>  </td>
								
							</tr>
							
							<tr>
								<td><span class="bcolor">OCCUPATION :</span> <?php echo $rowArray->mothersoccupation; ?>  </td>
								<td width="150">&nbsp;</td>
								<td><span class="bcolor">ANNUAL INCOME :</span> <?php echo 'Rs'.$rowArray->mothersannualincome; ?>  </td>
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
							
							<tr>
								<td><span class="bcolor">LOCAL GUARDIAN'S NAME:</span> <?php echo $rowArray->guardiansname; ?>  </td>
								<td width="150">&nbsp;</td>
								<td><span class="bcolor">LOCAL GUARDIAN'S OCCUPATION:</span> <?php echo $rowArray->guardianoccupation	; ?>  </td>
								<td width="150">&nbsp;</td>
								<td><span class="bcolor">LOCAL GUARDIAN'S ADDRESS  :</span> <?php echo $rowArray->guardiansaddress; ?>  </td>
							</tr>
							
							<tr>
								<td><span class="bcolor">SCHOLARSHIP:</span> <?php echo $rowArray->scholarship; ?>  </td>
								<td width="150">&nbsp;</td>
								<td><span class="bcolor">SPECIALLY-ABLED:</span> <?php echo $rowArray->specially_abled; ?>  </td>
								<td width="150">&nbsp;</td>
								<td><span class="bcolor">HOSTEL  :</span> <?php echo $rowArray->hostel; ?>  </td>
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
								<!--td width="150">&nbsp;</td>
								<td><span class="bcolor">Std Graduation</span>    </td-->
								
							</tr>
							
							<tr>
								<td><span class="bcolor">Institutions Last Attended</span></td>
								<td width="30">&nbsp;</td>
								<td><?php echo $rowArray->sinstitutename; ?> </td>
								<td width="150">&nbsp;</td>
								<td><?php echo $rowArray->pinstitutename; ?>  </td>
								<!--td width="150">&nbsp;</td>
								<td><?php echo $rowArray->ginstitutename; ?>  </td-->
								
							</tr>
							
							<tr>
								<td><span class="bcolor">Board / University</span></td>
								<td width="30">&nbsp;</td>
								<td><?php echo $rowArray->sboard; ?> </td>
								<td width="150">&nbsp;</td>
								<td><?php echo $rowArray->pboard; ?>  </td>
								<!--td width="150">&nbsp;</td>
								<td><?php echo $rowArray->gboard; ?>  </td-->
								
							</tr>
							
							<tr>
								<td><span class="bcolor">Regitration Number</span></td>
								<td width="30">&nbsp;</td>
								<td><?php echo $rowArray->sregnum; ?> </td>
								<td width="150">&nbsp;</td>
								<td><?php echo $rowArray->pregnum; ?>  </td>
								<!--td width="150">&nbsp;</td>
								<td><?php echo $rowArray->gregnum; ?>  </td-->
								
							</tr>
							
							
							<tr>
								<td><span class="bcolor">Year of Passing</span></td>
								<td width="30">&nbsp;</td>
								<td><?php echo $rowArray->syearpas; ?> </td>
								<td width="150">&nbsp;</td>
								<td><?php echo $rowArray->pyearpas; ?>  </td>
								<!--td width="150">&nbsp;</td>
								<td><?php echo $rowArray->gyearpas; ?>  </td-->
								
							</tr>
							
							
							<tr>
								<td><span class="bcolor">Marks/Grade Obtained</span></td>
								<td width="30">&nbsp;</td>
								<td><?php echo $rowArray->sclass; ?> </td>
								<td width="150">&nbsp;</td>
								<td><?php echo $rowArray->pclass; ?>  </td>
								<!--td width="150">&nbsp;</td>
								<td><?php echo $rowArray->gclass; ?>  </td-->
								
							</tr>
							
							
							<tr>
								<td><span class="bcolor">Percentage of Marks</span></td>
								<td width="30">&nbsp;</td>
								<td><?php echo $rowArray->smarkpercentage; ?> </td>
								<td width="150">&nbsp;</td>
								<td><?php echo $rowArray->pmarkpercentage; ?>  </td>
								<!--td width="150">&nbsp;</td>
								<td><?php echo $rowArray->gmarkpercentage; ?>  </td-->
								
							</tr>
							
						</table>
						
						
						<p>&nbsp;</p>
						<p>&nbsp;</p>
						<h2>Achievements,Awards And Special Quota :</h2>
						<p>&nbsp;</p>
						
						
						
						<table class="overviewfont">
							
							<tr>
								<td>&nbsp;</td>
								<td width="30">&nbsp;</td>
								<td><span class="bcolor">Name of the event</span> </td>
								<td width="150">&nbsp;</td>
								<td><span class="bcolor">Dist/State/National/International</span>    </td>
								<td width="150">&nbsp;</td>
								<td><span class="bcolor">Year</span>    </td>
								<td width="150">&nbsp;</td>
								<td><span class="bcolor">Achievements</span>    </td>
								<td width="150">&nbsp;</td>
								<td><span class="bcolor">Awards</span>    </td>
								
							</tr>
							
							<tr>
								<td><span class="bcolor">Extra-Curricular</span></td>
								<td width="30">&nbsp;</td>
								<td><?php echo $rowArray->extra_cu_event; ?> </td>
								<td width="150">&nbsp;</td>
								<td><?php echo $rowArray->extra_cu_st_nat_inter; ?>  </td>
								<td width="150">&nbsp;</td>
								<td><?php echo $rowArray->extra_cu_year; ?>  </td>
								<td width="150">&nbsp;</td>
								<td><?php echo $rowArray->extra_cu_achievement; ?>  </td>
								<td width="150">&nbsp;</td>
								<td><?php echo $rowArray->extra_cu_awards; ?>  </td>
								
							</tr>
							
							<tr>
								<td><span class="bcolor">Sports</span></td>
								<td width="30">&nbsp;</td>
								<td><?php echo $rowArray->sports_event; ?> </td>
								<td width="150">&nbsp;</td>
								<td><?php echo $rowArray->sports_st_nat_inter; ?>  </td>
								<td width="150">&nbsp;</td>
								<td><?php echo $rowArray->sports_year; ?>  </td>
								<td width="150">&nbsp;</td>
								<td><?php echo $rowArray->sports_achievment; ?>  </td>
								<td width="150">&nbsp;</td>
								<td><?php echo $rowArray->sports_awards; ?>  </td>
								
							</tr>
							
							<tr>
								<td><span class="bcolor">NCC/NSS</span></td>
								<td width="30">&nbsp;</td>
								<td><?php echo $rowArray->ncc_event; ?> </td>
								<td width="150">&nbsp;</td>
								<td><?php echo $rowArray->ncc_st_nat_inter; ?>  </td>
								<td width="150">&nbsp;</td>
								<td><?php echo $rowArray->ncc_year; ?>  </td>
								<td width="150">&nbsp;</td>
								<td><?php echo $rowArray->ncc_achievement; ?>  </td>
								<td width="150">&nbsp;</td>
								<td><?php echo $rowArray->ncc_awards; ?>  </td>
								
							</tr>
							
							
						</table>
						
						<p>&nbsp;</p>
						<p>&nbsp;</p>
						
						<h2>Uploaded Documents :</h2>
						<p>&nbsp;</p>
						
						<?php
							$listapplicationformbyprofid = $this->musers->listattachformbyprofid($wl_profileid);
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
								
								$birthcertificate_ext = pathinfo($birthcertificate_loc, PATHINFO_EXTENSION);
								$tenstd_ext = pathinfo($tenstd_loc, PATHINFO_EXTENSION);
								$twlstd_ext = pathinfo($twlstd_loc, PATHINFO_EXTENSION);
								$aadhrname_ext = pathinfo($aadhrname_loc, PATHINFO_EXTENSION);
							}
							
						?>
						
						<div class="row">
							
							<div class="col-sm-3">
								<h4>Birth Certificate</h4>
								<?php if (file_exists($birthcertificate_loc)){ ?>
									<a target="_blank" href="<?php echo base_url().$birthcertificate_loc; ?>" >
										<?php if($birthcertificate_ext=='pdf') {  ?>
											<img src="<?php echo base_url(); ?>assets/img/PDF_icon.png" height="10" />
											<?php } else if($birthcertificate_ext=='jpg' || $birthcertificate_ext=='jpeg') { ?>
											<img src="<?php echo base_url(); ?>assets/img/jpg_icon.png" height="10" />
											<?php } else if($birthcertificate_ext=='png') { ?>
											<img src="<?php echo base_url(); ?>assets/img/png_icon.png" height="10" />
											<?php } else if($birthcertificate_ext=='gif') { ?>
											<img src="<?php echo base_url(); ?>assets/img/gif_icon.png" height="10" />
										<?php } ?>
									</a>
								<?php } ?>
							</td>
						</div>
						
						
						<div class="col-sm-3">
							<h4>10th Std MarkSheet</h4>
							<?php if (file_exists($tenstd_loc)){ ?>
								<a target="_blank" href="<?php echo base_url().$tenstd_loc; ?>" >
									<?php if($tenstd_ext=='pdf') {  ?>
										<img src="<?php echo base_url(); ?>assets/img/PDF_icon.png" height="10" />
										<?php } else if($tenstd_ext=='jpg' || $tenstd_ext=='jpeg') { ?>
										<img src="<?php echo base_url(); ?>assets/img/jpg_icon.png" height="10" />
										<?php } else if($tenstd_ext=='png') { ?>
										<img src="<?php echo base_url(); ?>assets/img/png_icon.png" height="10" />
										<?php } else if($tenstd_ext=='gif') { ?>
										<img src="<?php echo base_url(); ?>assets/img/gif_icon.png" height="10" />
									<?php } ?>
								</a>
							<?php } ?>
						</td>
					</div>
					
					
					<div class="col-sm-3">
						<h4>12th Std MarkSheet</h4>
						<?php if (file_exists($twlstd_loc)){ ?>
							<a target="_blank" href="<?php echo base_url().$twlstd_loc; ?>" >
								<?php if($twlstd_ext=='pdf') {  ?>
									<img src="<?php echo base_url(); ?>assets/img/PDF_icon.png" height="10" />
									<?php } else if($twlstd_ext=='jpg' || $twlstd_ext=='jpeg') { ?>
									<img src="<?php echo base_url(); ?>assets/img/jpg_icon.png" height="10" />
									<?php } else if($twlstd_ext=='png') { ?>
									<img src="<?php echo base_url(); ?>assets/img/png_icon.png" height="10" />
									<?php } else if($twlstd_ext=='gif') { ?>
									<img src="<?php echo base_url(); ?>assets/img/gif_icon.png" height="10" />
								<?php } ?>
							</a>
						<?php } ?>
					</td>
				</div>
				
				
				<div class="col-sm-3">
					<h4>Aadhar Card</h4>
					<?php if (file_exists($aadhrname_loc)){ ?>
						<a target="_blank" href="<?php echo base_url().$aadhrname_loc; ?>" >
							<?php if($aadhrname_ext=='pdf') {  ?>
								<img src="<?php echo base_url(); ?>assets/img/PDF_icon.png" height="10" />
								<?php } else if($aadhrname_ext=='jpg' || $aadhrname_ext=='jpeg') { ?>
								<img src="<?php echo base_url(); ?>assets/img/jpg_icon.png" height="10" />
								<?php } else if($aadhrname_ext=='png') { ?>
								<img src="<?php echo base_url(); ?>assets/img/png_icon.png" height="10" />
								<?php } else if($aadhrname_ext=='gif') { ?>
								<img src="<?php echo base_url(); ?>assets/img/gif_icon.png" height="10" />
							<?php } ?>
						</a>
					<?php } ?>
				</td>
		</div>
		
		
	</div>
	
	
	
	
	
	
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	
	
<?php } ?>



<div class="prev">
	<a class="register" href="<?php echo site_url('welcome/applynow/step3'); ?>">
	<button class="button button-control" type="button" ><span>Prev Step <b>Upload Documents</b></span></button></a>
	<div class="button-divider"></div>
</div>

<div class="next">
	<a class="register" href="#" data-toggle="modal" data-target="#finalstep" data-backdrop="static" data-keyboard="false">
		<button class="button button-control" type="button"><span>Final Step <b>Submit to us</b></span></button>
	</a>
	<div class="button-divider"></div>
</div>













</div>

</div><!--/ .container-->

</div><!--/ .form-container-->

</div><!--/ #content-->




<!-- Modal -->
<div class="modal fade margintop90" id="finalstep" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		
		
		<div class="modal-content">
			
			<div class="modal-body">
				<!--Form-->
				<div class="row">
					
					<center>
						<div class="col-sm-12">
							<h2>Thanks!</h2>
							<p>Application submitted successful. Our team will contact you for verification</p>
							
							
							
							<a href="<?php echo site_url('welcome/bankdetails'); ?>" class="btn btn-primary">Proceed to payment</a>
						</div>
					</center>
					
					
				</div>
				<!--End Form-->
			</div>
			
		</div>
		
		
	</div>
</div>
