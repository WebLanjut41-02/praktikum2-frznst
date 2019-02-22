<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_paket extends CI_Controller {

public function __construct()
{
	parent::__construct();
	//Do your magic here
	$this->load->model('m_user','user');
	$this->load->model('m_paket','paket');
}
	public function createpaketform()
	{
		# code...
		$data['data'] =$this->user->getpenghuni()->result_array();
		//print_r($data);
		$this->load->view('createpaket',$data);
	}
	public function insert()
	{
		$tanggald = date('Y-m-d');
		$nip = $this->session->userdata('nip');
		$noktp = $this->input->post('noktp');
		$isi = $this->input->post('isi');
		$data = array(
			'tanggald'=>$tanggald,
			'nip'=>$nip,
			'noktp'=>$noktp,
			'isi'=>$isi
		);
		//echo $noktp;
		$this->paket->insert($data);
		redirect('c_user/dashboard','refresh');
		# code...
	}

	
	public function caripaketform()
	{
		# code...
		$this->load->view('updatepaket');
	}

	public function caripaket()
	{
		# code...
		$id = $this->input->post('pointer');
		$data = $this->paket->getpaketwhere($id)->row_array();
		if ($data) {
			# code...
			//print_r($data);
			$this->load->view('updatepaket', $data);
		}
		else{
			$this->session->set_flashdata('emptpk', 'Paket Tidak Ditemukan');
			redirect('c_paket/caripaketform','refresh');
		}
	}

	public function updatepaket()
	{
		$pointer = $this->input->post('pointer');
		//$id = $this->input->post('id');
		$tanggala = $this->input->post('tanggala');
		$isi = $this->input->post('isi');
		//echo "$nama";
		$data = array('tanggala'=>$tanggala,
					  'isi'=>$isi);
		$this->paket->updatepaket($data,$pointer);
		redirect('c_user/dashboard','refresh');
		# code...
	}
}

/* End of file c_paket.php */
/* Location: ./application/controllers/c_paket.php */