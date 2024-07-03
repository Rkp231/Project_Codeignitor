<?php
$uri1 = $this->uri->segment(1);
$uri2 = $this->uri->segment(2);
$uri3 = $this->uri->segment(3);
$uri4 = $this->uri->segment(4);
?>

<!-- Sidebar -->
<div class="sidebar sidebar-style-2">
  <div class="sidebar-wrapper scrollbar scrollbar-inner">
    <div class="sidebar-content">
      <div class="user">
        <?php
              $rsa_email = $this->session->userdata('ebe_email');
              $wl_profileid = $this->session->userdata('ebe_profileid');
              $adminprofiledetail = $this->msuperadmin->adminprofiledetail($wl_profileid);
              foreach ($adminprofiledetail as $adminprofiledetailRow) {
                $emailid =    $adminprofiledetailRow->emailid;
                $name =    $adminprofiledetailRow->name;
                $designation =    $adminprofiledetailRow->designation;
                $profilepic =    $adminprofiledetailRow->profilepic;
              }
          ?>


        <div class="avatar-sm float-left mr-2">
          <img src="<?php echo base_url(); ?>assets/superadmin/assets/img/profilepic/<?php echo $profilepic;  ?>" alt="..." class="avatar-img rounded-circle">
        </div>
        <div class="info">
          <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
            <span>
              <?php echo $name; ?>
              <span class="user-level"><?php echo $designation; ?></span>
              <span class="caret"></span>
            </span>
          </a>
          <div class="clearfix"></div>

          <div class="collapse in" id="collapseExample">
            <ul class="nav">
              <li>
                <a href="#profile">
                  <span class="link-collapse">My Profile</span>
                </a>
              </li>
              <li>
                <a href="#edit">
                  <span class="link-collapse">Edit Profile</span>
                </a>
              </li>
              <li>
                <a href="#settings">
                  <span class="link-collapse">Change password</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <ul class="nav nav-primary">
        <li class="nav-item <?php  if($uri2=='dashboard') { echo 'active'; } ?>">
          <a  href="<?php echo site_url('superadmin/dashboard') ?>">
            <i class="fas fa-home"></i>
            <p>Dashboard</p>
           </a>

        </li>
        <li class="nav-section">
          <span class="sidebar-mini-icon">
            <i class="fa fa-ellipsis-h"></i>
          </span>
          <h4 class="text-section">Main Menu</h4>
        </li>



        <li class="nav-item <?php  if($uri2=='applicationform') { echo 'active'; } ?>">
          <a data-toggle="collapse" href="#appform">
            <i class="fas fa-layer-group"></i>
            <p>Application Forms</p>
            <span class="caret"></span>
          </a>
          <div class="collapse <?php  if($uri2=='applicationform') { echo 'show'; } ?>" id="appform">
            <ul class="nav nav-collapse">
              <li class="<?php  if($uri2=='applicationform' && $uri3=='listformnew') { echo 'active'; } ?>">
                <a href="<?php echo site_url('superadmin/applicationform/listformnew') ?>">
                  <span class="sub-item">Form List</span>
                </a>
              </li>

              <li class="<?php  if($uri2=='applicationform' && $uri3=='listformselected') { echo 'active'; } ?>">
                <a href="<?php echo site_url('superadmin/applicationform/listformselected') ?>">
                  <span class="sub-item">Selected List</span>
                </a>
              </li>

              <li class="<?php  if($uri2=='applicationform' && $uri3=='listformrejected') { echo 'active'; } ?>">
                <a href="<?php echo site_url('superadmin/applicationform/listformrejected') ?>">
                  <span class="sub-item">Rejected List</span>
                </a>
              </li>


            </ul>
          </div>
        </li>



        <li class="nav-item <?php  if($uri2=='broucherdownloads') { echo 'active'; } ?>">
          <a data-toggle="collapse" href="#bdownloads">
            <i class="fas fa-layer-group"></i>
            <p>Broucher Downloads</p>
            <span class="caret"></span>
          </a>
          <div class="collapse <?php  if($uri2=='broucherdownloads') { echo 'show'; } ?>" id="bdownloads">
            <ul class="nav nav-collapse">
              <li class="<?php  if($uri2=='broucherdownloads' && $uri3=='listformbroucherdownloadsnew') { echo 'active'; } ?>">
                <a href="<?php echo site_url('superadmin/broucherdownloads/listformbroucherdownloadsnew') ?>">
                  <span class="sub-item">New</span>
                </a>
              </li>

              <li class="<?php  if($uri2=='broucherdownloads' && $uri3=='listformbroucherdownloadslead') { echo 'active'; } ?>">
                <a href="<?php echo site_url('superadmin/broucherdownloads/listformbroucherdownloadslead') ?>">
                  <span class="sub-item">Leads</span>
                </a>
              </li>

              <li class="<?php  if($uri2=='broucherdownloads' && $uri3=='listformbroucherdownloadsdeleted') { echo 'active'; } ?>">
                <a href="<?php echo site_url('superadmin/broucherdownloads/listformbroucherdownloadsdeleted') ?>">
                  <span class="sub-item">Fake / Deleted</span>
                </a>
              </li>


            </ul>
          </div>
        </li>


        <?php /*
        <li class="nav-item">
          <a data-toggle="collapse" href="#blog">
            <i class="fas fa-th-list"></i>
            <p>Blog</p>
            <span class="caret"></span>
          </a>
          <div class="collapse" id="blog">
            <ul class="nav nav-collapse">

              <li>
                <a href="">
                  <span class="sub-item">Category Mang</span>
                </a>
              </li>
              <li>
                <a href="">
                  <span class="sub-item">Add blog post</span>
                </a>
              </li>
              <li>
                <a href="">
                  <span class="sub-item">View blog list</span>
                </a>
              </li>

              <li>
                <a href="">
                  <span class="sub-item">Deleted List</span>
                </a>
              </li>

            </ul>
          </div>
        </li>


        <li class="nav-item">
          <a data-toggle="collapse" href="#studentmang">
            <i class="fas fa-th-list"></i>
            <p>Students Manag</p>
            <span class="caret"></span>
          </a>
          <div class="collapse" id="studentmang">
            <ul class="nav nav-collapse">

              <li>
                <a href="">
                  <span class="sub-item">Registered Users</span>
                </a>
              </li>
              <li>
                <a href="">
                  <span class="sub-item">Blocked Users</span>
                </a>
              </li>


            </ul>
          </div>
        </li>


        <li class="nav-item">
          <a data-toggle="collapse" href="#studentmang">
            <i class="fas fa-th-list"></i>
            <p>Alumini Manag</p>
            <span class="caret"></span>
          </a>
          <div class="collapse" id="studentmang">
            <ul class="nav nav-collapse">

              <li>
                <a href="">
                  <span class="sub-item">Alumini Users</span>
                </a>
              </li>
              <li>
                <a href="">
                  <span class="sub-item">Blocked Users</span>
                </a>
              </li>


            </ul>
          </div>
        </li>
        */ ?>

        <li class="nav-item">
          <a data-toggle="collapse" href="#webqueries">
            <i class="fas fa-th-list"></i>
            <p>Website Enquires</p>
           </a>
         </li>

         <?php /*
         <li class="nav-item">
           <a data-toggle="collapse" href="#eventmang">
             <i class="fas fa-th-list"></i>
             <p>Events Manag</p>
             <span class="caret"></span>
           </a>
           <div class="collapse" id="eventmang">
             <ul class="nav nav-collapse">

               <li>
                 <a href="">
                   <span class="sub-item">Add Events</span>
                 </a>
               </li>
               <li>
                 <a href="">
                   <span class="sub-item">View Events</span>
                 </a>
               </li>


             </ul>
           </div>
         </li>


         <li class="nav-item">
           <a data-toggle="collapse" href="#galleries">
             <i class="fas fa-th-list"></i>
             <p>Galleries </p>
             <span class="caret"></span>
           </a>
           <div class="collapse" id="galleries">
             <ul class="nav nav-collapse">

               <li>
                 <a href="">
                   <span class="sub-item">Create Album</span>
                 </a>
               </li>
               <li>
                 <a href="">
                   <span class="sub-item">View Albums</span>
                 </a>
               </li>

               <li>
                 <a href="">
                   <span class="sub-item">Deleted Albums</span>
                 </a>
               </li>

             </ul>
           </div>
         </li>




         <li class="nav-item">
           <a data-toggle="collapse" href="#eventmang">
             <i class="fas fa-th-list"></i>
             <p>Placements</p>
             <span class="caret"></span>
           </a>
           <div class="collapse" id="eventmang">
             <ul class="nav nav-collapse">

               <li>
                 <a href="">
                   <span class="sub-item">Add Batch</span>
                 </a>
               </li>
               <li>
                 <a href="">
                   <span class="sub-item">Students Mang</span>
                 </a>
               </li>


             </ul>
           </div>
         </li>


         <li class="nav-item">
           <a data-toggle="collapse" href="#cms">
             <i class="fas fa-th-list"></i>
             <p>CMS</p>
             <span class="caret"></span>
           </a>
           <div class="collapse" id="cms">
             <ul class="nav nav-collapse">

               <li>
                 <a href="">
                   <span class="sub-item">FAQ</span>
                 </a>
               </li>

             </ul>
           </div>
         </li>

         <?php */ ?>


      </ul>
    </div>
  </div>
</div>
<!-- End Sidebar -->
