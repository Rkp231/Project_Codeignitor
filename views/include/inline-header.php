<!-- Meta tag -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/footer-logo.png" type="image/x-icon">
<!-- Title tag -->
<title>Ebenezer Group of Institutions</title>
<!-- css -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/fontawesome.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/lib/font-awesome/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/themify-icons.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.fancybox.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsive-style.css">



<?php
$uri1 =   $this->uri->segment(1);
$uri2 =   $this->uri->segment(2);
if($uri1=='welcome' && $uri2=='gallery') {
 ?>
 
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/lib/gallery/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/lib/gallery/css/main.css" class="color-switcher-link">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/lib/gallery/css/animations.css">
  <script src="<?php echo base_url(); ?>assets/lib/gallery/js/vendor/modernizr-custom.js"></script>
<?php } ?>

<?php
$uri1 =   $this->uri->segment(1);
$uri2 =   $this->uri->segment(2);
if($uri1=='welcome' && $uri2=='applynow') {
 ?>
 <link rel="stylesheet" href="<?php echo base_url(); ?>assets/lib/form-wizard/css/tmm_form_wizard_style_demo.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/lib/form-wizard/css/grid.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/lib/form-wizard/css/tmm_form_wizard_layout.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/lib/form-wizard/css/fontello.css" />
<?php } ?>



	<!-- Form Validation Css -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/lib/validation/css/validationEngine.jquery.css" type="text/css"/>
	<!-- END Form Validation Css -->


  <!--Slider-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/lib/slider/css/style.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/lib/slider/css/jquery.jscrollpane.css" media="all" />
  <link href="<?php echo base_url(); ?>assets/lib/slider/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
  <!--END Slider-->


  <!--3rd banner slider-->
   <!--link rel="stylesheet" href="<?php echo base_url(); ?>assets/lib/bannerslider-swiper/swiper-bundle.min.css"-->
   <!--end 3rd banner slider-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.5.8/swiper-bundle.min.css" integrity="sha512-eeBbzvdY28BPYqEsAv4GU/Mv48zr7l0cI6yhWyqhgRoNG3sr+Q2Fr6751bA04Cw8SGUawtVZlugHm5H1GOU/TQ==" crossorigin="anonymous" />
<style>
.breadcrumb ul .last_breadcrumb:after{
display: block;
}
.course_category img{margin-bottom: 20px !important;}
section.coursedetailmang-section a.btn-primary{color:#FFF !important;}
.curriculum-pro{background:unset !important;}
.pandt-text{padding:30px;}
.curriculum-pro-text ul li{list-style: disc !important;}
.curriculum-pro-text ul{padding-left: 20px;}
.our-value-section .our-value .item{height:240px;}
.news-item:hover img {
    transform: unset !important;
}
.form-detail-step1 .col-sm-4{margin-bottom:10px;}
.form-detail-step1 .col-sm-4 p{color: red;
    font-size: 12px;}
	
.form-detail-step1 .wrap-input100{height: 70px !important;margin-bottom:0 !important;}

#formID-2 #pinstitutename{
	background-color: unset !important;
	border: none !important;
    outline: none !important;
	padding:0 !important;
	box-shadow:none;
}
section.news #content .prev,section.news #content .next{
	display:inline-block !important;
}
section.news #content .prev button,section.news #content .next button{
	color: #fff !important;
    background-color: #2E5C88 !important;
    border: 2px solid #2E5C88 !important;
}
#tmm-form-wizard .prev.steps2-mob-prev .button.button-control span:after {
    left: 9px;
    content: '\e8bb';
}

.reset-pass-btn-div{padding:15px;}
.container.course_category .col-md-4 img{
	width:100%;
	height:210px;
}
.addon-heading{margin-top: 50px !important;}
.addon-main-apply-btn{
	position: absolute;
    bottom: 30px;
    width: 100%;
	}
.news-item.bxw.box-div img{
	width: 100%;
    height: 300px;
}

section.breadcrumb .galary-breadcrumb-background li:after{
	position: absolute;
	top: 0px !important;
    right: -12px !important;
}
.galary-last_breadcrumb{
	color: #000 !important;
}

[class*="-item"] .links-wrap a.link-zoom {
    background-color: #FFF;
    border-color: #FFF;
    color: #fff;
}

.about-main-img-section .item-with-img .item-text {
    padding: 30px 15px !important;
}

.about-img-div
{
	text-align: center;
}
.about-img-div img{
    border-top-left-radius: 50px;
    border-bottom-right-radius: 50px;
}
.bank-details-tbl-div{text-align:center;}

.bank-details-tbl-div h1{margin-bottom: 20px;}

