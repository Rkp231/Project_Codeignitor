<div id="content">
	
	<div class="form-container">
		
		<div id="tmm-form-wizard" class="container substrate">
			
			
			<?php
				//$ebe_email = $this->session->userdata('ebe_email');
				//$wl_profileid = $this->session->userdata('ebe_profileid');
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
				
	  			//echo $wl_profileid;
				//print_r($wl_profileid);exit;
				
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
						
						<div class="stage tmm-current col-md-3 col-sm-3">
							<div class="stage-header head-icon head-icon-payment"></div>
							<div class="stage-content">
								<h3 class="stage-title">Upload Documents</h3>
								<div class="stage-info">
									Verify your identity
								</div>
							</div>
						</div><!--/ .stage-->
						
						<div class="stage col-md-3 col-sm-3">
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
								<div class="form-title-2 form-icon title-icon-card">
									<b>Upload</b> Documents
								</div>
								<div class="steps">
									Steps 3 - 4
								</div>
							</div><!--/ .form-header-->
							
						</div>
						
					</div><!--/ .row-->
					
					<fieldset class="border p-2 upload-doc-table-div">
						<legend  class="w-auto">Upload Documents</legend>
						<p>&nbsp;</p>
						<p class="attacmesg">Note : Please select file as gif | jpg | png | jpeg | pdf</p>
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
						
						
						<table class="table upload-doc-table">
							
							<?php if (!file_exists($birthcertificate_loc))
								{ 
								?>
								
								<form class="form-detail" action="<?php echo site_url('welcome/applicationformattachment'); ?>" method="post" id="form_1_step_3" novalidate="novalidate" enctype="multipart/form-data" >
									<tr><td></td>
										<td>Birth Certificate</td>
										<td>
											<p id="birth_error"></p>
											
											<input type="file" id="bc_files" name="bc_files"  placeholder="Attachment" class="validate[required]" required />
											<input type="hidden" name="appid" value="<?php echo $applicationid; ?>" />
											<input type="submit" id="birth_submit"  name="submit" value="Upload" class="btn btn-primary" />
										</td>
									</tr>
								</form>
								
								<?php 
								} 
								else 
								{ 
								?>
								<tr><td></td>
									<td>Birth Certificate</td><td>
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
										<a href="<?php echo site_url('welcome/deleteattachment/birthcertificate/'.$applicationid.''); ?>"><img src="<?php echo base_url(); ?>assets/img/deleteicon.png" class="delicon" /></a>
									</td>
								</tr>
								<?php
									
								} 
								
								if (!file_exists($tenstd_loc))
								
								{ 
								?>
								
								<form class="form-detail" action="<?php echo site_url('welcome/applicationformattachment_tenfiles'); ?>" method="post" id="form_2_step_3" novalidate="novalidate" enctype="multipart/form-data">
									<tr><td></td>
										<td>10th Std MarkSheet</td>
										<td>
											<p id="tenth_error"></p>
											
											
											<input type="file" id="ten_files" name="ten_files" placeholder="Attachment" class="validate[required]" required />
											<input type="hidden" name="appid" value="<?php echo $applicationid; ?>" />
											<input type="submit"  id="tenth_submit" name="submit" value="Upload" class="btn btn-primary" />
										</td>
									</tr>
								</form>
								
								<?php 
									
								} 
								
								else 
								{ 
								?>
								<tr><td></td>
									<td>10th Std MarkSheet</td><td>
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
										<a href="<?php echo site_url('welcome/deleteattachment/tenstd/'.$applicationid.''); ?>"><img src="<?php echo base_url(); ?>assets/img/deleteicon.png" class="delicon" /></a>
									</td>
								</tr>
								<?php 
									
								} 
								if (!file_exists($twlstd_loc))
								
								{ 
								?>
								
								<form class="form-detail" action="<?php echo site_url('welcome/applicationformattachment_twelfiles'); ?>" method="post" id="form_3_step_3" novalidate="novalidate" enctype="multipart/form-data">
									<tr><td></td>
										<td>12th Std MarkSheet</td>
										<td>
											<p id="twelth_error"></p>
											
											
											<input type="file" id="twel_files" name="twel_files" placeholder="Attachment" class="validate[required]" required />
											<input type="hidden" name="appid" value="<?php echo $applicationid; ?>" />
											<input type="submit" id="twelve_submit"  name="submit" value="Upload" class="btn btn-primary" />
										</td>
									</tr>
								</form>
								
								<?php 
								} 
								
								else 
								{ 
								?>
								<tr><td></td>
									<td>12th Std MarkSheet</td><td>
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
										<a href="<?php echo site_url('welcome/deleteattachment/twelstd/'.$applicationid.''); ?>"><img src="<?php echo base_url(); ?>assets/img/deleteicon.png" class="delicon" /></a>
									</td>
								</tr>
								<?php 
								} 
								if (!file_exists($aadhrname_loc))
								{ 
								?>
								
								<form class="form-detail" action="<?php echo site_url('welcome/applicationformattachment_aadher'); ?>" method="post" id="form_4_step_3" novalidate="novalidate" enctype="multipart/form-data">
									<tr><td></td>
										<td>Aadhar Card</td>
										<td>
											<p id="aadhar_error"></p>
											
											
											<input type="file" id="addhr_files" name="addhr_files" placeholder="Attachment" class="validate[required]" required/>
											<input type="hidden" name="appid" value="<?php echo $applicationid; ?>" />
											<input type="submit" id="aadhar_submit"  name="submit" value="Upload" class="btn btn-primary" />
										</td>
									</tr>
								</form>
								
								<?php 
								} 
								else 
								{ 
								?>
								<tr><td></td>
									<td>Aadhar Card</td><td>
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
										<a href="<?php echo site_url('welcome/deleteattachment/aadher/'.$applicationid.''); ?>"><img src="<?php echo base_url(); ?>assets/img/deleteicon.png" class="delicon" /></a>
									</td>
								</tr>
								<?php 
								} 
							?>
							
							
							
						</table>
						
						
					</fieldset>
					
					<p>&nbsp;</p>
					<p>&nbsp;</p>
					
					
					
					<div class="prev">
						<a class="register" href="<?php echo site_url('welcome/applynow/step2'); ?>">
						<button class="button button-control" type="button" ><span>Prev Step <b>Application Form</b></span></button></a>
						<div class="button-divider"></div>
					</div>
					
					<div class="next">
						<a class="register" href="<?php echo site_url('welcome/applynow/step4'); ?>">
							<button class="button button-control" type="button"><span>Next Step <b>Overview</b></span></button>
						</a>
						<div class="button-divider"></div>
					</div>
					
					
					
					
				</div>
				
		</div><!--/ .container-->
		
	</div><!--/ .form-container-->
	
