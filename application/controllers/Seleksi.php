<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seleksi extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('MY');
		$this->load->model('model_seleksi');
		$this->load->model('model_beasiswa');
	}

	public function index()
	{
		$data['seleksi'] = $this->model_seleksi->get_seleksi();
		$this->load->view('admin/sidebaradmin');
		$this->load->view('admin/page/viewseleksi', $data);
		$this->load->view('admin/footer');
	}
}