<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_pengunjungterdaftar extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_pengunjungterdaftar');
		$this->load->model('M_instansi');
		if(!$this->session->has_userdata('username'))
		{
			redirect(site_url('C_auth'));
		}
	}
	public function index()
	{
		// $this->get_instansi();
	}

	public function add()
	{
		$nama=$this->input->post('v_nama');
		$nrp=$this->input->post('v_nrp');
		$telp=$this->input->post('v_telp');
		$tahun=$this->input->post('v_tahun');
		$kota=$this->input->post('v_kota');
		$instansi=$this->input->post('v_instansi');
		$keperluan=$this->input->post('v_keperluan');
		$new_instansi=$this->input->post('v_newinstansi');
		$new_keperluan=$this->input->post('v_nkeperluan');

		//cek instansi udah ada apa ngga
		$cek_inst = $this->M_instansi->cek_instansi($new_instansi);		

		if (!$nrp)
		{
			$nrp=NULL;
		}

		if ($new_keperluan)
		{
			$keperluan = $new_keperluan;
		}

		if ($instansi==0)
		{
			$data_instansi = array(
				'nama_instansi' => $new_instansi,
				'delete_at' => NULL,
				'update_at' => date('Y-m-d H:i:s')
				);

			if(sizeof($cek_inst)<1)
			{
				$this->M_instansi->add_instansi($data_instansi);
			}			
			$get_instansi=$this->M_instansi->get_instansi_byname("$new_instansi");

			$data_PT = array(
				'nama_pengunjung' => $nama,
				'nrp_pengunjung' => $nrp,
				'telp_pengunjung' => $telp,
				'tahun_lahir' => $tahun,
				'kota_asal' => $kota,
				'instansi_idinstansi' => $get_instansi->idinstansi,
				'delete_at' => NULL,
				'update_at' => date('Y-m-d H:i:s')
				 );
		}
		else
		{
			$data_PT = array(
				'nama_pengunjung' => $nama,
				'nrp_pengunjung' => $nrp,
				'telp_pengunjung' => $telp,
				'tahun_lahir' => $tahun,
				'kota_asal' => $kota,
				'instansi_idinstansi' => $instansi,
				'delete_at' => NULL,
				'update_at' => date('Y-m-d H:i:s')
				 );
		}

		//checking whether the user already in our database or not
		$res=$this->M_pengunjungterdaftar->check($nrp);		

		if(sizeof($res)<1)
		{
			$insert1 = $this->M_pengunjungterdaftar->add_PT($data_PT);
			$res = $this->M_pengunjungterdaftar->get_by_id($insert1);

		}
		print_r($res->idpengunjung);
		$data_PT_lab = array(
			'pengunjung_terdaftar_idpengunjung' => $res->idpengunjung,
			'pengunjung_terdaftar_instansi_idinstansi' => $res->instansi_idinstansi,
			'lab_idlab' => $this->session->has_userdata('lab_id'),
			'jam_datang' => date("Y-m-d H:i:s"),
			'jam_keluar' => '',
			'keperluan' => $keperluan
			);		
		$insert2 = $this->M_pengunjungterdaftar->add_PT_lab($data_PT_lab);

		//cek apakah insert data berhasil
		// print_r($insert1);
		// print_r($insert2);
		if ($insert1 || $insert2) 
		{
			$this->session->set_flashdata('notif', 1);
			// echo "ganteng";
		}
		redirect(site_url('home'));
	}

	public function add_instansi($data_instansi)
	{
		$this->M_instansi->add_instansi($data_instansi);
	}

	public function get_instansi()
	{
		$data['instansi'] = $this->M_instansi->get_instansi();
	}

	public function getAllPengunjung()
	{
		$result = $this->M_pengunjungterdaftar->getAllPengunjung();
		print_r($result);
		return;
	}

	public function getPengunjungByNrp($nrp)
	{
		$result = $this->M_pengunjungterdaftar->get_by_nrp($nrp);
		header('Content-Type: application/json');
   		echo json_encode($result);
	}
}
