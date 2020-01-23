<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Model_operator extends CI_Model{

	public function __construct()
    {
    	parent::__construct();
     	$this->load->database();
    } 

    public function tambah_operator($data)
    {
        return $this->db->insert('operator', $data);
    } 

    public function get_operator_by_id($id)
    {
        $query = $this->db->get_where('operator', array('id' => $id));
        return $query->row();
    }

    public function edit_operator($data, $id) 
    {
        if ( !empty($data) && !empty($id) ){
            $update = $this->db->update( 'operator', $data, array('id'=>$id) );
            return $update ? true : false;
        } else { 
            return false;
        }
    }

    public function delete_operator($id)
    {
        if ( !empty($id) ){
            $delete = $this->db->delete('operator', array('id'=>$id) ); 
            return $delete ? true : false;
        } else {
            return false;
        }
    }

    public function get_all() 
    {
        $this->db->join('level', 'level.idLevel = operator.level');
        
        $query = $this->db->get('operator');

     return $query->result();
    }
}