<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="text-dark m-2"><?= date('l, d M Y'); ?></div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-4">
            <a class="breadcrumb-item text-info" href="<?= base_url('Admin/DashboardController'); ?>">Dashboard</a>
            <li class="breadcrumb-item active">Pengaduan selesai</li>
        </ol>
    </nav>


    <a href="<?= base_url('Admin/PetugasController'); ?>" class="btn btn-info">Tambah Petugas Baru <i class="fa fa-plus"></i> </a>
    <br><br>
    <?= validation_errors('<div class="alert alert-danger alert-dismissible fade show" role="alert">','<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>') ?>
    <?= $this->session->flashdata('msg'); ?>
    <!-- Page Heading -->
    <div class="row mb-4">
        <div class="col-lg">
            <div class="card shadow">
                <div class="card-header h4 text-dark text-center">
                    <i class="fa">Petugas</i>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table" width="100%" cellspacing="0">
                            <thead class=" thead strong text-dark">
                              <tr>
                                <th scope="col">Nomor</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Telp</th>
                                <th scope="col">Level</th>
                                <th class="text-center" scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php $no = 1; ?>
                          <?php foreach ($data_petugas as $dp) : ?>
                            <tr>
                              <th scope="row"><?= $no++; ?></th>
                              <td><?= $dp['nama_petugas']; ?></td>
                              <td><?= $dp['telp']; ?></td>
                              <td><?= $dp['level']; ?></td>
                              <td class="text-center">
                                <?php if ($dp['username'] == $this->session->userdata('username')) : ?>
                                  <small>Tidak ada aksi</small>
                                </td>
                                  <?php else : ?>
                                    <a href="<?= base_url('Admin/PetugasController/edit/'.$dp['id_petugas']) ?>" class="btn btn-dark"><i class="fa fa-pen"></i></a>
                                    <a href="<?= base_url('Admin/PetugasController/delete/'.$dp['id_petugas']) ?>"
             onclick="return confirm('Apakah anda yakin ingin menghapus pengaduan?');"> <i class="btn btn-danger"><i class="fa fa-trash"></i></i></a>
                                <?php endif; ?>
                            </td>
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