.bank-details-tbl-div table{
	width: 50%;
	margin: 30px auto;
	margin-bottom:30px;
}

.bank-details-tbl-div table tr td{
	padding: 10px 20px;
	text-align: left;
	width: 50%;
}

.bank-details-tbl-div img{
	width: 100%;
    max-width: 600px;
    margin: 0 auto;
}

.form-detail #religion{text-transform: capitalize !important;}

.QR-code-desktop{display:block;}
.QR-code-mobile{display:none;}

@media(max-width: 767px){
.addon-main-apply-btn{
    position: absolute;
    bottom: 0px !important;
    width: 100%;
}

.news-item.bxw.box-div img{
	width: 100%;
    height: auto !important;
}

body .addon-main-apply-btn a.btn{
	font-size: 14px !important;
    padding: 5px 10px !important;
}
section.breadcrumb{
   padding: 0px !important;
	border-radius: 0 !important;
}
.breadcrumb-background{
	width:100%;
	height:100%;
	background: linear-gradient(
90deg
, rgba(0,30,98,1) 0%, rgba(0,30,98,1) 0%, rgba(0,30,98,1) 47%, rgba(0,30,98,1) 97%, rgba(0,30,98,1) 100%, rgba(0,30,98,1) 100%);
    opacity: .8;
	padding: 50px 0px!important;
}
section.breadcrumb .breadcrumb-background:before{
	display:none;
}

.mobile-menu-signin-btn a.register{
	background-color: #2E5C88!important;
    color: #FFF !important;
}
.swiper-button-next:after,.swiper-button-prev:after{
	font-size: 24px;
}
.swiper-button-prev{left:20px !important;}
.swiper-button-next{right:20px !important;}
.curriculum-pro-text{padding-bottom: 30px !important;}
.about-main-img-section h2{font-size:25px !important;}
.about-curriculum-item-img-desktop{display:none !important;}
.about-curriculum-item-img-mob{display:block !important;}
.our-value-section .our-value .item{height:290px !important;}
.our-value-section .our-value .item a{padding: 10px 20px !important;}
.about-us-space{display:none;}
.mt-coreteam-section{margin-top:0 !important;}
.our-value-section .our-value-carousel{margin-top: 20px !important;}
.pandt-text h2{font-size:25px !important;margin-bottom: 10px;}
.tandp-main-section{padding-bottom:0 !important;}
.clubandassociation-section,.facilities-section{padding-top:0 !important;}
.clubandassociation-section h2,.facilities-section h2{font-size:25px !important;margin-bottom: 10px;}
.clubandassociation-section p.club-pspace,.facilities-section p.facilities-pspace{display:none;}
section.breadcrumb .galary-breadcrumb-background:before{
position: absolute;
    top: 0 !important;
    right: 0;
    bottom: 0 !important;
    left: 0;	
}
.galary-last_breadcrumb{color:#000 !important;}
section.breadcrumb .galary-breadcrumb-background li:after{
	position: absolute;
	top: 0px !important;
    right: -8px !important;
}
.apply-form-padding .feature-item h3{margin-top: 0px !important;
    font-size: 24px !important;}
.contact_page_mt,.contact-mt80{margin-top: 30px !important;}
.col_12_validate{margin-top: 10px;}
section.news .upload-doc-table tr td:first-child{display:none;}
.upload-doc-table-div{
	width: 100%;
    overflow: auto;
}
section.news .upload-doc-table tr td input[type="submit"]{margin-top:10px !important;}
section.news #tmm-form-wizard .stage.tmm-success .stage-header:after{position: absolute;top: 5px !important;}
section.news .steps2-mob{margin-bottom: 20px;}
section.news #content .prev,section.news #content .next{
	display:inline-block !important;
}
section.news #content .prev a.register{
	padding:0 !important;
}
.steps2-mob-personaldetails{
	margin: 0 !important;
    padding: 0 !important;
}

.bank-details-tbl-div h1{
	margin-top:30px;
	font-size:30px;
}

.bank-details-tbl-div table{
	width: 100%;
	margin: 30px auto;
}
.QR-code-desktop{display:none;}
.QR-code-mobile{display:block;}
}
@media (min-width: 576px) and (max-width: 767px)
{
	body #tmm-form-wizard .stage{max-width: 100% !important;
    flex: unset !important;}
}
@media (min-width: 768px) and (max-width: 1024px)
{
	#tmm-form-wizard .stage.tmm-success .stage-header:after
	{
		position: absolute;
		top: 55px !important;
	}
	
	.news-item.bxw.box-div img {
    width: 100%;
    height: 150px !important;
    }
}
header {
    background: #fff;
}
</style>
</head>

<body>
