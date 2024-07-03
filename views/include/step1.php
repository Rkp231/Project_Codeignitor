<?php
	
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
	
	//$ebe_email = $this->session->userdata('ebe_email');
	//$wl_profileid = $this->session->userdata('ebe_profileid');
	//print_r($wl_profileid);exit;
	
	$findaccountactive = $this->musers->findaccountactive($wl_profileid);
	if($findaccountactive>0) {
		redirect('welcome/applynow/step2');
	}
	
?>

<div id="content">
	
	<div class="form-container">
		
		<div id="tmm-form-wizard" class="container substrate">
			
			<div class="row">
				<div class="col-xs-12">
					<h2 class="form-login-heading">Applicants<span>Form</span></h2>
				</div>
				
			</div><!--/ .row-->
			
			<div class="row stage-container">
				
				<div class="stage tmm-current col-md-3 col-sm-3">
					<div class="stage-header head-icon head-icon-lock"></div>
					<div class="stage-content">
						<h3 class="stage-title">Registration</h3>
						<div class="stage-info">
							Verify your email id
						</div>
					</div>
				</div><!--/ .stage-->
				
				<div class="stage col-md-3 col-sm-3">
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
			
			<div class="row">
				
				<div class="col-xs-12">
					
					<div class="form-header">
						<div class="form-title form-icon title-icon-lock">
							<b>Register now to apply</b>
						</div>
						<div class="steps">
							Steps 1 - 4
						</div>
					</div><!--/ .form-header-->
					
				</div>
				
			</div><!--/ .row-->
			
			
			<fieldset class="border p-2">
				<legend  class="w-auto">Sign up</legend>
				
				
				<span>
					<?php
						$uri4 = $this->uri->segment(4);
						$msg_text = $this->messages->msg_text($uri4);
						
						if(!empty($msg_text)) {
							$msgval = $msg_text[0];
							$msgsts = $msg_text[1];
							
							if($msgsts=='0') { echo '<span class="r1 font12 pull-right">'.$msgval.'</span>'; }
							elseif($msgsts=='1') { echo '<span class="g1 font12 pull-right">'.$msgval.'</span>'; }
						}
					?>
				</span>
				
				
				<!--Form Start-->
				<form class="form-detail" action="<?php echo site_url('welcome/userregistration'); ?>" method="post" id="formID-1" >
					<p>&nbsp;</p>
					
					
					<div class="form-group row form-detail-step1">
						
						<div class="form-row col-sm-4 col_4">
							<div class="wrap-input100 validate-input bg1">
								<span class="label-input100">FIRST NAME *</span>
								<input class="input100 validate[required] text-input" type="text" name="fname" id="fname" placeholder="Enter Your First Name">
							</div>
							<p id="fnameerror"></p>
							
						</div>
						
						
						<div class="form-row col-sm-4 col_4">
							<div class="wrap-input100 validate-input bg1" >
								<span class="label-input100">LAST NAME *</span>
								<input class="input100 validate[required] text-input" type="text" name="lname" id="lname" placeholder="Enter Your Last Name">
							</div>
							<p id="lnameerror"></p>
							
							
						</div>
						
						
						<div class="form-row col-sm-4 col_4">
							<div class="wrap-input100  bg1" >
								<span class="label-input100">MOBILE *</span>
								<input class="input100  text-input" type="number" maxlength="10" name="mobile" id="mobile" placeholder="Enter Your Mobile Number">
							</div>
							<p id="mobileerror"></p>
							
							
						</div>
						
						
						
						
						<div class="form-row col-sm-4 col_4">
							<div class="wrap-input100 validate-input bg1" >
								<span class="label-input100">EMAIL *</span>
								<input class="input100 validate[required,custom[email]] text-input" type="text" name="email" id="email" placeholder="Enter Your Email">
							</div>
							<p id="emailerror"></p>
							
							
						</div>
						
						
						<div class="form-row col-sm-4 col_4">
							<div class="wrap-input100 validate-input bg1" >
								<span class="label-input100">PASSWORD *</span>
								<input class="input100 validate[required] text-input" type="password" name="password" id="password" placeholder="Enter Password">
							</div>
							<p id="passworderror"></p>
							
							
						</div>
						
						<div class="form-row col-sm-4 col_4">
							<div class="wrap-input100 validate-input bg1" >
								<span class="label-input100">CONFIRM PASSWORD *</span>
								<input class="input100 validate[required,equals[password]] text-input" type="password" name="comfirm_password" id="comfirm_password" placeholder="Enter Confirm Password">
							</div>
							<p id="cpassworderror"></p>
							
						</div>
						
						
						<div class="form-row col-sm-12 col_12_validate">
							<div class=" validate-input" >
								<label class="form-check-label"><input type="checkbox" id="agree" name="agree" class="validate[required] checkbox"> &nbsp; I agree to the <span class="text">Terms and Conditions</span></label>
								<p id="checkboxerror"></p>
							</div>
						</div>
						
						
						<p>&nbsp;</p>
						
						
						
					</fieldset>
					
					<!--Form End-->
					
					<div class="prev" style="display: none;">
						<button class="button button-control" type="button" ><span>Prev Step <b>Account Information</b></span></button>
						<div class="button-divider"></div>
					</div>
					
					<div class="next">
						
						<button class="button button-control" id="check_form_validation" type="submit" ><span>Next Step <b>Application Form</b></span></button>
						<div class="button-divider"></div>
					</div>
					
				</form><!--/ .form-wizard-->
				
			</div><!--/ .container-->
			
		</div><!--/ .form-container-->
		
	</div><!--/ #content-->
	
	
	<script>
		$(document).ready(function(){
			$("#check_form_validation").click(function(e)
			// $('#formID-1').on('submit', function(e){
			{
				e.preventDefault();
				$('#fnameerror').html("");
				$('#lnameerror').html("");
				$('#mobileerror').html("");
				$('#emailerror').html("");
				$('#passworderror').html("");
				$('#cpassworderror').html("");
				$('#checkboxerror').html("");
				var namereg = /^[a-zA-Z\s]+$/;
				var mobreg = /^[0-9]{10}$/;
				var passreg = /^(?=.*\d)(?=.*[a-zA-Z]).{5,}$/ ; 
				var emailreg = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
				
				//var emailreg = /^([w-.]+@([w-]+.)+[w-]{2,4})?$/;
				
				var fname =$('#fname').val();
				var lname=$('#lname').val();
				var mob=$('#mobile').val();
				var email=$('#email').val();
				var password=$('#password').val();
				var cpassword=$('#comfirm_password').val();
				if(fname=='')
				{
					$('#fnameerror').html("First name can not be empty.");
					//alert("First Name must be in character");
				}
				else if(!namereg.test(fname))
				{
					$('#fnameerror').html("First name must be in Characters.");
					//alert("First Name must be in character");
				}
				
				else if(lname=='')
				{
					$('#lnameerror').html("Last name can not be empty.");
					
				}
				else if(!namereg.test(lname))
				{
					$('#lnameerror').html("Last name must be in Characters.");
					
				}
				
				else if(mob=='')
				{
					$('#mobileerror').html("Mobile number can not be empty.");
					
				}
				else if(mob.length!=10 )
				{
					$('#mobileerror').html("Mobile number is Wrong");
					
				}
				
				else if(email=='')
				{
					$('#emailerror').html("Email can not be empty");	
				}
				else if(!emailreg.test(email))
				{
					$('#emailerror').html("Email not correct.");
					//alert("First Name must be in character");
				}
				else if(password=='')
				{
					$('#passworderror').html("Password can not be empty");
					
				}
				else if(!passreg.test(password))
				{
					$('#passworderror').html("Please enter password of minimum 5 characters with one alphabet and one number");
					
				}
				
				else if(cpassword=='')
				{
					$('#cpassworderror').html("Confirm Password can not be empty");
					
				}
				else if(cpassword!=password)
				{
					$('#cpassworderror').html("Password not matching");
					
				}
				
				else if(!$("#agree").prop("checked"))
				{
					//$("#agree_chk_error").show();
					$('#checkboxerror').html("Select the check box.");
				}
				else
				{
					//window.location.assign('https://ebenezercollege.edu.in/index.php/welcome/applynow/step2');
					$("#formID-1").submit();
				}
				
			});
		});
	</script>																			