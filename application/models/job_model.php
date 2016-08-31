<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Job_model extends CI_Model {

    public function get_all()
    {
        $query = $this->db->get('t_job');
       
        return $query->result() ;

    }

    public function update_job($job)
    {
        $this -> db -> where('job_id', 1);
        $this -> db -> update('t_job', array(
            
        ));
    }
}