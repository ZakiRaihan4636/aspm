 <!-- Content Wrapper -->
 <div id="content-wrapper" class="d-flex flex-column">

  <!-- Main Content -->
  <div id="content">

      <!-- Topbar -->
      <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
         <?php if ($this->session->userdata('level') == 'admin') : ?>
             <div class="nav-item">
                 <div class="text-dark"> Administrator </div>
             </div>
             <?php elseif ($this->session->userdata('level') == 'admin') : ?>
                 <div class="nav-item">
                     <div class="text-dark">Petugas</div>
                 </div>
                 <?php else : ?>
                     <div class="nav-item">
                         <div class="text-dark">Masyarakat</div>
                     </div>
                 <?php endif; ?>
                 <div class="topbar-divider d-none d-sm-block"></div>
                 <!-- Sidebar Toggle (Topbar) -->
                 <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3 text-dark">
                     <i class="fa fa-bars"></i>
                 </button>


                 <!-- Topbar Navbar -->
                 <ul class="navbar-nav ml-auto">
                  <div class="topbar-divider d-none d-sm-block"></div>

                  

                  <!-- Nav Item - User Information -->
                  <li class="nav-item dropdown no-arrow">
                      <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $this->session->userdata('username'); ?></span>
                        <img class="img-profile rounded-circle" src="<?= base_url() ?>assets/profile/user.png">
                    </a>

                    
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="<?= base_url('User/ProfileController') ?>">
                          <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                          Profil
                      </a>
                      <a class="dropdown-item" href="<?= base_url('Auth/ChangePasswordController') ?>">
                          <i class="fas fa-key fa-sm fa-fw mr-2 text-gray-400"></i>
                          Ganti Password
                      </a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="<?= base_url('Auth/LogoutController') ?>" data-toggle="modal" data-target="#logoutModal">
                          <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                          Keluar
                      </a>
                  </div>
              </li>

          </ul>

      </nav>
      <!-- End of Topbar -->
