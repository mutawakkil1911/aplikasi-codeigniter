<?php

namespace App\Models;

use CodeIgniter\Model;

class SiswaModel extends Model
{
     // nama table database
     protected $table = 'siswa';
     // kolom yang akan di isi secara manual melalui input
     protected $allowedFields = ['noinduk', 'nama', 'jeniskelamin', 'nisn', 'nik', 'tempatlahir', 'tanggallahir', 'kelas', 'program', 'namabapak', 'namaibu', 'alamat', 'gambar'];

     // method untuk mengirim data
     public function getSiswa($id = false)
     {
          // jika tidak ada parameter (Home::index)
          if ($id == false) {
               return $this->findAll();
          }

          // jika ada parameter $id (Siswa::detail)
          return $this->where(['id' => $id])->first();
     }

     // method untuk mencari
     public function cari($keyword)
     {
          return $this->table('siswa')->like('nama', $keyword);
     }
}
