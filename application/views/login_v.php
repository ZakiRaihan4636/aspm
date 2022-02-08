<div class="container">

  <!-- Outer Row -->
  <div class="row justify-content-center">

    <div class="col-lg-5">

      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="row">
            <div class="col-lg">
              <div class="p-5">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">SISTEM PENGADUAN MASYARAKAT</h1>
                  <h3 class="h6 text-gray-900 mb-4">Silahkan Login Terlebih Dahulu</h3>
                </div>

                <?= validation_errors('<div class="alert alert-danger alert-dismissible fade show" role="alert">','<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>') ?>

                <?= $this->session->flashdata('msg'); ?>
                
                <?= form_open('Auth/LoginController', 'class="user"'); ?>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Masukan Username" autofocus value="<?= set_value('username') ?>">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Masukan Password">
                </div>
                <button type="submit" class="btn btn-info btn-user btn-block">LOGIN</button>
              </form>
              <hr>
              <div class="text-center">
                <a class="small text-center text-info" href="<?= base_url('Auth/RegisterController') ?>">Belum Punya Akun? Daftar Sekarang</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

</div>

</div>
