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
		$this->load->view('admin/page_header',['datakota'=>$data_kota]);
		$this->load->view('admin/page_pengguna',['datapengguna'=>$data_pengguna]);
	}

	public function tambahpengguna()
	{
		
		$data = [
			"nama" => $this->input->post('nama',true),
			"email" => $this->input->post('email',true),
			"notlp" => $this->input->post('notlp',true),
			"alamat" => $this->input->post('alamat',true),
			"kodekota" => $this->input->post('kodekota',true),
		];
		$this->M_admin->tambah_pengguna($data);
		redirect('index.php/sicepat/index');
	}

	public function hapuspengguna($id)
	{
		$this->M_admin->hapus_pengguna($id);
		redirect('index.php/admin/admin');
	}

	public function editpengguna()
	{
		$id =  $this->input->post('id',true);
		$data = [
			"nama" => $this->input->post('nama',true),
			"email" => $this->input->post('email',true),
			"notlp" => $this->input->post('notlp',true),
			"alamat" => $this->input->post('alamat',true),
			"kodekota" => $this->input->post('kodekota',true),
		];
		$this->M_admin->edit_pengguna($id,$data);
		redirect('index.php/admin/pengguna');
	}

	// KOTA

	public function kota()
	{
		$datakota = $this->M_admin->Getkota_kode();
		$this->load->view('admin/page_header');
		$this->load->view('admin/page_kota',['datakota'=>$datakota]);
	}

	public function tambahkota()
	{
		$data = [
			"kodekota" => $this->input->post('kodekota',true),
			"namakota" => $this->input->post('namakota',true)
		];
		$this->M_admin->tambah_kota($data);
		redirect('index.php/admin/kota');
	}

	public function editkota()
	{
		$kodekota = $this->input->post('kodekota',true);
		$data = [
			"kodekota" => $this->input->post('kodekota',true),
			"namakota" => $this->input->post('namakota',true)
		];
		
		$this->M_admin->edit_kota($kodekota, $data);
		redirect('index.php/admin/kota');
	}

	public function hapuskota($kodekota)
	{

		$this->M_admin->hapus_kota($kodekota);
		redirect('index.php/admin/kota');

	}

	// TRANSAKSI


	public function transaksi()
	{
		$datatransaksi = $this->M_admin->Gettransaksi_resi();
		$this->load->view('admin/page_header');
		$this->load->view('admin/page_transaksi',['datatransaksi'=>$datatransaksi]);
	}

	public function tambahtransaksi()
	{
		$data = [
			"noresi" => $this->input->post('noresi',true),
			"layanan" => $this->input->post('layanan',true),
			"asal" => $this->input->post('asal',true),
			"tujuan" => $this->input->post('tujuan',true),
			"pengirim" => $this->input->post('pengirim',true),
			"tglpengiriman" => $this->input->post('tglpengiriman',true),
			"namapenerima" => $this->input->post('namapenerima',true),
			"status" => $this->input->post('status',true)

		];
		$this->M_admin->tambah_transaksi($data);
		redirect('index.php/admin/transaksi');
	}

	public function edittransaksi()
	{
		$noresi = $this->input->post('noresi',true);
		$data = [
			"layanan" => $this->input->post('layanan',true),
			"asal" => $this->input->post('asal',true),
			"tujuan" => $this->input->post('tujuan',true),
			"pengirim" => $this->input->post('pengirim',true),
			"tglpengiriman" => $this->input->post('tglpengiriman',true),
			"namapenerima" => $this->input->post('namapenerima',true),
			"status" => $this->input->post('status',true)
		];
		
		$this->M_admin->edit_transaksi($noresi, $data);
		redirect('index.php/admin/transaksi');
	}

	public function hapustransaksi($noresi)
	{

		$this->M_admin->hapus_transaksi($noresi);
		redirect('index.php/admin/transaksi');

	}

	// LOGOUT
	public function Logout() {
        

        $cookie = $this->input->cookie('logged');
        if(isset($cookie)) {
            delete_cookie('logged');
            redirect('Loginadmin');
        } else {
            session_destroy();
            redirect('Loginadmin');
        }
    }
}
