 <!-- Begin Page Content -->
 <div class="container-fluid">
  <div class="text-dark m-2"><?= date('l, d M Y'); ?></div>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb mb-4">
      <a class="breadcrumb-item text-info" href="<?= base_url('Admin/DashboardController'); ?>">Dashboard</a>
      <li class="breadcrumb-item active">Pengaduan detail</li>
    </ol>
  </nav>

  <?= validation_errors('<div class="alert alert-danger alert-dismissible fade show" role="alert">','<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  </div>') ?>
  <div class="row">
    <div class="col-6">
      <?= $this->session->flashdata('sukses'); ?>
      <div class="card">
        <h5 class="card-header text-center">Tanggapi Pengaduan
        </h5>
        <?= form_open('Admin/TanggapanController/tambah_tanggapan'); ?>
        <div class="card-body">
          <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
             <label>Tanggal Tanggapan</label>
             <input type="text" name="tgl_pengaduan" value="<?= $data_pengaduan['tgl_pengaduan'] ?>" class="form-control" readonly>
           </div><div class="form-group">
            <label for="isi_laporan">Isi Laporan</label>
            <textarea name="isi_laporan" id="isi_laporan"  class="form-control" readonly=""><?= $data_pengaduan['isi_laporan']; ?></textarea>

            <?= form_open('Admin/TanggapanController/tambah_tanggapan'); ?><br>
            <p class="card-text">Status : <?= $data_pengaduan['status'] == 0 ? '<span class="text-danger">Belum di verifikasi<span>' : ''; ?>

            <input type="hidden" name="id" value="<?= $data_pengaduan['id_pengaduan']; ?>">
            <div class="form-group">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="status" id="status-setuju" value="proses" checked="">
                <label class="form-check-label" for="status-setuju">Setuju</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="status" id="status-tolak" value="tolak">
                <label class="form-check-label" for="status-tolak">Tolak</label>
              </div>
            </div>
              <label for="tanggapan">Tanggapan <sup class="text-danger">*</sup></label>
              <textarea class="form-control" name="tanggapan">
              </textarea>
            </div>
          <button type="submit" class="btn btn-success float-right mt-4">Kirim tanggapan!</button>
        </form>
      </div>
    </div>
  </div>

  <div class="col-lg-6">
    <div class="card">
      <h5 class="card-header text-center">Gambar Pengaduan
      </h5>
      <div class="card-body">
        <div class="row">
          <div class="col-lg">
            <img src="<?= base_url() ?>assets/uploads/<?= $data_pengaduan['foto'] ?>" class="mt-2 mb-2" width="100%" heigh="50%">

            <?= $this->session->flashdata('msg'); ?>
            <?= form_close(); ?>
            <br><br>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>
        </div>