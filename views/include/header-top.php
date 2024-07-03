<?php
	
	setcookie('ebe_email','',time()-60);
	setcookie('ebe_usertype','',time()-60);
	setcookie('ebe_profileid','',time()-60);
	
	
	
?>

<div class="header-top">
	<div class="container">
		<div class="row">
			<?php /*
				<!--<div class="col-sm-3">
				<ul class="list-inline">
				<li>
				<div class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/is.png" alt=""> English <i class="fa fa-angle-down"></i></a>
				<ul class="dropdown-menu">
				<li><a href="#">Japani</a></li>
				<li><a href="#">Hindi</a></li>
				<li><a href="#">Chinis</a></li>
				</ul>
				</div>
				</li>
				<li>
				<div class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Currency $USD <i class="fa fa-angle-down"></i></a>
				<ul class="dropdown-menu">
				<li><a href="#">Pound</a></li>
				<li><a href="#">Diner</a></li>
				<li><a href="#">Rupee</a></li>
				</ul>
				</div>
			</li>
			</ul>
			</div>
			<div class="col-sm-4">
			<ul class="list-inline">
			<li><a href="#"><i class="fas fa-blog fa-spin"></i> Blog</a></li>
			<li><a href="<?php echo site_url('welcome/placements'); ?>"><i class="fas fa-paper-plane"></i> Placement</a></li>
			<li><a href="<?php echo site_url('welcome/library'); ?>"><i class="fas fa-book"></i> Library</a></li>
			</ul>
			</div>
			
			
			
			<div class="col-sm-4">
			<ul class="list-inline">
			<li><a href="tel:+918050024004"><i class="fa fa-mobile"></i> +91-8050024004</a></li>
			<li><a href="mailto:info@ebenezercollege.edu.in"><i class="fa fa-envelope-o"></i> info@ebenezercollege.edu.in</a></li>
			</ul>
			</div>*/ ?>
			
			<div class="col-md-6 header-top-tab-left">
				<div class="rs-toolbar-right" style="text-align: center;">
					<marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();">
						<span style="color:#fff;">ADMISSIONS ARE OPEN.. HURRY UP.. APPLY NOW TO SECURE YOUR FUTURE. </span>
					</marquee>
				</div>
			</div>
			
			
			
			<div class="col-sm-6 header-top-tab-right">
				<ul class="list-inline pull-right">
					
					
					<?php
						//$ebe_email = $this->session->userdata('ebe_email');
						//$wl_profileid = $this->session->userdata('ebe_profileid');
						$wl_profileid = $_COOKIE["ebe_profileid"];
				
						
						
						if(empty($wl_profileid)) { ?>
						<!--<li><a href="<?php echo site_url('welcome/login'); ?>"><i class="fa fa-user"></i> Signin</a></li>-->
						<?php
							
							} else {
							$userprofiledetail = $this->musers->userprofiledetail($wl_profileid);
							foreach ($userprofiledetail as $userprofiledetailRow) {
								$emailid =    $userprofiledetailRow->emailid;
								$name =    $userprofiledetailRow->name;
								$mobileno =    $userprofiledetailRow->name;
							}
							
						?>
						<li><a style="color:#fff !important;"><i class="fa fa-user"></i> <?php echo 'Welcome '.$name.''; ?></a></li>
						<li><a style="color:#fff !important;" href="<?php echo site_url(); ?>"></a></li>
						<?php
						}
						
					?>
					
					
					
					
					<?php /*
						
						<!--	<li><a href="#"><i class="fa fa-heart-o"></i> Wishlist (0)</a></li>
						<li><a href="#"><i class="fa fa-file-o"></i> Compare (0)</a></li>-->
						<!--<li><a class="register" href="<?php echo site_url('welcome/admission'); ?>">Admission Open for 2021-23</a></li>-->
						
						
						<!--
						<li class=""><a class="register" href="<?php echo base_url(); ?>assets/doc/Brochure_2021.pdf" target="_blank" >Download Brochure</a></li>
					-->*/ ?>
					
					<li class=""><a class="register" data-toggle="modal" data-target="#downloadbroucher" ><b>DOWNLOAD BROCHURE</b></a></li>
					
					
					
					
					<li class=""><a class="register" href="<?php echo site_url('welcome/applynow/step1'); ?>"><b>ADMISSION OPEN</b></a></li>
					
				</ul>
			</div>
			
			<?php /*
				<div class="col-sm-2">
				<div class="social-icon">
				<ul class="pull-right">
				<li><a target="_blank" href="https://www.facebook.com/www.ebenezercollege.edu.in/"><i class="ti-facebook"></i></a></li>
				<!--<li><a href="#"><i class="ti-google"></i></a></li>-->
				<li><a target="_blank" href="https://twitter.com/ebenezer_edu_in"><i class="ti-twitter-alt"></i></a></li>
				<li><a target="_blank" href="https://www.instagram.com/ebenezerinstitutions/"><i class="ti-instagram"></i></a></li>
				</ul>
				</div>
				</div>
			*/ ?>
		</div>
	</div>
