<div class="container-fluid">
  <div class="text-dark m-2"><?= date('l, d M Y'); ?></div>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <a class="breadcrumb-item text-info" href="<?= base_url('masyarakat'); ?>">Dashboard</a>
      <li class="breadcrumb-item active">Form Pengaduan</li>
    </ol>
  </nav>
  <!-- WARNING -->
  <div class="row mt-3">
    <div class="col">
      <div class="card shadow">
        <div class="card-header h4 text-danger">
          <i class="fa">Peringatan !</i>
        </div>
        <div class="card-body">
          <h6> <b>Di mohon untuk menggunakan bahasa yang baik  dan tidak berkata kasar </b> <b class="text-danger">!!</b></h6>
        </div>
      </div>
    </div>
  </div>
  <div>

   <?= $this->session->flashdata('msg'); ?>
   <?= validation_errors('<div class="alert alert-danger alert-dismissible fade show" role="alert">','<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
   </div>') ?>
   <div class="row mt-3">
    <div class="col-lg">
      <body id="page-top">
        <div class="card shadow">
          <div class="card-header">
            <h4>Tambah Pengaduan</h4>
          </div>
          <div class="card-body">
            <div class="form-group cols-sm-6">

              <input type="hidden" value="<?= date('y-m-d'); ?>" id="tgl_pengaduan"  name="tgl_pengaduan" class="form-control" readonly>
            </div>

         <div class="row">
          <div class="col-lg">
            <?= form_open_multipart('Masyarakat/PengaduanController'); ?>
            <div class="form-group">
              <label for="isi_laporan">Isi<sup class="text-danger">*</sup></label>
              <textarea name="isi_laporan" id="isi_laporan" cols="10" rows="8"  class="form-control"></textarea>
            </div>

            <div class="form-group">
              <label for="foto">Upload Foto</label>
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="foto" name="foto">
                <label class="custom-file-label" for="foto">Choose file</label>
              </div>
            </div>

            <div class="form-group">
              <button type="submit" class="btn btn-success">Laporkan Pengaduan</button>
            </div>
            <?php form_close(); ?>

          </div>
        </div>
      </div>
    </div>
    <!-- /.container-fluid -->
