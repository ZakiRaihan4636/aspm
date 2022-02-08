        <!-- Begin Page Content -->
        <div class="container-fluid">
            <div class="text-dark m-2"><?= date('l, d M Y'); ?></div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-4">
                    <a class="breadcrumb-item text-info" href="<?= base_url('Admin/DashboardController'); ?>">Dashboard</a>
                    <li class="breadcrumb-item active">Pengaduan masuk</li>
                </ol>
            </nav>


            
            <?= $this->session->flashdata('msg'); ?>
            <!-- Page Heading -->
            <div class="row mb-4">
                <div class="col-lg">
                    <div class="card shadow">
                        <div class="card-header h4 text-dark text-center">
                            <i class="fa">Data Pengaduaan yang Sudah <span class="text-info"> Masuk </span></i>
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
                                          <th class="text-center">Aksi</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($data_pengaduan as $dp) : ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $dp['nama']; ?></td>
                                            <td><?= $dp['isi_laporan']; ?></td>
                                            <td><?= $dp['tgl_pengaduan']; ?></td>
                                            <td><img width="50" height="50" src="<?= base_url() ?>assets/uploads/<?= $dp['foto']; ?>" alt=""></td>

                                            <td class="text-center">
                                              <?= form_open('Admin/TanggapanController/tanggapan_detail'); ?>
                                              <input type="hidden" name="id" value="<?= $dp['id_pengaduan'] ?>">
                                              <button class="btn btn-info" name="terima"><i class="fas fa-check-double">Tanggapi</i></button>
                                              <?= form_close(); ?></td>


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

  <!-- Scroll to Top Button -->
  <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
  </a> -->