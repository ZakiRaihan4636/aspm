<!-- Begin Page Content -->
<!-- Page Heading -->
  <!-- <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

  <?= validation_errors('<div class="alert alert-danger alert-dismissible fade show" role="alert">','<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  </div>') ?>
  <?= $this->session->flashdata('msg'); ?>

  <div class="row">
    <div class="col-lg-6">

     <?= form_open('Admin/PetugasController'); ?>

     <div class="form-group">
      <label for="nama">Nama Lengkap</label>
      <input type="text" class="form-control" id="nama" placeholder="Masukan Nama Lengkap" name="nama" value="<?= set_value('nama') ?>">
    </div>

    <div class="form-group">
      <label for="username">Username</label>
      <input type="text" class="form-control" id="username" name="username" placeholder="Masukan Username" value="<?= set_value('username') ?>"> 
    </div>

    <div class="form-group">
      <label for="password">Passsword</label>
      <input type="password" class="form-control" id="password" name="password" placeholder="Masukan Password">
    </div>
    <div class="form-group">
      <label for="telp">No.Telepon</label>
      <input type="text" class="form-control" id="telp" placeholder="Masukan Nomor Telepon" name="telp" value="<?= set_value('telp') ?>">
    </div>

    <label for="">Jenis User:</label>
    <div class="form-group">
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="level" id="admin" value="admin">
        <label class="form-check-label" for="admin">Admin</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="level" id="petugas" value="petugas" checked="">
        <label class="form-check-label" for="petugas">Petugas</label>
      </div>
    </div>

    <button type="submit" class="btn btn-success">Simpan</button>
    <?= form_close(); ?>
  </div>
</div> -->
<!-- /.container-fluid -->



<div class="container-fluid">
    <div class="text-dark m-2"><?= date('l, d M Y'); ?></div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <a class="breadcrumb-item text-info" href="<?= base_url('administrator'); ?>">Dashboard</a>
            <li class="breadcrumb-item active">Tambah User</li>
        </ol>
    </nav>
    <?= validation_errors('<div class="alert alert-danger alert-dismissible fade show" role="alert">','<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>') ?>
    <?= $this->session->flashdata('msg'); ?>

    <div class="row mt-3">
        <div class="col-lg-6 pt-0">
            <div class="card o-hidden shadow-lg">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <div class="h5 text-gray-900 m-0">Daftarkan Petugas Baru</div>
                                    <hr class="garis">
                                </div>
                                <div class="text-center">
                                    <?= $this->session->flashdata('message'); ?>
                                    <?= form_open('Admin/PetugasController'); ?>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="nama" placeholder="Masukan Nama Lengkap" name="nama" value="<?= set_value('nama') ?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Masukan Username" value="<?= set_value('username') ?>">
                                    <?= form_error('email', '<small class="pl-3 text-danger">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Masukan Password">
                                    <?= form_error('telp', '<small class="pl-3 text-danger">', '</small>'); ?>
                                </div>
                                
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user"  id="telp" placeholder="Masukan Nomor Telepon" name="telp" value="<?= set_value('telp') ?>">
                                    <?= form_error('telp', '<small class="pl-3 text-danger">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <div>

                                        
                                        <label for="">Role User:</label>
                                        <div class="form-group">
                                          <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="level" id="admin" value="admin">
                                            <label class="form-check-label" for="admin">Admin</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="level" id="petugas" value="petugas" checked="">
                                            <label class="form-check-label" for="petugas">Petugas</label>
                                        </div>
                                    </div>
                                </div>
                                
                                <button type="submit" class="btn btn-dark btn-user btn-block">
                                    Daftar
                                </button>
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        
    </div>
</div>
