<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sicepat extends CI_Controller
{
	public function index()
	{
		$this->load->view('v_index');
		$this->load->view('format/v_footer');
	}

	public function cekresi()
	{
		$this->load->view('v_cekresi');
		$this->load->view('format/v_footer');
	}

	public function ongkir()
	{
		$this->load->view('v_ongkir');
		$this->load->view('format/v_footer');
	}
	public function service()
	{
		$this->load->view('v_service');
		$this->load->view('format/v_footer');
	}
}
