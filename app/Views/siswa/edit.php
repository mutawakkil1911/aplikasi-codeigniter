<?= $this->extend('layout/template'); ?>

<?= $this->section('konten'); ?>

<div class="container mt-3">
     <h2 class="judulTable">Ubah Data Siswa</h2>
     <form action="/Siswa/ubah/<?= $siswa['id']; ?>" method="post" enctype="multipart/form-data" class="mt-5">
          <input type="hidden" name="gambarLama" value="<?= $siswa['gambar']; ?>">
          <div class="form-group row">
               <label for="noinduk" class="col-sm-2 col-form-label">No. Induk</label>
               <div class="col-sm-10">
                    <input type="text" class="form-control <?= ($validation->hasError('noinduk') ? 'is-invalid' : ''); ?>" name="noinduk" id="noinduk" placeholder="Masukkan nomer induk" autocomplete="off" autofocus value="<?= (old('noinduk') ? old('noinduk') : $siswa['noinduk']); ?>">
                    <div class="invalid-feedback">
                         <?= $validation->getError('noinduk'); ?>
                    </div>
               </div>
          </div>
          <div class="form-group row">
               <label for="nama" class="col-sm-2 col-form-label">Nama</label>
               <div class="col-sm-10">
                    <input type="text" class="form-control <?= ($validation->hasError('nama') ? 'is-invalid' : ''); ?>" name="nama" id="nama" placeholder="Masukkan nama" autocomplete="off" value="<?= (old('nama') ? old('nama') : $siswa['nama']); ?>">
                    <div class="invalid-feedback">
                         <?= $validation->getError('nama'); ?>
                    </div>
               </div>
          </div>
          <div class=" form-group row">
               <label for="jeniskelamin" class="col-sm-2 col-form-label">Nama</label>
               <div class="form-group col-sm-6">
                    <select class="form-control" id="jeniskelamin" name="jeniskelamin" id="jeniskelamin">
                         <option><?= (old('jeniskelamin') ? old('jeniskelamin') : $siswa['jeniskelamin']); ?></option>
                         <option>Laki-Laki</option>
                         <option>Perempuan</option>
                    </select>
               </div>
          </div>
          <div class="form-group row">
               <label for="nisn" class="col-sm-2 col-form-label">NISN</label>
               <div class="col-sm-10">
                    <input type="text" class="form-control <?= ($validation->hasError('nisn') ? 'is-invalid' : ''); ?>" name="nisn" id="nisn" placeholder="Masukkan NISN" autocomplete="off" value="<?= (old('nisn') ? old('nisn') : $siswa['nisn']); ?>">
                    <div class="invalid-feedback">
                         <?= $validation->getError('nisn'); ?>
                    </div>
               </div>
          </div>
          <div class="form-group row">
               <label for="nik" class="col-sm-2 col-form-label">NIK</label>
               <div class="col-sm-10">
                    <input type="text" class="form-control <?= ($validation->hasError('nik') ? 'is-invalid' : ''); ?>" name="nik" id="nik" placeholder="Masukkan NIK" autocomplete="off" value="<?= (old('nik') ? old('nik') : $siswa['nik']); ?>">
                    <div class="invalid-feedback">
                         <?= $validation->getError('nik'); ?>
                    </div>
               </div>
          </div>
          <div class="form-group row">
               <label for="tempatlahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
               <div class="col-sm-10">
                    <input type="text" class="form-control <?= ($validation->hasError('tempatlahir') ? 'is-invalid' : ''); ?>" name="tempatlahir" id="tempatlahir" placeholder="Masukkan tempat lahir" autocomplete="off" value="<?= (old('tempatlahir') ? old('tempatlahir') : $siswa['tempatlahir']); ?>">
                    <div class="invalid-feedback">
                         <?= $validation->getError('tempatlahir'); ?>
                    </div>
               </div>
          </div>
          <div class="form-group row">
               <label for="tanggallahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
               <div class="col-sm-6">
                    <input type="date" class="form-control" name="tanggallahir" id="tanggallahir" value="<?= (old('tanggallahir') ? old('tanggallahir') : $siswa['tanggallahir']); ?>">
               </div>
          </div>
          <div class="form-group row">
               <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
               <div class="form-group col-sm-6">
                    <select class="form-control" id="kelas" name="kelas" id="kelas">
                         <option><?= (old('kelas') ? old('kelas') : $siswa['kelas']); ?></option>
                         <option>X</option>
                         <option>XI</option>
                         <option>XII</option>
                    </select>
               </div>
          </div>
          <div class="form-group row">
               <label for="program" class="col-sm-2 col-form-label">Program</label>
               <div class="form-group col-sm-6">
                    <select class="form-control" id="program" name="program" id="program">
                         <option><?= (old('program') ? old('program') : $siswa['program']); ?></option>
                         <option>BAHASA</option>
                         <option>IPA</option>
                         <option>IPS</option>
                    </select>
               </div>
          </div>
          <div class="form-group row">
               <label for="namabapak" class="col-sm-2 col-form-label">Nama Bapak</label>
               <div class="col-sm-10">
                    <input type="text" class="form-control <?= ($validation->hasError('namabapak') ? 'is-invalid' : ''); ?>" name="namabapak" id="namabapak" placeholder="Masukkan nama bapak" autocomplete="off" value="<?= (old('namabapak') ? old('namabapak') : $siswa['namabapak']); ?>">
                    <div class="invalid-feedback">
                         <?= $validation->getError('namabapak'); ?>
                    </div>
               </div>
          </div>
          <div class="form-group row">
               <label for="namaibu" class="col-sm-2 col-form-label">Nama Ibu</label>
               <div class="col-sm-10">
                    <input type="text" class="form-control <?= ($validation->hasError('namaibu') ? 'is-invalid' : ''); ?>" name="namaibu" id="namaibu" placeholder="Masukkan nama ibu" autocomplete="off" value="<?= (old('namaibu') ? old('namaibu') : $siswa['namaibu']); ?>">
                    <div class="invalid-feedback">
                         <?= $validation->getError('namaibu'); ?>
                    </div>
               </div>
          </div>
          <div class="form-group row">
               <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
               <div class="col-sm-10">
                    <input type="text" class="form-control <?= ($validation->hasError('alamat') ? 'is-invalid' : ''); ?>" name="alamat" id="alamat" placeholder="Masukkan alamat" autocomplete="off" value="<?= (old('alamat') ? old('alamat') : $siswa['alamat']); ?>">
                    <div class="invalid-feedback">
                         <?= $validation->getError('alamat'); ?>
                    </div>
               </div>
          </div>
          <div class="form-group row">
               <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
               <div class="col-sm-2">
                    <img src="/img/siswa/<?= $siswa['gambar']; ?>" class="rounded-circle img-preview" width="100px">
               </div>
               <div class="col-sm-8">
                    <div class="custom-file">
                         <input type="file" class="custom-file-input <?= ($validation->hasError('gambar') ? 'is-invalid' : ''); ?>" id="gambar" name="gambar" onchange="previewGambar()">
                         <div class="invalid-feedback">
                              <?= $validation->getError('gambar'); ?>
                         </div>
                         <label class="custom-file-label" for="gambar"><?= $siswa['gambar']; ?></label>
                    </div>
               </div>
          </div>
          <div class="form-group row">
               <div class="col-sm-10">
                    <button type="submit" class="btn tombolSatu" name="submit"><i class="fas fa-save mr-2"></i>Simpan</button>
               </div>
          </div>
     </form>
</div>

<?= $this->endSection(); ?>