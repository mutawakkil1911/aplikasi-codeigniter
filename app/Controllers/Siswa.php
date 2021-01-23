<?php

namespace App\Controllers;

use App\Models\SiswaModel;

class Siswa extends BaseController
{
     // instansiasi siswa model
     protected $siswaModel;

     public function __construct()
     {
          $this->siswaModel = new SiswaModel();
     }

     // menampilkan data detail siswa (Siswa::detail)  
     public function detail($id)
     {
          // memvalidasi apakah sudah login
          if (session()->has('nama')) {
               $data = [
                    'title' => 'Info Detail Siswa',
                    'siswa' => $this->siswaModel->getSiswa($id)
               ];

               // jika tidak ada data id siswa
               if (empty($data['siswa'])) {
                    throw new \CodeIgniter\Exceptions\PageNotFoundException('Mohon maaf, data siswa tidak di temukan');
               }


               return view('siswa/detail', $data);
          } else {
               // mengarahkan ke halaman login
               return redirect()->to('/');
          }
     }

     // method untuk menampilkan halaman tambah (Siswa:tambah)
     public function tambah()
     {
          // memvalidasi apakah sudah login
          if (session()->has('nama')) {
               $data = [
                    'title' => 'Tambah Data Siswa',
                    'validation' => \Config\Services::validation()
               ];

               return view('siswa/tambah', $data);
          } else {
               // mengarahkan ke halaman login
               return redirect()->to('/');
          }
     }

     // method untuk menyimpan data (Siswa::simpan)
     public function simpan()
     {
          // validasi form 
          if (!$this->validate([
               'noinduk' => [
                    'rules' => 'required',
                    'errors' => [
                         'required' => 'Silahkan isi nomer induk'
                    ]
               ],
               'nama' => [
                    'rules' => 'required',
                    'errors' => [
                         'required' => 'Silahkan isi nama'
                    ]
               ],
               'nisn' => [
                    'rules' => 'required',
                    'errors' => [
                         'required' => 'Silahkan isi nisn'
                    ]
               ],
               'nik' => [
                    'rules' => 'required',
                    'errors' => [
                         'required' => 'Silahkan isi nik'
                    ]
               ],
               'tempatlahir' => [
                    'rules' => 'required',
                    'errors' => [
                         'required' => 'Silahkan isi tempat lahir'
                    ]
               ],
               'namabapak' => [
                    'rules' => 'required',
                    'errors' => [
                         'required' => 'Silahkan isi nama bapak'
                    ]
               ],
               'namaibu' => [
                    'rules' => 'required',
                    'errors' => [
                         'required' => 'Silahkan isi nama ibu'
                    ]
               ],
               'alamat' => [
                    'rules' => 'required',
                    'errors' => [
                         'required' => 'Silahkan isi alamat'
                    ]
               ],
               'gambar' => [
                    'rules' => 'uploaded[gambar]|max_size[gambar,1024]|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
                    'errors' => [
                         'uploaded' => 'Pilih gambar terlebih dahulu',
                         'max_size' => 'Pastikan gambar tidak lebih dari 1 MB',
                         'is_image' => 'Pilih gambar yang valid (jpg/jpeg/png)',
                         'mime_in' => 'Pilih gambar yang valid (jpg/jpeg/png)'
                    ]
               ]
          ])) {

               return redirect()->to('/Siswa/tambah')->withInput();
          }

          // ambil gambar untuk di simpan
          $fileGambar = $this->request->getFile('gambar');
          // ambil nama file
          $namaGambar = $fileGambar->getRandomName();
          // pindahkan ke direktori
          $fileGambar->move('img/siswa', $namaGambar);

          // membuat variable
          $nama = $this->request->getVar('nama');

          // mengisi database sesuai form input 
          $this->siswaModel->save([
               'noinduk' => $this->request->getVar('noinduk'),
               'nama' => $nama,
               'jeniskelamin' => $this->request->getVar('jeniskelamin'),
               'nisn' => $this->request->getVar('nisn'),
               'nik' => $this->request->getVar('nik'),
               'tempatlahir' => $this->request->getVar('tempatlahir'),
               'tanggallahir' => $this->request->getVar('tanggallahir'),
               'kelas' => $this->request->getVar('kelas'),
               'program' => $this->request->getVar('program'),
               'namabapak' => $this->request->getVar('namabapak'),
               'namaibu' => $this->request->getVar('namaibu'),
               'alamat' => $this->request->getVar('alamat'),
               'gambar' => $namaGambar
          ]);

          // set session untuk notifikasi
          session()->setFlashdata('notifikasi', $nama . ' Berhasil di tambahkan.');

          // arahkan ke halaman home (Home::index)
          return redirect()->to('/Home');
     }

