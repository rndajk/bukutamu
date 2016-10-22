<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pthaslab extends CI_Model
{

	public function __construct()
	{
		// Call the CI_Model constructor
		parent::__construct();
		$this->load->database();
	}

	public function get_ptlab()
	{
		$id = $_SESSION['lab_id'];
		$this->db->select('nama_pengunjung, nama_instansi, date(jam_datang) as tanggal, jam_datang, time(jam_datang) as jam, keperluan, lab_idlab');
		$this->db->from('pengunjung_terdaftar_has_lab');
		$this->db->join('pengunjung_terdaftar','pengunjung_terdaftar_has_lab.pengunjung_terdaftar_idpengunjung = pengunjung_terdaftar.idpengunjung');
		$this->db->join('instansi', 'pengunjung_terdaftar.instansi_idinstansi = instansi.idinstansi');
		$where = 'pengunjung_terdaftar_has_lab.lab_idlab ='.$id;
		$this->db->where($where);
		$this->db->order_by('jam_datang','DESC');
		return $this->db->get();
	}
}
