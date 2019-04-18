<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {


	public function findUser() {
		$data = array(
			"useradmin" => $this->input->post('useradmin'),
			"passadmin" => $this->input->post('passadmin')
		);

		$this->db->where($data);
		$result = $this->db->get('admin');
		return $result->result_array();

}

	// ADMIN

	public function tambah_admin($data)
	{
		$this->db->insert('admin', $data);
	}

	public function Getadmin_id(){
		$this->db->select('*');
		$this->db->from('admin');
		$query = $this->db->get();
		return $query->result();
	}

	public function hapus_admin($idadmin)
	{
		$this->db->where('idadmin',$idadmin);
		$this->db->delete('admin');
	}

	public function edit_admin($idadmin,$data)
	{
		$this->db->where('idadmin',$idadmin);
		$this->db->update('admin',$data);
	}
	

	// PENGGUNA

	public function Getpengguna_id(){
		$this->db->select('*');
		$this->db->from('pengguna');
		$this->db->join('kota','kota.kodekota=pengguna.kodekota','LEFT OUTER');
		$query = $this->db->get();
		return $query->result();
	}

	public function tambah_pengguna($data)
	{
		$this->db->insert('pengguna', $data);
	}
	
	public function hapus_pengguna($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('pengguna');
	}

	public function edit_pengguna($id,$data)
	{
		$this->db->where('id',$id);
		$this->db->update('pengguna', $data);
	}

	// KOTA

	public function Getkota_kode(){
		$this->db->select('*');
		$this->db->from('kota');
		$query = $this->db->get();
		return $query->result();
	}

	public function hapus_kota($kodekota)
	{
		$this->db->where('kodekota',$kodekota);
		$this->db->delete('kota');
	}

	public function edit_kota($kodekota,$data)
	{
		$this->db->where('kodekota',$kodekota);
		$this->db->update('kota',$data);
	}

	public function tambah_kota($data)
	{
		$this->db->insert('kota', $data);
	}

	// TRANSAKSI

	public function Gettransaksi_resi(){
		$this->db->select('*');
		$this->db->from('transaksi');
		$this->db->join('pengiriman','pengiriman.idlayanan=transaksi.idlayanan','LEFT OUTER');
		$query = $this->db->get();
		return $query->result();
	}
	
	

	public function hapus_transaksi($noresi)
	{
		$this->db->where('noresi',$noresi);
		$this->db->delete('transaksi');
	}

	public function edit_transaksi($noresi,$data)
	{
		$this->db->where('noresi',$noresi);
		$this->db->update('transaksi',$data);
	}

	public function tambah_transaksi($data)
	{
		$this->db->insert('transaksi', $data);
	}

	public function Getpengiriman_id(){
		$this->db->select('*');
		$this->db->from('pengiriman');
		$query = $this->db->get();
		return $query->result();
	}

	public function Gettransaksi_byresi($noresi){

	$query = $this->db->get_where('transaksi', array('noresi' => $noresi), $limit, $offset);
	return $query->result();
	}

}
