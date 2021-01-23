<?php

namespace App\Controllers;

use App\Models\UserModel;

class User extends BaseController
{
     // method menampilkan halaman login (User::index)
     public function index()
     {
          // memvalidasi apakah sudah login
          if (session()->has('nama')) {
               // mengarahkan ke halaman home (Home::index)
               return redirect()->to('/Home');
          } else {
               $data = [
                    'title' => 'Login'
               ];

               return view('user/index', $data);
          }
     }

     // method proses login
     public function login()
     {

          // mengambil data user di database
          $user = new UserModel();

          // validasi username dan password apakah sesuai dengan data di database
          $akun = $user->where('username', $this->request->getVar('username'))->where('password', $this->request->getVar('password'))->first();

          // jika data sesuai
          if ($akun != null) {

               // membuat notifikasi berhasil
               session()->setFlashdata('notifikasi', 'Anda berhasil Login');

               // membuat session yang dibutuhkan
               session()->set('nama', $akun['nama']);
               session()->set('gambar', $akun['gambar']);
               session()->set('role', $akun['role']);

               // mengarahkan ke halaman home (Home::index)
               return redirect()->to('/Home');
          } else {
               // membuat notifikasi gagal
               session()->setFlashdata('gagal', 'Username dan Password Salah');

               // mengarahkan ke halaman login
               return redirect()->to('/');
          }
     }

     // method proses logout
     public function logout()
     {
          // menghapus session
          session()->destroy();

          $data = [
               'title' => 'Login'
          ];

          // membuat notifikasi berhasil
          session()->setFlashdata('notifikasi', 'Anda Berhasil Logout');

          // mengarahkan ke halaman login dan mengirimkan data
          return view('user/index', $data);
     }

     //--------------------------------------------------------------------

}
