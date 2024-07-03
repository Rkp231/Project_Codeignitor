
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

	<!-- CSS Files -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/superadmin/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/superadmin/assets/css/style.css">
	<style>
	.login-form-btn-div{
	width: 100% !important;
    padding: 0 !important;
}
.login-form-btn-div a{
	width: 100% !important;
	color:#FFF !important;
	margin-left: 10px;
}
@media(max-width: 767px)
{
	.login-form-btn-div a{
	margin-left: 0px !important;
}
}
	</style>
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
				<h3 class="text-center">Sign In</h3>


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

        <form id="formID" action="<?php echo site_url('welcome/userlogin'); ?>" method="POST">
        <div class="login-form">
					<div class="form-group">
						<label for="username" class="placeholder"><b>Email</b></label>
						<input id="email" name="email" type="text" class="form-control" required>
					</div>
					<p id="emailerror"></p>
					<div class="form-group">
						<label for="password" class="placeholder"><b>Password</b></label>
						<a href="<?php echo site_url('welcome/forgotpass'); ?>" class="link float-right">Forget Password ?</a>
						<div class="position-relative">
							<input id="password" name="password" type="password" class="form-control" required>
							<div class="show-password">
								<i class="icon-eye"></i>
							</div>
						</div>
					</div>
					<p id="passworderror"></p>
					<div class="form-group form-action-d-flex mb-3">
 						<input type="submit" id="check_email_password" class="btn btn-primary col-md-5 float-right mt-3 mt-sm-0 fw-bold" value="Sign In" />

					<div class="form-group form-action-d-flex mb-3 login-form-btn-div">
						<a class="btn btn-primary  float-right mt-3 mt-sm-3 fw-bold" href="<?php echo site_url('welcome/applynow/step1'); ?>">Apply Now</a>
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
			$("#check_email_password").click(function(e)
			// $('#formID-1').on('submit', function(e){
			{
				e.preventDefault();
				$('#emailerror').html("");
				$('#passworderror').html("");
				var emailreg = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
				
				//var emailreg = /^([w-.]+@([w-]+.)+[w-]{2,4})?$/;
				
				var email=$('#email').val();
				var password=$('#password').val();
				if(email=='')
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
				else
				{
					//window.location.assign('https://ebenezercollege.edu.in/index.php/welcome/applynow/step2');
					$("#formID").submit();
				}
				
			});
		});
	</script>																		
