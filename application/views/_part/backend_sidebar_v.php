<!-- Page Wrapper -->
<div id="wrapper">

  <!-- Sidebar -->
  <ul class="navbar-nav bg-dark sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
      <div class="sidebar-brand-icon">
        <i class="fas fa-bullhorn"></i>
    </div>
    <div class="sidebar-brand-text mx-3">aspm</div>
</a>
<?php if ($this->session->userdata('level') == 'admin' OR $this->session->userdata('level') == 'petugas') : ?>
<!-- Divider -->
<hr class="sidebar-divider">
<div class="sidebar-heading">
    <?= $this->session->userdata('level'); ?>
</div>

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
  <a class="nav-link" href="<?= base_url('Admin/DashboardController') ?>">
    <i class="fas fa-fw fa-tachometer-alt"></i>
    <span>Dashboard</span></a>
</li>
<hr class="sidebar-divider">
<!-- Heading -->
<div class="sidebar-heading">
  Penanganan
</div>
<?php endif; ?>


<!-- Nav Item - Pages Collapse Menu -->



<?php // form pengaduan diakses oleh masyarakat ?>
<?php if ($this->session->userdata('username') && $this->session->userdata('level') == NULL) : ?>
<hr class="sidebar-divider">
<div class="sidebar-heading">
    Masyarakat
</div>

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
  <a class="nav-link" href="<?= base_url('Masyarakat/DashboardController_M/index') ?>">
    <i class="fas fa-fw fa-tachometer-alt"></i>
    <span>Dashboard</span></a>
</li>

<hr class="sidebar-divider">
<!-- Heading -->
<div class="sidebar-heading">
  Pengaduan
</div>
<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
    <i class="fas fa-edit"></i>
    <span>Pengaduan</span>
</a>
<div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Pengaduan:</h6>
      <a class="collapse-item" href="<?= base_url('Masyarakat/PengaduanController'); ?>">Form Pengaduan</a>
      <a class="collapse-item" href="<?= base_url('Masyarakat/PengaduanController/laporan_ku') ?>">Lihat Laporan Pengaduan</a>
  </div>
</div>
</li>
<?php endif; ?>
<?php // end form pengaduan diakses oleh masyarakat ?>

<?php // dropdown admin hanya oleh akun admin dan petugas ?>
<?php if ($this->session->userdata('level') == 'admin' OR $this->session->userdata('level') == 'petugas') : ?>


<li class="nav-item">
    <a class="nav-link collapsed pb-0" href="#" data-toggle="collapse" data-target="#users" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-users"></i>
        <span>Data Users</span>
    </a>
    <div id="users" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Data Users</h6>
            <?php if ($this->session->userdata('level') == 'admin'):?>
            <a class="collapse-item" href="<?= base_url('Admin/PetugasController/data_user'); ?>">Petugas</a>
            <a class="collapse-item" href="<?= base_url('Admin/PetugasController/data_masyarakat'); ?>">Masyarakat</a>
            <?php endif ?>
            <?php if ($this->session->userdata('level') == 'petugas'):?>
              <a class="collapse-item" href="<?= base_url('Admin/DataUserController/index'); ?>">Masyarakat</a>
              <?php endif; ?>

            <?php // tambah petugas admin akses ?>
            <?php if ($this->session->userdata('level') == 'admin') : ?>
              <h6 class="collapse-header">Registrasi:</h6>
              <a class="collapse-item" href="<?= base_url('Admin/PetugasController'); ?>">Tambah User</a>
          <?php endif; ?>
          <?php // end tambah petugas admin akses ?>
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-exclamation-circle"></i>
          <span>Pengaduan</span>
      </a>
      <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Daftar Pengaduan</h6>
            <a class="collapse-item" href="<?= base_url('Admin/TanggapanController'); ?>">Pengaduan Masuk</a>
            <a class="collapse-item" href="<?= base_url('Admin/TanggapanController/tanggapan_proses'); ?>">Pengaduan Proses</a>
            <a class="collapse-item" href="<?= base_url('Admin/TanggapanController/tanggapan_tolak'); ?>">Pengaduan Ditolak</a>
            <a class="collapse-item" href="<?= base_url('Admin/TanggapanController/tanggapan_selesai'); ?>">Pengaduan Selesai</a>
            <div class="collapse-divider"></div>

            

        </div>
    </div>
</li>



<?php endif; ?>
<?php // end dropdown admin hanya oleh akun admin dan petugas ?>
<li class="nav-item">
  <a class="nav-link pt-0 collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
    <i class="fas fa-user"></i>
    <span>Profil</span>
</a>
<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Profil:</h6>
      <a class="collapse-item" href="<?= base_url('User/ProfileController'); ?>">Profil Saya</a>
      <a class="collapse-item" href="<?= base_url('Auth/ChangePasswordController'); ?>">Ganti Password</a>
  </div>
</div>
</li>

<?php // generate laporan akses admin ?>
<?php if ($this->session->userdata('level') == 'admin') : ?>
  <!-- Nav Item - Generate Laporan -->
  <li class="nav-item">
    <a class="nav-link pt-0" href="<?= base_url('Admin/LaporanController'); ?>">
      <i class="fas fa-file-pdf"></i>
      <span>Generate Laporan</span></a>
  </li>
<?php endif; ?>
<?php // end generate laporan akses admin ?>


<hr class="sidebar-divider d-none d-md-block">
<!-- Nav Item - Logout -->
<li class="nav-item">
    <a class="nav-link" href="<?= base_url('Auth/LogoutController'); ?>" onclick="return confirm('Apakah anda yakin akan keluar dan menghapus semua sesi?');">
      <i class="fas fa-sign-out-alt"></i>
      <span>Keluar</span></a>
  </li>

  <!-- Divider -->


  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
<!-- End of Sidebar -->
