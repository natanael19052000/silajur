<!-- partial:../../partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile">
      <a href="#" class="nav-link">
        <div class="profile-image">
          <div class="dot-indicator bg-success">
          </div>
        </div>
        <div class="text-wrapper">
          <p class="profile-name"><?php echo $this->session->userdata("nama"); ?></p>
          <p class="designation"><?php echo $this->session->userdata("nip"); ?></p>
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
      <a class="nav-link" href="<?php echo base_url('Proposal')?>">
        <span class="menu-title">Daftar Proposal</span>
        <i class="icon-doc menu-icon"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url('Proposal/detail')?>">
        <span class="menu-title"> Detail Proposal</span>
        <i class="icon-doc menu-icon"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url('Proposal/tambah')?>">
        <span class="menu-title"> Tambah Proposal </span>
        <i class="icon-doc menu-icon"></i>
      </a>
    </li>
    <li class="nav-item nav-category">
      <span class="nav-link"> Jurnal </span>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url('Jurnal')?>">
        <span class="menu-title"> Daftar Jurnal </span>
        <i class="icon-book-open menu-icon"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url('Jurnal/detail')?>">
        <span class="menu-title"> Detail Jurnal </span>
        <i class="icon-book-open menu-icon"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url('Jurnal/tambah')?>">
        <span class="menu-title">Tambah Jurnal</span>
        <i class="icon-book-open menu-icon"></i>
      </a>
    </li>
    <li class="nav-item nav-category">
      <span class="nav-link">Persetujuan</span>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url('Proposal/persetujuan')?>">
        <span class="menu-title">Persetujuan Proposal</span>
        <i class="icon-book-open menu-icon"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url('Jurnal/persetujuan')?>">
        <span class="menu-title">Persetujuan Jurnal</span>
        <i class="icon-book-open menu-icon"></i>
      </a>
    </li>
    <li class="nav-item nav-category">
      <span class="nav-link">Laporan</span>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url('Laporan')?>">
        <span class="menu-title">Daftar Laporan</span>
        <i class="icon-book-open menu-icon"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url('Laporan/detail')?>">
        <span class="menu-title">Detail Laporan</span>
        <i class="icon-book-open menu-icon"></i>
      </a>
    </li>
    <li class="nav-item nav-category">
      <span class="nav-link">Akun</span>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url('Akun')?>">
        <span class="menu-title">Daftar Akun</span>
        <i class="icon-people menu-icon"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url('Akun/edit')?>">
        <span class="menu-title"> Edit Akun</span>
        <i class=" icon-user-following menu-icon"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url('Akun/tambah')?>">
        <span class="menu-title">Tambah Akun</span>
        <i class=" icon-user-follow menu-icon"></i>
      </a>
    </li>
  </ul>
</nav>
<!-- partial -->