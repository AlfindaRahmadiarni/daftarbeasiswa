<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beasiswa extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		//load model model_daftar
		$this->load->helper('MY');
		$this->load->model('model_beasiswa');
	} 

	public function index(){

		$data['databeasiswa']=$this->model_beasiswa->get_beasiswa();

		$this->load->view('admin/sidebaradmin');
		$this->load->view('admin/page/viewbeasiswa', $data);
		$this->load->view('admin/footer');
	}


	public function edit($id = NULL)
	{

		// Get artikel dari model berdasarkan $id
		$data['beasiswa'] = $this->model_beasiswa->get_beasiswa_by_id($id);
		// Jika id kosong atau tidak ada id yg dimaksud, lempar user ke halaman list category
		if ( empty($id) || !$data['beasiswa'] ) redirect('beasiswa');

		// Kita butuh helper dan library berikut
	    $this->load->helper('form');
	    $this->load->library('form_validation');

	    // Kita validasi input sederhana, sila cek http://localhost/ci3/user_guide/libraries/form_validation.html
		// $this->form_validation->set_rules('cat_name', 'Nama Kategori', 'required',
		// 	array('required' => 'Isi %s donk, males amat.'));
	    $this->form_validation->set_rules('namaBeasiswa', 'Nama Beasiswa', 'required');
	    $this->form_validation->set_rules('periode', 'Periode', 'required');
	    $this->form_validation->set_rules('kuota', 'kuota', 'required');
	    $this->form_validation->set_rules('deadline', 'deadline', 'required');

	    // Cek apakah input valid atau tidak
	    if ($this->form_validation->run() === FALSE)
	    {
	        $this->load->view('admin/sidebaradmin');
			$this->load->view('admin/page/editbeasiswa', $data); 
			$this->load->view('admin/footer');

	    } else {

	    	$post_data = array(
	    	    'namaBeasiswa' => $this->input->post('namaBeasiswa'),
	    	    'periode' => $this->input->post('periode'),
	    	    'kuota' => $this->input->post('kuota'),
	    	    'deadline' => $this->input->post('deadline'),
	    	);
    		
    		// Update kategori sesuai post_data dan id-nya
	        $this->model_beasiswa->edit_beasiswa($post_data, $id);
	        redirect('Beasiswa/');
		 //    $this->load->view('admin/sidebaradmin');
			// $this->load->view('admin/page/viewbeasiswa', $data); 
			// $this->load->view('admin/footer');

	    }
	}





}
?>