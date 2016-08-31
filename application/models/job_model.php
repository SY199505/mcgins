<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Job_model extends CI_Model {

    public function get_all()
    {
        $query = $this->db->get('t_job');
       
        return $query->result() ;

    }

    public function update_job($POST)
    {
    	$i = 1;
    		var_dump($value);
    		die();
    	// foreach($POST as $key => $value){
    	// 	$this -> db -> where('job_id', $i);
    	// 	$this -> db -> update('t_job', array(
    	// 		''
    	// 	));
    	// 	$i++;
    	// }
    }
}