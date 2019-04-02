<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sicepat extends CI_Controller
{
	public function index()
	{
		$this->load->view('v_page-header');
	}

	public function cekresi()
	{
		$this->load->view('v_page-cekresi');
	}

	public function ongkir()
	{
		$this->load->view('v_page-ongkir');
	}
}
