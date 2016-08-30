<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Activity_model extends CI_Model {

    public function get_all()
    {
        //$sql = "select * from t_faq";
        $query = $this->db->get('t_activity');
       
        return $query->result();

    }
    public function get_by_id($activity_id)
    {
    	return $this -> db -> get_where('t_activity',array('activity_id' => $activity_id)) -> row();
    }

    





}