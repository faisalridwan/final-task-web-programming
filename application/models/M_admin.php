<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {


	public function tambah_admin($data)
	{
		$this->db->insert('admin', $data);
	}
	
	public function Getpengguna_id(){
		$this->db->select('*');
		$this->db->from('pengguna');
		$this->db->join('kota','kota.kodekota=pengguna.kodekota','LEFT OUTER');
		$query = $this->db->get();
		return $query->result();
	}
	
	public function Getkota_kode(){
		$this->db->select('*');
		$this->db->from('kota');
		$query = $this->db->get();
		return $query->result();
	}


	// PENGGUNA
	
	public function hapus_pengguna($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('pengguna');
	}

	public function edit_pengguna($nim,$data)
	{
		$this->db->where('nim',$nim);
		$this->db->update('pengguna', $data);
	}

	// KOTA

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
}
