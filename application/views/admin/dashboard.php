                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="text-dark m-2"><?= date('l, d M Y'); ?></div>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <a class="breadcrumb-item text-info" href="<?= base_url('administrator') ?>">Dashboard</a>
                            <li class="breadcrumb-item active">Administrator</li>
                        </ol>
                    </nav>
                    <?php if ($this->session->userdata('level') == 'admin'):?>
                        <div class="d-sm-flex align-items-center justify-content-between mb-2">
                        <h2 class="h4 mb-0 text-dark"></h2>
                        <a href="<?= base_url('Admin/LaporanController') ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>
            <?php endif ?>
                   
                    <?= $this->session->flashdata('sukses'); ?>


                    <!-- CARD -->
                    <div class="row">
                        <div class="col-md-3 mt-2">
                            <a href="<?= base_url('Admin/PetugasController/data_user')?>" class="card card-link o-hidden shadow border-bottom-danger">
                                <div class="card-header bg-danger text-white">Jumlah User</div>
                                <div class="card-body bg-white text-danger h4">
                                    <i class="fas fa-users"> <?= number_format($petugas); //hitung jumlah array  
                                    ?></i>
                                </div>
                            </a>
                        </div>
                        
                        <div class="col-md-3 mt-2">
                            <a href="<?= base_url('Admin/TanggapanController')?>" class="card card-link o-hidden shadow border-bottom-info">
                                <div class="card-header bg-info text-white">Jumlah Pengaduan</div>
                                <div class="card-body bg-white text-info h4">
                                    <i class="fas fa-paper-plane"> <?= number_format($pengaduan); ?> </i>
                                </div>
                            </a>
                        </div>
                        
                        <div class="col-md-3 mt-2">
                            <a href="<?= base_url('Admin/TanggapanController/tanggapan_proses'); ?>" class="card-link card o-hidden shadow border-bottom-warning">
                                <div class="card-header bg-warning text-white">Proses</div>
                                <div class="card-body bg-white text-warning h4">
                                  <div class="spinner-grow text-warning">
                                </div>
                                <b> <?= number_format($pengaduan_proses); ?></b>
                                
                            </div>
                        </a>
                    </div>
                    

                    <div class="col-md-3 mt-2">
                        <a href="<?= base_url('Admin/TanggapanController/tanggapan_selesai'); ?>" class="card-link card o-hidden shadow border-bottom-success">
                            <div class="card-header bg-success text-white">Selesai</div>
                            <div class="card-body bg-white text-success h4">
                                <i class="fas fa-check-double"> <?= number_format($pengaduan_selesai); ?> </i>
                            </div>
                        </a>
                    </div>
                </div>
                
            </div>
            <!-- /.container-fluid -->

        </div>
                <!-- End of Main Content -->