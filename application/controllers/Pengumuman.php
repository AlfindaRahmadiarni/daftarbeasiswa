<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumuman extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('MY');
		$this->load->model('model_pengumuman');
		$this->load->model('model_beasiswa');
		$this->load->model('model_seleksi');
	}

	public function index()
	{
		$data['beasiswa']=$this->model_beasiswa->get_infobeasiswa();

		$kuota = $this->model_pengumuman->getKuota()->row();
		$limit = $kuota->kuota;
		$data['limit'] = $limit;

		$data['pengumuman']=$this->model_pengumuman->getPengumuman($limit);

		$deadline = $this->model_beasiswa->get_deadline()->row();
		$dl = $deadline->deadline;

		$tgl = date('Y-m-d');
		if($dl < $tgl){
			$this->load->view('admin/sidebaradmin');
			$this->load->view('admin/page/pengumuman', $data);
			$this->load->view('admin/footer');
		} else {
			$this->load->view('admin/sidebaradmin');
			$this->load->view('admin/page/belumpengumuman', $data);
			$this->load->view('admin/footer');
		}
	}

	public function userindex()
	{
		$data['beasiswa']=$this->model_beasiswa->get_infobeasiswa();

		$kuota = $this->model_pengumuman->getKuota()->row();
		$limit = $kuota->kuota;
		$data['limit'] = $limit;

		$data['pengumuman']=$this->model_pengumuman->getPengumuman($limit);

		$deadline = $this->model_beasiswa->get_deadline()->row();
		$dl = $deadline->deadline;

		$tgl = date('Y-m-d');
		if($dl < $tgl){
			$this->load->view('user/pengumuman', $data);
		} else {
			$this->load->view('user/belumpengumuman', $data);		
		}
	}
}
