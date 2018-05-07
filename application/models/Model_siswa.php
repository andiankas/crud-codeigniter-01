<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_siswa extends CI_Model {

	

	public function list_siswa()
	{
		return $siswa = $this->db->get('siswa')->result();
	}
	

}

/* End of file Model_siswa.php */
/* Location: ./application/models/Model_siswa.php */