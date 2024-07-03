<!--========================================================
	Loader and toTop
=========================================================-->
<!--div id="preloader">
	<div class="preloader">
    <span></span>
    <span></span>
	</div>
</div-->

<div id="toTop">
	<i class="ti-arrow-up"></i>
</div>

<!-- js -->
<script src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.min.js"></script>
<script defer src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
<script defer src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script defer src="<?php echo base_url(); ?>assets/js/owl.carousel.min.js"></script>
<script defer src="<?php echo base_url(); ?>assets/js/jquery.fancybox.min.js"></script>
<script defer src="<?php echo base_url(); ?>assets/js/waypoints.min.js"></script>
<script defer src="<?php echo base_url(); ?>assets/js/jquery.counterup.min.js"></script>
<script defer src="<?php echo base_url(); ?>assets/js/wow.min.js"></script>


<?php
	$uri1 =   $this->uri->segment(1);
	$uri2 =   $this->uri->segment(2);
	if($uri1=='welcome' && $uri2=='applynow') {
	?>
	<script defer src="<?php echo base_url(); ?>assets/lib/form-wizard/js/tmm_form_wizard_custom.js"></script>
<?php } ?>





<!-- Form Validation Script -->
<script defer src="<?php echo base_url(); ?>assets/lib/validation/js/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>
<script defer src="<?php echo base_url(); ?>assets/lib/validation/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>

<!--script>
	$(document).ready(function(){
    $("#formID-1").validationEngine();
    $("#formID-2").validationEngine();
    $("#formID-3").validationEngine();
	$("#formID-4").validationEngine();
	});
</script-->
<!-- End Form Validation Script -->


<?php
	if(($uri1=='welcome' && $uri2=='index') || ($uri1=='welcome' && $uri2=='') || ($uri1=='' && $uri2=='')) {
	?>
	<!--Slider-->
	<script defer type="text/javascript" src="<?php echo base_url(); ?>assets/lib/slider/js/jquery.min.js"></script>
	<script defer src="<?php echo base_url(); ?>assets/lib/slider/js/jquery-migrate-1.2.1.js"></script>
	<script defer type="text/javascript" src="<?php echo base_url(); ?>assets/lib/slider/js/jquery.easing.1.3.js"></script>
	<!-- the jScrollPane script -->
	<script defer type="text/javascript" src="<?php echo base_url(); ?>assets/lib/slider/js/jquery.mousewheel.js"></script>
	<script defer type="text/javascript" src="<?php echo base_url(); ?>assets/lib/slider/js/jquery.contentcarousel.js"></script>
	<!--END Slider-->
	
	
	
	
	<!--3rd Banner Slider-->
	<script src="<?php echo base_url(); ?>assets/lib/bannerslider-swiper/swiper-bundle.min.js"></script>
	
	<script>
		$(document).ready(function() {
		var swiper = new Swiper('.swiper-container', {
		spaceBetween: 30,
		centeredSlides: true,
		preloadImages: true,
		lazy: true,
		autoplay: {
			delay: 2500,
			disableOnInteraction: false,
		},
		
		
		pagination: {
			el: '.swiper-pagination',
			clickable: true,
		},
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
	});
	$('#ca-container').contentcarousel({
			// speed for the sliding animation
			sliderSpeed     : 500,
			// easing for the sliding animation
			sliderEasing    : 'easeOutExpo',
			// speed for the item animation (open / close)
			itemSpeed       : 500,
			// easing for the item animation (open / close)
			itemEasing      : 'easeOutExpo',
			// number of items to scroll at a time
			scroll          : 3
		});
});
</script>
<!--3rd Banner Slider-->
<?php } ?>






<!--Start of Tawk.to Script-->
<!--script type="text/javascript">
	var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
	(function(){
	var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
	s1.async=true;
	s1.src='https://embed.tawk.to/603405659c4f165d47c5f5a2/1ev5ja5qi';
	s1.charset='UTF-8';
	s1.setAttribute('crossorigin','*');
	s0.parentNode.insertBefore(s1,s0);
	})();
</script-->



<!--End of Tawk.to Script-->

<!--MobileMenu Script-->
<script>
	$(".mobile-menu .ti-menu").click(function(){
		$("header nav").show();
		$(".mobile-menu .ti-close").show();
		$("header nav").toggleClass("nav-opened");
	});
	
	$(".mobile-menu .ti-close").click(function(){
		$("header nav").hide();
		$("header nav").removeClass("nav-opened");
	});
	$("body").click(function(e){
		$("header nav").find("nav-opened").css("display,none");
	});
</script>
<!--End of MobilMenu Script-->

<!--gallery-->
<?php
	$uri1 =   $this->uri->segment(1);
	$uri2 =   $this->uri->segment(2);
	if($uri1=='welcome' && $uri2=='gallery') {
	?>
	
	<script defer src="<?php echo base_url(); ?>assets/lib/gallery/js/switcher.js"></script>
	<script defer src="<?php echo base_url(); ?>assets/lib/gallery/js/compressed.js"></script>
	<script defer src="<?php echo base_url(); ?>assets/lib/gallery/js/main.js"></script>
	
<?php } ?>
<!--end of gallery-->

<!-- Global site tag (gtag.js) - Google Analytics -->
<!--script defer src="https://www.googletagmanager.com/gtag/js?id=G-7JY7VX8CL5"></script-->
<script defer src="<?php echo base_url(); ?>assets/js/custom.js"></script>
</body>

</html>
