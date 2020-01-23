<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_admin extends CI_Model {

    function __construct()
    {
    	parent::__construct();
    }
    public function get_totalDaftar() 
    {
        return $this->db->count_all("pendaftar");
    } 
}