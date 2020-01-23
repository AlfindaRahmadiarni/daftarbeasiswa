<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct()
	{
		parent::__construct();
		$this->load->model('model_admin');
		$this->load->model('model_beasiswa');
	}

	public function index()
	{
		$data['beasiswa']=$this->model_beasiswa->get_infobeasiswa();
		$data['totaldaftar'] = $this->model_admin->get_totalDaftar();

		$this->load->view('admin/sidebaradmin');
		$this->load->view('admin/admin', $data);
		$this->load->view('admin/footer');
	}

	public function addOperator()
	{
		
	}
}
