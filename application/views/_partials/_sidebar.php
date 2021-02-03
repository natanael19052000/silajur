<!-- partial:../../partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile">
      <a href="#" class="nav-link">
        <div class="profile-image">
          <img class="img-xs rounded-circle" src="<?php echo base_url('assets/images/faces/face8.jpg')?>"
            alt="profile image">
          <div class="dot-indicator bg-success">
          </div>
        </div>
        <div class="text-wrapper">
          <p class="profile-name"><?php echo $this->session->userdata("nama"); ?></p>
          <p class="designation"><?php echo $this->session->userdata("nip"); ?></p>
        </div>
        <div class="icon-container">
          <i class="icon-bubbles"></i>
          <div class="dot-indicator bg-danger">
          </div>
        </div>
      </a>
    </li>

    <li class="nav-item nav-category">
      <span class="nav-link">Home</span>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo site_url('dashboard')?>">
        <span class="menu-title">Dashboard</span>
        <i class="icon-screen-desktop menu-icon"></i>
      </a>
    </li>

    <li class="nav-item nav-category">
      <span class="nav-link">Proposal</span>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo site_url('proposal')?>">
        <span class="menu-title">Daftar Proposal</span>
        <i class="icon-doc menu-icon"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo site_url('proposal/detail')?>">
        <span class="menu-title"> Detail Proposal</span>
        <i class="icon-doc menu-icon"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo site_url('proposal/tambah')?>">
        <span class="menu-title">Tambah Proposal</span>
        <i class="icon-doc menu-icon"></i>
      </a>
    </li>
    <li class="nav-item nav-category">
      <span class="nav-link">Jurnal</span>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo site_url('jurnal')?>">
        <span class="menu-title">Daftar Jurnal</span>
        <i class="icon-book-open menu-icon"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo site_url('jurnal/detail')?>">
        <span class="menu-title">Detail Jurnal</span>
        <i class="icon-book-open menu-icon"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo site_url('jurnal/tambah')?>">
        <span class="menu-title">Tambah Jurnal</span>
        <i class="icon-book-open menu-icon"></i>
      </a>
    </li>
    <li class="nav-item nav-category">
      <span class="nav-link">Persetujuan</span>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo site_url('proposal/persetujuan')?>">
        <span class="menu-title">Persetujuan Proposal</span>
        <i class="icon-book-open menu-icon"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo site_url('jurnal/persetujuan')?>">
        <span class="menu-title">Persetujuan Jurnal</span>
        <i class="icon-book-open menu-icon"></i>
      </a>
    </li>
    <li class="nav-item nav-category">
      <span class="nav-link">Laporan</span>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo site_url('laporan')?>">
        <span class="menu-title">Daftar Laporan</span>
        <i class="icon-book-open menu-icon"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo site_url('laporan/detail')?>">
        <span class="menu-title">Detail Laporan</span>
        <i class="icon-book-open menu-icon"></i>
      </a>
    </li>
    <li class="nav-item nav-category">
      <span class="nav-link">Akun</span>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo site_url('akun')?>">
        <span class="menu-title">Daftar Akun</span>
        <i class="icon-people menu-icon"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo site_url('akun/detail')?>">
        <span class="menu-title"> Detail Akun</span>
        <i class="icon-user menu-icon"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo site_url('akun/edit')?>">
        <span class="menu-title"> Edit Akun</span>
        <i class=" icon-user-following menu-icon"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo site_url('akun/tambah')?>">
        <span class="menu-title">Tambah Akun</span>
        <i class=" icon-user-follow menu-icon"></i>
      </a>
    </li>
  </ul>
</nav>
<!-- partial -->