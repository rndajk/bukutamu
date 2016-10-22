<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function add($data)
	{
		return $this->db->insert('admin',$data);
	}

	public function login($username,$password)
	{
		$query=$this->db->get_where('admin',array('username'=>$username,'password'=>sha1($password)));	
		return $query->result();
	}

	public function delete($data,$id)
	{
		return $this->db->update('admin', $data, array('idadmin' => $id));
	}
}