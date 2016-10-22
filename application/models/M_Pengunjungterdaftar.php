<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pengunjungterdaftar extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function add_PT($data)
	{

		$this->db->insert('pengunjung_terdaftar',$data);
		return $this->db->insert_id();
	}

	public function add_PT_lab($data)
	{
		$query = $this->db->insert('pengunjung_terdaftar_has_lab',$data);
		return $query;
	}

	public function get_by_id($id)
	{
		$query = $this->db->get_where('pengunjung_terdaftar', array('idpengunjung'=>$id));
		return $query->row();
	}

	public function get_by_nrp($nrp)
	{
		$query = $this->db->get_where('pengunjung_terdaftar', array('nrp_pengunjung'=>$nrp));
		return $query->row_array();
	}

	public function getAllPengunjung()
	{
		$query = $this->db->get('pengunjung_terdaftar')->result_array();
		return $query;
	}

	function check($nrp)
	{
		$query=$this->db->get_where('pengunjung_terdaftar',array('nrp_pengunjung'=>$nrp));
		return $query->row();
	}
}
