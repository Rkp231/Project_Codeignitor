<!--========================================================
                        GALLERY
=========================================================-->
<section class="gallery">
  <div class="container mb80">
    <div class="row">
      <div class="col">
        <div class="section-title">
          <h2 class="wow fadeInUp" data-wow-delay=".2s">Campus Gallery</h2>
          <h3 class="wow fadeInUp" data-wow-delay=".3s">Experience the exuberant energy at our campus events, conferences, master classes, networking sessions, fun informative sessions, and much more...</h3>
        </div>
      </div>
    </div>
  </div>



  <div class="gallery-carousel owl-carousel owl-theme wow fadeInUp" data-wow-delay=".4s">

    <?php for($i=1;$i<=14;$i++) { ?>
    <div class="item">
      <img src="<?php echo base_url(); ?>assets/img/gallery/<?php echo $i; ?>.jpg" alt="" style="height:400px !important;" class="cover">
      <div class="gallery-carousel-content">
        <a href="<?php echo base_url(); ?>assets/img/gallery/<?php echo $i; ?>.jpg" data-fancybox ><i class="ti-image"></i></a>
        <h3>Campus Gallery</h3>
      </div>
    </div>
  <?php } ?>


    <!--
    <div class="item">
      <img src="<?php echo base_url(); ?>assets/img/gallery-2.jpg" alt="">
      <div class="gallery-carousel-content">
        <a href="" data-fancybox><i class="fas fa-play"></i></a>
        <h3>Campus Gallery</h3>
      </div>
    </div>
  -->


  </div>




</section>
