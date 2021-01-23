const swal = $('.swal').data('swal');

if (swal) {
     Swal.fire({
          title: 'Selamat',
          text: swal,
          icon: 'success'
     });
}

const gagal = $('.gagal').data('gagal');

if (gagal) {
     Swal.fire({
          title: 'Perhatian',
          text: gagal,
          icon: 'warning'
     });
}

$('.tombolHapus').on('click', function (e) {
     // hentikan aksi default
     e.preventDefault();
     const href = $(this).attr('href');

     Swal.fire({
          title: 'Apakah anda yakin?',
          text: 'Data akan dihapus !',
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Hapus',
          cancelButtonText: 'Batal'
        }).then((result) => {
          if (result.value == true) {
            document.location.href = href;
          }
        })    
})

$('.tombolLogout').on('click', function (e) {
     // hentikan aksi default
     e.preventDefault();
     const href = $(this).attr('href');

     Swal.fire({
          title: 'Apakah anda yakin?',
          text: "Anda akan Logout !",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Logout',
          cancelButtonText: 'Batal'
        }).then((result) => {
          if (result.value == true) {
            document.location.href = href;
          }
        })    
})

function previewGambar() {
       
     const gambar = document.querySelector('#gambar');
     const gambarLabel = document.querySelector('.custom-file-label');
     const imgPreview = document.querySelector('.img-preview');
     
     gambarLabel.textContent = gambar.files[0].name;
     
     const fileGambar = new FileReader();
     fileGambar.readAsDataURL(gambar.files[0]);
     
     fileGambar.onload = function(e) {
          imgPreview.src = e.target.result;
     }
}

function previewFile() {
       
     const file = document.querySelector('#file');
     const fileLabel = document.querySelector('.custom-file-label');
     
     fileLabel.textContent = file.files[0].name;
}