<!doctype html>
<html lang="en">

<head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="<?= base_url(); ?>/asset/css/bootstrap.min.css">
     <link rel="stylesheet" href="<?= base_url(); ?>/asset/fontawesome/css/all.min.css">
     <link rel="stylesheet" href="<?= base_url(); ?>/css/main.css">

     <title><?= $title; ?></title>
</head>

<body>


     <!-- navbar -->
     <nav class="navbar">
          <div class="container-fluid">
               <a class="navbar-brand" href="/Home">
                    <img src="<?= base_url(); ?>/img/app/logo.png" width="30" height="30" class="d-inline-block align-top mr-3" alt="">
                    SMAN 1 GAPURA
               </a>
          </div>
     </nav>

     <?= $this->renderSection('konten'); ?>

     <div class="footer mt-5">
          <div class="container">
               <div class="row">
                    <div class="col-6 mt-3">
                         <b>SMAN 1 GAPURA</b>
                         <br>
                         <div class="kontenFooter mt-2">
                              <p>Adalah salah satu Sekolah Menengah Atas (SMA) Favorit di Kabupaten Sumenep, Provinsi Jawa Timur. SMAN 1 GAPURA memiliki visi dan misi mencetak kader penerus bangsa yang mampu bersaing di tengah era revolusi industri 4.0 serta siap menuju Indonesia Emas 2045.</p>
                         </div>
                    </div>
                    <div class="col-2 mt-3">
                         <b>PROGRAM</b>
                         <br>
                         <div class="kontenFooter daftarLayanan mt-3">
                              <p>BAHASA</p>
                              <p>IPA</p>
                              <p>IPS</p>
                         </div>
                    </div>
                    <div class="col-4 mt-3">
                         <b>HUBUNGI KAMI</b>
                         <br>
                         <div class="kontenFooter daftarLayanan mt-3">
                              <table>
                                   <tbody>
                                        <td>
                                             <p>Telepon</p>
                                             <p>Whatsapp</p>
                                             <p>Instagram</p>
                                             <p>Email</p>
                                        </td>
                                        <td>
                                             <p>:</p>
                                             <p>:</p>
                                             <p>:</p>
                                             <p>:</p>
                                        </td>
                                        <td>
                                             <p>(0832) 4455 6677</p>
                                             <p>+62 852 3317 7133</p>
                                             <p>@sman1gapura</p>
                                             <p>contact@sman1gapura.sch.id</p>
                                        </td>
                                   </tbody>
                              </table>
                         </div>
                    </div>
               </div>
          </div>
          <hr class="border-white">
          <div class="container">
               <div class="row justify-content-end py-0">
                    <div class="col-8">
                         <p>All Right Reserverd by Mutawakkil Alallah &copy 2020</p>
                    </div>
                    <div class="col-4 text-center">
                         <i class="mr-3 fab fa-facebook-square fa-1x"></i>
                         <i class="mr-3 fab fa-instagram fa-1x"></i>
                         <i class="mr-3 fas fa-mail-bulk fa-1x"></i>
                         <i class="mr-3 fab fa-whatsapp fa-1x"></i>
                    </div>
               </div>
          </div>
     </div>

     <script src=" <?= base_url(); ?>/asset/js/jquery-3.5.1.js"> </script>
     <script src="<?= base_url(); ?>/asset/js/popper.min.js"></script>
     <script src="<?= base_url(); ?>/asset/js/bootstrap.min.js"></script>
     <script src="<?= base_url(); ?>/sweetalert/sweetalert2.all.min.js"></script>
     <script src="<?= base_url(); ?>/js/script.js"></script>
</body>

</html>