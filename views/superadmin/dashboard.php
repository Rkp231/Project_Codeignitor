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



		<div class="main-panel">
			<div class="container">
				<div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h2 class="text-white pb-2 fw-bold">Dashboard</h2>
								<h5 class="text-white op-7 mb-2">Ebenezer Group of Institutions</h5>
							</div>
							<div class="ml-md-auto py-2 py-md-0">
								<a href="#" class="btn btn-white btn-border btn-round mr-2">Manage</a>
								<a href="#" class="btn btn-secondary btn-round">Reports</a>
							</div>
						</div>
					</div>
				</div>
				<div class="page-inner mt--5">
					<div class="row mt--2">
						<div class="col-md-6">
							<div class="card full-height">
								<div class="card-body">
									<div class="card-title">Overall statistics</div>
									<div class="card-category">Daily information about statistics in system</div>
									<div class="d-flex flex-wrap justify-content-around pb-2 pt-4">
										<div class="px-2 pb-2 pb-md-0 text-center">
											<div id="circles-1"></div>
											<h6 class="fw-bold mt-3 mb-0">Application Forms</h6>
										</div>
										<div class="px-2 pb-2 pb-md-0 text-center">
											<div id="circles-2"></div>
											<h6 class="fw-bold mt-3 mb-0">Download Brouchers</h6>
										</div>
										<div class="px-2 pb-2 pb-md-0 text-center">
											<div id="circles-3"></div>
											<h6 class="fw-bold mt-3 mb-0">Website Enquries</h6>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="card full-height">
								<div class="card-body">
									<div class="card-title">Blog statistics</div>
									<div class="row py-3">
										<div class="col-md-4 d-flex flex-column justify-content-around">
											<div>
												<h6 class="fw-bold text-uppercase text-success op-8">Total Views</h6>
												<h3 class="fw-bold">0</h3>
											</div>
											<div>
												<h6 class="fw-bold text-uppercase text-danger op-8">Today Views</h6>
												<h3 class="fw-bold">0</h3>
											</div>
										</div>
										<div class="col-md-8">
											<div id="chart-container">
												<canvas id="totalIncomeChart"></canvas>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>







					<div class="row">
						<div class="col-md-6">
							<div class="card full-height">
								<div class="card-header">
									<div class="card-head-row">
										<div class="card-title">Download Broucher</div>
										<div class="card-tools">
											<ul class="nav nav-pills nav-secondary nav-pills-no-bd nav-sm" id="pills-tab" role="tablist">
												<li class="nav-item">
													<?php
													$sday = date('d');
		 										 $smonth = date('m');
		 										 $syear	= date('Y');
												 ?>
													<a class="nav-link active" id="pills-today" >Today - <?php

													$totaldownloads = $this->msuperadmin->count_listdownloadbroucherslistbydate($sday,$smonth,$syear);
													echo $totaldownloads;
													?></a>
												</li>

											</ul>
										</div>
									</div>
								</div>
								<div class="card-body">
									<ol class="activity-feed">

										<?php

			               $listdownloadbroucherslist = $this->msuperadmin->listdownloadbroucherslistbydate($sday,$smonth,$syear);
			              foreach ($listdownloadbroucherslist as $arrayRow) {
			                $bid =    $arrayRow->bid;
			                $name =    $arrayRow->name;
			                $mobileno =    $arrayRow->mobileno;
			                $emailid =    $arrayRow->emailid;
			                $status =    $arrayRow->status;

			                $sday =    $arrayRow->sday;
			                $smonth =    $arrayRow->smonth;
											$syear =    $arrayRow->syear;
			                $subdatetime =    $arrayRow->subdatetime;


			               ?>
										<li class="feed-item feed-item-success">
											<time class="date" datetime="9-25"><?php echo $subdatetime; ?></time>
											<a href="<?php echo site_url('superadmin/broucherdownloads/listformbroucherdownloads'); ?>"><small><span class="text"><?php echo $name; ?>, <?php echo $mobileno; ?></span></small></a>
										</li>
									<?php }

									if($totaldownloads==0) { ?>

										<li class="feed-item feed-item-warning">
 											<a><small><span class="text">No Broucher has been download today</span></small></a>
										</li>

									<?php
									}
									?>

									</ol>
								</div>
							</div>
						</div>




						<div class="col-md-6">
							<div class="card full-height">
								<div class="card-header">
									<div class="card-head-row">
										<div class="card-title">Application Submitted</div>
										<div class="card-tools">
											<ul class="nav nav-pills nav-secondary nav-pills-no-bd nav-sm" id="pills-tab" role="tablist">
												<li class="nav-item">
													<a class="nav-link active" id="pills-today" >Today - <?php

													$totalapplications = $this->msuperadmin->count_listapplicationformlistbydate($sday,$smonth,$syear);
													echo $totalapplications;
													?></a>
												</li>

											</ul>
										</div>
									</div>
								</div>
								<div class="card-body">



									<?php
		               $listapplicationformlist = $this->msuperadmin->listapplicationformlistbydate($sday,$smonth,$syear);
		              foreach ($listapplicationformlist as $arrayRow) {
		                $applicationid =    $arrayRow->applicationid;
		                $emailid =    $arrayRow->emailid;
		                $profileid =    $arrayRow->profileid;
		                $status =    $arrayRow->status;

		                $sday =    $arrayRow->sday;
		                $smonth =    $arrayRow->smonth;
		                $syear =    $arrayRow->syear;

		                $salut = $arrayRow->salut;
		                $name = $arrayRow->name;
		                $gender = $arrayRow->gender;
		                $dob = $arrayRow->dob;
		                $catagory = $arrayRow->catagory;
		                $studentmobileno = $arrayRow->studentmobileno;
										$studentemail = $arrayRow->studentemail;

		                $subdatetime = $arrayRow->subdatetime;




		               ?>
									<div class="d-flex">
										<div class="avatar avatar-online">
											<span class="avatar-title rounded-circle border border-white bg-info">></span>
										</div>


										<div class="flex-1 ml-3 pt-1">
											<a target="_blank" href="<?php echo site_url('superadmin/applicationform/detailform/'.$applicationid.''); ?>">
											<h6 class="text-uppercase fw-bold mb-1"><?php echo $name; ?>
 											</h6>
										  </a>
											<small><span class="text-muted">
												     <?php echo $studentmobileno; ?>,<br/>
														  <?php echo $studentemail; ?>,<br/>
														 <span class="text-warning">New</span></span>
											</small>
										</div>


										<div class="float-right pt-1">
											<small class="text-muted"><?php echo $subdatetime; ?></small>
										</div>
									</div>
									<div class="separator-dashed"></div>

								<?php }

								if($totalapplications==0) {
									?>
									<ol class="activity-feed">
									<li class="feed-item feed-item-warning">
										<a><small><span class="text">No Application has been submitted today</span></small></a>
									</li>
								  </ol>
								<?php
								}
								?>







								</div>
							</div>
						</div>




					</div>
				</div>
			</div>
      <?php
        $this->load->view('superadmin/include/footer');
       ?>
		</div>



	</div>


  <?php
    $this->load->view('superadmin/include/html-bottom');
   ?>
