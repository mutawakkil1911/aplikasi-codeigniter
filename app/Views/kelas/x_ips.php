<?= $this->extend('layout/template'); ?>

<?= $this->section('konten'); ?>

<div class="container-fluid mt-3">
     <!-- notifikasi sweetalert 2 -->
     <div class="swal" data-swal="<?= (session()->getFlashdata('notifikasi')); ?>"></div>
     <div class="row">
          <div class="col-2">
               <div class="card" style="width: 14rem;">
                    <div class="card-header daftarProgram text-center">
                         BAHASA
                    </div>
                    <ul class="list-group list-group-flush">
                         <li class="list-group-item daftarKelas">
                              <a href="/Kelas/x_bhs" class="namaKelas">Kelas X</a>
                         </li>
                         <li class="list-group-item daftarKelas">
                              <a href="/Kelas/xi_bhs" class="namaKelas">Kelas XI</a>
                         </li>
                         <li class="list-group-item daftarKelas">
                              <a href="/Kelas/xii_bhs" class="namaKelas">Kelas XII</a>
                         </li>
                    </ul>
                    <div class="card-header daftarProgram text-center">
                         IPA
                    </div>
                    <ul class="list-group list-group-flush">
                         <li class="list-group-item daftarKelas">
                              <a href="/Kelas/x_ipa" class="namaKelas">Kelas X</a>
                         </li>
                         <li class="list-group-item daftarKelas">
                              <a href="/Kelas/xi_ipa" class="namaKelas">Kelas XI</a>
                         </li>
                         <li class="list-group-item daftarKelas">
                              <a href="/Kelas/xii_ipa" class="namaKelas">Kelas XII</a>
                         </li>
                    </ul>
                    <div class="card-header daftarProgram text-center">
                         IPS
                    </div>
                    <ul class="list-group list-group-flush">
                         <li class="list-group-item daftarKelas">
                              <a href="/Kelas/x_ips" class="namaKelas">Kelas X</a>
                         </li>
                         <li class="list-group-item daftarKelas">
                              <a href="/Kelas/xi_ips" class="namaKelas">Kelas XI</a>
                         </li>
                         <li class="list-group-item daftarKelas">
                              <a href="/Kelas/xii_ips" class="namaKelas">Kelas XII</a>
                         </li>
                    </ul>
               </div>
          </div>
          <div class="col-9 ml-5">
               <div class="dataSiswa">
                    <div class="judulTable mt-3">
                         <h3>DATA SISWA SMAN 1 GAPURA (KELAS : X - PROGRAM : IPS)</h3>
                    </div>
                    <div class="row">
                         <div class="col-6">
                              <div class="kolomCari mt-3">
                                   <form action="/Kelas/x_ips" method="post">
                                        <div class="input-group mb-3">
                                             <input type="text" class="form-control" placeholder="masukkan nama..." name="keyword" autocomplete="off">
                                             <div class="input-group-append">
                                                  <button class="btn tombolSatu" type="submit" name="submit"><i class="fas fa-search mr-2"></i>Cari</button>
                                             </div>
                                        </div>
                                   </form>
                              </div>
                         </div>
                    </div>
                    <table class="table mt-3">
                         <thead class="thead text-center headerTable">
                              <tr>
                                   <th scope="col">NO</th>
                                   <th scope="col">NAMA</th>
                                   <th scope="col">JENIS KELAMIN</th>
                                   <th scope="col">PROGRAM</th>
                                   <th scope="col">KELAS</th>
                                   <th scope="col">KET</th>
                              </tr>
                         </thead>
                         <?php $i = 1 + (10 * ($halaman - 1)); ?>
                         <?php foreach ($siswa as $s) : ?>
                              <tbody class="bodyTable">
                                   <tr>
                                        <th scope="row" class="text-center"><?= $i++; ?></th>
                                        <td><?= $s['nama']; ?></td>
                                        <td class="text-center"><?= $s['jeniskelamin']; ?></td>
                                        <td class="text-center"><?= $s['program']; ?></td>
                                        <td class="text-center"><?= $s['kelas']; ?></td>
                                        <td class="text-center">
                                             <a href="/Siswa/<?= $s['id']; ?>" class="badge badge-info"><i class="fas fa-info-circle mr-1"></i>Info</a>
                                             <a href="/Siswa/edit/<?= $s['id']; ?>" class="badge badge-warning"><i class="fas fa-pen-square mr-1"></i>Edit</a>
                                             <a href="/Siswa/delete/<?= $s['id']; ?>" class="badge badge-danger tombolHapus"><i class="fas fa-trash mr-1"></i>Hapus</a>
                                        </td>
                                   </tr>
                              </tbody>
                         <?php endforeach; ?>
                    </table>
                    <?= $pager->links('siswa', 'siswa_pagination'); ?>
               </div>
          </div>
     </div>
</div>

<?= $this->endSection(); ?>