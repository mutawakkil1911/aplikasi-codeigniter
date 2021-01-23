<?= $this->extend('layout/template'); ?>

<?= $this->section('konten'); ?>

<div class="container mt-3">
     <div class="card text-center">
          <div class="card-header judulTitle font-weight-bold">
               INFO DETAIL SISWA
          </div>
          <div class="card-body">
               <img src="<?= base_url(); ?>/img/siswa/<?= $siswa['gambar']; ?>" class="rounded-circle mb-3" width="150px">
               <p class="card-text">Download foto <?= $siswa['nama']; ?></p>
               <a href="/Siswa/download/<?= $siswa['gambar']; ?>/<?= $siswa['id']; ?>" class="btn tombolSatu"><i class="fas fa-download mr-2"></i>DOWNLOAD</a>
               <hr class="garisDetail">
               <h5 class="card-title">NO. INDUK</h5>
               <p class="card-text"><?= $siswa['noinduk']; ?></p>
               <hr class="garisDetail">
               <h5 class="card-title">NAMA</h5>
               <p class="card-text"><?= $siswa['nama']; ?></p>
               <hr class="garisDetail">
               <h5 class="card-title">JENIS KELAMIN</h5>
               <p class="card-text"><?= $siswa['jeniskelamin']; ?></p>
               <hr class="garisDetail">
               <h5 class="card-title">NISN</h5>
               <p class="card-text"><?= $siswa['nisn']; ?></p>
               <hr class="garisDetail">
               <h5 class="card-title">NIK</h5>
               <p class="card-text"><?= $siswa['nik']; ?></p>
               <hr class="garisDetail">
               <h5 class="card-title">TEMPAT LAHIR</h5>
               <p class="card-text"><?= $siswa['tempatlahir']; ?></p>
               <hr class="garisDetail">
               <h5 class="card-title">TANGGAL LAHIR</h5>
               <p class="card-text"><?= $siswa['tanggallahir']; ?></p>
               <hr class="garisDetail">
               <h5 class="card-title">KELAS</h5>
               <p class="card-text"><?= $siswa['kelas']; ?></p>
               <hr class="garisDetail">
               <h5 class="card-title">PROGRAM</h5>
               <p class="card-text"><?= $siswa['program']; ?></p>
               <hr class="garisDetail">
               <h5 class="card-title">NAMA BAPAK</h5>
               <p class="card-text"><?= $siswa['namabapak']; ?></p>
               <hr class="garisDetail">
               <h5 class="card-title">NAMA IBU</h5>
               <p class="card-text"><?= $siswa['namaibu']; ?></p>
               <hr class="garisDetail">
               <h5 class="card-title">ALAMAT</h5>
               <p class="card-text"><?= $siswa['alamat']; ?></p>
               <hr class="garisDetail">
               <a href="/Home" class="btn tombolSatu"><i class="fas fa-backward mr-2"></i>KEMBALI</a>
          </div>
          <div class="card-footer copyTitle">
               All Right Reserverd &copy Mutawakkil Alallah 2020
          </div>
     </div>
</div>

<?= $this->endSection(); ?>