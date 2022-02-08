<div class="container-fluid">
  <div class="text-dark m-2"><?= date('l, d M Y'); ?></div>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb mb-4">
      <a class="breadcrumb-item text-info" href="<?= base_url('Admin/DashboardController'); ?>">Dashboard</a>
      <li class="breadcrumb-item active">Pengaduan detail</li>
  </ol>
</nav>

<?= $this->session->flashdata('msg'); ?>
<div class="row">
    <div class="col-6">
      <div class="card">
        <h5 class="card-header text-center">Pengaduan detail
        </h5>
        <div class="card-body">
            <div class="form-group">
               <label>Tanggal Tanggapan</label>
               <input type="text" name="tgl_pengaduan" value="<?= $data_pengaduan['tgl_pengaduan'] ?>" class="form-control" readonly>
           </div>
           <p class="card-text">Status : <span class="text-success"
            ><?php 
            if ($data_pengaduan['status'] == '0') :
                echo '<span class="badge badge-secondary">Sedang di verifikasi</span>';
            elseif ($data_pengaduan['status'] == 'proses') :
                echo '<span class="badge badge-warning">Sedang di proses</span>';
            elseif ($data_pengaduan['status'] == 'selesai') :
                echo '<span class="badge badge-success">Selesai di kerjakan</span>';
            elseif ($data_pengaduan['status'] == 'tolak') :
             echo '<span class="badge badge-danger">Pengaduan di tolak</span>';
         else :
          echo '-';
      endif;
      ?>
      <span>
         <div class="form-group">
            <label for="isi_laporan">Isi Laporan</label>
            <textarea name="isi_laporan" id="isi_laporan"  class="form-control" readonly=""><?= $data_pengaduan['isi_laporan']; ?></textarea>

        </div><div class="form-group">
            <label for="isi_laporan">Tanggapan</label>
            <textarea name="isi_laporan" id="isi_laporan"  class="form-control" readonly=""><?= $data_pengaduan['tanggapan']; ?></textarea>

            <input type="hidden" name="id" value="<?= $data_pengaduan['id_pengaduan']; ?>">
            <div class="form-group">
              <div class="form-check form-check-inline">
              </div>
              <div class="form-check form-check-inline">
               
              </div>
          </div>
      </div>
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
            <img src="<?= base_url() ?>assets/uploads/<?= $data_pengaduan['foto'] ?>" class="mt-2 mb-2" width="100%">

            <?= $this->session->flashdata('msg'); ?>
        </div>
    </div>
</div>
</div>
</div>
</div>