        <!-- Begin Page Content -->
        <div class="container-fluid">
            <div class="text-dark m-2"><?= date('l, d M Y'); ?></div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-4">
                    <a class="breadcrumb-item text-info" href="<?= base_url('Admin/DashboardController'); ?>">Dashboard</a>
                    <li class="breadcrumb-item active">Pengaduan selesai</li>
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
						<i class="fa">Data Pengaduaan yang Sudah <span class="text-success"> Selesai </span></i>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table" id="DataTables" width="100%" cellspacing="0">
                                    <thead class=" thead strong text-dark">
                                      <tr>
                                          <th>Nomor</th>
                                          <th>Nama</th>
                                          <th>Isi Laporan</th>
                                          <th>tanggapan</th>
                                          <th>Tgl_Lapor</th>
                                          <th>Telepon</th>
                                          <th>Foto</th>
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
                                            <td>
                                               <?php 
                                               if ($dp['status'] == '0') :
                                                  echo '<span class="badge badge-secondary">Sedang di verifikasi</span>';
                                              elseif ($dp['status'] == 'proses') :
                                                  echo '<span class="badge badge-warning">Sedang di proses</span>';
                                              elseif ($dp['status'] == 'selesai') :
                                                  echo '<span class="badge badge-success">Selesai di kerjakan</span>';
                                              elseif ($dp['status'] == 'tolak') :
                                               echo '<span class="badge badge-danger">Pengaduan di tolak</span>';
                                           else :
                                            echo '-';
                                        endif;
                                        ?>
                                    </td>
                                    <td><?= $dp['telp']; ?></td>
                                    <td><img height="50" src="<?= base_url() ?>assets/uploads/<?= $dp['foto'] ?>"></td>

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
</div>  <!-- /.container-fluid -->
</div>