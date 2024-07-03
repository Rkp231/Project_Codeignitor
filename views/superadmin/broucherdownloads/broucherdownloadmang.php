<?php
	$this->load->view('superadmin/include/html-top');
	$this->load->view('superadmin/include/inline-header');
?>

</head>
<body>
	<div class="wrapper">
     <?php
      $this->load->view('superadmin/include/top-menu');
    	$this->load->view('superadmin/include/left-navi');
     ?>

     <?php
     $uri1 = $this->uri->segment(1);
     $uri2 = $this->uri->segment(2);
     $uri3 = $this->uri->segment(3);



     if($uri2=='broucherdownloads' && $uri3=='listformbroucherdownloadsnew') {
        $this->load->view('superadmin/broucherdownloads/list-broucherdownloads-new');
     } else if($uri2=='broucherdownloads' && $uri3=='listformbroucherdownloadslead') {
        $this->load->view('superadmin/broucherdownloads/list-broucherdownloads-lead');
     } else if($uri2=='broucherdownloads' && $uri3=='listformbroucherdownloadsdeleted') {
        $this->load->view('superadmin/broucherdownloads/list-broucherdownloads-deleted');
     }


     ?>



	</div>

  <?php
      $this->load->view('superadmin/include/html-bottom');
  ?>