     public function delete($id)
     {
          // memvalidasi apakah sudah login
          if (session()->has('nama')) {
               // mengambil nama siswa
               $siswaHapus = $this->siswaModel->getSiswa($id);
               $nama = $siswaHapus['nama'];

               // cari gambar berdasarkan id
               $siswa = $this->siswaModel->find($id);
               // hapus gambar
               unlink('img/siswa/' . $siswa['gambar']);

               $this->siswaModel->delete($id);

               // set session untuk notifikasi
               session()->setFlashdata('notifikasi', $nama . ' Berhasil dihapus.');

               // arahkan ke halaman home (Home::index)
               return redirect()->to('/Home');
          } else {
               // mengarahkan ke halaman login
               return redirect()->to('/');
          }
     }

     // method untuk mengubah data siswa (Siswa::edit)
     public function edit($id)
     {
          // memvalidasi apakah sudah login
          if (session()->has('nama')) {
               $data = [
                    'title' => 'Ubah Data Siswa',
                    'validation' => \Config\Services::validation(),
                    'siswa' => $this->siswaModel->getSiswa($id)
               ];

               return view('siswa/edit', $data);
          } else {
               // mengarahkan ke halaman login
               return redirect()->to('/');
          }
     }

     // method untuk menyimpan data (Siswa::ubah)
     public function ubah($id)
     {
          // validasi form 
          if (!$this->validate([
               'noinduk' => [
                    'rules' => 'required',
                    'errors' => [
                         'required' => 'Silahkan isi nomer induk'
                    ]
               ],
               'nama' => [
                    'rules' => 'required',
                    'errors' => [
                         'required' => 'Silahkan isi nama'
                    ]
               ],
               'nisn' => [
                    'rules' => 'required',
                    'errors' => [
                         'required' => 'Silahkan isi nisn'
                    ]
               ],
               'nik' => [
                    'rules' => 'required',
                    'errors' => [
                         'required' => 'Silahkan isi nik'
                    ]
               ],
               'tempatlahir' => [
                    'rules' => 'required',
                    'errors' => [
                         'required' => 'Silahkan isi tempat lahir'
                    ]
               ],
               'namabapak' => [
                    'rules' => 'required',
                    'errors' => [
                         'required' => 'Silahkan isi nama bapak'
                    ]
               ],
               'namaibu' => [
                    'rules' => 'required',
                    'errors' => [
                         'required' => 'Silahkan isi nama ibu'
                    ]
               ],
               'alamat' => [
                    'rules' => 'required',
                    'errors' => [
                         'required' => 'Silahkan isi alamat'
                    ]
               ],
               'gambar' => [
                    'rules' => 'max_size[gambar,1024]|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
                    'errors' => [
                         'max_size' => 'Pastikan gambar tidak lebih dari 1 MB',
                         'is_image' => 'Pilih gambar yang valid (jpg/jpeg/png)',
                         'mime_in' => 'Pilih gambar yang valid (jpg/jpeg/png)'
                    ]
               ]
          ])) {

               return redirect()->to('/Siswa/edit/' . $id)->withInput();
          }

          // ambil gambar untuk di simpan
          $fileGambar = $this->request->getFile('gambar');

          // cek apakah gambar di ubah
          if ($fileGambar->getError() == 4) {
               $namaGambar = $this->request->getVar('gambarLama');
          } else {
               // buat nama random
               $namaGambar = $fileGambar->getRandomName();
               // pindahkan gambar
               $fileGambar->move('img/siswa/', $namaGambar);
               // hapus gambar lama
               unlink('img/siswa/' . $this->request->getVar('gambarLama'));
          }

          // membuat variable
          $nama = $this->request->getVar('nama');

          // mengisi database sesuai form input 
          $this->siswaModel->save([
               'id' => $id,
               'noinduk' => $this->request->getVar('noinduk'),
               'nama' => $nama,
               'jeniskelamin' => $this->request->getVar('jeniskelamin'),
               'nisn' => $this->request->getVar('nisn'),
               'nik' => $this->request->getVar('nik'),
               'tempatlahir' => $this->request->getVar('tempatlahir'),
               'tanggallahir' => $this->request->getVar('tanggallahir'),
               'kelas' => $this->request->getVar('kelas'),
               'program' => $this->request->getVar('program'),
               'namabapak' => $this->request->getVar('namabapak'),
               'namaibu' => $this->request->getVar('namaibu'),
               'alamat' => $this->request->getVar('alamat'),
               'gambar' => $namaGambar
          ]);

          // set session untuk notifikasi
          session()->setFlashdata('notifikasi', $nama . ' Berhasil di ubah.');

          // arhkan ke halaman home (Home::index)
          return redirect()->to('/Home');
     }

     // method untuk download data (Siswa::download)
     public function download($gambar, $id)
     {
          $siswa = $this->siswaModel->getSiswa($id);
          $namaSiswaAsli = $siswa['nama'];

          $namaSiswaFix = url_title($namaSiswaAsli, '-', true);

          $file = new \CodeIgniter\Files\File($gambar);
          $namaFile = $file->getBasename();

          return $this->response->download('img/siswa/' . $namaFile, null)->setFileName($namaSiswaFix . '.png');
     }



     //--------------------------------------------------------------------
     //-------------------------------------------------------------------

}
