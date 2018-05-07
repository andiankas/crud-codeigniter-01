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

	public function input()
	{
		$this->load->view('crud/input');
	}

	public function input_siswa()
	{
		
		$input = $this->Model_siswa->input_siswa();

		if ($input) {
			redirect('crud/input','refresh');
		}
	}	

	public function edit()
	{
		$uri = $this->uri->segment(3);

		$data['update'] = $this->Model_siswa->update($uri)->row_array();

		$this->load->view('crud/edit', $data);
	}


	public function edit_siswa()
	{
		$id = $this->input->post('id');

		$data = array(
			"nama_siswa" 	=> $this->input->post('nama_siswa'),
			"kelas" 		=> $this->input->post('kelas')
		);

		$this->db->where('id_siswa', $id);
		$this->db->update('siswa', $data);

		redirect('crud/index','refresh');
	}

	public function delete()
	{
		$id = $this->uri->segment(3);

		$this->db->where('id_siswa', $id);
		$this->db->delete('siswa');

		redirect('crud/index','refresh');
	}




}

/* End of file Crud.php */
/* Location: ./application/controllers/Crud.php */