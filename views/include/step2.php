
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
				
				<div class="stage tmm-current col-md-3 col-sm-3">
					<div class="stage-header head-icon head-icon-user"></div>
					<div class="stage-content">
						<h3 class="stage-title">Application Form</h3>
						<div class="stage-info">
							Fill your educational information
						</div>
					</div>
				</div><!--/ .stage-->
				
				<div class="stage col-md-3 col-sm-3">
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
			
			
			<?php 
				
				//print_r($_SESSION); EXIT;
				//$this->load->library('session');
				
				//$ebe_email = $this->session->userdata('ebe_email');
				//$wl_profileid = $this->session->userdata('ebe_profileid');
				$ebe_email = $_COOKIE["ebe_email"];
				$wl_profileid = $_COOKIE["ebe_profileid"];
				
				//echo 'Test'; 
				//print_r($this->session->userdata('ebe_email')); exit;
				//print_r($wl_profileid); exit;
				if(empty($wl_profileid)) 
				{
					redirect('welcome/applynow/step1');
				}
				
				
				
				$findaccountactive = $this->musers->findaccountactive($wl_profileid);
				if($findaccountactive<1) 
				{ 
					
				?>
				
				
				
				<div class="col-xs-12">
					<p>&nbsp;</p>
					<center><h2><span class="r1">Verification link sent to your Email Id. Please confirm to continue</span></h2></center>
					<p>&nbsp;</p>
				</div>
				
				<?php
					$divaction = 'blurdiv';
				} 
				
				else 
				{
					$divaction = 'notblurdiv';
				}  ?>
				
				
				<div class="<?php echo $divaction; ?>">
					
					<!------------------------->
					<div class="row">
 						<div class="col-xs-12">
 							<div class="form-header">
								
								<div class="form-title form-icon title-icon-user">
									<b>Application</b> Form
								</div>
								<div class="steps">
									Steps 2 - 4
								</div>
								
							</div><!--/ .form-header-->
							
						</div>
						
					</div><!--/ .row-->
					
					
					<form class="form-detail"   action="<?php echo site_url('welcome/applicationform'); ?>" method="post" id="formstep_2" novalidate="novalidate">
						
						
						<?php
							$listapplicationformbyprofid = $this->musers->listapplicationformbyprofid($wl_profileid);
							foreach ($listapplicationformbyprofid as $rowArray) 
							{
								$applicationid =    $rowArray->applicationid;
							?>
							
							<!--FORM 2----->
							<fieldset class="border p-2">
								<legend  class="w-auto">Select Program</legend>
								<p>&nbsp;</p>
								<p id="programerror"></p>
								<legend  class="w-auto">Ebenezer Degree College</legend>
								
								<?php
									$program = $rowArray->program;
								?>
								
								<div class="form-group  col-sm-12 ">
									<div class="form-row col-sm-3 margintop20">
										<label class="form-check-label">
											<input type="radio" name="program" value="BBA" 
											<?php
												
												if($program=='BBA') { echo 'checked';  }
											?> class="validate[required]"> &nbsp;<span class="text">BBA</span></label>
									</div>
									
									<div class="form-row col-sm-3 margintop20">
										<label class="form-check-label">
											<input type="radio" name="program" value="BBA Aviation" 
											<?php
												
												if($program=='BBA Aviation') { echo 'checked';  }
											?> class="validate[required]"> &nbsp;<span class="text">BBA Aviation</span></label>
									</div>
									
									
									
									<div class="form-row col-sm-3 margintop20">
										<label class="form-check-label">
											<input type="radio" name="program" value="B.Com" 
											<?php
												
												if($program=='B.Com') { echo 'checked';  }
											?> class="validate[required]"> &nbsp;<span class="text">B.Com</span></label>
									</div>
									
									<div class="form-row col-sm-3 margintop20">
										<label class="form-check-label">
											<input type="radio" name="program" value="B.Com Logistic" 
											<?php
												
												if($program=='B.Com Logistic') { echo 'checked';  }
											?> class="validate[required]"> &nbsp;<span class="text">B.Com Logistic</span></label>
									</div>
									
									
								</div>
								
								<div class="form-group  col-sm-12 ">
									
									<div class="form-row col-sm-3 margintop20">
										<label class="form-check-label">
											<input type="radio" name="program" value="BCA" 
											<?php
												
												if($program=='BCA') { echo 'checked';  }
											?> class="validate[required]"> &nbsp;<span class="text">BCA</span></label>
									</div>
									
									
									
									
								</div>
								
								<div class="form-group  col-sm-12 ">
									<div class="form-row col-sm-12 margintop20">
										<label class="form-check-label">
										<input type="checkbox" id="addoncheckbox" name="addoncheckbox" value="1" class="fun_addoncheck"> &nbsp;<span class="text">Addon Programs</span></label>
									</div>
									
									<p id="addon_error"></p>
									
									<div class="blurdiv fun_checkaddon" >
										<div class="form-row col-sm-3 margintop20">
											<label class="form-check-label"><input type="checkbox" name="logistic" value="Logistic and Port Management" class="fun_uncheck"> &nbsp;<span class="text">Logistic and Port Management</span></label>
										</div>
										
										<div class="form-row col-sm-3 margintop20">
											<label class="form-check-label"><input type="checkbox" name="aviation" value="Aviation and Airlines Management" class="fun_uncheck"> &nbsp;<span class="text">Aviation and Airlines Management</span></label>
										</div>
										
										<div class="form-row col-sm-3 margintop20">
											<label class="form-check-label"><input type="checkbox" name="iata" value="IATA" class="fun_uncheck"> &nbsp;<span class="text">IATA</span></label>
										</div>
										
										<div class="form-row col-sm-3 margintop20">
											<label class="form-check-label"><input type="checkbox" name="it_pro" value="IT Professional Programme" class="fun_uncheck"> &nbsp;<span class="text">IT Professional Programme</span></label>
										</div>
										
										<div class="form-row col-sm-12 margintop20">
											
											<label class="form-check-label"><input type="checkbox" name="advance_pro" value="Advance Programme" class="fun_uncheck"> &nbsp;<span class="text">Advance Programme</span></label>
											
										</div>
										
										
									</div>
									
									
									
								</div>
								
								<p>&nbsp;</p>
								
								<script type="text/javascript"  src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
								<?php /* http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js */ ?>
								
								<script type="text/javascript">
									
									$(document).ready(function(){
										
										
										$('.fun_addoncheck').click(function(){
											if($(this).prop("checked") == true){
												//console.log("Checkbox is checked.");
												//alert('checked');
												$( ".fun_checkaddon" ).removeClass( "blurdiv" );
												$(".fun_otherclickaddon").prop('checked', false);
												
											}
											else if($(this).prop("checked") == false){
												//console.log("Checkbox is unchecked.");
												$( ".fun_checkaddon" ).addClass( "blurdiv" );
												$(".fun_otherclickaddon").prop('checked', false);
											}
										});
										
										$('.fun_otherclickaddon').click(function(){
											$( ".fun_checkaddon" ).addClass( "blurdiv" );
											$(".fun_addoncheck").prop('checked', false);
											$(".fun_uncheck").prop('checked', false);
										});
										
									});
								</script>
								
								
								<legend  class="w-auto">Ebenezer School and College of Nursing</legend>
								
								<div class="form-group  col-sm-12 ">
									<div class="form-row col-sm-3 margintop20">
										<label class="form-check-label">
											<input type="radio" name="program" value="GNM" <?php
												
												if($program=='GNM') { echo 'checked';  }
											?> class="fun_otherclickaddon validate[required]"> &nbsp;<span class="text">GNM</span></label>
									</div>
									
									<div class="form-row col-sm-3 margintop20">
										<label class="form-check-label">
											<input type="radio" name="program" value="PBBSC" <?php
												
												if($program=='PBBSC') { echo 'checked';  }
											?> class="fun_otherclickaddon validate[required]"> &nbsp;<span class="text">PBBSC</span></label>
									</div>
									
									<div class="form-row col-sm-3 margintop20">
										<label class="form-check-label">
											<input type="radio" name="program" value="B.Sc Nursing" <?php
												
												if($program=='B.Sc Nursing') { echo 'checked';  }
											?> class="fun_otherclickaddon validate[required]"> &nbsp;<span class="text">B.Sc Nursing</span></label>
									</div>
									
									<div class="form-row col-sm-3 margintop20">
										<label class="form-check-label">
											<input type="radio" name="program" value="M.Sc Nursing" <?php
												
												if($program=='M.Sc Nursing') { echo 'checked';  }
											?> class="fun_otherclickaddon validate[required]"> &nbsp;<span class="text">M.Sc Nursing</span></label>
									</div>
								</div>
								<div class="form-group  col-sm-12 ">
									<div class="form-row col-sm-12 margintop20">
										<label class="form-check-label">
										<input type="checkbox" id="addoncheckbox" name="addoncheckbox" value="1" class="fun_addoncheck_"> &nbsp;<span class="text">Addon Programs</span></label>
									</div>
									
									<p id="addon_error"></p>
									
									<div class="blurdiv fun_checkaddon_" >
										<div class="form-row col-sm-3 margintop20">
											<label class="form-check-label"><input type="checkbox" name="inter_intern" value="International Internship" class="fun_uncheck_"> &nbsp;<span class="text">International Internship</span></label>
										</div>
										
									</div>
								</div>
								
								<script type="text/javascript">
									
									$(document).ready(function(){
										
										
										$('.fun_addoncheck_').click(function(){
											if($(this).prop("checked") == true){
												//console.log("Checkbox is checked.");
												//alert('checked');
												$( ".fun_checkaddon_" ).removeClass( "blurdiv" );
												//$(".fun_otherclickaddon").prop('checked', false);
												
											}
											else if($(this).prop("checked") == false){
												//console.log("Checkbox is unchecked.");
												$( ".fun_checkaddon_" ).addClass( "blurdiv" );
												//$(".fun_otherclickaddon").prop('checked', false);
											}
										});
										
										$('.fun_otherclickaddon').click(function(){
											$( ".fun_checkaddon_" ).addClass( "blurdiv" );
											$(".fun_addoncheck_").prop('checked', false);
											$(".fun_uncheck_").prop('checked', false);
										});
										
									});
								</script>
								
								
								
								
								<p>&nbsp;</p>
								
								<legend  class="w-auto">Ebenezer Paramedical College</legend>
								
								<div class="form-group  col-sm-12 ">
									<div class="form-row col-sm-3 margintop20">
										<label class="form-check-label">
											<input type="radio" name="program" value="DMLT" <?php
												
												if($program=='DMLT') { echo 'checked';  }
											?> class="fun_otherclickaddon validate[required]"> &nbsp;<span class="text">Diploma in Medical Laboratory Technology (DMLT)</span></label>
									</div>
									
									<div class="form-row col-sm-3 margintop20">
										<label class="form-check-label">
											<input type="radio" name="program" value="DMRT" <?php
												
												if($program=='DMRT') { echo 'checked';  }
											?> class="fun_otherclickaddon validate[required]"> &nbsp;<span class="text">Diploma in Medical Record Technology (DMRT)</span></label>
									</div>
									
									<div class="form-row col-sm-3 margintop20">
										<label class="form-check-label">
											<input type="radio" name="program" value="DMXT" <?php
												
												if($program=='DMXT') { echo 'checked';  }
											?> class="fun_otherclickaddon validate[required]"> &nbsp;<span class="text">Diploma in X-Ray Technology (DMXT)</span></label>
									</div>
									
									<div class="form-row col-sm-3 margintop20">
										<label class="form-check-label">
											<input type="radio" name="program" value="DHI" <?php
												
												if($program=='DHI') { echo 'checked';  }
											?> class="fun_otherclickaddon validate[required]"> &nbsp;<span class="text">Diploma in Health Inspector (DHI)</span></label>
									</div>
									
									<div class="form-row col-sm-3 margintop20">
										<label class="form-check-label">
											<input type="radio" name="program" value="DOT" <?php
												
												if($program=='DOT') { echo 'checked';  }
											?> class="fun_otherclickaddon validate[required]"> &nbsp;<span class="text">Diploma in Operation Theatre Technology (DOT)</span></label>
									</div>
								</div><p>&nbsp;</p>
								
								<legend  class="w-auto">Ebenezer College of Pharmacy</legend>
								
								<div class="form-group  col-sm-12 ">
									
									<div class="form-row col-sm-3 margintop20">
										<label class="form-check-label">
											<input type="radio" name="program" value="B.Pharmacy" <?php
												
												if($program=='B.Pharmacy') { echo 'checked';  }
											?> class="fun_otherclickaddon validate[required]"> &nbsp;<span class="text">B.Pharmacy</span></label>
									</div>
									
									<div class="form-row col-sm-3 margintop20">
										<label class="form-check-label">
											<input type="radio" name="program" value="D.Pharmacy" <?php
												
												if($program=='D.Pharmacy') { echo 'checked';  }
											?> class="fun_otherclickaddon validate[required]"> &nbsp;<span class="text">D.Pharmacy</span></label>
									</div>
									
									<div class="form-row col-sm-3 margintop20">
										<label class="form-check-label">
											<input type="radio" name="program" value="M.Pharmacy" <?php
												
												if($program=='M.Pharmacy') { echo 'checked';  }
											?> class="fun_otherclickaddon validate[required]"> &nbsp;<span class="text">M.Pharmacy</span></label>
									</div>
								</div>
								
								
								<p>&nbsp;</p>
								
							</fieldset>
							
							
							<!--END FORM 2 -->
							
							<fieldset class="border p-2">
								<legend  class="w-auto">Personal Details</legend>
								<p>&nbsp;</p>
								<div class="row col-sm-12 form2-personal-details">
									
									
									
									<div class="col-sm-2">
										<div class="wrap-input100 validate-input bg1">
											<span class="label-input100">SALUTATION*</span>
											<?php $salut=$rowArray->salut; ?>
											<select required name="salut" class="input100 dropdown-select validate[required]">
												<option value="Mr" <?php if($salut=='Mr') { echo 'selected';  } ?>>Mr</option>
												<option value="Ms" <?php if($salut=='Ms') { echo 'selected';  } ?>>Ms</option>
											</select>
										</div>
									</div>
									
									
									<div class="col-sm-4">
										<div class="wrap-input100 validate-input bg1">
											<span class="label-input100">FULL NAME *</span>
											<input class="input100 validate[required] text-input" type="text" required name="name" id="first-name" placeholder="Enter Your Full Name" value="<?php echo $rowArray->name; ?>">
										</div>
										<p id="nameerror"></p>
										
									</div>
									
									
									<div class="col-sm-3">
										<div class="wrap-input100 validate-input bg1">
											<span class="label-input100">GENDER *</span>
											<?php $gender=$rowArray->gender; ?>
											<select id="gender" name="gender" required class="input100 validate[required] dropdown-select">
												<option value="" >Select</option>
												<option value="Male" <?php if($gender=='Male') { echo 'selected';  } ?>>Male</option>
												<option value="Female" <?php if($gender=='Female') { echo 'selected';  } ?>>Female</option>
											</select>
										</div>
										<p id="gendererror"></p>
										
									</div>
									
									
									<div class="col-sm-3">
										<div class="wrap-input100 validate-input bg1">
											<span class="label-input100">DATE OF BIRTH *</span>
											<input class="input100 validate[required] text-input" type="date" name="dob" required id="birthday" placeholder="Select Date" value="<?php echo $rowArray->dob; ?>">
										</div>
										<p id="birtherror"></p>
										
									</div>
									
									
									<div class="col-sm-2">
										<div class="wrap-input100 validate-input bg1">
											<span class="label-input100">CATEGORY </span>
											<?php $catagory=$rowArray->catagory; ?>
											<select name="catagory"  required  class="input100 dropdown-select">
												<option value="" >Select</option>
												<option value="SC" <?php if($catagory=='SC') { echo 'selected';  } ?>>SC</option>
												<option value="ST" <?php if($catagory=='ST') { echo 'selected';  } ?>>ST</option>
												<option value="OBC" <?php if($catagory=='OBC') { echo 'selected';  } ?>>OBC</option>
												<option value="GM"<?php	if($catagory=='GM') { echo 'selected';  }	 ?>>GM</option>
												<option value="Others" <?php if($catagory=='Others') { echo 'selected';  } ?>>Others</option>
											</select>
										</div>
									</div>
									
									
									<div class="col-sm-2">
										<div class="wrap-input100 validate-input bg1">
											<span class="label-input100">NATIONALITY *</span>
											<?php $nationality=$rowArray->nationality; ?>
											<select id="nationality" name="nationality" required class="input100 dropdown-select validate[required]">
												<option value="" >Select</option>
												<option value="Indian">Indian</option>
												<option value="NRI">NRI</option>
												<option value="Others">Others</option>
											</select>
										</div>
										<p id="nationalityerror"></p>
										
									</div>
									
									
									<div class="col-sm-2">
										<div class="wrap-input100 validate-input bg1">
											<span class="label-input100">RELIGION </span>
											<input class="input100 " type="text" name="religion" id="religion" placeholder="Enter Your Religion" value="<?php echo $rowArray->religion; ?>">
										</div>
									</div>
									
									<div class="col-sm-3">
										<div class="wrap-input100 validate-input bg1">
											<span class="label-input100">BLOOD GROUP</span>
											<input class="input100 validate[required] text-input" type="text"  name="bloodgroup" id="bloodgroup"  placeholder="Enter Your Blood Group" value="<?php echo $rowArray->bloodgroup; ?>">
										</div>
										<p id="blooderror"></p>
										
									</div>
									
									
									<div class="col-sm-3">
										<div class="wrap-input100  bg1">
											<span class="label-input100">MOBILE *</span>
											<input class="input100  text-input" type="number" required name="studentmobileno" id="studentmobileno" maxlength="10" placeholder="Enter Your Mobile Number" value="<?php echo $rowArray->studentmobileno; ?>">
										</div>
										<p id="mobileerror"></p>
										
									</div>
									
									
									<div class="col-sm-3">
										<div class="wrap-input100 validate-input bg1" >
											<span class="label-input100">STUDENT EMAIL *</span>
											<input class="input100 validate[required,custom[email]] text-input" required type="text" name="studentemail" id="studentemail" placeholder="Enter Your Email" value="<?php echo $rowArray->emailid; ?>">
										</div>
										<p id="emailerror"></p>
										
									</div>
									
									
									<div class="col-sm-3">
										<div class="wrap-input100 validate-input bg1">
											<span class="label-input100">FATHER'S NAME *</span>
											<input class="input100 validate[required] text-input" type="text" required name="fathersname" id="fathersname" placeholder="Enter Your Fathers Name" value="<?php echo $rowArray->fathersname; ?>">
										</div>
										<p id="fathernameerror"></p>
										
									</div>
									
									<div class="col-sm-3">
										<div class="wrap-input100 validate-input bg1" >
											<span class="label-input100">FATHER's EMAIL </span>
											<input class="input100 validate[required,custom[email]] text-input"  type="text" name="fatheremail" id="fatheremail" placeholder="Enter Your Father's Email" value="<?php echo $rowArray->fatheremailid; ?>">
										</div>
										<p id="fatheremailerror"></p>
										
									</div>
									
									<div class="col-sm-3">
										<div class="wrap-input100  bg1">
											<span class="label-input100">LANDLINE NO / MOBILE NO *</span>
											<input class="input100  text-input" required type="number" name="fathersmobileno" id="fathersmobileno" maxlength="10" placeholder="Enter Your Fathers Mobile" value="<?php echo $rowArray->fathersmobileno; ?>">
										</div>
										<p id="landmobileerror"></p>
										
									</div>
									
									<div class="col-sm-3">
										<div class="wrap-input100 validate-input bg1">
											<span class="label-input100">OCCUPATION *</span>
											<input class="input100 validate[required] text-input" type="text" required name="fathersoccupation" id="fathersoccupation" placeholder="Enter Your Fathers Occupation" value="<?php echo $rowArray->fathersoccupation; ?>">
										</div>
										<p id="occupationerror"></p>
										
									</div>
									
									
									<div class="col-sm-3">
										<div class="wrap-input100 validate-input bg1">
											<span class="label-input100">ANNUAL INCOME *</span>
											<input class="input100 validate[required] text-input" type="number" required name="fathersannualincome" id="fathersannualincome" placeholder="Enter Your Fathers Income" value="<?php echo $rowArray->fathersannualincome; ?>">
										</div>
										<p id="incomeerror"></p>
										
									</div>
									
									
									
									<div class="col-sm-3">
										<div class="wrap-input100 validate-input bg1">
											<span class="label-input100">MOTHER'S NAME *</span>
											<input class="input100 validate[required] text-input" required type="text" name="mothersname" id="mothersname" placeholder="Enter Your Mothers Name" value="<?php echo $rowArray->mothersname; ?>">
										</div>
										<p id="mothernameerror"></p>
										
									</div>
									
									<div class="col-sm-3">
										<div class="wrap-input100 validate-input bg1" >
											<span class="label-input100">MOTHER's EMAIL </span>
											<input class="input100 validate[required,custom[email]] text-input"  type="text" name="motherremail" id="motherremail" placeholder="Enter Your Mother's Email" value="<?php echo $rowArray->motheremailid; ?>">
										</div>
										<p id="motheremailerror"></p>
										
									</div>
									
									<div class="col-sm-3">
										<div class="wrap-input100 validate-input bg1">
											<span class="label-input100">LANDLINE NO / MOBILE NO </span>
											<input class="input100 " type="number" name="mothersmobileno" id="mothersmobileno" placeholder="Enter Your Mothers Mobile" value="<?php echo $rowArray->mothersmobileno; ?>">
										</div>
									</div>
									
									<div class="col-sm-3">
										<div class="wrap-input100 validate-input bg1">
											<span class="label-input100">OCCUPATION </span>
											<input class="input100 text-input" type="text" name="mothersoccupation" id="mothersoccupation" placeholder="Enter Your Mothers Occupation" value="<?php echo $rowArray->mothersoccupation; ?>">
										</div>
									</div>
									
									
									<div class="col-sm-3">
										<div class="wrap-input100 validate-input bg1">
											<span class="label-input100">ANNUAL INCOME </span>
											<input class="input100 text-input" type="number" name="mothersannualincome" id="mothersannualincome" placeholder="Enter Your Mothers Income" value="<?php echo $rowArray->mothersannualincome; ?>">
										</div>
									</div>
									
									<div class="col-sm-3">
										<div class="wrap-input100 validate-input bg1">
											<span class="label-input100">LOCAL GUARDIAN'S NAME</span>
											<input class="input100 validate[required] text-input" required type="text" name="guardiansname" id="guardiansname" placeholder="Enter Your Local Guardian Name" value="<?php echo $rowArray->guardiansname; ?>">
										</div>
										<p id="guardiansnameerror"></p>
										
									</div>
									
									<div class="col-sm-3">
										<div class="wrap-input100 validate-input bg1">
											<span class="label-input100">LOCAL GUARDIAN OCCUPATION </span>
											<input class="input100 text-input" type="text" name="guardiansoccupation" id="guardiansoccupation" placeholder="Enter Your Local Guardian Occupation" value="<?php echo $rowArray->guardianoccupation; ?>">
										</div>
									</div>
									
									<div class="col-sm-12">
										<div class="wrap-input100 validate-input bg1">
											<span class="label-input100">LOCAL GUARDIAN ADDRESS </span>
											<textarea class="input100 validate[required] text-input" type="text"  name="guardiansaddress" id="guardiansaddress"><?php echo $rowArray->guardiansaddress; ?></textarea>
										</div>
										<p id="guardianaddresserror"></p>
										
									</div>
									
									<div class="col-sm-12">
										<div class="wrap-input100 validate-input bg1">
											<span class="label-input100">YOUR PRESENT ADDRESS *</span>
											<textarea class="input100 validate[required] text-input" type="text" required name="presentaddress" id="presentaddress"><?php echo $rowArray->presentaddress; ?></textarea>
										</div>
										<p id="preadderror"></p>
										
									</div>
									
									<div class="col-sm-3">
										<div class="wrap-input100 validate-input bg1">
											<span class="label-input100">DISTRICT *</span>
											<input class="input100 validate[required] text-input" type="text" required name="predistrict" id="predistrict" placeholder="Enter Your District" value="<?php echo $rowArray->predistrict; ?>">
										</div>
										<p id="prediserror"></p>
										
									</div>
									
									
									<div class="col-sm-3">
										<div class="wrap-input100 validate-input bg1">
											<span class="label-input100">ZIPCODE *</span>
											<input class="input100 validate[required] text-input" type="number" required name="prezipcode" id="prezipcode" placeholder="Enter Your Zipcode" value="<?php echo $rowArray->prezipcode; ?>">
										</div>
										<p id="preziperror"></p>
										
									</div>
									
									
									<div class="col-sm-3">
										<div class="wrap-input100 validate-input bg1">
											<span class="label-input100">STATE *</span>
											<input class="input100 validate[required] text-input" type="text" required name="prestate" id="prestate" placeholder="Enter Your State" value="<?php echo $rowArray->prestate; ?>">
										</div>
										<p id="prestateerror"></p>
										
									</div>
									
									<div class="col-sm-3">
										<div class="wrap-input100 validate-input bg1">
											<span class="label-input100">COUNTRY *</span>
											<input class="input100 validate[required] text-input" type="text" required name="precountry" id="precountry" placeholder="Enter Your Country" value="<?php echo $rowArray->precountry; ?>">
										</div>
										<p id="precountryerror"></p>
										
									</div>
									
									
									<div class="form-row col-sm-12 margintop20">
										<label class="form-check-label">
										<input type="checkbox" id="sameascheckbox" class="fun_addresscheck"> &nbsp;<span class="text">Same as present</span></label>
									</div>
									<p id="sameaspreerror"></p>
									
									
									<script type="text/javascript">
										
										$(document).ready(function(){
											
											
											$('.fun_addresscheck').click(function(){
												if($(this).prop("checked") == true){
													//console.log("Checkbox is checked.");
													//alert('checked');
													var presentaddress = $( "#presentaddress" ).val();
													var predistrict = $( "#predistrict" ).val();
													var prezipcode = $( "#prezipcode" ).val();
													var prestate = $( "#prestate" ).val();
													var precountry = $( "#precountry" ).val();
													
													$( "#permenantaddress" ).val(presentaddress);
													$( "#perdistrict" ).val(predistrict);
													$( "#perzipcode" ).val(prezipcode);
													$( "#perstate" ).val(prestate);
													$( "#percountry" ).val(precountry);
													
													
												}
												else if($(this).prop("checked") == false){
													//console.log("Checkbox is unchecked.");
													$( "#permenantaddress" ).val('');
													$( "#perdistrict" ).val('');
													$( "#perzipcode" ).val('');
													$( "#perstate" ).val('');
													$( "#percountry" ).val('');
													
												}
											});
											
										});
									</script>
									
									<div class="col-sm-12">
										<div class="wrap-input100 validate-input bg1">
											<span class="label-input100">PERMANENT ADDRESS *</span>
											<textarea class="input100 validate[required] text-input" type="text" required name="permenantaddress" id="permenantaddress"><?php echo $rowArray->permenantaddress; ?></textarea>
										</div>
										<p id="peradderror"></p>
										
									</div>
									
									
									<div class="col-sm-3">
										<div class="wrap-input100 validate-input bg1">
											<span class="label-input100">DISTRICT *</span>
											<input class="input100 validate[required] text-input" type="text" required name="perdistrict" id="perdistrict" placeholder="Enter Your District" value="<?php echo $rowArray->perdistrict; ?>">
										</div>
										<p id="perdiserror"></p>
										
									</div>
									
									
									<div class="col-sm-3">
										<div class="wrap-input100 validate-input bg1">
											<span class="label-input100">ZIPCODE *</span>
											<input class="input100 validate[required] text-input" type="number" required name="perzipcode" id="perzipcode" placeholder="Enter Your Zipcode" value="<?php echo $rowArray->perzipcode; ?>">
										</div>
										<p id="perziperror"></p>
										
									</div>
									
									
									<div class="col-sm-3">
										<div class="wrap-input100 validate-input bg1">
											<span class="label-input100">STATE *</span>
											<input class="input100 validate[required] text-input" type="text" required  name="perstate" id="perstate" placeholder="Enter Your State" value="<?php echo $rowArray->perstate; ?>">
										</div>
										<p id="perstateerror"></p>
										
									</div>
									
									<div class="col-sm-3">
										<div class="wrap-input100 validate-input bg1">
											<span class="label-input100">COUNTRY *</span>
											<input class="input100 validate[required] text-input" type="text" required name="percountry" id="percountry" placeholder="Enter Your Country" value="<?php echo $rowArray->percountry; ?>">
										</div>
										<p id="percountryerror"></p>
										
									</div>
									
									
									
								</div>
								
								<div class="col-sm-3 form2-p0">
									<div class="wrap-input100 validate-input bg1">
										<span class="label-input100">Are you in receipt of any scholarship?</span>
										<label class="form-check-label"><input type="checkbox" name="scholar" value="Yes" class="scholar"> &nbsp;<span class="text">Yes</span></label>
										<label class="form-check-label"><input type="checkbox" name="scholar" value="No" class="scholar"> &nbsp;<span class="text">No</span></label>
										
									</div>
								</div>
								<script>
									$('.scholar').on('change', function() {
										$('.scholar').not(this).prop('checked',false);
									});
								</script>
								<div class="col-sm-3 form2-p0">
									<div class="wrap-input100 validate-input bg1">
										<span class="label-input100">Specially-abled: (Any special attention required)</span>
										<label class="form-check-label"><input type="checkbox" name="speciallyabled" value="Yes" class="speciallyabled"> &nbsp;<span class="text">Yes</span></label>
										<label class="form-check-label"><input type="checkbox" name="speciallyabled" value="No" class="speciallyabled"> &nbsp;<span class="text">No</span></label>
										
									</div>
								</div>
								<script>
									$('.speciallyabled').on('change', function() {
										$('.speciallyabled').not(this).prop('checked',false);
									});
								</script>
								
								<div class="col-sm-3 form2-p0">
									<div class="wrap-input100 validate-input bg1">
										<span class="label-input100">Hostel Facilities required:</span>
										<label class="form-check-label"><input type="checkbox" name="hostel" value="Yes" class="hostel"> &nbsp;<span class="text">Yes</span></label>
										<label class="form-check-label"><input type="checkbox" name="hostel" value="No" class="hostel"> &nbsp;<span class="text">No</span></label>
										
									</div>
								</div>
								<script>
									$('.hostel').on('change', function() {
										$('.hostel').not(this).prop('checked',false);
									});
								</script>
								
							</fieldset>
							
							<?php /*
								<script type="text/javascript"  src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
								<script type="text/javascript">
								
								$(document).ready(function(){
								
								
								$('.input100').click(function(){
								if($(this).prop("checked") == true){
								//console.log("Checkbox is checked.");
								//alert('checked');
								$( ".input100" ).removeClass( "blurdiv" );
								
								}
								else if($(this).prop("checked") == false){
								//console.log("Checkbox is unchecked.");
								$( ".input100" ).addClass( "blurdiv" );
								}
								});
								
								});
								</script>
							*/ ?>
							
							
							<!--FORM 2----->
							
							
							<fieldset class="border p-2 table-responsive form2-acadmic-details">
								<legend  class="w-auto">Academic Details</legend>
								<p>&nbsp;</p>
								<table class="table">
									<tr><td></td><td>SSLC / 10th Std</td><td>11 PUC / 12th Std</td><!--td>Std Graduation</td--></tr>
									<tr><td>Institutions Last Attended*
										<br><p id="instituteerror"></p>
									</td>
									<td>
										
										<div class="wrap-input100 validate-input bg1">
											<input class="input100 validate[required] text-input" type="text" required name="sinstitutename" id="sinstitutename" placeholder="" value="<?php echo $rowArray->sinstitutename; ?>">
										</div>
										
										
									</td>
									<td>
										<div class="wrap-input100 validate-input bg1">
											<input class="input100 validate[required]  text-input" type="text" required name="pinstitutename" id="pinstitutename" placeholder="" value="<?php echo $rowArray->pinstitutename; ?>">
										</div>
										
									</td>
									<!--td>
										<div class="wrap-input100 validate-input bg1">
										<input class="input100 validate[required]  text-input" type="text" required name="ginstitutename" id="ginstitutename" placeholder="" value="<?php echo $rowArray->ginstitutename; ?>">
										</div>
										<p id="error"></p>
										
									</td-->
									</tr>
									<tr><td>Board / University*
										<br><p id="boarderror"></p>
									</td>
									<td>
										<div class="wrap-input100 validate-input bg1">
											<input class="input100 validate[required] text-input" type="text" required name="sboard" id="sboard" placeholder="" value="<?php echo $rowArray->sboard; ?>">
										</div>
									</td>
									<td>
										<div class="wrap-input100 validate-input bg1">
											<input class="input100 validate[required] text-input" type="text" required name="pboard" id="pboard" placeholder="" value="<?php echo $rowArray->pboard; ?>">
										</div>
									</td>
									<!--td>
										<div class="wrap-input100 validate-input bg1">
										<input class="input100 validate[required] text-input" type="text" required name="gboard" id="gboard" placeholder="" value="<?php echo $rowArray->gboard; ?>">
										</div>
									</td-->
									
									</tr>
									<tr><td>Regitration Number*
										<br><p id="registerationerror"></p>
									</td>
									<td>
										<div class="wrap-input100 validate-input bg1">
											<input class="input100 validate[required] text-input" type="text" required name="sregnum" id="sregnum" placeholder="" value="<?php echo $rowArray->sregnum; ?>">
										</div>
									</td>
									<td>
										<div class="wrap-input100 validate-input bg1">
											<input class="input100 validate[required] text-input" type="text" required name="pregnum" id="pregnum" placeholder="" value="<?php echo $rowArray->pregnum; ?>">
										</div>
									</td>
									<!--td>
										<div class="wrap-input100 validate-input bg1">
										<input class="input100 validate[required] text-input" type="text" required name="gregnum" id="gregnum" placeholder="" value="<?php echo $rowArray->gregnum; ?>">
										</div>
									</td-->
									
									</tr>
									<tr><td>Year of Passing*
										<br><p id="yearpasserror"></p>
									</td>
									<td>
										<div class="wrap-input100 validate-input bg1">
											<input class="input100 validate[required] text-input" type="number" required name="syearpas" id="syearpas" placeholder="" value="<?php echo $rowArray->syearpas; ?>">
										</div>
									</td>
									<td>
										<div class="wrap-input100 validate-input bg1">
											<input class="input100 validate[required] text-input" type="number" required name="pyearpas" id="pyearpas" placeholder="" value="<?php echo $rowArray->pyearpas; ?>">
										</div>
									</td>
									<!--td>
										<div class="wrap-input100 validate-input bg1">
										<input class="input100 validate[required] text-input" type="number" required name="gyearpas" id="gyearpas" placeholder="" value="<?php echo $rowArray->gyearpas; ?>">
										</div>
									</td-->
									
									</tr>
									<tr><td>Grade/Mark Obtained*
										<br><p id="markserror"></p>
									</td>
									<td>
										<div class="wrap-input100 validate-input bg1">
											<input class="input100 validate[required] text-input" type="text" required name="sclass" id="sclass" placeholder="" value="<?php echo $rowArray->sclass; ?>">
										</div>
									</td>
									<td>
										<div class="wrap-input100 validate-input bg1">
											<input class="input100 validate[required] text-input" type="text" required name="pclass" id="pclass" placeholder="" value="<?php echo $rowArray->pclass; ?>">
										</div>
									</td>
									<!--td>
										<div class="wrap-input100 validate-input bg1">
										<input class="input100 validate[required] text-input" type="text" required name="gclass" id="gclass" placeholder="" value="<?php echo $rowArray->gclass; ?>">
										</div>
									</td-->
									
									</tr>
									
									<tr><td>Percentage*
										<br><p id="percentageerror"></p>
									</td>
									<td>
										<div class="wrap-input100 validate-input bg1">
											<input class="input100 validate[required] text-input" type="text" required name="smarkpercentage" id="smarkpercentage" placeholder="" value="<?php echo $rowArray->spercentage; ?>">
										</div>
									</td>
									<td>
										<div class="wrap-input100 validate-input bg1">
											<input class="input100 validate[required] text-input" type="text" required name="pmarkpercentage" id="pmarkpercentage" placeholder="" value="<?php echo $rowArray->ppercentage; ?>">
										</div>
									</td>
									<!--td>
										<div class="wrap-input100 validate-input bg1">
										<input class="input100 validate[required] text-input" type="text" required name="gmarkpercentage" id="gmarkpercentage" placeholder="" value="<?php echo $rowArray->gpercentage; ?>">
										</div>
									</td-->
									
									</tr>
									
								</table>
								
								
							</fieldset>
							
							
							
							<fieldset class="border p-2 table-responsive form2-achievments">
								<legend  class="w-auto">Achievements,Awards And Special Quota</legend>
								<p>&nbsp;</p>
								<table class="table">
									<tr><td></td><td>Name of the event</td><td>Dist/State/National/International</td><td>Year</td><td>Achievements</td><td>Awards</td></tr>
									<tr><td>Extra-Curricular
										<br><p id="instituteerror"></p>
									</td>
									<td>
										
										<div class="wrap-input100 validate-input bg1">
											<input class="input100 validate[required] text-input" type="text" required name="event" id="event" placeholder="" value="<?php echo $rowArray->extra_cu_event; ?>">
										</div>
										
										
									</td>
									<td>
										<div class="wrap-input100 validate-input bg1">
											<input class="input100 validate[required]  text-input" type="text" required name="state_international" id="state_international" placeholder="" value="<?php echo $rowArray->extra_cu_st_nat_inter; ?>">
										</div>
										
									</td>
									<td>
										<div class="wrap-input100 validate-input bg1">
											<input class="input100 validate[required]  text-input" type="text" required name="awardyear" id="awardyear" placeholder="" value="<?php echo $rowArray->extra_cu_year; ?>">
										</div>
										<p id="error"></p>
										
									</td>
									<td>
										<div class="wrap-input100 validate-input bg1">
											<input class="input100 validate[required]  text-input" type="text" required name="achievment" id="achievment" placeholder="" value="<?php echo $rowArray->extra_cu_achievement; ?>">
										</div>
										
									</td>
									
									<td>
										<div class="wrap-input100 validate-input bg1">
											<input class="input100 validate[required]  text-input" type="text" required name="awards" id="awards" placeholder="" value="<?php echo $rowArray->extra_cu_awards; ?>">
										</div>
										
									</td>
									</tr>
									<tr><td>Sports
										<br><p id="boarderror"></p>
									</td>
									<td>
										
										<div class="wrap-input100 validate-input bg1">
											<input class="input100 validate[required] text-input" type="text" required name="sportsevent" id="sportsevent" placeholder="" value="<?php echo $rowArray->sports_event; ?>">
										</div>
										
										
									</td>
									<td>
										<div class="wrap-input100 validate-input bg1">
											<input class="input100 validate[required]  text-input" type="text" required name="sportsstate_international" id="sportsstate_international" placeholder="" value="<?php echo $rowArray->sports_st_nat_inter; ?>">
										</div>
										
									</td>
									<td>
										<div class="wrap-input100 validate-input bg1">
											<input class="input100 validate[required]  text-input" type="text" required name="sportsawardyear" id="sportsawardyear" placeholder="" value="<?php echo $rowArray->sports_year; ?>">
										</div>
										<p id="error"></p>
										
									</td>
									<td>
										<div class="wrap-input100 validate-input bg1">
											<input class="input100 validate[required]  text-input" type="text" required name="sportsachievment" id="sportsachievment" placeholder="" value="<?php echo $rowArray->sports_achievment; ?>">
										</div>
										
									</td>
									
									<td>
										<div class="wrap-input100 validate-input bg1">
											<input class="input100 validate[required]  text-input" type="text" required name="sportsawards" id="sportsawards" placeholder="" value="<?php echo $rowArray->sports_awards; ?>">
										</div>
										
									</td>
									
									</tr>
									<tr><td>NCC/NSS
										<br><p id="registerationerror"></p>
									</td>
									<td>
										
										<div class="wrap-input100 validate-input bg1">
											<input class="input100 validate[required] text-input" type="text" required name="nccevent" id="nccevent" placeholder="" value="<?php echo $rowArray->ncc_event; ?>">
										</div>
										
										
									</td>
									<td>
										<div class="wrap-input100 validate-input bg1">
											<input class="input100 validate[required]  text-input" type="text" required name="nccstate_international" id="nccstate_international" placeholder="" value="<?php echo $rowArray->ncc_st_nat_inter; ?>">
										</div>
										
									</td>
									<td>
										<div class="wrap-input100 validate-input bg1">
											<input class="input100 validate[required]  text-input" type="text" required name="nccawardyear" id="nccawardyear" placeholder="" value="<?php echo $rowArray->ncc_year; ?>">
										</div>
										<p id="error"></p>
										
									</td>
									<td>
										<div class="wrap-input100 validate-input bg1">
											<input class="input100 validate[required]  text-input" type="text" required name="nccachievment" id="nccachievment" placeholder="" value="<?php echo $rowArray->ncc_achievement; ?>">
										</div>
										
									</td>
									
									<td>
										<div class="wrap-input100 validate-input bg1">
											<input class="input100 validate[required]  text-input" type="text" required name="nccawards" id="nccawards" placeholder="" value="<?php echo $rowArray->ncc_awards; ?>">
										</div>
										
									</td>
									</tr>
									
									
									
								</table>
								
								
								
							</fieldset>
							
							
							
							
							
							
							
							
							
							
							<!--END FORM 2 -->
							
							<!--
								<div class="prev">
								<a class="register" href="<?php echo site_url('welcome/applynow/step1'); ?>">
								<button class="button button-control" type="button" ><span>Prev Step <b>Account Information</b></span></button></a>
								<div class="button-divider"></div>
								</div>
								
								<div class="next">
								<a class="register" href="<?php echo site_url('welcome/applynow/step3'); ?>">
								<button class="button button-control" id="check_step2_validations" type="button"><span>Next Step <b>Upload Documents</b></span></button>
								</a>
								<div class="button-divider"></div>
								</div>
							-->
							</div><!--blurdiv>
							
							
						</div>< .container-->
						
					</div><!--/ .form-container-->
					
				</div><!--/ #content-->
				
				<?php 
				} 
		?>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		
		
		<div class="prev blurdiv">
			<a class="register" href="<?php echo site_url('welcome/applynow/step1'); ?>">
			<button class="button button-control" type="button" ><span>Prev Step <b>Account Information</b></span></button></a>
			<div class="button-divider"></div>
		</div>
		
		<input type="hidden" name="appid" value="<?php echo $applicationid; ?>" />
		
		
		
		<div class="next">
			
			<button class="button button-control" id="check_step2_validations" type="submit" ><span>Next Step <b>Upload Documents</b></span></button>
			<div class="button-divider"></div>
		</div>
		
		
	</form>
	
	
	<script>
		
		$(document).ready(function(){
			$("#check_step2_validations").click(function(e)
			// $('#formID-2').on('submit', function(e){
			//function check_validations(e)
			{
				e.preventDefault();
				//alert('inside js');
				$('#nameerror').html("");
				$('#gendererror').html("");
				
				$('#birtherror').html("");
				$('#nationalityerror').html("");
				$('#mobileerror').html("");
				$('#emailerror').html("");
				$('#fathernameerror').html("");
				$('#landmobileerror').html("");
				$('#occupationerror').html("");
				$('#incomeerror').html("");
				$('#mothernameerror').html("");
				$('#preadderror').html("");
				$('#prediserror').html("");
				$('#preziperror').html("");
				$('#prestateerror').html("");
				$('#precountryerror').html("");
				$('#peradderror').html("");
				$('#perdiserror').html("");
				$('#perziperror').html("");
				$('#prestateerror').html("");
				$('#percountryerror').html("");
				$('#instituteerror').html("");
				$('#boarderror').html("");
				$('#registerationerror').html("");
				$('#yearpasserror').html("");
				$('#markserror').html("");
				$('#sameaspreerror').html("");
				$('#addon_error').html("");
				$('#percentageerror').html("");
				$('#programerror').html("");
				//alert('hello');
				var namereg = /^[a-zA-Z\s]+$/;
				var mobreg = /^[0-9]{10}$/;
				//var passreg = /^(?=.*\d)(?=.*[a-zA-Z]).{2,5}$/ ;          
				//var emailreg = /^([w-.]+@([w-]+.)+[w-]{2,4})?$/;
				
				var program = $("input[type = 'radio'][name=program]:checked");
				var addon = $("addoncheckbox").val();
				//alert(addon);
				var name =$('#first-name').val();
				var gender=$('#gender').val();
				
				var birthday=$('#birthday').val();
				var nationality=$('#nationality').val();
				var mobile=$('#studentmobileno').val();
				var email=$('#studentemail').val();
				var fathername=$('#fathersname').val();
				var lanmobile=$('#fathersmobileno').val();
				var occupation=$('#fathersoccupation').val();
				var income=$('#fathersannualincome').val();
				var mothername=$('#mothersname').val();
				var presentaddress=$('#presentaddress').val();
				var predistrict=$('#predistrict').val();
				var prezipcode=$('#prezipcode').val();
				var prestate=$('#prestate').val();
				var precountry=$('#precountry').val();
				var permenantaddress=$('#permenantaddress').val();
				var perdistrict=$('#perdistrict').val();
				var perzipcode=$('#perzipcode').val();
				var perstate=$('#perstate').val();
				var percountry=$('#percountry').val();
				var sinstitutename=$('#sinstitutename').val();
				var pinstitutename=$('#pinstitutename').val();
				var sboard=$('#sboard').val();
				var pboard=$('#pboard').val();
				var sregnum=$('#sregnum').val();
				var pregnum=$('#pregnum').val();
				var syearpas=$('#syearpas').val();
				var pyearpas=$('#pyearpas').val();
				var sclass=$('#sclass').val();
				var pclass=$('#pclass').val();
				var pyearpas=$('#pyearpas').val();
				var ppercent=$('#pmarkpercentage').val();
				var spercent=$('#smarkpercentage').val();
				
				
				if(program.length==0)
				{
					$('#programerror').html("Select the Program.");	
				}
				/*
					else if($("#addoncheckbox").prop("checked") == true)
					{
					if($(".fun_uncheck").prop("checked") == false)
					if ($('input:checkbox').filter(':checked').length < 1)
					alert($('.fun_uncheck:checked').length);
					if($('.fun_uncheck:checked').length== 0)
					{
					$('#addon_error').html("Select the Add  on Program.");
					}
					else
					{
					
					}
					
					}
				*/
				else if(name=='')
				{
					$('#nameerror').html("Name can not be empty.");
					//alert(name);
					//alert("First Name must be in characters");
				}
				else if(!namereg.test(name))
				{
					$('#nameerror').html("Name must be in characters.");
					//alert("First Name must be in characters");
				}
				
				else if(gender=='')
				{
					$('#gendererror').html("Select the gender.");
					
				}
				
				else if(birthday=='')
				{
					$('#birtherror').html("Select the birth date.");
					
				}
				
				else if(nationality=='')
				{
					$('#nationalityerror').html("Select the nationality.");
					
				}
				
				else if(mobile=='' )
				{
					$('#mobileerror').html("Mobile number can not be empty.");
					
				}
				
				else if(mobile.length!=10 )
				{
					$('#mobileerror').html("Mobile number is wrong.");
					
				}
				else if(email=='')
				{
					$('#emailerror').html("Email can not be empty");	
				}
				
				else if(fathername=='')
				{
					$('#fathernameerror').html("Father's name can not be empty.");
					//alert("First Name must be in characters");
				}
				else if(!namereg.test(fathername))
				{
					$('#fathernameerror').html("Father's name must be in characters.");
					//alert("First Name must be in characters");
				}
				
				else if(lanmobile=='' )
				{
					$('#landmobileerror').html("Landline/Mobile number can not be empty.");
					
				}
				
				else if(lanmobile.length!=10)
				{
					$('#landmobileerror').html("Landline/Mobile number is wrong.");
					
				}
				
				else if(occupation=='' )
				{
					$('#occupationerror').html("Occupation can not be empty.");
					
				}
				
				else if(income=='' )
				{
					$('#incomeerror').html("Annual income can not be empty.");
					
				}
				
				else if(mothername=='' )
				{
					$('#mothernameerror').html("Mother's name can not be empty.");
					
				}
				
				else if(!namereg.test(mothername))
				{
					$('#mothernameerror').html("Mother's Name must be in characters.");
					//alert("First Name must be in characters");
				}
				
				else if(presentaddress=='' )
				{
					$('#preadderror').html("Present address can not be empty.");
					
				}
				
				else if(predistrict=='' )
				{
					$('#prediserror').html("Present district can not be empty.");
					
				}
				
				
				else if(prezipcode=='' )
				{
					$('#preziperror').html("Present zipcode can not be empty.");
					
				}
				
				else if(prezipcode.length!=6 )
				{
					$('#preziperror').html("Present zipcode is wrong.");
					
				}
				
				else if(prestate=='' )
				{
					$('#prestateerror').html("Present state can not be empty.");
					
				}
				
				else if(precountry=='' )
				{
					$('#precountryerror').html("Present country can not be empty.");
					
				}
				
				//else if(!$("#sameascheckbox").prop("checked"))
				//{
				//	$('#sameaspreerror').html("Select the Check box.");
				
				//}
				
				
				else if(permenantaddress=='' )
				{
					$('#peradderror').html("Permanent address can not be empty.");
					
				}
				
				else if(perdistrict=='' )
				{
					$('#perdiserror').html("Permanent district can not be empty.");
					
				}
				
				else if(perzipcode=='' )
				{
					$('#perziperror').html("Permanent zipcode can not be empty.");
					
				}
				
				else if(perzipcode.length!=6 )
				{
					$('#perziperror').html("Present zipcode is wrong.");
					
				}
				
				
				else if(perstate=='' )
				{
					$('#prestateerror').html("Permanent state can not be empty.");
					
				}
				
				else if(percountry=='' )
				{
					$('#percountryerror').html("Permanent country can not be empty.");
					
				}
				
				else if(sinstitutename=='' || pinstitutename=='' )
				{
					$('#instituteerror').html("Institute name can not be empty.");
					
				}
				
				else if(sboard=='' || pboard=='' )
				{
					$('#boarderror').html("Board name can not be empty.");
					
				}
				
				else if(sregnum=='' || pregnum=='' )
				{
					$('#registerationerror').html("Registration can not be empty.");
				}
				
				
				
				else if(syearpas=='' || pyearpas=='' )
				{
					$('#yearpasserror').html("Passing year can not be empty.");
					
				}
				
				else if(sclass=='' || pclass=='' )
				{
					$('#markserror').html("Grade/Mark can not be empty.");
					
				}
				
				else if(spercent=='' || ppercent=='' )
				{
					$('#percentageerror').html("Percentage can not be empty.");
					
				}
				
				
				else
				{
					//alert("hello");
					$("#formstep_2").submit();
				}
				//}	
			});
		});
		
		
		
	</script>																																																																																																																																																																																																																															