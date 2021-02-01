 <!-- partial:../../partials/_navbar.html -->
 <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
   <div class="navbar-brand-wrapper d-flex align-items-center">
     <a class="navbar-brand brand-logo" href="<?php echo site_url('dashboard')?>">
       <span class="font-weight-bold text-primary">LAPORNAL</span>
     </a>
     <a class="navbar-brand brand-logo-mini" href="<<?php echo site_url('dashboard')?>">
       S
     </a>
   </div>
   <div class="navbar-menu-wrapper d-flex align-items-center flex-grow-1">
     <h5 class="mb-0 font-weight-medium d-none d-lg-flex">Sistem Informasi Laporan Proposal & Jurnal</h5>
     <ul class="navbar-nav navbar-nav-right ml-auto">
       <li class="nav-item dropdown">
         <a class="nav-link count-indicator message-dropdown" id="messageDropdown" href="#" data-toggle="dropdown"
           aria-expanded="false">
           <i class="icon-speech"></i>
           <span class="count">7</span>
         </a>
         <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0"
           aria-labelledby="messageDropdown">
           <a class="dropdown-item py-3">
             <p class="mb-0 font-weight-medium float-left">You have 7 unread mails </p>
             <span class="badge badge-pill badge-primary float-right">View all</span>
           </a>
           <div class="dropdown-divider"></div>
           <a class="dropdown-item preview-item">
             <div class="preview-thumbnail">
               <img src="<?php echo base_url('assets/images/faces/face10.jpg')?>" alt="image"
                 class="img-sm profile-pic">
             </div>
             <div class="preview-item-content flex-grow py-2">
               <p class="preview-subject ellipsis font-weight-medium text-dark">Marian Garner </p>
               <p class="font-weight-light small-text"> The meeting is cancelled </p>
             </div>
           </a>
           <a class="dropdown-item preview-item">
             <div class="preview-thumbnail">
               <img src="<?php echo base_url('assets/images/faces/face12.jpg')?>" alt="image"
                 class="img-sm profile-pic">
             </div>
             <div class="preview-item-content flex-grow py-2">
               <p class="preview-subject ellipsis font-weight-medium text-dark">David Grey </p>
               <p class="font-weight-light small-text"> The meeting is cancelled </p>
             </div>
           </a>
           <a class="dropdown-item preview-item">
             <div class="preview-thumbnail">
               <img src="<?php echo base_url('assets/images/faces/face1.jpg')?>" alt="image" class="img-sm profile-pic">
             </div>
             <div class="preview-item-content flex-grow py-2">
               <p class="preview-subject ellipsis font-weight-medium text-dark">Travis Jenkins </p>
               <p class="font-weight-light small-text"> The meeting is cancelled </p>
             </div>
           </a>
         </div>
       </li>
       <li class="nav-item dropdown d-none d-xl-inline-flex user-dropdown">
         <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
           <img class="img-xs rounded-circle ml-2" src="<?php echo base_url('assets/images/faces/face8.jpg')?>"
             alt="Profile image">
           <span class="font-weight-normal">
             <?php echo $this->session->userdata("nama"); ?>
           </span>
         </a>
         <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
           <div class="dropdown-header text-center">
             <img class="img-md rounded-circle" src="<?php echo base_url('assets/images/faces/face8.jpg')?>"
               alt="Profile image">
             <p class="mb-1 mt-3">
               Halo, <?php echo $this->session->userdata("nama"); ?>
             </p>
             <p class="font-weight-light text-muted mb-0">
               <?php echo $this->session->userdata("jabatan"); ?>
             </p>
           </div>
           <a class="dropdown-item">
             <i class="dropdown-item-icon icon-speech text-primary"></i> Messages
           </a>
           <a class="dropdown-item">
             <i class="dropdown-item-icon icon-energy text-primary">
             </i> Activity</a>
           <a class="dropdown-item" href="<?php echo base_url('login/logout'); ?>">
             <i class="dropdown-item-icon icon-power text-primary"></i>Sign Out
           </a>
         </div>
       </li>
     </ul>
     <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
       data-toggle="offcanvas">
       <span class="icon-menu"></span>
     </button>
   </div>
 </nav>