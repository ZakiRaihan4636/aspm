 <div class="container">

  <div class="card o-hidden border-0 shadow-lg my-5 col-lg-6 mx-auto">
    <div class="card-body p-0">
      <!-- Nested Row within Card Body -->
      <div class="row">
        <div class="col-lg">
          <div class="p-5">
            <div class="text-center">
              <h1 class="h4 text-gray-900 mb-4">Registrasi Akun</h1>
            </div>

            <?= validation_errors('<div class="alert alert-danger alert-dismissible fade show" role="alert">','<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>') ?>

            <?= $this->session->flashdata('msg'); ?>

            <?= form_open('Auth/RegisterController', 'class="user"') ?>
            <div class="form-group">
              <input type="text" class="form-control form-control-user" id="nik" placeholder="Masukan NIK" name="nik" value="<?= set_value('nik') ?>">
            </div>
            <div class="form-group">
              <input type="text" class="form-control form-control-user" id="nama" placeholder="Masukan Nama Lengkap" name="nama" value="<?= set_value('nama') ?>">
            </div>
            <div class="form-group">
              <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Masukan Username" value="<?= set_value('username') ?>">  
            </div>
            <div class="form-group">
              <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Masukan Password">
            </div>
            <div class="form-group">
              <input type="text" class="form-control form-control-user" id="telp" placeholder="Nomor Telepon" name="telp">
            </div>
            <button type="submit" class="btn btn-info btn-user btn-block">DAFTAR</button>
          </form>
          <hr>
          <div class="text-center">
            <a class="small text-info" href="<?= base_url('Auth/LoginController') ?>">Sudah punya akun? LOGIN</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</div>