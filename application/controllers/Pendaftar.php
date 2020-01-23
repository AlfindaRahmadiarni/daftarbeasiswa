<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftar extends CI_Controller {
 
	function __construct()
	{
		parent::__construct();

		//load model model_daftar
		$this->load->helper('MY');
		$this->load->model('model_pendaftar');
		$this->load->model('model_beasiswa');
		$this->load->model('model_seleksi');
	} 
 
	public function index(){

		$data['datapendaftar']=$this->model_pendaftar->get_all_pendaftar();
		$data['deadline']=$this->model_beasiswa->get_infobeasiswa();

		$this->load->view('admin/sidebaradmin');
		$this->load->view('admin/page/viewpendaftar', $data);
		$this->load->view('admin/footer');
	}

	public function prestasi(){

		$data['datapendaftar']=$this->model_pendaftar->get_all_pendaftar();
		$data['deadline']=$this->model_beasiswa->get_infobeasiswa();

		$this->load->view('admin/sidebaradmin');
		$this->load->view('admin/page/viewprestasi', $data);
		$this->load->view('admin/footer');
	}

	public function tambahan(){

		$data['datapendaftar']=$this->model_pendaftar->get_all_pendaftar();
		$data['deadline']=$this->model_beasiswa->get_infobeasiswa();

		$this->load->view('admin/sidebaradmin');
		$this->load->view('admin/page/viewtambahan', $data);
		$this->load->view('admin/footer');
	}


	public function create()
	{
		//load library untuk validasi dan form
	    $this->load->helper('form');
		$this->load->library('form_validation');

	    // $this->form_validation->set_rules('nim', 'Nim', 'required');
		$this->form_validation->set_rules('nim', 'NIM', 'required|is_unique[pendaftar.nim]',
		array(
			'required' 		=> '%s sudah terdaftar.',
			'is_unique' 	=> 'Pendaftar dengan nim<strong>' .$this->input->post('nim'). '</strong> sudah terdaftar.'
		));
		$this->form_validation->set_rules('alamat', 'Alamat Lengkap', 'required|min_length[20]',
		array(
			'required' 		=> 'Mohon periksa %s Anda',
			'min_length' 	=> 'Mohon Lengkapi Alamat Anda.'
		));
		$this->form_validation->set_rules('ipk', 'IPK', 'required|less_than_equal_to[4]',
		array(
			'required' 				=> 'Mohon periksa %s Anda',
			'less_than_equal_to' 	=> 'IPK maksimal <strong>4</strong>'
		));
		$this->form_validation->set_rules('internasional', 'Internasional', 'required|greater_than_equal_to[0]',
			array(
				'required' 				=> 'Mohon periksa %s Anda',
				'greater_than_equal_to' 	=> 'Sertifikat internasional tidak bernilai negatif <strong></strong>.'
			));
		$this->form_validation->set_rules('nasional', 'Nasional', 'required|greater_than_equal_to[0]',
			array(
				'required' 				=> 'Mohon periksa %s Anda',
				'greater_than_equal_to' 	=> 'Sertifikat Nasional tidak bernilai negatif <strong></strong>.'
			));
		$this->form_validation->set_rules('provinsi', 'Provinsi', 'required|greater_than_equal_to[0]',
			array(
				'required' 				=> 'Mohon periksa %s Anda',
				'greater_than_equal_to' 	=> 'Sertifikat provinsi tidak bernilai negatif <strong></strong>.'
			));
		$this->form_validation->set_rules('kota', 'Kota', 'required|greater_than_equal_to[0]',
			array(
				'required' 				=> 'Mohon periksa %s Anda',
				'greater_than_equal_to' 	=> 'Sertifikat kota tidak bernilai negatif <strong></strong>.'
			));
		$this->form_validation->set_rules('alasanBea', 'Alasan Beasiswa', 'required|min_length[20]',
		array(
			'required' 		=> 'Mohon periksa %s Anda',
			'min_length' 	=> 'Alasan Pengajuan Beasiswa Anda Kurang Detail.'
		));

		$this->form_validation->set_rules('password', 'Password', 'required');

		$this->form_validation->set_rules('password2', 'Konfirmasi Password', 'matches[password]',
		array(
			'required' 		=> '%s tidak sesuai.',
			'matches' 		=> 'Password tidak sesuai'
		));
	    // Cek validasi input

	    if ($this->form_validation->run() === FALSE)
	    {
	        $this->load->view('admin/sidebaradmin');
	        $this->load->view('admin/page/addpendaftar');
	        $this->load->view('admin/footer');
	    } else {
	    	//jika memilih gambar
	    	if ( isset($_FILES['thumbnail']) && $_FILES['thumbnail']['size'] > 0 )
    		{
    			$config['upload_path']          = './uploads/'; //nama folder
    	        $config['allowed_types']        = 'gif|jpg|png'; //ekstensi file yang diijinkan
    	        $config['max_size']             = 100; //ukuran maksimal
    	        // $config['max_width']            = 1024; //ukuran maksimal lebar
    	        // $config['max_height']           = 768; //ukuran maksimal tinggi

    	        // Load library upload
    	        $this->load->library('upload', $config);

    	        // Apakah file berhasil diupload?
    	        if ( ! $this->upload->do_upload('thumbnail'))
    	        {
    	        	$data['upload_error'] = $this->upload->display_errors();

    	        	$post_image = '';

    	        	// Kita passing pesan error upload ke view supaya user mencoba upload ulang
    	            $this->load->view('admin/sidebaradmin');
    	            $this->load->view('admin/page/addpendaftar', $data);
    	            $this->load->view('admin/footer'); 

    	        } else {

    	        	// Simpan nama file-nya jika berhasil diupload
    	            $img_data = $this->upload->data();
    	            $post_image = $img_data['file_name'];
    	        	
    	        }
    		} else {

    			// User tidak upload gambar, jadi kita kosongkan field ini
    			$post_image = '';
    		}
    		
    		$enc_pwd = md5($this->input->post('password'));

	    	$post_data = array(
				'nim' => $this->input->post('nim'),
	    	    'nama' => $this->input->post('nama'), 
	    	    'jurusan' => $this->input->post('jurusan'),
	    	    'jk' => $this->input->post('jk'),
	    	    'tempatLahir' => $this->input->post('tempatLahir'),
	    	    'tglLahir' => $this->input->post('tglLahir'),
	    	    'alamatLengkap' => $this->input->post('alamat'),
	    	    'telp' => $this->input->post('telp'),
	    	    'foto' => $post_image,
	    	    'ipk' => $this->input->post('ipk'),
	    	    'internasional' => $this->input->post('internasional'),
	    	    'nasional' => $this->input->post('nasional'),
	    	    'provinsi' => $this->input->post('provinsi'),
	    	    'kota' => $this->input->post('kota'),
	    	    'namaAyah' => $this->input->post('namaAyah'),
	    	    'namaIbu' => $this->input->post('namaIbu'),
	    	    'alasanBeasiswa' => $this->input->post('alasanBea'),
	    	    'pwd' => $enc_pwd,
	    	); 
	    	
	    	// Jika tidak ada error upload gambar, maka kita insert ke database via model Blog 
	    	if( empty($data['upload_error']) ) {
		        $this->model_pendaftar->tambah_pendaftar($post_data);

		        $this->session->set_flashdata('user_registered', 'Anda telah terdaftar.');

        		$id = $this->db->insert_id();

		        $internasional = 1 * $this->input->post('internasional');
		    	$nasional = 0.75 * $this->input->post('nasional');
		    	$provinsi = 0.5 * $this->input->post('provinsi');
		    	$kota = 0.25 * $this->input->post('kota');
		    	$poin = $this->input->post('ipk') + $internasional + $nasional + $provinsi + $kota;
		    	if($poin >= 4.5){
		    		$keterangan = "LOLOS";
		    	} else {
		    		$keterangan = "TIDAK LOLOS";
		    	}

		    	$post_seleksi = array(
		    		'idDaftar' 	=> $id,
		    		'poin' 		=> $poin,
		    		'keterangan'=> $keterangan,
		    	);

		        $this->model_seleksi->tambah_seleksi($post_seleksi);
		        redirect('Pendaftar/'); 
	    	}
	    }
	}

	public function editPribadi($id = NULL)
	{

		// Get data berdasarkan $id
		$data['pendaftar'] = $this->model_pendaftar->get_pendaftar_by_id($id);
		if ( empty($id) || !$data['pendaftar'] ) redirect('pendaftar');

		$old_image = $data['pendaftar']->foto;

		// Kita butuh helper dan library berikut
	    $this->load->helper('form');
	    $this->load->library('form_validation');

	    $this->form_validation->set_rules('nim', 'NIM', 'required');
	    $this->form_validation->set_rules('alamat', 'Alamat Lengkap', 'required|min_length[20]',
			array(
				'required' 		=> 'Mohon periksa %s Anda',
				'min_length' 	=> 'Mohon Lengkapi Alamat Anda.'
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
			$this->load->view('admin/page/editPribadi', $data); 
			$this->load->view('admin/footer');

	    } else {

    		// Apakah user upload gambar?
    		if ( isset($_FILES['thumbnail']) && $_FILES['thumbnail']['size'] > 0 )
    		{
    			// Konfigurasi folder upload & file yang diijinkan
    			// Jangan lupa buat folder uploads di dalam ci3-course
    			$config['upload_path']          = './uploads/';
    	        $config['allowed_types']        = 'gif|jpg|png';
    	        $config['max_size']             = 100;
    	        // $config['max_width']            = 1024;
    	        // $config['max_height']           = 768;

    	        // Load library upload
    	        $this->load->library('upload', $config);

    	        // Apakah file berhasil diupload?
    	        if ( ! $this->upload->do_upload('thumbnail'))
    	        {
    	        	$data['upload_error'] = $this->upload->display_errors();

    	        	$post_image = '';

    	        	// Kita passing pesan error upload ke view supaya user mencoba upload ulang
    	            $this->load->view('admin/sidebaradmin');
					$this->load->view('admin/page/editpribadi', $data); 
					$this->load->view('admin/footer');

    	        } else {

    	        	if( !empty($old_image) ) {
    	        		if ( file_exists( './uploads/'.$old_image ) ){
    	        		    unlink( './uploads/'.$old_image );
    	        		} else {
    	        		    echo 'File tidak ditemukan.';
    	        		}
    	        	}

    	        	// Simpan nama file-nya jika berhasil diupload
    	            $img_data = $this->upload->data();
    	            $post_image = $img_data['file_name'];
    	        }
    		} else {
    			$post_image = ( !empty($old_image) ) ? $old_image : '';
    		}

    		$enc_pwd = md5($this->input->post('password'));

	    	$post_data = array(
	    	    'nim' => $this->input->post('nim'),
	    	    'nama' => $this->input->post('nama'),
	    	    'jurusan' => $this->input->post('jurusan'),
	    	    'jk' => $this->input->post('jk'),
	    	    'tempatLahir' => $this->input->post('tempatLahir'),
	    	    'tglLahir' => $this->input->post('tglLahir'),
	    	    'alamatLengkap' => $this->input->post('alamat'),
	    	    'telp' => $this->input->post('telp'),
	    	    'foto' => $post_image,
	    	    'pwd' => $enc_pwd,
	    	);

	    	
    		
	        $this->model_pendaftar->edit_pendaftar($post_data, $id);

	        redirect('Pendaftar/');

	    }
	}


	public function editPrestasi($id = NULL)
	{

		// Get data berdasarkan $id
		$data['pendaftar'] = $this->model_pendaftar->get_pendaftar_by_id($id);
		if ( empty($id) || !$data['pendaftar'] ) redirect('pendaftar');

		// Kita butuh helper dan library berikut
	    $this->load->helper('form');
	    $this->load->library('form_validation');

	    // $this->form_validation->set_rules('nim', 'NIM', 'required');
	     $this->form_validation->set_rules('ipk', 'IPK', 'required|less_than_equal_to[4]',
			array(
				'required' 				=> 'Mohon periksa %s Anda',
				'less_than_equal_to' 	=> 'IPK maksimal <strong>4</strong>.'
			));


	     if ($this->form_validation->run() === FALSE)
	    {
	        $this->load->view('admin/sidebaradmin');
			$this->load->view('admin/page/editprestasi', $data); 
			$this->load->view('admin/footer');
 
	    } else {
	    	$post_data = array(
	    	    'ipk' => $this->input->post('ipk'),
	    	    'internasional' => $this->input->post('internasional'),
	    	    'nasional' => $this->input->post('nasional'),
	    	    'provinsi' => $this->input->post('provinsi'),
	    	    'kota' => $this->input->post('kota'),
	    	);
    		
	        $this->model_pendaftar->edit_pendaftar($post_data, $id);

			// $id2 = $this->db->insert_id();

	        $internasional = 1 * $this->input->post('internasional');
	    	$nasional = 0.75 * $this->input->post('nasional');
	    	$provinsi = 0.5 * $this->input->post('provinsi');
	    	$kota = 0.25 * $this->input->post('kota');
	    	$poin = $this->input->post('ipk') + $internasional + $nasional + $provinsi + $kota;
	    	if($poin >= 4.5){
	    		$keterangan = "LOLOS";
	    	} else {
	    		$keterangan = "TIDAK LOLOS";
	    	}


	    	$post_seleksi = array(
	    		'poin' => $poin,
	    		'keterangan' => $keterangan,
	    	);

	        $this->model_seleksi->edit_seleksi($post_seleksi, $id);

	        redirect('Pendaftar/prestasi/');

	    }
	}

	public function editTambahan($id = NULL)
	{

		// Get data berdasarkan $id
		$data['pendaftar'] = $this->model_pendaftar->get_pendaftar_by_id($id);
		if ( empty($id) || !$data['pendaftar'] ) redirect('pendaftar');

		// Kita butuh helper dan library berikut
	    $this->load->helper('form');
	    $this->load->library('form_validation');

	    // $this->form_validation->set_rules('nim', 'NIM', 'required');
	     $this->form_validation->set_rules('alasanBea', 'Alasan Beasiswa', 'required|min_length[20]',
			array(
				'required' 				=> 'Mohon periksa %s Anda',
				'less_than_equal_to' 	=> 'Alasan Pengajuan Beasiswa Anda Kurang Detail.'
			));


	     if ($this->form_validation->run() === FALSE)
	    {
	        $this->load->view('admin/sidebaradmin');
			$this->load->view('admin/page/edittambahan', $data); 
			$this->load->view('admin/footer');

	    } else {
	    	$post_data = array(
	    	    'namaAyah' => $this->input->post('namaAyah'),
	    	    'namaIbu' => $this->input->post('namaIbu'),
	    	    'alasanBeasiswa' => $this->input->post('alasanBea'),
	    	);
    		
	        $this->model_pendaftar->edit_pendaftar($post_data, $id);
	        redirect('Pendaftar/tambahan/');

	    }
	}

	public function delete($id)
	{

		// Get artikel dari model berdasarkan $id
		$data['pendaftar'] = $this->model_pendaftar->get_pendaftar_by_id($id);

		// Jika id kosong atau tidak ada id yg dimaksud, lempar user ke halaman blog
		if ( empty($id) || !$data['pendaftar'] ) show_404();

		// Kita simpan dulu nama file yang lama
		$old_image = $data['pendaftar']->foto;

    	// Hapus file image yang lama jika ada
    	if( !empty($old_image) ) {
    		if ( file_exists( './uploads/'.$old_image ) ){
    		    unlink( './uploads/'.$old_image );
    		} else {
    		    echo 'File tidak ditemukan.';
    		}
    	}
        $this->model_pendaftar->delete_seleksi($id);
        $this->model_pendaftar->delete_pendaftar($id);
        redirect('Pendaftar/');
	}

	public function get_total() 
    {
        return $this->db->count_all("pendaftar");
    }
}
?>