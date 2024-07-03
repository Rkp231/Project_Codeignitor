<?php
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
<div class="breadcrumb-background galary-breadcrumb-background">
  <div class="container">
    <div class="row">
      <div class="col">
        <h1>Gallery</h1>
        <ul>
          <li><a href="<?php echo site_url('welcome/index'); ?>">Home</a></li>
          <li><a href="<?php echo site_url('welcome/studentcorner'); ?>">Student Corner</a></li>
          <li class="last_breadcrumb galary-last_breadcrumb">Gallery</li>
        </ul>
      </div>
    </div>
  </div>
  </div>
</section>


    			<section class="ls s-py-60 s-py-md-130">
  				<div class="container">
  					<div class="row">

  						<div class="d-none d-lg-block divider-30"></div>

  						<div class="col-lg-12">

               <?php /*
                <div class="row justify-content-center">
								<div class="col-md-10 col-xl-8">
									<div class="filters gallery-filters small-text text-lg-right">
										<a href="#" data-filter="*" class="active selected">All Images</a>
										<a href="#" data-filter=".corporate">Special Day</a>
										<a href="#" data-filter=".business">Events</a>
										<a href="#" data-filter=".entertainment">CSR Activities</a>
										<a href="#" data-filter=".innovations">Campus</a>
									</div>
								</div>
							</div> */ ?>



  							<div class="row isotope-wrapper masonry-layout c-mb-30" data-filters=".gallery-filters">

  								<div class="col-xl-4 col-sm-6 business">

  									<div class="vertical-item item-gallery content-absolute text-center ls">
  										<div class="item-media">
  											<img src="<?php echo base_url(); ?>assets/lib/gallery/images/12.jpeg" alt="">
  											<div class="media-links">
  												<div class="links-wrap">
  													<a class="link-zoom photoswipe-link" title="" href="<?php echo base_url(); ?>assets/lib/gallery/images/12.jpeg"></a>

  												</div>
  											</div>
  										</div>
  										<div class="item-content">
  											<h5>
  												<a href="gallery-single.html"></a>
  											</h5>
  										</div>
  									</div>

  								</div>

  								<div class="col-xl-4 col-sm-6 business">
  									<div class="vertical-item item-gallery content-absolute text-center ls">
  										<div class="item-media">
  											<img src="<?php echo base_url(); ?>assets/lib/gallery/images/11.jpeg" alt="">
  											<div class="media-links">
  												<div class="links-wrap">
  													<a class="link-zoom photoswipe-link" title="" href="<?php echo base_url(); ?>assets/lib/gallery/images/11.jpeg"></a>

  												</div>
  											</div>
  										</div>

  									</div>
  								</div>

  								<div class="col-xl-4 col-sm-6 business">
  									<div class="vertical-item item-gallery content-absolute text-center ls">
  										<div class="item-media">
  											<img src="<?php echo base_url(); ?>assets/lib/gallery/images/13.jpeg" alt="">
  											<div class="media-links">
  												<div class="links-wrap">
  													<a class="link-zoom photoswipe-link" title="" href="<?php echo base_url(); ?>assets/lib/gallery/images/13.jpeg"></a>

  												</div>
  											</div>
  										</div>

  									</div>
  								</div>

  								<div class="col-xl-4 col-sm-6 business">
  									<div class="vertical-item item-gallery content-absolute text-center ls">
  										<div class="item-media">
  											<img src="<?php echo base_url(); ?>assets/lib/gallery/images/14.jpeg" alt="">
  											<div class="media-links">
  												<div class="links-wrap">
  													<a class="link-zoom photoswipe-link" title="" href="<?php echo base_url(); ?>assets/lib/gallery/images/14.jpeg"></a>

  												</div>
  											</div>
  										</div>

  									</div>
  								</div>

  								<div class="col-xl-4 col-sm-6 business">
  									<div class="vertical-item item-gallery content-absolute text-center ls">
  										<div class="item-media">
  											<img src="<?php echo base_url(); ?>assets/lib/gallery/images/15.jpeg" alt="">
  											<div class="media-links">
  												<div class="links-wrap">
  													<a class="link-zoom photoswipe-link" title="" href="<?php echo base_url(); ?>assets/lib/gallery/images/15.jpeg"></a>

  												</div>
  											</div>
  										</div>

  									</div>
  								</div>

  								<div class="col-xl-4 col-sm-6 corporate">
  									<div class="vertical-item item-gallery content-absolute text-center ls">
  										<div class="item-media">
  											<img src="<?php echo base_url(); ?>assets/lib/gallery/images/16.jpeg" alt="">
  											<div class="media-links">
  												<div class="links-wrap">
  													<a class="link-zoom photoswipe-link" title="" href="<?php echo base_url(); ?>assets/lib/gallery/images/16.jpeg"></a>

  												</div>
  											</div>
  										</div>

  									</div>
  								</div>

  								<div class="col-xl-4 col-sm-6 corporate">
  									<div class="vertical-item item-gallery content-absolute text-center ls">
  										<div class="item-media">
  											<img src="<?php echo base_url(); ?>assets/lib/gallery/images/17.jpeg" alt="">
  											<div class="media-links">
  												<div class="links-wrap">
  													<a class="link-zoom photoswipe-link" title="" href="<?php echo base_url(); ?>assets/lib/gallery/images/17.jpeg"></a>

  												</div>
  											</div>
  										</div>

  									</div>
  								</div>

  								<div class="col-xl-4 col-sm-6 corporate">
  									<div class="vertical-item item-gallery content-absolute text-center ls">
  										<div class="item-media">
  											<img src="<?php echo base_url(); ?>assets/lib/gallery/images/18.jpeg" alt="">
  											<div class="media-links">
  												<div class="links-wrap">
  													<a class="link-zoom photoswipe-link" title="" href="<?php echo base_url(); ?>assets/lib/gallery/images/18.jpeg"></a>

  												</div>
  											</div>
  										</div>

  									</div>
  								</div>

  								<div class="col-xl-4 col-sm-6 corporate">

  									<div class="vertical-item item-gallery content-absolute text-center ls">
  										<div class="item-media">
  											<img src="<?php echo base_url(); ?>assets/lib/gallery/images/9.jpg" alt="">
  											<div class="media-links">
  												<div class="links-wrap">
  													<a class="link-zoom photoswipe-link" title="" href="<?php echo base_url(); ?>assets/lib/gallery/images/9.jpg"></a>

  												</div>
  											</div>
  										</div>

  									</div>

  								</div>

                  <div class="col-xl-4 col-sm-6 corporate">

                    <div class="vertical-item item-gallery content-absolute text-center ls">
                      <div class="item-media">
                        <img src="<?php echo base_url(); ?>assets/lib/gallery/images/10.jpg" alt="">
                        <div class="media-links">
                          <div class="links-wrap">
                            <a class="link-zoom photoswipe-link" title="" href="<?php echo base_url(); ?>assets/lib/gallery/images/10.jpg"></a>

                          </div>
                        </div>
                      </div>

                    </div>

                  </div>
				  
                  <div class="col-xl-4 col-sm-6 corporate">

                    <div class="vertical-item item-gallery content-absolute text-center ls">
                      <div class="item-media">
                        <img src="<?php echo base_url(); ?>assets/lib/gallery/images/gal1.jpg" alt="">
                        <div class="media-links">
                          <div class="links-wrap">
                            <a class="link-zoom photoswipe-link" title="" href="<?php echo base_url(); ?>assets/lib/gallery/images/gal1.jpg"></a>

                          </div>
                        </div>
                      </div>

                    </div>

                  </div>
				    <div class="col-xl-4 col-sm-6 corporate">

                    <div class="vertical-item item-gallery content-absolute text-center ls">
                      <div class="item-media">
                        <img src="<?php echo base_url(); ?>assets/lib/gallery/images/gal2.jpg" alt="">
                        <div class="media-links">
                          <div class="links-wrap">
                            <a class="link-zoom photoswipe-link" title="" href="<?php echo base_url(); ?>assets/lib/gallery/images/gal2.jpg"></a>

                          </div>
                        </div>
                      </div>

                    </div>

                  </div>
				   <div class="col-xl-4 col-sm-6 corporate">

                    <div class="vertical-item item-gallery content-absolute text-center ls">
                      <div class="item-media">
                        <img src="<?php echo base_url(); ?>assets/lib/gallery/images/gal4.jpeg" alt="">
                        <div class="media-links">
                          <div class="links-wrap">
                            <a class="link-zoom photoswipe-link" title="" href="<?php echo base_url(); ?>assets/lib/gallery/images/gal4.jpeg"></a>

                          </div>
                        </div>
                      </div>

                    </div>

                  </div>
				   <div class="col-xl-4 col-sm-6 corporate">

                    <div class="vertical-item item-gallery content-absolute text-center ls">
                      <div class="item-media">
                        <img src="<?php echo base_url(); ?>assets/lib/gallery/images/gal3.jpeg" alt="">
                        <div class="media-links">
                          <div class="links-wrap">
                            <a class="link-zoom photoswipe-link" title="" href="<?php echo base_url(); ?>assets/lib/gallery/images/gal3.jpeg"></a>

                          </div>
                        </div>
                      </div>

                    </div>

                  </div>
				  
                <?php /*
                  <div class="col-xl-4 col-sm-6 corporate">

  									<div class="vertical-item item-gallery content-absolute text-center ls">
  										<div class="item-media">
  											<img src="<?php echo base_url(); ?>assets/lib/gallery/images/11.jpg" alt="">
  											<div class="media-links">
  												<div class="links-wrap">
  													<a class="link-zoom photoswipe-link" title="" href="<?php echo base_url(); ?>assets/lib/gallery/images/11.jpg"></a>

  												</div>
  											</div>
  										</div>

  									</div>

  								</div>

                  <div class="col-xl-4 col-sm-6 corporate">

  									<div class="vertical-item item-gallery content-absolute text-center ls">
  										<div class="item-media">
  											<img src="<?php echo base_url(); ?>assets/lib/gallery/images/12.jpg" alt="">
  											<div class="media-links">
  												<div class="links-wrap">
  													<a class="link-zoom photoswipe-link" title="" href="<?php echo base_url(); ?>assets/lib/gallery/images/12.jpg"></a>

  												</div>
  											</div>
  										</div>

  									</div>

  								</div>

                  <div class="col-xl-4 col-sm-6 corporate">

  									<div class="vertical-item item-gallery content-absolute text-center ls">
  										<div class="item-media">
  											<img src="<?php echo base_url(); ?>assets/lib/gallery/images/13.jpg" alt="">
  											<div class="media-links">
  												<div class="links-wrap">
  													<a class="link-zoom photoswipe-link" title="" href="<?php echo base_url(); ?>assets/lib/gallery/images/13.jpg"></a>

  												</div>
  											</div>
  										</div>

  									</div>

  								</div>

                  <div class="col-xl-4 col-sm-6 corporate">

  									<div class="vertical-item item-gallery content-absolute text-center ls">
  										<div class="item-media">
  											<img src="<?php echo base_url(); ?>assets/lib/gallery/images/14.jpg" alt="">
  											<div class="media-links">
  												<div class="links-wrap">
  													<a class="link-zoom photoswipe-link" title="" href="<?php echo base_url(); ?>assets/lib/gallery/images/14.jpg"></a>
  												</div>
  											</div>
  										</div>
  									</div>

  								</div>

                  <div class="col-xl-4 col-sm-6 innovations">

  									<div class="vertical-item item-gallery content-absolute text-center ls">
  										<div class="item-media">
  											<img src="<?php echo base_url(); ?>assets/lib/gallery/images/15.jpg" alt="">
  											<div class="media-links">
  												<div class="links-wrap">
  													<a class="link-zoom photoswipe-link" title="" href="<?php echo base_url(); ?>assets/lib/gallery/images/15.jpg"></a>

  												</div>
  											</div>
  										</div>
  										<div class="item-content">
  											<h5>
  												<a href="gallery-single.html"></a>
  											</h5>
  										</div>
  									</div>

  								</div>

                  <div class="col-xl-4 col-sm-6 innovations">

  									<div class="vertical-item item-gallery content-absolute text-center ls">
  										<div class="item-media">
  											<img src="<?php echo base_url(); ?>assets/lib/gallery/images/16.jpg" alt="">
  											<div class="media-links">
  												<div class="links-wrap">
  													<a class="link-zoom photoswipe-link" title="" href="<?php echo base_url(); ?>assets/lib/gallery/images/16.jpg"></a>
  												</div>
  											</div>
  										</div>
  									</div>

  								</div>

                  <div class="col-xl-4 col-sm-6 innovations">

  									<div class="vertical-item item-gallery content-absolute text-center ls">
  										<div class="item-media">
  											<img src="<?php echo base_url(); ?>assets/lib/gallery/images/17.jpg" alt="">
  											<div class="media-links">
  												<div class="links-wrap">
  													<a class="link-zoom photoswipe-link" title="" href="<?php echo base_url(); ?>assets/lib/gallery/images/17.jpg"></a>
  												</div>
  											</div>
  										</div>
  									</div>

  								</div>

                  <div class="col-xl-4 col-sm-6 entertainment">

  									<div class="vertical-item item-gallery content-absolute text-center ls">
  										<div class="item-media">
  											<img src="<?php echo base_url(); ?>assets/lib/gallery/images/18.jpg" alt="">
  											<div class="media-links">
  												<div class="links-wrap">
  													<a class="link-zoom photoswipe-link" title="" href="<?php echo base_url(); ?>assets/lib/gallery/images/18.jpg"></a>
  												</div>
  											</div>
  										</div>
  									</div>

  								</div>

                  <div class="col-xl-4 col-sm-6 entertainment">

  									<div class="vertical-item item-gallery content-absolute text-center ls">
  										<div class="item-media">
  											<img src="<?php echo base_url(); ?>assets/lib/gallery/images/19.jpg" alt="">
  											<div class="media-links">
  												<div class="links-wrap">
  													<a class="link-zoom photoswipe-link" title="" href="<?php echo base_url(); ?>assets/lib/gallery/images/19.jpg"></a>
  												</div>
  											</div>
  										</div>
  									</div>

  								</div>

                  <div class="col-xl-4 col-sm-6 entertainment">

  									<div class="vertical-item item-gallery content-absolute text-center ls">
  										<div class="item-media">
  											<img src="<?php echo base_url(); ?>assets/lib/gallery/images/20.jpg" alt="">
  											<div class="media-links">
  												<div class="links-wrap">
  													<a class="link-zoom photoswipe-link" title="" href="<?php echo base_url(); ?>assets/lib/gallery/images/20.jpg"></a>
  												</div>
  											</div>
  										</div>
  									</div>

  								</div>

                  <div class="col-xl-4 col-sm-6 entertainment">

  									<div class="vertical-item item-gallery content-absolute text-center ls">
  										<div class="item-media">
  											<img src="<?php echo base_url(); ?>assets/lib/gallery/images/21.jpg" alt="">
  											<div class="media-links">
  												<div class="links-wrap">
  													<a class="link-zoom photoswipe-link" title="" href="<?php echo base_url(); ?>assets/lib/gallery/images/21.jpg"></a>
  												</div>
  											</div>
  										</div>
  									</div>

  								</div>

                  <div class="col-xl-4 col-sm-6 entertainment">

  									<div class="vertical-item item-gallery content-absolute text-center ls">
  										<div class="item-media">
  											<img src="<?php echo base_url(); ?>assets/lib/gallery/images/22.jpg" alt="">
  											<div class="media-links">
  												<div class="links-wrap">
  													<a class="link-zoom photoswipe-link" title="" href="<?php echo base_url(); ?>assets/lib/gallery/images/22.jpg"></a>
  												</div>
  											</div>
  										</div>
  									</div>

  								</div>

                  <div class="col-xl-4 col-sm-6 entertainment">

  									<div class="vertical-item item-gallery content-absolute text-center ls">
  										<div class="item-media">
  											<img src="<?php echo base_url(); ?>assets/lib/gallery/images/23.jpg" alt="">
  											<div class="media-links">
  												<div class="links-wrap">
  													<a class="link-zoom photoswipe-link" title="" href="<?php echo base_url(); ?>assets/lib/gallery/images/23.jpg"></a>
  												</div>
  											</div>
  										</div>
  									</div>

  								</div> */ ?>

  							</div>
  							<!-- .isotope-wrapper

  							<div class="row">
  								<div class="col-sm-12 text-center">
  									<a href="#" class="btn btn-outline-maincolor">Load More</a>
  								</div>
  							</div>-->

  						</div>

  						<div class="d-none d-lg-block divider-30"></div>
  					</div>

  				</div>
  			</section>

<?php

$this->load->view('include/html-bottom');
$this->load->view('include/footer');

?>
