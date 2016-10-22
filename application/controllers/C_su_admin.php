<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_su_admin extends CI_Controller {

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
		if (!$this->session->has_userdata('username'))
		{
			redirect(site_url('C_auth'));
		}
	}

	public function index()
	{
		$this->load->view('su_admin/index');
	}

	public function add_lab()
	{
		$this->C_lab->add();
	}
	
	public function add_admin()
	{
		$this->home->add();
	}
}
