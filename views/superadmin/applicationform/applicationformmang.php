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



     if($uri2=='applicationform' && $uri3=='listformnew') {
        $this->load->view('superadmin/applicationform/list-applicationform-new');
    } else if($uri2=='applicationform' && $uri3=='detailform') {
			 $this->load->view('superadmin/applicationform/detail-applicationform');
		 } else if($uri2=='applicationform' && $uri3=='listformselected') {
 			 $this->load->view('superadmin/applicationform/list-applicationform-selected');
 		 } else if($uri2=='applicationform' && $uri3=='listformrejected') {
 			 $this->load->view('superadmin/applicationform/list-applicationform-rejected');
 		 }


     ?>



	</div>

  <?php
      $this->load->view('superadmin/include/html-bottom');
  ?>
