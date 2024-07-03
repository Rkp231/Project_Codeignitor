<div class="main-header">
  <!-- Logo Header -->
  <div class="logo-header" data-background-color="blue">

    <a href="<?php echo site_url('superadmin/dashboard'); ?>" class="logo">
      <img src="<?php echo base_url(); ?>assets/img/footer-logo.png" alt="navbar brand" class="navbar-brand" height="40"> <span class="color111111 fontbold">Ebenezer Group</span>
    </a>
    <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon">
        <i class="icon-menu"></i>
      </span>
    </button>
    <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
    <div class="nav-toggle">
      <button class="btn btn-toggle toggle-sidebar">
        <i class="icon-menu"></i>
      </button>
    </div>
  </div>
  <!-- End Logo Header -->

  <!-- Navbar Header -->
  <nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">

    <div class="container-fluid">

      <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">





        <li class="nav-item">
          <a href="#" class="nav-link quick-sidebar-toggler">
            <i class="fa fa-th"></i>
          </a>
        </li>
        <li class="nav-item dropdown hidden-caret">
          <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="index.html#" aria-expanded="false">

            <?php
                  $rsa_email = $this->session->userdata('ebe_email');
                  $wl_profileid = $this->session->userdata('ebe_profileid');
                  $adminprofiledetail = $this->msuperadmin->adminprofiledetail($wl_profileid);
                  foreach ($adminprofiledetail as $adminprofiledetailRow) {
                    $emailid =    $adminprofiledetailRow->emailid;
                    $name =    $adminprofiledetailRow->name;
                    $profilepic =    $adminprofiledetailRow->profilepic;
                  }
              ?>


            <div class="avatar-sm">
              <img src="<?php echo base_url(); ?>assets/superadmin/assets/img/profilepic/<?php echo $profilepic;  ?>" alt="..." class="avatar-img rounded-circle">
            </div>
          </a>
          <ul class="dropdown-menu dropdown-user animated fadeIn">
            <div class="dropdown-user-scroll scrollbar-outer">




              <li>
                <div class="user-box">
                  <div class="avatar-lg"><img src="<?php echo base_url(); ?>assets/superadmin/assets/img/profilepic/<?php echo $profilepic;  ?>" alt="image profile" class="avatar-img rounded"></div>
                  <div class="u-text">
                    <h4><?php echo $name; ?></h4>
                    <p class="text-muted"><?php echo $emailid; ?></p><a href="" class="btn btn-xs btn-secondary btn-sm">View Profile</a>
                  </div>
                </div>
              </li>
              <li>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">My Profile</a>

                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Change Password</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Logout</a>
              </li>
            </div>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
  <!-- End Navbar -->
</div>
