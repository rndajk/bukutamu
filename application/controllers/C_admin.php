<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_admin extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_admin');
		$this->load->model('M_instansi');
		$this->load->model('M_pthaslab');
		$this->load->model('M_pengunjungterdaftar');
		// $this->session->set_flashdata('feedback', 'Feedback send successfully');
		if(!$this->session->has_userdata('username'))
		{
			redirect(site_url('C_auth'));
		}	
	}

	public function index()
	{
		$data['page_title'] = "Home ";
		$data['instansi'] = $this->M_instansi->get_instansi();
		$data['pengunjung'] = $this->M_pengunjungterdaftar->getAllPengunjung();
		// print_r(sizeof($data['pengunjung']));
		// foreach ($data['pengunjung'] as $key => $value) 
		// {
		// 	print_r($key);
		// 	print_r($value);
		// }
		// return;
		$this->load->view('admin/V_home', $data);
	}

	public function history()
	{
		$data['page_title'] = "History ";
		$data['history'] = $this->M_pthaslab->get_ptlab()->result_array();
		$this->load->view('admin/V_history', $data);
	}

	public function add()
	{
		$data = array(
				'nama_admin' => $this->input->post('nama_admin'),
				'username' => $this->input->post('username'),
				'password' => sha1($this->input->post('password')),
				'lab_idlab' => $this->input->post('id_lab'),
				'update_at' => date('Y-m-d'),
				'delete_at' => 'null'
			);
		echo $this->M_admin->add($data);
	}

	public function delete()
	{
		$id = $this->input->post('idadmin');
		$data = array('delete_at' => date('Y-m-d'));
		echo $this->M_admin->delete($data, $id);
	}
}
