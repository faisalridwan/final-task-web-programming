<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sicepat extends CI_Controller
{
	public function index()
	{
		$this->load->view('v_index');
	}

	public function cekresi()
	{
		$this->load->view('v_cekresi');
	}

	public function ongkir()
	{
		$this->load->view('v_ongkir');
	}
	public function service()
	{
		$this->load->view('v_service');
	}
}
