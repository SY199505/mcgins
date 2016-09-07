<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class I18n_model extends CI_Model {

    
    public function get_all_features()
    {
        return $this -> db -> get('t_features') -> result();
    }


    public function get_aboutUs()
    {
        return $this -> db -> get('t_aboutUs') -> result();
    }

    public function get_nav()
    {
        return $this -> db -> get('t_nav') -> result();
    }


    


    


    

    

    

    




}