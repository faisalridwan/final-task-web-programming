<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		// Load M_admin as parents in here.
		parent::__construct();
		$this->load->model('M_admin');
	}

	public function index()
	{
		$cookie = $this->input->cookie('logged');
        if(isset($cookie) || isset($_SESSION['successLogin'])){
            $cookie = $this->input->cookie('logged');
            $data['title'] = "Login";
			$this->load->view('admin/page_header');
			$this->load->view('admin/page_index');
        } else {
			$data['title'] = "Login";
            $this->load->view('admin/login/login', $data);
		}
	}

	// ADMIN

	public function tambahadmin()
	{
		
		// Create variabel and use it for input data to database.
		// Load tambah_mahasiswa($data) from M_web
		// Redirect to index.php/web/mahasiswa after add data.
		$data = [
			"nim" => $this->input->post('nim',true),
			"nama" => $this->input->post('nama',true),
			"kelas" => $this->input->post('kelas',true),
			"id_jurusan" => $this->input->post('jurusan',true),
		];
		$this->M_web->tambah_mahasiswa($data);
		redirect('index.php/web/mahasiswa');
	}

	// PENGGUNA

	public function pengguna()
	{
		$data_pengguna = $this->M_admin->Getpengguna_id();
		$data_kota = $this->M_admin->Getkota_kode();
		$this->load->view('page_header',['datakota'=>$data_kota]);
		$this->load->view('page_pengguna',['datapengguna'=>$data_pengguna]);
	}

	public function hapuspengguna($id)
	{
		$this->M_admin->hapus_pengguna($id);
		redirect('index.php/web/mahasiswa');
	}

	public function editpengguna()
	{
		$id_pengguna =  $this->input->post('id_pengguna',true);
		$data = [
			"nama" => $this->input->post('nama',true),
			"" => $this->input->post('kelas',true),
			"id_jurusan" => $this->input->post('jurusan',true),
		];
		$this->M_web->edit_mahasiswa($nim,$data);
		redirect('index.php/web/mahasiswa');
	}


	public function kota()
	{
		$datakota = $this->M_admin->Getkota_kode();
		$this->load->view('admin/page_header');
		$this->load->view('admin/page_kota',['data'=>$datakota]);
	}
	#lengkapi FUNCTION BERIKUT UNTUK PAGE JURUSAN



	public function tambahkota()
	{

		// Create variabel and use it for add data from database.
		// Load tambah_jurusan($data) from M_web
		// Redirect to index.php/web/jurusan after add data.
		$data = [
			"kodekota" => $this->input->post('kodekota',true),
			"namakota" => $this->input->post('namakota',true)
		];
		$this->m_admin->tambah_kota($data);
		redirect('index.php/admin/kota');
	}

	public function editkota()
	{
		$id_jurusan = $this->input->post('kodekota',true);
		$data = [
			"kodekota" => $this->input->post('kodekota',true),
			"namakota" => $this->input->post('namakota',true)
		];
		
		$this->M_web->edit_jurusan($id_jurusan, $data);
		redirect('index.php/admin/kota');
	}

	public function hapuskota($kodekota)
	{
		// Create variabel and use it for add data from database.
		// Load hapus_kota($id_kota) from M_web
		// Redirect to index.php/web/kota after add data.
		$this->m_admin-->hapus_kota($kodekota);
		redirect('index.php/admin/kota');

	}
}
