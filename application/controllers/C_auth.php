<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_auth extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_admin');
	}


	public function index()
	{
		$data['page_title'] = "Login";
		if($this->session->has_userdata('username'))
		{
			redirect(site_url('home'));
		}
		$this->load->view('admin/V_login', $data);
	}

	public function login()
	{
		if ($this->session->has_userdata('username')) 
		{
			redirect(site_url('home'));
		}
		if ($_SERVER['REQUEST_METHOD']=='POST')
		{
			$username=$this->input->post('username'); 
			$password=$this->input->post('password');

			$res=$this->M_admin->login($username,$password);
			//print_r($res);
			if(sizeof($res)>0)
			{
				//print_r($res);
				$session_data=array(
					'username' => $res[0]->username, 
					'user_id' => $res[0]->idadmin,
					'lab_id' => $res[0]->lab_idlab
					);

				$this->session->set_userdata($session_data);
				if('username'=='SuperAdmin')
					redirect(site_url('C_su_admin/'));
				else redirect(site_url('home/'));
				//echo $this->session->has_userdata('username');
			}	
			else redirect(site_url('C_auth'));
		}
		else redirect(site_url('C_auth'));
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(site_url('C_auth'));

	}
}