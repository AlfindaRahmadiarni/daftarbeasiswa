<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Model_pendaftar extends CI_Model{

	public function __construct()
    {
    	parent::__construct();
     	$this->load->database();
    } 

	// public function get_all_pendaftar(){
	// 	$query = $this->db->get('pendaftar');
 //     	// return $query->row_array();
 //        return $query->result();
 //    }
    public function get_total() 
    {
        return $this->db->count_all("pendaftar");
    } 

    public function get_all_pendaftar($limit = FALSE, $offset = FALSE)
    {
        if( $limit ) {
            $this->db->limit($limit, $offset);
        }
        // Urutkan berdasar abjad
        $this->db->order_by('idDaftar', 'DESC');

        // $query = $this->db->get('pendaftar');
        // return $query->result();
        $this->db->join('pendaftar', 'pendaftar.level = level.idLevel');
        
        $query = $this->db->get('level');

        return $query->result();
    }


    public function tambah_pendaftar($data)
    {
        return $this->db->insert('pendaftar', $data);
    } 

    public function get_pendaftar_by_id($id)
    {
        $query = $this->db->get_where('pendaftar', array('idDaftar' => $id));
        return $query->row();
    }

    public function edit_pendaftar($data, $id) 
    {
        if ( !empty($data) && !empty($id) ){
            $update = $this->db->update( 'pendaftar', $data, array('idDaftar'=>$id) );
            return $update ? true : false;
        } else { 
            return false;
        }
    }

    public function delete_pendaftar($id)
    {
    if ( !empty($id) ){
        $delete = $this->db->delete('pendaftar', array('idDaftar'=>$id) ); 
        return $delete ? true : false;
    } else {
        return false;
    }
    }

    public function delete_seleksi($id)
    {
    if ( !empty($id) ){
        $delete = $this->db->delete('seleksi', array('idDaftar'=>$id) ); 
        return $delete ? true : false;
    } else {
        return false;
    }
    }
}