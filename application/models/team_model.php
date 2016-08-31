<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Team_model extends CI_Model {

    public function get_all()
    {
        //$sql = "select * from t_faq";
        $query = $this->db->get('t_team');
       
        return $query->result() ;

    }

    public function get_by_id($id)
    {
    	$data = array(
    		'id' => $id
    	);

    	$query = $this -> db -> get_where('t_team',$data);
    	 return $query -> row() ;
    }

    public function updata_by_all($id,$name,$desc,$photo_url)
    {
    	$data = array(
    		'name' => $name,
    		'desc' => $desc,
    		'img' => $photo_url
    	);

    	$this -> db -> where('id', $id);
        $this -> db -> update('t_team', $data); 
        $row = $this -> db -> affected_rows();
        return $row;



    }
    
}