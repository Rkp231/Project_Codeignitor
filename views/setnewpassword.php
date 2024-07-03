<?php
	//print_r($email_id);exit;
	
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<title>Ebenezer Group of Institutions</title>
		<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
		<link rel="icon" href="<?php echo base_url(); ?>assets/img/footer-logo.png" type="image/x-icon"/>
		
		<!-- Fonts and icons -->
		<script src="<?php echo base_url(); ?>assets/superadmin/assets/js/plugin/webfont/webfont.min.js"></script>
		<script>
			WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['<?php echo base_url(); ?>assets/superadmin/assets/css/fonts.min.css']},
			active: function() {
			sessionStorage.fonts = true;
			}
			});
		</script>
		
		<style>
		#passworderror,#cpassworderror{color: red;
    font-size: 12px;}
		</style>
		
		<!-- CSS Files -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/superadmin/assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/superadmin/assets/css/style.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsive-style.css">
	</head>
	<body class="login">
		<div class="wrapper wrapper-login wrapper-login-full p-0">
			<div class="login-aside w-50 d-flex flex-column align-items-center justify-content-center text-center bg-secondary-gradient">
				<h1 class="title fw-bold text-white mb-3">
				<a href="<?php echo site_url('welcome'); ?>">  <img src="<?php echo base_url(); ?>assets/img/logopng.png" class="" height="250" ></h1></a>
				<!--<p class="subtitle text-white op-7">Ayo bergabung dengan komunitas kami untuk masa depan yang lebih baik</p>-->
			</div>
			<div class="login-aside w-50 d-flex align-items-center justify-content-center bg-white">
				<div class="container container-login container-transparent animated fadeIn">
					<h3 class="text-center"></h3>
					
					
					<span>
						<?php
							$uri3 = $this->uri->segment(3);
							$msg_text = $this->messages->msg_text($uri3);
							
							if(!empty($msg_text)) {
								$msgval = $msg_text[0];
								$msgsts = $msg_text[1];
								
								if($msgsts=='0') { echo '<span class="r1 font12">'.$msgval.'</span>'; }
								elseif($msgsts=='1') { echo '<span class="g1 font12">'.$msgval.'</span>'; }
							}
						?>
					</span>
					
					<form id="formID" action="<?php echo site_url('welcome/passwordchanged'); ?>" method="POST">
						<div class="login-form">
						<h3 class="text-center">Reset Password</h3>
						<div class="row">
							<div class="col-md-12 col_4">
								<div class="validate-input form-group p-0" >
									<label for="password" class="placeholder"><b>New Password</b></label>
									<input class="form-control validate[required] text-input" type="password" name="password" id="password" placeholder="Enter Password">
								</div>
								<p id="passworderror"></p>
								
								
							</div>
							
							<div class="col-md-12 col_4">
								<div class="wrap-input100 validate-input bg1" >
									<label for="username" class="placeholder"><b>Confirm Password</b></label>
									<input class="form-control validate[required,equals[password]] text-input" type="password" name="comfirm_password" id="comfirm_password" placeholder="Enter Confirm Password">
								</div>
								<p id="cpassworderror"></p>
								<input type="hidden" name="entered_email" id="entered_email" value="<?php echo $email_id; ?>">
								
							</div>
							<!--div class="form-group">
								<label for="password" class="placeholder"><b>New Password</b></label>
								<input id="password" name="password" type="password" class="form-control" required>
								
								</div>
								<div class="form-group">
								<label for="username" class="placeholder"><b>Confirm Password</b></label>
								<input id="password" name="password" type="password" class="form-control" required>
								
							</div-->
							
							<div class="col-md-12 reset-pass-btn-div p-0 text-center mb-3">
								<input type="submit" id="check_form_validation" class="btn btn-primary col-md-5 mt-3 mt-sm-0 fw-bold" value="Sumit" />
								
								
								<!--div class="form-group form-action-d-flex mb-3">
									<a class="btn btn-primary  float-right mt-3 mt-sm-3 fw-bold" href="<?php echo site_url('welcome/setnewpassword'); ?>">Send OTP</a>
								</div-->
							</div>
							
							</div>
						</div>
						
					</form>
					
					
					
				</div>
				
				
			</div>
		</div>
		
		<script src="<?php echo base_url(); ?>assets/superadmin/assets/js/core/jquery.3.2.1.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/superadmin/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/superadmin/assets/js/core/popper.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/superadmin/assets/js/core/bootstrap.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/superadmin/assets/js/atlantis.min.js"></script>
	</body>
</html>		


	<script>
		$(document).ready(function(){
			$("#check_form_validation").click(function(e)
			// $('#formID-1').on('submit', function(e){
			{
				e.preventDefault();
				$('#passworderror').html("");
				$('#cpassworderror').html("");
				var passreg = /^(?=.*\d)(?=.*[a-zA-Z]).{5,}$/ ;          
				var password=$('#password').val();
				var cpassword=$('#comfirm_password').val();
				
				 if(password=='')
				{
					$('#passworderror').html("Password can not be empty");
					
				}
				else if(!passreg.test(password))
				{
					$('#passworderror').html("Please enter password of minimum 5 characters with one alphabet and one number");
					
				}
				
				else if(cpassword=='')
				{
					$('#cpassworderror').html("Confirm Password can not be Empty");
					
				}
				else if(cpassword!=password)
				{
					$('#cpassworderror').html("Password not matching");
					
				}
				
				else
				{
					//window.location.assign('https://ebenezercollege.edu.in/index.php/welcome/applynow/step2');
					$("#formID").submit();
				}
				
			});
		});
	</script>