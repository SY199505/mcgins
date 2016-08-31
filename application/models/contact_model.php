<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact_model extends CI_Model {

    public function get_all()
    {
        $query = $this->db->get('t_webinfo');
       	
        return $query->result();

    }

    public function update_contact($tel, $wechat, $mail, $website, $addr, $phone)
    {
    	$this -> db -> where('webinfo_id', 1);
    	$this -> db -> update('t_webinfo', array(
    		'webinfo_tel' => $tel,
    		'webinfo_wechat' => $wechat,
    		'webinfo_mail' => $mail,
    		'webinfo_website' => $website,
    		'webinfo_addr' => $addr,
    		'webinfo_phone' => $phone
    	));
    	return $this -> db -> affected_rows();
    }
}