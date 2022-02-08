    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="text-dark m-2"><?= date('l, d M Y'); ?></div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-4">
                <a class="breadcrumb-item text-info" href="<?= base_url('Admin/DashboardController'); ?>">Dashboard</a>
                <li class="breadcrumb-item active">Pengaduan proses</li>
            </ol>
        </nav>


        
        <?= validation_errors('<div class="alert alert-danger alert-dismissible fade show" role="alert">','<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>') ?>
        <?= $this->session->flashdata('msg'); ?>
        <!-- Page Heading -->
        <div class="row mb-4">
            <div class="col-lg">
                <div class="card shadow">
                    <div class="card-header h4 text-dark text-center">
                        <i class="fa">Data Pengaduaan yang Sudah <span class="text-warning"> Proses </span></i>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table" id="DataTables" width="100%" cellspacing="0">
                                <thead class=" thead strong text-dark">
                                  <tr>
                                      <th>Nomor</th>
                                      <th>Nama</th>
                                      <th>Isi Laporan</th>
                                      <th>Tgl_Lapor</th>
                                      <th>Foto</th>
                                      <th>Aksi</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <?php $no = 1; ?>
                                  <?php if ( ! empty($data_pengaduan)) : ?>
                                    <?php foreach ($data_pengaduan as $dp) : ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $dp['nama'] ?></td>
                                            <td><?= $dp['isi_laporan'] ?></td>
                                            <td><?= $dp['tgl_pengaduan'] ?></td>
                                            <td><img height="50" src="<?= base_url() ?>assets/uploads/<?= $dp['foto'] ?>"></td>
                                            <td>
                                                <div class="">

                                                    <?= form_open('Admin/TanggapanController/tanggapan_pengaduan_selesai'); ?>
                                                    <input type="hidden" name="id" value="<?= $dp['id_pengaduan'] ?>">
                                                    <button class="btn btn-success" name="selesai">Setujui Pengaduan</button>
                                                    <?= form_close(); ?>

                                                </div>
                                            </td>
                                        </tr>
                                        
                                    <?php endforeach; ?>
                                <?php endif;?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div> 
</div>
 <!-- /.container-fluid -->