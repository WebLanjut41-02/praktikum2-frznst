<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

public function __construct()
{
	parent::__construct();
	//Do your magic here
}
public function getpenghuni()
{
	# code...
	return $this->db->get('penghuni');
}
public function createpenghuni($value)
{
	# code...
	$this->db->insert('penghuni',$value);
}

public function updatepenghuni($data,$pointer)
{
	# code...
	$this->db->where('noktp', $pointer);
	$this->db->update('penghuni', $data);
}

public function cekdata($nip)
{
	# code...
	$this->db->where('nip', $nip);
	$query = $this->db->get('karyawan');
	if($query->num_rows()>0){
		return $query;
	}
	else {

		return 'no';
	}
}
public function getpenghuniwhere($noktp)
{
	# code...
	$this->db->where('noktp', $noktp);
	return $this->db->get('penghuni');
}
	

}

/* End of file m_user.php */
/* Location: ./application/models/m_user.php */
?>