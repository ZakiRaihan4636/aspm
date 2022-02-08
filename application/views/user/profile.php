

<div class="container-fluid">
    <div class="text-dark m-2"><?= date('l, d M Y'); ?></div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <a class="breadcrumb-item text-info" href="<?= base_url('administrator'); ?>">Dashboard</a>
            <li class="breadcrumb-item active">Profile saya</li>
        </ol>
    </nav>
    <div class="container">
        <div class="row">
            <div class="card col-md-6" style="max-width: 400px;">
                <div class="row no-gutters">
                    <div class="col-lg">
                        <div class="card-body">
                            <h4 class="card-title text-center">Profile</h4>
                            <div class="card-body">
                                <img src="<?= base_url('assets/profile/'.$user['foto_profile']) ?>" class="card-img" alt="img user">
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">  
                                    <table class="table p-4" width="100%" cellspacing="0">
                                        <tr>
                                            <th scope="row">Username</th>
                                            <td><?= $user['username']; ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Telepon</th>
                                            <td><?= $user['telp'] ?></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    