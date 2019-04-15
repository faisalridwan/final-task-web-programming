<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sicepat extends CI_Controller {
	public function __construct()
	{
		// Load M_admin as parents in here.
		parent::__construct();
		$this->load->model('M_admin');
	}
	public function index()
	{
		$data["header"] = 1;
		$this->load->view('format/v_header',$data);
		$data_kota = $this->M_admin->Getkota_kode();
		$this->load->view('v_index',['datakota'=>$data_kota]);
		$this->load->view('format/v_footer');
	}

	public function cekresi()
	{
		$data["header"] = 2;
		$this->load->view('format/v_header',$data);
		$this->load->view('v_cekresi');
		$this->load->view('format/v_footer');
	}

	public function ongkir()
	{
		$data["header"] = 3;
		$this->load->view('format/v_header',$data);
		$this->load->view('v_ongkir');
		$this->load->view('format/v_footer');
	}
	public function service()
	{
		$data["header"] = 4;
		$this->load->view('format/v_header',$data);
		$this->load->view('v_service');
		$this->load->view('format/v_footer');
	}
	public function lokasi()
	{
		$data["header"] = 5;
		$this->load->view('format/v_header',$data);
		$this->load->view('v_service');
		$this->load->view('format/v_footer');
	}
	public function contact()
	{
		$data["header"] = 6;
		$this->load->view('format/v_header',$data);
		$this->load->view('v_service');
		$this->load->view('format/v_footer');
	}
	public function admin()
	{
		$data["header"] = 7;
		$this->load->view('format/v_header',$data);
		$this->load->view('v_service');
		$this->load->view('format/v_footer');
	}
}
