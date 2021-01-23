<?= $this->extend('user/template'); ?>

<?= $this->section('konten'); ?>

<div class="container my-5">
     <div class="swal" data-swal="<?= (session()->getFlashdata('notifikasi')); ?>"></div>
     <div class="gagal" data-gagal="<?= (session()->getFlashdata('gagal')); ?>"></div>
     <div class="row">
          <div class="col-8 mx-auto">
               <div class="card">
                    <div class="card-header bg-info text-white font-weight-bold text-center">
                         HALAMAN LOGIN
                    </div>
                    <div class="card-body bg-dark">
                         <div class="logo text-center">
                              <img src="/img/app/logo.png" alt="" width="100px" class="mb-2">
                              <h3 class="namaSekolah">SMAN 1 GAPURA</h3>
                              <p class="alamatSekolah">Gapura - Sumenep</p>
                         </div>
                         <form action="/User/login" method="post">
                              <div class="formulir text-white">
                                   <div class="form-group">
                                        <label for="username">Username</label>
                                        <input type="text" class="form-control kolomLogin" id="username" name="username" autocomplete="off">
                                   </div>
                                   <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control kolomLogin" id="password" name="password" autocomplete="off">
                                   </div>
                              </div>
                              <div class="tombol text-center mt-2 mb-2">
                                   <button type="submit" name="submit" class="btn btn-info tombolLogin"><i class="fas fa-sign-in-alt mr-3"></i>Login</button>
                              </div>
                              <div class="logo text-center mt-3 mb-1">
                                   <h6 class="namaSekolah">APLIKASI SISTEM INFORMASI SEKOLAH - SMAN 1 GAPURA</h6>
                                   <p class="alamatSekolah">Developed by <span>Mutawakkil Alallah &copy 2020</span></p>
                              </div>
                         </form>
                    </div>
               </div>
          </div>
     </div>
</div>

<?= $this->endSection(); ?>