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
		$datapengiriman = $this->M_admin->Getpengiriman_id();
		$this->load->view('v_index',['datakota'=>$data_kota,'datapengiriman'=>$datapengiriman]);
		$this->load->view('format/v_footer');
	}

	public function cekresi()
	{
		$data["header"] = 2;
		$noresi = $this->input->post('noresi',true);
		$datapengiriman = $this->M_admin->Getpengiriman_id();
		$dataresi = $this->M_admin->Gettransaksi_byresi($noresi);
		$this->load->view('format/v_header',$data);
		$this->load->view('v_cekresi',['dataresi'=>$dataresi,'datapengiriman'=>$datapengiriman]);
		$this->load->view('format/v_footer');
	}

	public function ongkir()
	{
		$data["header"] = 3;
		$datakota = $this->M_admin->Getkota_kode();
		$datapengiriman = $this->M_admin->Getpengiriman_id();
		$this->load->view('format/v_header',$data);
		$this->load->view('v_ongkir',['datakota'=>$datakota,'datapengiriman'=>$datapengiriman]);
		$this->load->view('format/v_footer');

		$this->session->set_flashdata('dataongkir','nodata');
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
		$this->load->view('v_lokasi');
		$this->load->view('format/v_footer');
	}
	public function contact()
	{
		$data["header"] = 6;
		$this->load->view('format/v_header',$data);
		$this->load->view('v_contact');
		$this->load->view('format/v_footer');
	}
	public function tambahcontact()
	{
		
		$data = [
			"namacontact" => $this->input->post('namacontact',true),
			"emailcontact" => $this->input->post('emailcontact',true),
			"notlpcontact" => $this->input->post('notlpcontact',true),
			"noresicontact" => $this->input->post('noresicontact',true),
			"pesancontact" => $this->input->post('pesancontact',true),
		];
		$this->M_admin->tambah_contact($data);
		redirect('sicepat/contact');
	}
	public function admin()
	{
		$data["header"] = 7;
		$this->load->view('format/v_header',$data);
		$this->load->view('v_service');
		$this->load->view('format/v_footer');
	}

	public function dataongkir()
	{
		$this->load->view('Alerts/dataongkir');
	}
	
	

	
}
