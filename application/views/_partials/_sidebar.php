<!-- partial:../../partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile">
      <a href="#" class="nav-link">
        <div class="profile-image">
          <img class="img-xs rounded-circle" src="<?php echo base_url('assets/images/faces/face8.jpg')?>" alt="profile image">
          <div class="dot-indicator bg-success"></div>
        </div>
        <div class="text-wrapper">
          <p class="profile-name"><?php echo $this->session->userdata("nama"); ?></p>
          <p class="designation"><?php echo $this->session->userdata("nip"); ?></p>
        </div>
        <div class="icon-container">
          <i class="icon-bubbles"></i>
          <div class="dot-indicator bg-danger"></div>
        </div>
      </a>
    </li>
    <li class="nav-item nav-category">
      <span class="nav-link">Dashboard</span>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url('assets/index.html')?>">
        <span class="menu-title">Dashboard</span>
        <i class="icon-screen-desktop menu-icon"></i>
      </a>
    </li>
    <li class="nav-item nav-category"><span class="nav-link">Aktivitas</span></li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <span class="menu-title">Laporan</span>
        <i class="icon-layers menu-icon"></i>
      </a>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('assets/pages/ui-features/buttons.html')?>">Buttons</a></li>
          <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('assets/pages/ui-features/typography.html')?>">Typography</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url('assets/pages/forms/basic_elements.html')?>">
        <span class="menu-title">Jurnal</span>
        <i class="icon-book-open menu-icon"></i>
      </a>
    </li>
    <li class="nav-item nav-category"><span class="nav-link">Riwayat</span></li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
        <span class="menu-title">Riwayat Aktivitas</span>
        <i class="icon-doc menu-icon"></i>
      </a>
      <div class="collapse" id="auth">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('assets/pages/samples/login.html')?>"> Laporan </a></li>
          <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('assets/pages/samples/register.html')?>"> Tanggung Jawab </a></li>
          <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('assets/pages/samples/error-404.html')?>"> Jurnal </a></li>
        </ul>
      </div>
    </li>
  </ul>
</nav>
<!-- partial -->