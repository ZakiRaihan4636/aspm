 <!-- Begin Page Content -->
 <div class="container-fluid">
                    <div class="text-dark m-2"><?= date('l, d M Y'); ?></div>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <a class="breadcrumb-item text-info" href="<?= base_url('masyarakat') ?>">Dashboard</a>
                            <li class="breadcrumb-item active">Masyarakat</li>
                        </ol>
                    </nav>

                    <!-- CARD -->
                    <div class="row">
                        <div class="col-md-4 mt-2">
                            <a href="<?= base_url('masyarakat/selesai'); ?>" class="card-link card o-hidden shadow border-bottom-success">
                                <div class="card-header bg-success text-white">Selesai</div>
                                <div class="card-body bg-white text-success h4">
                                    <i class="fas fa-check-double"></i>
                                    <div class="text-success float-right">
                                    <?= number_format($pengaduan_selesai);?>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 mt-2">
                            <a href="<?= base_url('masyarakat/proses'); ?>" class="card-link card o-hidden shadow border-bottom-warning">
                                <div class="card-header bg-warning text-white">Proses</div>
                                <div class="card-body bg-white text-info h4">
                                    <div class="spinner-grow text-warning" role="status">
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                    <div class="text-warning float-right">
                                    <?= number_format($pengaduan_proses);?>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 mt-2">
                            <a href="<?= base_url('masyarakat/pending'); ?>" class="card-link card o-hidden shadow border-bottom-danger">
                                <div class="card-header bg-danger text-white">Di tolak</div>
                                <div class="card-body bg-white text-danger h4">
                                    <i class="fas fa-exclamation-circle"></i>
                                    <div class="text-danger float-right">
                                    <?= number_format($pengaduan_ditolak);?>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>