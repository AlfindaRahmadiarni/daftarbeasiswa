<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('MY');
		$this->load->model('model_beasiswa');
		$this->load->model('model_pendaftar');
		$this->load->model('model_user');
		$this->load->model('model_pengumuman');
		$this->load->helper('form');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$kuota = $this->model_pengumuman->getKuota()->row();
		$limit = $kuota->kuota;
		$data['limit'] = $limit;
		$idDaftar = $this->session->userdata('id');

		$data['beasiswa'] = $this->model_beasiswa->get_infobeasiswa();

		$deadline = $this->model_beasiswa->get_deadline()->row();
		$dl = $deadline->deadline;

		$tgl = date('Y-m-d');


		if(!$this->session->userdata('logged_in') || $dl >= $tgl){
			$this->load->view('user/index', $data);
		} else if($this->session->userdata('level') == 3 || $this->session->userdata('level') == 4){
			if($dl <= $tgl){
				$data['pengumuman']=$this->model_pengumuman->getPengumuman($limit);
				$status = "TIDAK LOLOS";

				foreach($data['pengumuman'] as $val) {
					if($this->session->userdata('id') == $val->idDaftar) {
						$status = "LOLOS";
					}
				}

				if($status == "LOLOS")
				// echo $status;
					$this->load->view('user/lolos');
				else
				 	$this->load->view('user/tidaklolos');
				
			}
		}

		
	}

	public function pendaftar()
	{
		$limit_per_page = 4;

		$start_index = ( $this->uri->segment(3) ) ? $this->uri->segment(3) : 0;

			$total_records = $this->model_pendaftar->get_total();
 
			if ($total_records > 0) {
				$data['pendaftar'] = $this->model_pendaftar->get_all_pendaftar($limit_per_page, $start_index);
				
				$config['base_url'] = base_url() . 'User/pendaftar';
				$config['total_rows'] = $total_records;
				$config['per_page'] = $limit_per_page;
				$config["uri_segment"] = 3;
				
				$this->pagination->initialize($config);
					
				$data["links"] = $this->pagination->create_links();
			}
			$this->load->view('user/pendaftar', $data);
	}

	public function listpendaftar()
	{
		$pendaftar['data'] = $this->model_pendaftar->get_all_pendaftar();
        $this->load->view('user/listpendaftar', $pendaftar);
	}

	public function login(){

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if($this->form_validation->run() === FALSE){
			// $this->load->view('template/header');
			$this->load->view('user/login');
			// $this->load->view('template/footer');
		} else {
			
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));
			// $password = $this->input->post('password');
			$id = $this->model_user->login($username, $password);
			$id2 = $this->model_user->loginPendaftar($username, $password);

			if($id){
				// Buat session
				$user_data = array(
					'id' => $id,
					'username' => $username,
					'logged_in' => true,
					'level' => $this->model_user->get_level($id),
				);
				$this->session->set_userdata($user_data);
				// Set message
				$this->session->set_flashdata('user_loggedin', 'Anda sudah login');
				redirect('admin');
			} else if($id2) {
				$user_data = array(
					'id' => $id2,
					'username' => $username,
					// 'username' => $username,
					'logged_in' => true,
					'level' => $this->model_user->get_level_pendaftar($id2),
				);
				$this->session->set_userdata($user_data);
				// Set message
				$this->session->set_flashdata('user_loggedin', 'Anda sudah login');
				redirect('user');
			} else {
				// Set message
				$this->session->set_flashdata('login_failed', 'Login invalid');
				redirect('user/login');
			}		
		}
	}

	public function logout(){
			// Unset user data
			$this->session->unset_userdata('logged_in');
			$this->session->unset_userdata('id');
			$this->session->unset_userdata('username');

			// Set message
			$this->session->set_flashdata('user_loggedout', 'Anda sudah log out');

			redirect('user');
	}

}