</div>

<?php if(empty($wl_profileid)) {
	$emailid_v =    '';
	$name_v =    '';
	$mobileno_v =    '';
	
	} else {
	$emailid_v =    $emailid;
	$name_v =    $name;
	$mobileno_v =    $mobileno;
	
}
?>


<!-- Modal -->
<div class="modal fade margintop90" id="downloadbroucher" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		
		<form id="formID-2" >
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Fill your details to download broucher</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<!--Form-->
					<div class="row">
						<div class="form-row col-sm-12">
							<div class="wrap-input100 validate-input bg1">
								<span class="label-input100">NAME *</span>
								<input class="input100 validate[required] text-input" type="text" name="fname" id="fnamee" placeholder="Enter Your Name" value="<?php echo $name_v; ?>">
							</div>
						</div>
						
						
						<div class="form-row col-sm-12">
							<div class="wrap-input100 validate-input bg1" >
								<span class="label-input100">MOBILE *</span>
								<input class="input100 validate[required] text-input" type="text" name="mobile" id="mobilee" placeholder="Enter Your Mobile Number" value="<?php echo $mobileno_v; ?>" />
							</div>
						</div>
						
						
						
						<div class="form-row col-sm-12">
							<div class="wrap-input100 validate-input bg1" >
								<span class="label-input100">EMAIL *</span>
								<input class="input100 validate[required,custom[email]] text-input" type="text" name="email" id="emaile" placeholder="Enter Your Email" value="<?php echo $emailid_v; ?>" />
							</div>
						</div>
						
						
					</div>
					<!--End Form-->
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary function-submit-download">Submit & Download</button>
				</div>
			</div>
		</form>
		
	</div>
</div>


<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->
<script src="<?php echo base_url(); ?>assets/js/download/jquery.min.js"></script>

<script type="text/javascript">
	//alert('sdfsdf');
	$(document).on('click', '.function-submit-download', function(e) {
		var fname = $("#fnamee").val();
		var mobile = $("#mobilee").val();
		var email = $("#emaile").val();
		
		//alert(email);
		
		$.ajax({
			url: "<?php echo site_url('welcome/downloadbroucher') ?>",
			type: "post",
			//data: serializedData,
			data: {
				fname: fname,
				mobile: mobile,
				email: email
			},
			success: function(result) {
				//alert(result);
				
				/*****/
					var req = new XMLHttpRequest();
					req.open("GET", "<?php echo base_url(); ?>assets/doc/Brochure_2021.pdf", true);
					req.responseType = "blob";
					
					req.onload = function (event) {
						var blob = req.response;
						console.log(blob.size);
						var link=document.createElement('a');
						link.href=window.URL.createObjectURL(blob);
						link.download="EbenezerCollegeDownloadBroucher.pdf";
						link.click();
					};
					
					req.send();
					/*****/
						
						$('#fnamee').val('');
						$('#mobilee').val('');
						$('#emaile').val('');
						
						$('#downloadbroucher').modal('hide');
						
					}
				});
				
				
			});
			
		</script>
		