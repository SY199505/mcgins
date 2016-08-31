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

    // public function save_course($levels, $age, $courses, $intro){
    //     $this -> db -> insert('t_course', array(
    //         'levels' => $levels,
    //         'age' => $age,
    //         'courses' => $courses,
    //         'intro' => $intro
    //     ));
    //     return $this -> db -> affected_rows();
    // }

    public function update_news($activity_id, $activity_title, $activity_desc, $activity_content)
    {
        $this -> db -> where('activity_id', $activity_id);
        $this -> db -> update('t_activity', array(
            'activity_title' => $activity_title,
            'activity_desc' => $activity_desc,
            'activity_content' => $activity_content,
        ));
        return $this -> db -> affected_rows();
    }

    // public function delete_course($course_id)
    // {
    //     $this->db->delete('t_course', array('id' => $course_id));
    //     return $this -> db -> affected_rows();

    // }    
}