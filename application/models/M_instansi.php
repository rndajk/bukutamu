<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_instansi extends CI_Model {
	
	function add_instansi($data)
	{
		$this->db->insert('instansi',$data);
	}

	function get_instansi_byname($instansi)
	{
		$this->db->limit(1);
		$query=$this->db->get_where('instansi',array('nama_instansi'=>$instansi));
		// return $query->result();
		return $query->row();
	} 

	function get_instansi()
	{
		$query = $this->db->query('SELECT * FROM instansi');

		return $query->result();
	}

	function cek_instansi($cek)
	{
		$query = $this->db->get_where('instansi', array('nama_instansi'=>$cek));
		return $query->row();
	}
}
