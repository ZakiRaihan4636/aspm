<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="text-dark m-2"><?= date('l, d M Y'); ?></div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-4">
            <a class="breadcrumb-item text-info" href="<?= base_url('Admin/DashboardController'); ?>">Dashboard</a>
            <li class="breadcrumb-item active">Masyrakat</li>
        </ol>
    </nav>
    <?= $this->session->flashdata('msg'); ?>
    <!-- Page Heading -->
    <div class="row mb-4">
        <div class="col-lg">
            <div class="card shadow">
                <div class="card-header h4 text-dark text-center">
                    <i class="fa">Data </i>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table" width="100%" cellspacing="0">
                            <thead class=" thead strong text-dark">
                              <tr>
                                <th scope="col">Nomor</th>
                                <th scope="col">Nik</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Username</th>
                                <th scope="col">Telp</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php $no = 1; ?>
                          <?php foreach ($data_masyarakat as $dm) : ?>
                            <tr>
                              <th scope="row"><?= $no++; ?></th>
                              <td><?= $dm['nik']; ?></td>
                              <td><?= $dm['nama']; ?></td>
                              <td><?= $dm['username']; ?></td>
                              <td><?= $dm['telp']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
</div>  <!-- /.container-fluid -->
</div>