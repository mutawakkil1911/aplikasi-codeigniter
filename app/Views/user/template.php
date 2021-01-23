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

     <?= $this->renderSection('konten'); ?>

     <script src=" <?= base_url(); ?>/asset/js/jquery-3.5.1.js"> </script>
     <script src="<?= base_url(); ?>/asset/js/popper.min.js"></script>
     <script src="<?= base_url(); ?>/asset/js/bootstrap.min.js"></script>
     <script src="<?= base_url(); ?>/sweetalert/sweetalert2.all.min.js"></script>
     <script src="<?= base_url(); ?>/js/script.js"></script>
</body>

</html>