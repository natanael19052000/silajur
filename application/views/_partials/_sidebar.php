<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('Dashboard') ?>.html">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Lapornal</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item active">
    <a class="nav-link" href="<?= base_url('Dashboard') ?>">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span>
    </a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">
  <!--------------------------------------------------------------------------------------------------------------------->
  <!-- MENU DIVISI IT -->
  <?php
  if ($this->session->userdata('jabatan') == "Divisi IT") { ?>

    <!-- Heading -->
    <div class="sidebar-heading">
      Akun
    </div>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
      <a class="nav-link" href="<?= base_url('Akun') ?>">
        <i class="fas fa-fw fa-users"></i>
        <span>Daftar Akun</span>
      </a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
      <a class="nav-link" href="<?= base_url('Akun/tambah') ?>">
        <i class="fas fa-fw fa-user-plus"></i>
        <span>Tambah Akun</span>
      </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    <!-- Divisi IT End -->
    <!--------------------------------------------------------------------------------------------------------------------->
    <!-- MENU DIVISI UMUM -->
  <?php
  } elseif ($_SESSION['jabatan'] == 'Divisi Umum') { ?>
    <!-- Heading -->
    <div class="sidebar-heading">
      Proposal
    </div>
    <!-- Nav Item - Charts -->
    <li class="nav-item">
      <a class="nav-link" href="<?= base_url('Proposal') ?>">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Daftar Proposal</span>
      </a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
      <a class="nav-link" href="<?= base_url('Proposal/tambah') ?>">
        <i class="fas fa-fw fa-plus"></i>
        <span>Tambah Proposal</span>
      </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
      Laporan
    </div>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
      <a class="nav-link" href="<?= base_url('Laporan') ?>">
        <i class="fas fa-fw fa-file"></i>
        <span>Daftar Laporan</span>
      </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">
    <!--------------------------------------------------------------------------------------------------------------------->
    <!-- MENU DIVISI KEUANGAN -->
  <?php
  } elseif ($_SESSION['jabatan'] == 'Divisi Keuangan') {
  ?>
    <!-- Heading -->
    <div class="sidebar-heading">
      Jurnal
    </div>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
      <a class="nav-link" href="<?= base_url('Jurnal') ?>">
        <i class="fas fa-fw fa-folder"></i>
        <span>Daftar Jurnal</span>
      </a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
      Laporan
    </div>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
      <a class="nav-link" href="<?= base_url('Laporan') ?>">
        <i class="fas fa-fw fa-file"></i>
        <span>Daftar Laporan</span>
      </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">
    <!--------------------------------------------------------------------------------------------------------------------->
    <!-- MENU DIREKSI -->
  <?php
  } else {
  ?>
    <!-- Heading -->
    <div class="sidebar-heading">
      Pesrsetujuan
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#datapersetujuan" aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-fw fa-folder"></i>
        <span>Pesrsetujuan</span>
      </a>
      <div id="datapersetujuan" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <a class="collapse-item" href="<?= base_url('Jurnal/persetujuan') ?>">Jurnal</a>
          <a class="collapse-item" href="<?= base_url('Proposal/persetujuan') ?>">Proposal</a>
        </div>
      </div>
    </li>

    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
      Laporan
    </div>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
      <a class="nav-link" href="<?= base_url('Laporan') ?>">
        <i class="fas fa-fw fa-file"></i>
        <span>Daftar Laporan</span>
      </a>
    </li>

    <hr class="sidebar-divider">
  <?php } ?>

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>