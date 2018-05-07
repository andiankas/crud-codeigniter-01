<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_siswa');
	}

	public function index()
	{

		$data = array(
			"judul" 	=>	"Daftar Siswa",
			"siswa" 	=>	$this->Model_siswa->list_siswa()
		);

		$this->load->view('crud/index', $data);
	}

}

/* End of file Crud.php */
/* Location: ./application/controllers/Crud.php */