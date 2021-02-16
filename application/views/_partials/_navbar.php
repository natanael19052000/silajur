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
       <li class="nav-item dropdown d-none d-xl-inline-flex user-dropdown">
         <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
           <span class="font-weight-normal">
             <?php echo $this->session->userdata("nama"); ?>
           </span>
         </a>
         <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
           <div class="dropdown-header text-center">
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