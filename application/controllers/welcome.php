<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct() {
		parent::__construct();
        $this -> load -> model('admin_model');
		$this -> load -> model('index_model');

		$this -> load -> model('course_model');
    	$this -> load -> model('team_model');
		$this -> load -> model('job_model');
		$this -> load -> model('faq_model');
     	$this -> load -> model('contact_model');
		$this -> load -> model('activity_model');
		$this -> load -> model('footer_model');

	}


	public function index()
	{
    	$result1 = $this -> footer_model -> get_all();
		$result = $this -> index_model -> get_all();
		$data = array(
			//尾部
			'footerInfo' => $result1,				
			'indexInfo' => $result
		);	 
		$this -> load -> view('index',$data);

	}

	public function intro()
	{
    	$result1 = $this -> footer_model -> get_all(); 
    	$data = array(
			//尾部
			'footerInfo' => $result1
		); 
		$this -> load -> view('intro', $data);

	}

	public function course()
	{
    	$result1 = $this -> footer_model -> get_all(); 
		$result = $this -> course_model -> get_all();
		$data = array(
			//尾部
			'footerInfo' => $result1,
			'courseInfo' => $result
		);		

		$this -> load -> view('course',$data);

	}

	public function team()
	{
    	$result1 = $this -> footer_model -> get_all(); 
    	$result = $this -> team_model -> get_all();
    	$data = array(
			'footerInfo' => $result1,
    		'member' => $result
		);

		$this -> load -> view('team',$data);

	}

	public function job()
	{
    	$result1 = $this -> footer_model -> get_all(); 
		$result = $this -> job_model -> get_all();
		$data = array(
			//尾部
			'footerInfo' => $result1,
			'jobInfo' => $result
		);			
     
		$this -> load -> view('job', $data);

	}

	public function question()
	{
    	$result1 = $this -> footer_model -> get_all(); 
		$result = $this -> faq_model -> get_all();
		$data = array(
			'footerInfo' => $result1,
			'faqInfo' => $result
		);     
		$this -> load -> view('question',$data);

	}

	public function contact()
	{
    	$result1 = $this -> footer_model -> get_all();
		$result = $this -> contact_model -> get_all();

		$data = array(
			//尾部
			'footerInfo' => $result1,	
			'contactInfo' => $result
		);
		$this -> load -> view('contact', $data);

	}

	public function news()
	{
     
		
    	$result1 = $this -> footer_model -> get_all(); 
		$result = $this -> activity_model -> get_all();
		$data = array(
			'footerInfo' => $result1,
			'activityInfo' => $result
		);
 
		$this -> load -> view('news',$data);
	}


	public function article($activity_id)
	{
     	
		//$this -> input -> get('activity_id');
		$row = $this -> activity_model -> get_by_id($activity_id);


		$this -> load -> view('article',array('activity' => $row));

	}

}
