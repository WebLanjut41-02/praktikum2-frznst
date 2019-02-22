<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_paket extends CI_Model {
public function __construct()
{
	parent::__construct();
	//Do your magic here
}

public function getpaket()
	{
		# code...
		$this->db->select('id,tanggald,tanggala,namap,unit,isi,nama');
		$this->db->from('paket');
		$this->db->join('penghuni', 'penghuni.noktp = paket.noktp');
		$this->db->join('karyawan', 'karyawan.nip = paket.nip');
		return $query = $this->db->get();
	}
public function insert($value)
		{
			# code...
			$this->db->insert('paket', $value);
		}	

public function getpaketwhere($id)
{
	# code...
	$this->db->where('id', $id);
	return $this->db->get('paket');
}
public function updatepaket($data,$pointer)
{
	# code...
	$this->db->where('id', $pointer);
	$this->db->update('paket', $data);
}
}


/* End of file m_paket.php */
/* Location: ./application/models/m_paket.php */
?>