</div>
<script>
	
	/*
	$(document).ready(function()
	{
		//alert('hello');
		
		$('#birth_error').html("");
		$('#tenth_error').html("");
		
		$('#twelth_error').html("");
		$('#aadhar_error').html("");
		
		$("#birth_submit").click(function(e)
		//function birth_validation(e)
		{
			e.preventDefault();
			
			var birth=$('#bc_files').val();
			//alert(birth);
			var fileExtension = ["jpg", "jpeg", "gif", "png","pdf"];
			
			if(birth=='')
			{
				$('#birth_error').html("Choose File.");
			}
			else  if ($('#bc_files')[0].files[0].size > 20971520) 
			{
				$('#birth_error').html("File size must be less than 20MB.");
				//alert("First Name must be in character");
			}
			
			else if ($.inArray($('#bc_files').val().split('.').pop().toLowerCase(), fileExtension) == -1) 
			
			{
				$('#birth_error').html("Please select file as gif | jpg | png | jpeg | pdf.");
				
			}
			
			else
			{
		       alert("hello");
				$("#form_1_step_3").submit();
			}
		});	
		
		
		
		$("#tenth_submit").click(function(e)
		{
			e.preventDefault();
			
			var tenth=$('#ten_files').val();
			//alert(birth);
			var fileExtension = ["jpg", "jpeg", "gif", "png","pdf"];
			
			if(tenth=='')
			{
				$('#tenth_error').html("Choose File.");
			}
			else  if ($('#ten_files')[0].files[0].size > 20971520) 
			{
				$('#tenth_error').html("File size must be less than 20MB.");
				//alert("First Name must be in character");
			}
			
			else if ($.inArray($('#ten_files').val().split('.').pop().toLowerCase(), fileExtension) == -1) 
			
			{
				$('#tenth_error').html("Please select file as gif | jpg | png | jpeg | pdf.");
				
			}
			
			else
			{
				$("#form_2_step_3").submit();
			}
		});	
		
		
		$("#twelve_submit").click(function(e)
		{
			e.preventDefault();
			
			var twelth=$('#twel_files').val();
			//alert(birth);
			var fileExtension = ["jpg", "jpeg", "gif", "png","pdf"];
			
			if(twelth=='')
			{
				$('#twelth_error').html("Choose File.");
			}
			else  if ($('#twel_files')[0].files[0].size > 20971520) 
			{
				$('#twelth_error').html("File size must be less than 20MB.");
				//alert("First Name must be in character");
			}
			
			else if ($.inArray($('#twel_files').val().split('.').pop().toLowerCase(), fileExtension) == -1) 
			
			{
				$('#twelth_error').html("Please select file as gif | jpg | png | jpeg | pdf.");
				
			}
			
			else
			{
				$("#form_3_step_3").submit();
			}
		});	
		
		
		$("#aadhar_submit").click(function(e)
		{
			e.preventDefault();
			
			var aadhar=$('#addhr_files').val();
			//alert(birth);
			var fileExtension = ["jpg", "jpeg", "gif", "png","pdf"];
			
			if(aadhar=='')
			{
				$('#aadhar_error').html("Choose File.");
			}
			else  if ($('#addhr_files')[0].files[0].size > 20971520) 
			{
				$('#aadhar_error').html("File size must be less than 20MB.");
				//alert("First Name must be in character");
			}
			
			else if ($.inArray($('#addhr_files').val().split('.').pop().toLowerCase(), fileExtension) == -1) 
			
			{
				$('#aadhar_error').html("Please select file as gif | jpg | png | jpeg | pdf.");
				
			}
			
			else
			{
				$("#form_4_step_3").submit();
			}
		});	
		//});
		
		
	});	
	
	*/
	
</script>