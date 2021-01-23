<?php

namespace App\Controllers;

use App\Models\SiswaModel;

class Kelas extends BaseController
{
     // instansias siswa model
     protected $siswaModel;

     public function __construct()
     {
          $this->siswaModel = new SiswaModel();
     }

     // menampilkan semua data siswa (KELAS X BAHASA)
     public function x_bhs()
     {
          // memvalidasi apakah sudah login
          if (session()->has('nama')) {
               // mengambil data halaman
               $halaman = $this->request->getVar('page_siswa') ? $this->request->getVar('page_siswa') : 1;

               // membuat pencarian
               $keyword = $this->request->getVar('keyword');
               if ($keyword) {
                    $siswa = $this->siswaModel->cari($keyword)->where('kelas', 'X')->where('program', 'Bahasa');
               } else {
                    $siswa = $this->siswaModel->where('kelas', 'X')->where('program', 'Bahasa');
               }

               $data = [
                    'title' => 'Home | SMAN 1 NURINDIANA',
                    'siswa' => $siswa->paginate(10, 'siswa'),
                    'pager' => $this->siswaModel->pager,
                    'halaman' => $halaman
               ];

               return view('kelas/x_bhs', $data);
          } else {
               // mengarahkan ke halaman login
               return redirect()->to('/');
          }
     }

     // menampilkan semua data siswa (KELAS XI BAHASA)
     public function xi_bhs()
     {
          // memvalidasi apakah sudah login
          if (session()->has('nama')) {
               // mengambil data halaman
               $halaman = $this->request->getVar('page_siswa') ? $this->request->getVar('page_siswa') : 1;

               // membuat pencarian
               $keyword = $this->request->getVar('keyword');
               if ($keyword) {
                    $siswa = $this->siswaModel->cari($keyword)->where('kelas', 'XI')->where('program', 'Bahasa');
               } else {
                    $siswa = $this->siswaModel->where('kelas', 'XI')->where('program', 'Bahasa');
               }

               $data = [
                    'title' => 'Home | SMAN 1 NURINDIANA',
                    'siswa' => $siswa->paginate(10, 'siswa'),
                    'pager' => $this->siswaModel->pager,
                    'halaman' => $halaman
               ];

               return view('kelas/xi_bhs', $data);
          } else {
               // mengarahkan ke halaman login
               return redirect()->to('/');
          }
     }

     // menampilkan semua data siswa (KELAS XII BAHASA)
     public function xii_bhs()
     {
          // memvalidasi apakah sudah login
          if (session()->has('nama')) {
               // mengambil data halaman
               $halaman = $this->request->getVar('page_siswa') ? $this->request->getVar('page_siswa') : 1;

               // membuat pencarian
               $keyword = $this->request->getVar('keyword');
               if ($keyword) {
                    $siswa = $this->siswaModel->cari($keyword)->where('kelas', 'XII')->where('program', 'Bahasa');
               } else {
                    $siswa = $this->siswaModel->where('kelas', 'XII')->where('program', 'Bahasa');
               }

               $data = [
                    'title' => 'Home | SMAN 1 NURINDIANA',
                    'siswa' => $siswa->paginate(10, 'siswa'),
                    'pager' => $this->siswaModel->pager,
                    'halaman' => $halaman
               ];

               return view('kelas/xii_bhs', $data);
          } else {
               // mengarahkan ke halaman login
               return redirect()->to('/');
          }
     }

     // menampilkan semua data siswa (KELAS X IPA)
     public function x_ipa()
     {
          // memvalidasi apakah sudah login
          if (session()->has('nama')) {
               // mengambil data halaman
               $halaman = $this->request->getVar('page_siswa') ? $this->request->getVar('page_siswa') : 1;

               // membuat pencarian
               $keyword = $this->request->getVar('keyword');
               if ($keyword) {
                    $siswa = $this->siswaModel->cari($keyword)->where('kelas', 'X')->where('program', 'IPA');
               } else {
                    $siswa = $this->siswaModel->where('kelas', 'X')->where('program', 'IPA');
               }

               $data = [
                    'title' => 'Home | SMAN 1 NURINDIANA',
                    'siswa' => $siswa->paginate(10, 'siswa'),
                    'pager' => $this->siswaModel->pager,
                    'halaman' => $halaman
               ];

               return view('kelas/x_ipa', $data);
          } else {
               // mengarahkan ke halaman login
               return redirect()->to('/');
          }
     }

