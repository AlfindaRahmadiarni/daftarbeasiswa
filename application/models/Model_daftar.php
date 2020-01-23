<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_daftar extends CI_Model {

    function __construct()
    {
    	parent::__construct();
    }

    public function tambah_daftar($data)
    {
        return $this->db->insert('pendaftar', $data);
    }

    public function get_datadiri_by_id($id)
    {
        $query = $this->db->get_where('pendaftar', array('idDaftar' => $id));
        return $query->row(); 
    }

}