<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact_model extends CI_Model {

    public function get_all()
    {
        $query = $this->db->get('t_webinfo');
       	
        return $query->result();

    }
}