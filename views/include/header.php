<!--========================================================
	HEADER
=========================================================-->
<header>
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-lg-2 logo-div">
				<div class="logo">
					<a href="<?php echo site_url('welcome/index'); ?>">
						<img src="<?php echo base_url(); ?>assets/img/logonew.svg" alt="" class="homelogo">
					</a>
				</div>
			</div>
			<div class="col-md-8 col-lg-10 header-tab">
				<div class="logo logo-tab">
					<a href="<?php echo site_url('welcome/index'); ?>">
						<img src="<?php echo base_url(); ?>assets/img/logonew.svg" alt="" class="homelogo">
					</a>
				</div>
				<nav>
					<ul>
						<li>
							<a <?php
								$uri2 = $this->uri->segment(2);
							if($uri2=='index') { echo 'class="active"'; }?> href="<?php echo site_url('welcome/index'); ?>">HOME</a>
						</li>
						<li>
						<a <?php if($uri2=='about') { echo 'class="active"'; } ?> href="<?php echo site_url('welcome/about'); ?>">ABOUT</a></li>
						
						<li>
							<a <?php if($uri2=='college') { echo 'class="active"'; } ?> href="<?php echo site_url('welcome/college'); ?>">PROGRAMS</a>
							<ul>
								<li><a <?php if($uri2=='degreecollege') { echo 'class="active"'; } ?> href="<?php echo site_url('welcome/degreecollege'); ?>">Ebenezer Degree College</a></li>
								<li><a <?php if($uri2=='schoolandcollegeofnursing') { echo 'class="active"'; } ?> href="<?php echo site_url('welcome/schoolandcollegeofnursing'); ?>">Ebenezer School & College of Nursing</a></li>
								<li><a <?php if($uri2=='pmedical') { echo 'class="active"'; } ?> href="<?php echo site_url('welcome/pmedical'); ?>">Ebenezer Paramedical College</a></li>
								<li><a <?php if($uri2=='pharmacy') { echo 'class="active"'; } ?> href="<?php echo site_url('welcome/pharmacy'); ?>">Ebenezer College of Pharmacy</a></li>
							</ul>
						</li>
						
						<li>
							<a <?php if($uri2=='studentcorner') { echo 'class="active"'; } ?> href="<?php echo site_url('welcome/studentcorner'); ?>">STUDENTS CORNER</a>
							<ul>
								<li><a <?php if($uri2=='facilities') { echo 'class="active"'; } ?> href="<?php echo site_url('welcome/facilities'); ?>">Facilities</a></li>
								<li><a <?php if($uri2=='clubandassociation') { echo 'class="active"'; } ?> href="<?php echo site_url('welcome/clubandassociation'); ?>">Club & Association</a></li>
								
								<li><a <?php if($uri2=='gallery') { echo 'class="active"'; } ?> href="<?php echo site_url('welcome/gallery'); ?>">Gallery</a></li>
							</ul>
						</li>
						<li>
						<a <?php if($uri2=='trainingandplacement') { echo 'class="active"'; } ?> href="<?php echo site_url('welcome/trainingandplacement'); ?>">TRAINING & PLACEMENT</a></li>
						
						<li>
						<a <?php if($uri2=='contact') { echo 'class="active"'; } ?> href="<?php echo site_url('welcome/contact'); ?>">CONTACT</a></li>
						
						<?php
							//$ebe_email = $this->session->userdata('ebe_email');
							//$wl_profileid = $this->session->userdata('ebe_profileid');
							$wl_profileid = $_COOKIE["ebe_profileid"];
							
							
							
							if(empty($wl_profileid)) 
							{ 
							?>
							
							<li class="mobile-menu-signin-btn"><a class="register" href="<?php echo site_url('welcome/login'); ?>"><i class="fa fa-user">&nbsp;&nbsp;</i>SIGN IN</a></li>
							<?php
							}
							else
							{	
							?>
							<li class="mobile-menu-signin-btn"><a class="register" href="<?php echo site_url('welcome/logout'); ?>"><i class="fa fa-user">&nbsp;&nbsp;</i>LOG OUT</a></li>
							<?php
							}
							
						?>
					</ul>
				</nav>
				<div class="mobile-menu">
					<i class="ti-menu"></i>
					<i class="ti-close"></i>
				</div>
				<div class="header-mobile-btns">
					<ul class="list-inline pull-right">
						
						
						<?php
							//$ebe_email = $this->session->userdata('ebe_email');
							$wl_profileid = $this->session->userdata('ebe_profileid');
							
							
							
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
						<li><a style="color:#fff !important;" href="<?php echo site_url('welcome/logout'); ?>"><i class="fa fa-user"></i> Logout</a></li>
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
			</div>
			
		</div>
	</div>
</header>
