<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_siswa extends CI_Model {

	

	public function list_siswa()
	{
		return $siswa = $this->db->get('siswa')->result();
	}

	public function input_siswa()
	{
		$data = array(
			"nama_siswa" 	=>	$this->input->post("nama_siswa"),
			"kelas" 		=>	$this->input->post("kelas")
		);

		return $this->db->insert('siswa', $data);

		
	}

	public function update($uri)
	{

		return $this->db->get_where('siswa', array('id_siswa' => $uri));

	}
	

}

/* End of file Model_siswa.php */
/* Location: ./application/models/Model_siswa.php */