<?php

namespace App\Controllers;

use App\Models\SiswaModel;

class Home extends BaseController
{
	// instansias siswa model
	protected $siswaModel;

	public function __construct()
	{
		$this->siswaModel = new SiswaModel();
	}

	// menampilkan semua data siswa
	public function index()
	{
		// memvalidasi apakah sudah login
		if (session()->has('nama')) {
			// mengambil data halaman
			$halaman = $this->request->getVar('page_siswa') ? $this->request->getVar('page_siswa') : 1;

			// membuat pencarian
			$keyword = $this->request->getVar('keyword');
			if ($keyword) {
				$siswa = $this->siswaModel->cari($keyword);
			} else {
				$siswa = $this->siswaModel;
			}

			$data = [
				'title' => 'Home | SMAN 1 NURINDIANA',
				'siswa' => $siswa->paginate(5, 'siswa'),
				'pager' => $this->siswaModel->pager,
				'halaman' => $halaman
			];

			return view('Home/index', $data);
		} else {
			// mengarahkan ke halaman login
			return redirect()->to('/');
		}
	}

	//--------------------------------------------------------------------

}
