<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_user extends CI_Model
{

    public function __construct() 
    {
        parent::__construct();
    }

    public function login($username, $password){
        // Validasi
        $this->db->where('username', $username);
        $this->db->where('password', $password);

        $result = $this->db->get('operator');


        if($result->num_rows() == 1){
            return $result->row(0)->id;
        } else {
            return false;
        }
    }

    public function get_level($id) {
        $this->db->select('level');
        $this->db->where('id', $id); 

        $result = $this->db->get('operator');

        if($result->num_rows() == 1){
            return $result->row(0)->level;
        } else {
            return false;
        }
    }

    public function get_level_pendaftar($id) {
        $this->db->select('level');
        $this->db->where('idDaftar', $id); 

        $result = $this->db->get('pendaftar');

        if($result->num_rows() == 1){
            return $result->row(0)->level;
        } else {
            return false;
        }
    }

    public function loginPendaftar($username, $password){
        // Validasi
        $this->db->where('nim', $username);
        $this->db->where('pwd', $password);

        $result = $this->db->get('pendaftar');


        if($result->num_rows() == 1){
            return $result->row(0)->idDaftar;
        } else {
            return false;
        }
    }



}
