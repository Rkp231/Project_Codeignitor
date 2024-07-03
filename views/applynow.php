<?php //session_start();
	$this->load->view('include/html-top');
	$this->load->view('include/inline-header');
	$this->load->view('include/header-top');
	$this->load->view('include/header');
	$this->load->view('include/rightnav');
?>
<!--========================================================
	BREADCRUMB
=========================================================-->
<section class="breadcrumb breadcrumb-img">
	<div class="breadcrumb-background">
	<div class="container">
		<div class="row">
			<div class="col">
				<h1>Apply Now</h1>
				<ul>
					<li><a href="<?php echo site_url('welcome/index'); ?>">Home</a></li>
					<li><a href="<?php echo site_url('welcome/admission'); ?>">Admission Open</li></a>
					<li class="last_breadcrumb">Apply Now</li>	
				</ul>
			</div>
		</div>
	</div>
	</div>
</section>


<section class="news mtb80">
    <div class="container">	
		<?php
			$uri1 =   $this->uri->segment(1);
			$uri2 =   $this->uri->segment(2);
			$uri3 =   $this->uri->segment(3);
			if($uri2=='applynow' && $uri3=='step1') {
				$this->load->view('include/step1');
				} else if($uri2=='applynow' && $uri3=='step2') {
				$this->load->view('include/step2');
				}else if($uri2=='applynow' && $uri3=='step3') {
				$this->load->view('include/step3');
				}else if($uri2=='applynow' && $uri3=='step4') {
				$this->load->view('include/step4');
			}
			
		?>
		
		
	</div>
</section>




<?php
	
	$this->load->view('include/html-bottom');
	$this->load->view('include/footer');
	
?>
