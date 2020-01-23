<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Model_beasiswa extends CI_Model{

	public function __construct()
    {
    	parent::__construct();
     	$this->load->database();
    } 

	public function get_beasiswa(){
		$query = $this->db->get('beasiswa');
     	// return $query->row_array(); 
        return $query->result();
    }

    public function get_infobeasiswa(){
        $query = $this->db->get('beasiswa');
        return $query->row_array();
        // return $query->result();
    }

    public function get_beasiswa_by_id($id)
    {
        $query = $this->db->get_where('beasiswa', array('idBeasiswa' => $id));
        return $query->row();
    }

    function get_deadline(){
        $query = $this->db->query("SELECT deadline FROM beasiswa WHERE idBeasiswa=1");
        return $query;
    }

    // public function get_deadline()
    // {  
    //     $this->db->select('deadline');
    //     $query = $this->db->get('beasiswa');
    //     return $query->row();
    // }

    public function edit_beasiswa($data, $id) 
    {
        if ( !empty($data) && !empty($id) ){
            $update = $this->db->update( 'beasiswa', $data, array('idBeasiswa'=>$id) );
            return $update ? true : false;
        } else {
            return false;
        }
    }
}