     // menampilkan semua data siswa (KELAS XI IPA)
     public function xi_ipa()
     {
          // memvalidasi apakah sudah login
          if (session()->has('nama')) {
               // mengambil data halaman
               $halaman = $this->request->getVar('page_siswa') ? $this->request->getVar('page_siswa') : 1;

               // membuat pencarian
               $keyword = $this->request->getVar('keyword');
               if ($keyword) {
                    $siswa = $this->siswaModel->cari($keyword)->where('kelas', 'XI')->where('program', 'IPA');
               } else {
                    $siswa = $this->siswaModel->where('kelas', 'XI')->where('program', 'IPA');
               }

               $data = [
                    'title' => 'Home | SMAN 1 NURINDIANA',
                    'siswa' => $siswa->paginate(10, 'siswa'),
                    'pager' => $this->siswaModel->pager,
                    'halaman' => $halaman
               ];

               return view('kelas/xi_ipa', $data);
          } else {
               // mengarahkan ke halaman login
               return redirect()->to('/');
          }
     }

     // menampilkan semua data siswa (KELAS XII IPA)
     public function xii_ipa()
     {
          // memvalidasi apakah sudah login
          if (session()->has('nama')) {
               // mengambil data halaman
               $halaman = $this->request->getVar('page_siswa') ? $this->request->getVar('page_siswa') : 1;

               // membuat pencarian
               $keyword = $this->request->getVar('keyword');
               if ($keyword) {
                    $siswa = $this->siswaModel->cari($keyword)->where('kelas', 'XII')->where('program', 'IPA');
               } else {
                    $siswa = $this->siswaModel->where('kelas', 'XII')->where('program', 'IPA');
               }

               $data = [
                    'title' => 'Home | SMAN 1 NURINDIANA',
                    'siswa' => $siswa->paginate(10, 'siswa'),
                    'pager' => $this->siswaModel->pager,
                    'halaman' => $halaman
               ];

               return view('kelas/xii_ipa', $data);
          } else {
               // mengarahkan ke halaman login
               return redirect()->to('/');
          }
     }

     // menampilkan semua data siswa (KELAS X IPS)
     public function x_ips()
     {
          // memvalidasi apakah sudah login
          if (session()->has('nama')) {
               // mengambil data halaman
               $halaman = $this->request->getVar('page_siswa') ? $this->request->getVar('page_siswa') : 1;

               // membuat pencarian
               $keyword = $this->request->getVar('keyword');
               if ($keyword) {
                    $siswa = $this->siswaModel->cari($keyword)->where('kelas', 'X')->where('program', 'IPS');
               } else {
                    $siswa = $this->siswaModel->where('kelas', 'X')->where('program', 'IPS');
               }

               $data = [
                    'title' => 'Home | SMAN 1 NURINDIANA',
                    'siswa' => $siswa->paginate(10, 'siswa'),
                    'pager' => $this->siswaModel->pager,
                    'halaman' => $halaman
               ];

               return view('kelas/x_ips', $data);
          } else {
               // mengarahkan ke halaman login
               return redirect()->to('/');
          }
     }

     // menampilkan semua data siswa (KELAS XI IPS)
     public function xi_ips()
     {
          // memvalidasi apakah sudah login
          if (session()->has('nama')) {
               // mengambil data halaman
               $halaman = $this->request->getVar('page_siswa') ? $this->request->getVar('page_siswa') : 1;

               // membuat pencarian
               $keyword = $this->request->getVar('keyword');
               if ($keyword) {
                    $siswa = $this->siswaModel->cari($keyword)->where('kelas', 'XI')->where('program', 'IPS');
               } else {
                    $siswa = $this->siswaModel->where('kelas', 'XI')->where('program', 'IPS');
               }

               $data = [
                    'title' => 'Home | SMAN 1 NURINDIANA',
                    'siswa' => $siswa->paginate(10, 'siswa'),
                    'pager' => $this->siswaModel->pager,
                    'halaman' => $halaman
               ];

               return view('kelas/xi_ips', $data);
          } else {
               // mengarahkan ke halaman login
               return redirect()->to('/');
          }
     }

     // menampilkan semua data siswa (KELAS XII IPS)
     public function xii_ips()
     {
          // memvalidasi apakah sudah login
          if (session()->has('nama')) {
               // mengambil data halaman
               $halaman = $this->request->getVar('page_siswa') ? $this->request->getVar('page_siswa') : 1;

               // membuat pencarian
               $keyword = $this->request->getVar('keyword');
               if ($keyword) {
                    $siswa = $this->siswaModel->cari($keyword)->where('kelas', 'XII')->where('program', 'IPS');
               } else {
                    $siswa = $this->siswaModel->where('kelas', 'XII')->where('program', 'IPS');
               }

               $data = [
                    'title' => 'Home | SMAN 1 NURINDIANA',
                    'siswa' => $siswa->paginate(10, 'siswa'),
                    'pager' => $this->siswaModel->pager,
                    'halaman' => $halaman
               ];

               return view('kelas/xii_ips', $data);
          } else {
               // mengarahkan ke halaman login
               return redirect()->to('/');
          }
     }
     //--------------------------------------------------------------------

}
