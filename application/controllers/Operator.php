<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Operator extends CI_Controller {
 
	function __construct()
	{
		parent::__construct();

		//load model model_daftar
		$this->load->helper('MY');
		$this->load->model('model_operator');
	} 

	public function index(){

		$data["dataoperator"] = $this->model_operator->get_all();

		$this->load->view('admin/sidebaradmin');
		$this->load->view('admin/page/viewoperator', $data);
		$this->load->view('admin/footer');
	}

	public function create()
	{
		//load library untuk validasi dan form
	    $this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('username', 'Username', 'required|is_unique[operator.username]',
		array(
			'required' 		=> '%s sudah terdaftar.',
			'is_unique' 	=> 'Operator dengan username<strong>' .$this->input->post('username'). '</strong> sudah terdaftar.'
		));

		$this->form_validation->set_rules('password', 'Password', 'required');

		$this->form_validation->set_rules('password2', 'Konfirmasi Password', 'matches[password]',
		array(
			'required' 		=> '%s tidak sesuai.',
			'matches' 		=> 'Password tidak sesuai'
		));

	    if ($this->form_validation->run() === FALSE)
	    {
	        $this->load->view('admin/sidebaradmin');
	        $this->load->view('admin/page/addoperator');
	        $this->load->view('admin/footer');
	    } else {
    		
    		$enc_pwd = md5($this->input->post('password'));

	    	$post_data = array(
				'nama' => $this->input->post('nama'),
				'email' => $this->input->post('email'),
				'telp' => $this->input->post('telp'),
				'username' => $this->input->post('username'),
	    	    'password' => $enc_pwd,
	    	    'level' => 2,
	    	); 
	    	
		        $this->model_operator->tambah_operator($post_data);

		        $this->session->set_flashdata('operator_registered', 'Anda telah terdaftar.');

		        redirect('Operator/');
	    	}
	    }
	

	public function edit($id = NULL)
	{

		// Get data berdasarkan $id
		$data['operator'] = $this->model_operator->get_operator_by_id($id);
		if ( empty($id) || !$data['operator'] ) redirect('operator');

		// Kita butuh helper dan library berikut
	    $this->load->helper('form');
	    $this->load->library('form_validation');

	    // $old_pass = $data['operator']->password;

	 //    if(!empty($this->input->post('password'))) {

		     $this->form_validation->set_rules('password', 'Password', 'required');

			$this->form_validation->set_rules('password2', 'Konfirmasi Password', 'matches[password]',
			array(
				'required' 		=> '%s tidak sesuai.',
				'matches' 		=> 'Password tidak sesuai'
			));
		// }

	     if ($this->form_validation->run() === FALSE)
	    {
	        $this->load->view('admin/sidebaradmin');
			$this->load->view('admin/page/editoperator', $data); 
			$this->load->view('admin/footer');
	    } else {
	    	// if(empty($this->input->post('password'))) {
	    	//     $pass = ( !empty($old_pass) ) ? $old_pass : '';
	    	// } else {
	    		$pass = md5($this->input->post('password'));
	    	// }
	    	$post_data = array(
	    	    'nama' => $this->input->post('nama'),
	    	    'email' => $this->input->post('email'),
	    	    'telp' => $this->input->post('telp'),
	    	    'password' => $pass,
	    	);
    		
	        $this->model_operator->edit_operator($post_data, $id);
	        redirect('Operator/');

	    }
	}

	public function delete($id)
	{

		// Get artikel dari model berdasarkan $id
		$data['operator'] = $this->model_operator->get_operator_by_id($id);

		// Jika id kosong atau tidak ada id yg dimaksud, lempar user ke halaman blog
		if ( empty($id) || !$data['operator'] ) show_404();
 
        $this->model_operator->delete_operator($id);
        redirect('Operator/');
	}
}
?>