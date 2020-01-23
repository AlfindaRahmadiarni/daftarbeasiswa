<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_seleksi extends CI_Model {

    function __construct()
    {
        parent::__construct();
        $this->load->database();

    }

    public function tambah_seleksi($data)
    {
        return $this->db->insert('seleksi', $data);
    }
    public function edit_seleksi($data, $id) 
    {
        if ( !empty($data) && !empty($id) ){
            $update = $this->db->update( 'seleksi', $data, array('idDaftar'=>$id) );
            return $update ? true : false;
        } else {
            return false;
        }
    }
    public function get_seleksi() 
    {
        $this->db->join('pendaftar', 'pendaftar.idDaftar = seleksi.idDaftar');
        
        $query = $this->db->get('seleksi');

     	return $query->result();
    }

   

}