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
			$this->load->view('admin/page_header');
			$this->load->view('admin/page_index');
        } else {
            $this->load->view('admin/page_login');
		}
	}

	// ADMIN

	public function admin()
	{
		$dataadmin = $this->M_admin->Getadmin_id();
		$this->load->view('admin/page_header');
		$this->load->view('admin/page_admin',['dataadmin'=>$dataadmin]);
	}

	public function tambahadmin()
	{
		$data = [
			"namaadmin" => $this->input->post('namaadmin',true),
			"useradmin" => $this->input->post('useradmin',true),
			"passadmin" => $this->input->post('passadmin',true)
		];
		$user = $this->M_admin->findUser();
		
        if($user != null){
			$this->M_admin->tambah_admin($data);
			redirect('admin/admin');
        } else {
			redirect('admin/admin');
        }
		
	}

	public function editadmin()
	{
		$idadmin = $this->input->post('idadmin',true);
		$data = [
			"namaadmin" => $this->input->post('namaadmin',true)
			
		];
		
		$this->M_admin->edit_admin($idadmin, $data);
		redirect('admin/admin');
	}

	public function hapusadmin($idadmin)
	{

		$this->M_admin->hapus_admin($idadmin);
		redirect('admin/admin');

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
		redirect('sicepat/index');
	}

	public function hapuspengguna($id)
	{
		$this->M_admin->hapus_pengguna($id);
		redirect('admin/pengguna');
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
		redirect('admin/pengguna');
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
		redirect('admin/kota');
	}

	public function editkota()
	{
		$kodekota = $this->input->post('kodekota',true);
		$data = [
			"kodekota" => $this->input->post('kodekota',true),
			"namakota" => $this->input->post('namakota',true)
		];
		
		$this->M_admin->edit_kota($kodekota, $data);
		redirect('admin/kota');
	}

	public function hapuskota($kodekota)
	{

		$this->M_admin->hapus_kota($kodekota);
		redirect('admin/kota');

	}

	// TRANSAKSI


	public function transaksi()
	{
		$datatransaksi = $this->M_admin->Gettransaksi_resi();
		$datakota = $this->M_admin->Getkota_kode();
		$datapengiriman = $this->M_admin->Getpengiriman_id();
		$this->load->view('admin/page_header',['datakota'=>$datakota,'datapengiriman'=>$datapengiriman]);
		$this->load->view('admin/page_transaksi',['datatransaksi'=>$datatransaksi]);
	}

	public function tambahtransaksi()
	{
		$data = [
			"noresi" => $this->input->post('noresi',true),
			"idlayanan" => $this->input->post('idlayanan',true),
			"asal" => $this->input->post('asal',true),
			"tujuan" => $this->input->post('tujuan',true),
			"pengirim" => $this->input->post('pengirim',true),
			"tglpengiriman" => $this->input->post('tglpengiriman',true),
			"status" => $this->input->post('status',true)

		];
		$this->M_admin->tambah_transaksi($data);
		redirect('admin/transaksi');
	}

	public function edittransaksi()
	{
		$noresi = $this->input->post('noresi',true);
		$data = [
			"namapenerima" => $this->input->post('namapenerima',true),
			"tglpenerimaan" => $this->input->post('tglpenerimaan',true),
			"status" => $this->input->post('status',true)
		];
		
		$this->M_admin->edit_transaksi($noresi, $data);
		redirect('admin/transaksi');
	}

	public function hapustransaksi($noresi)
	{

		$this->M_admin->hapus_transaksi($noresi);
		redirect('admin/transaksi');

	}

	// LOGOUT
	
	public function Logout() {
        

        $cookie = $this->input->cookie('logged');
        if(isset($cookie)) {
			delete_cookie('logged');
			session_destroy();
            redirect('admin');
        } else {
            session_destroy();
            redirect('admin');
        }
	}
	
	public function Signin() {
        $user = $this->M_admin->findUser();
        if($user != null){
                set_cookie('logged', $user[0]['namaadmin'], '3600');
                $this->session->set_userdata('successLogin', $user[0]['namaadmin']);
                redirect('admin');
        } else {
            $this->session->set_flashdata('falselogin','nodata');
            redirect('admin');
        }
	}

	public function resi() {
	$noresi = $this->input->post('noresi',true);
	$this->M_admin->Gettransaksi_byresi()($noresi);
		redirect('sicepat/transaksi');
	

}
