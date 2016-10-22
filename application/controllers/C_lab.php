<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_lab extends CI_Controller 
{
	public function C_lab()
	{
		parent::__construct();
		$this->load->model('M_lab');
	}

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function add()
	{
		$data = array(
			'nama_lab' => $this->input->post('nama_lab'),
			'delete_at' => date('Y-m-d'),
			'update_at' => date('Y-m-d')
			);
		echo $this->M_lab->add($data);
	}

	public function view_lab()
	{
		print_r($this->M_lab->view_lab()) ;
	}
}
