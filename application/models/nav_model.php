<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Nav_model extends CI_Model {

    public function get_all()
    {
        $query = $this->db->get('t_nav');

        return $query->result() ;

    }

    public function update_nav_ch($ch_id,$ch_show){
        $this -> db -> where('id',$ch_id);
        $this -> db -> update('t_nav', array(
            'id' => $ch_id,
            'ch' => $ch_show
        ));
        return $this -> db -> affected_rows();
    }

    public function update_nav_en($en_id,$en_show){
        $this -> db -> where('id',$en_id);
        $this -> db -> update('t_nav', array(
            'id' => $en_id,
            'en' => $en_show
        ));
        return $this -> db -> affected_rows();
    }


}