<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Model_pengumuman extends CI_Model{

	public function __construct()
    {
    	parent::__construct();
     	$this->load->database();
    } 

	// public function get_pengumuman(){
	// 	$query = $this->db->get('pengumuman');
 //     	// return $query->row_array();
 //        return $query->result();
 //    }

    function getKuota(){
        $query = $this->db->query("SELECT kuota FROM beasiswa");
        return $query;
    }

    public function getPengumuman($kuota){
        // $kuota = $this->db->query("SELECT kuota FROM beasiswa");
        $this->db->join('pendaftar', 'pendaftar.idDaftar = seleksi.idDaftar');
        $this->db->order_by('poin', 'DESC');
        $query = $this->db->get('seleksi', $kuota, 0);
        return $query->result();
    }
   
}