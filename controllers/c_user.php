<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_user extends CI_Controller {

public function __construct()
{
	parent::__construct();
	$this->load->model('m_user','user');
	$this->load->model('m_paket','paket');
}
	public function index()
	{
		$this->load->view('login');
	}

	public function dashboard()
	{
		# code...
		$datas['datapaket']= $this->paket->getpaket()->result_array();
	    $this->load->view('dashboard',$datas);
	}
	public function ceklogin()
	{
		# code...
		//echo "string";
		$nip = $this->input->post('nip');
		$query = $this->user->cekdata($nip);
		if ($query =='no') {
			# code...
			$this->session->set_flashdata('erlog', 'NIP TIDAK TERDAFTAR');
			redirect('c_user/index','refresh'); 
		}
		else{
			$data = $query->row_array();
		    //print_r($data);
		    $this->session->set_userdata($data);
		    redirect('c_user/dashboard','refresh');
		}


	}
	public function createpenghuniform()
	{
		# code...
		$this->load->view('createpenghuni');
	}
	public function createpenghuni()
	{
		$noktp = $this->input->post('noktp');
		$nama = $this->input->post('nama');
		$unit = $this->input->post('unit');
		//echo "$nama";
		$data = array('namap'=>$nama,
					  'unit'=>$unit,
					  'noktp'=>$noktp);
		$this->user->createpenghuni($data);
		redirect('c_user/dashboard','refresh');
		# code...
	}
		public function updatepenghuni()
	{
		$pointer = $this->input->post('pointer');
		$noktp = $this->input->post('noktp');
		$nama = $this->input->post('nama');
		$unit = $this->input->post('unit');
		//echo "$nama";
		$data = array('namap'=>$nama,
					  'unit'=>$unit,
					  'noktp'=>$noktp);
		$this->user->updatepenghuni($data,$pointer);
		redirect('c_user/dashboard','refresh');
		# code...
	}

	public function caripenghuniform()
	{
		# code...
		$this->load->view('updatepenghuni');
	}

	public function caripenghuni()
	{
		# code...
		$noktp = $this->input->post('pointer');
		$data = $this->user->getpenghuniwhere($noktp)->row_array();
		if ($data) {
			# code...
			//print_r($data);
			$this->load->view('updatepenghuni', $data);
		}
		else{
			$this->session->set_flashdata('emptp', 'Penghuni Tidak Ditemukan');
			redirect('c_user/caripenghuniform','refresh');
		}
	}
}

/* End of file c_user.php */
/* Location: ./application/controllers/c_user.php */
?>