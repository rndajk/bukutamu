<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_lab extends CI_Model
{

	public function __construct()
	{
		// Call the CI_Model constructor
		parent::__construct();
		$this->load->database();
	}

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function add($data)
	{
		return $this->db->insert('lab', $data);
	}

	public function view_lab()
	{
		$query = $this->db->get('lab');
		return $query->result();
	}

}
