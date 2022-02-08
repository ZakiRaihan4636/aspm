        <!-- Begin Page Content -->
        <div class="container-fluid">
            <div class="text-dark m-2"><?= date('l, d M Y'); ?></div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-4">
                    <a class="breadcrumb-item text-info" href="<?= base_url('Admin/DashboardController'); ?>">Dashboard</a>
                    <li class="breadcrumb-item active">Lihat laporan pengauan</li>
                </ol>
            </nav>


            
            <?= validation_errors('<div class="alert alert-danger alert-dismissible fade show" role="alert">','<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>') ?>
            <?= $this->session->flashdata('msg'); ?>
            <!-- Page Heading -->
            <div class="row mb-4">
                <div class="col-lg">
                    <div class="card shadow">
                        <div class="card-header text-danger text-center h4">
                            <i class="fas fa-exclamation-circle"> Pengaduan-Ku</i>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table" id="DataTables" width="100%" cellspacing="0">
                                    <thead class=" thead strong text-dark">
                                      <tr>
                                          <th>No</th>
                                          <th>Nama</th>
                                          <th>Isi Laporan</th>
                                          <th>Tgl_Lapor</th>
                                          <th>Foto</th>
                                          <th>Status</th>
                                          <th>Lihat Tanggapan</th>
                                          <th>Aksi</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    <?php $no = 1; ?>
                                    <?php $no = 1; ?>
                                    <?php foreach ($data_pengaduan as $dp) : ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $dp['nama']; ?></td>
                                            <td><?= $dp['isi_laporan']; ?></td>
                                            <td><?= $dp['tgl_pengaduan']; ?></td>
                                            <td><img width="50" height="50" src="<?= base_url() ?>assets/uploads/<?= $dp['foto']; ?>" alt=""></td>
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

                                    </td>  <td class="text-center"><a href="<?= base_url('Masyarakat/PengaduanController/pengaduan_detail/'.$dp['id_pengaduan']) ?>" class="btn btn-info"><i class="fas fa-fw fa-eye"></i></a> </td>
                                    <?php if ($dp['status'] == '0') : ?>


                                        <td><a href="<?= base_url('Masyarakat/PengaduanController/edit/'.$dp['id_pengaduan']) ?>"  class="btn btn-dark"><i class="fa fa-pen"></i></a> 
                                          <a href="<?= base_url('Masyarakat/PengaduanController/pengaduan_batal/'.$dp['id_pengaduan']) ?>"
                                             onclick="return confirm('Apakah anda yakin ingin menghapus pengaduan?');"> <i class="btn btn-danger"><i class="fa fa-trash"></i></i></a>
                                         </td>
                                         <?php else : ?>
                                          <td><small>Tidak ada aksi</small></td>
                                      <?php endif; ?>
                                  </tr>
                                  
                              <?php endforeach; ?>
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
      </div>


  </div>
</div>  <!-- /.container-fluid -->
</div>
<!-- Footer -->
<footer class="sticky-footer bg-white">
  <div class="container my-auto">
    <div class="copyright text-center my-auto">
      <span>Copyright &copy; Sistem Pengaduan Masyarakat </span>
  </div>
</div>
</footer>