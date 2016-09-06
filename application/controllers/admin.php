<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

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

	}

	public function pre($data)
	{
		echo "<pre>";
		var_dump($data);
		echo "</pre>";
	}

    /**
    *   @login
    *   @跳转登录页面
    *   @isliuwei
    *   @16/08/23
    */

	public function login()
	{
		$this -> load -> view('admin/login');
	}

    /**
    *   @admin_index
    *   @跳转登录页面
    *   @isliuwei
    *   @16/08/23
    */

    public function admin_index()
    {
        $this -> load -> view('admin/admin-index');
    }

    /**
    *   @check_login
    *   @检查登录
    *   @isliuwei
    *   @16/08/23
    */

    public function check_login()
    {
        /*接收数据*/
        $username = $this -> input -> post('admin_username',true);
        $password = $this -> input -> post('admin_password',true);

        /*连接数据库*/
        $this -> load -> model('admin_model');

        /*调用数据库方法*/
        $result = $this -> admin_model -> get_by_username_password($username,$password);

        /*跳转页面 传递数据*/
        if($result)
        {
            /*将数据库返回的结果 转化成php数组*/
            $data = array(
                'adminInfo' => $result
            );

            /*将admin信息存入session 记录当然admin的登录状态 跳转至admin-index页面*/
            $this -> session -> set_userdata($data);
            //$this -> load -> view('admin/admin-index');
            redirect('admin/admin_index');

        }else{
            //$this -> load -> view('admin/login');
            redirect('admin/login');
        }
    }

    /**
    *   @logout
    *   @登出页面
    *   @isliuwei
    *   @16/08/23
    */

	public function logout()
	{
        /*将当前admin用户信息从session里面删除 删除当前用户的会话 实现登出功能*/
		$this -> session -> unset_userdata('adminInfo');
        /*跳转至登录页面*/
      	redirect('admin/login');
	}

    /**
    *   @admin_setting
    *   @admin用户信息设置页面
    *   @isliuwei
    *   @16/08/23
    */

    public function admin_setting()
    {
        /*获取admin_id数据*/
        $admin_id = $this -> input -> get('admin_id');

        /*连接数据库 根据admin_id查出当前admin用户信息*/
        $this -> load -> model('admin_model');
        $result = $this -> admin_model -> get_by_id($admin_id);

        /*跳转页面 传递数据*/
        if($result)
        {
            /*将数据库返回的结果 转化成php数组*/
            $data = array(
                'admin' => $result
            );

            /*将admin用户的信息 传递给设置页面*/
            $this -> load -> view('admin/admin-profile',$data);

        }
    }

    /**
    *   @admin_mgr
    *   @admin用户列表页面
    *   @isliuwei
    *   @16/08/23
    */

    public function admin_mgr()
    {
        /*连接数据库 获取当前所有admin用户信息*/
        $this -> load -> model('admin_model');
        $result = $this -> admin_model -> get_all();

        if($result)
        {
            $data = array(
              'admins' => $result
            );
            $this -> load -> view('admin/admin-mgr',$data);
        }

    }
    public function index_mgr(){
        $this -> load -> model('index_model');
        $result = $this -> index_model -> get_all();
        if($result){
            $data = array(
                'indexInfo' => $result
            );
            $this -> load -> view('admin/index-mgr', $data);
        }
    }

    public function course_mgr()
    {
        $this -> load -> model('course_model');
        $result = $this -> course_model -> get_all();

        if($result)
        {
            $data = array(
              'courseInfo' => $result
            );
            $this -> load -> view('admin/course-mgr',$data);
        }

    }


    public function team_mgr()
    {
        $this -> load -> model('team_model');
        $result = $this -> team_model -> get_all();

        if($result)
        {
            $data = array(
              'team' => $result
            );
            $this -> load -> view('admin/team-mgr',$data);
        }

    }  

    public function job_mgr()
    {
        $this -> load -> model('job_model');
        $result = $this -> job_model -> get_all();

        if($result)
        {
            $data = array(
              'job' => $result
            );
            $this -> load -> view('admin/job-mgr',$data);
        }

    }

    public function question_mgr()
    {
        $this -> load -> model('faq_model');
        $result = $this -> faq_model -> get_all();

        if($result)
        {
            $data = array(
              'faqInfo' => $result
            );
            $this -> load -> view('admin/question-mgr',$data);
        }

    }

    public function contact_mgr()
    {
        $this -> load -> model('contact_model');
        $result = $this -> contact_model -> get_all();

        if($result)
        {
            $data = array(
              'contact' => $result
            );
            $this -> load -> view('admin/contact-mgr',$data);
        }

    }

    



    /**
    *   @admin_mgr
    *   @admin用户列表页面
    *   @isliuwei
    *   @16/08/23
    */
    public function add_admin()
    {
        $this -> load -> view('admin/admin-add');
    }
    public function check_username()
    {
        $admin_username = $this -> input -> get('admin_username');
        $this -> load -> model('admin_model');
        $result = $this -> admin_model -> get_by_username($admin_username);
        if($result)
        {
            echo 'success';
        }
        else
        {
            echo 'fail';
        }
    }

    public function update_admin()
    {
        $id = $this -> input -> post('admin_id',true);
        $username = $this -> input -> post('admin_username',true);
        $password = $this -> input -> post('admin_password',true);
        $photo_old_url = $this -> input -> post('photo_old_url');

        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '3072';
        $config['file_name'] = date("YmdHis") . '_' . rand(10000, 99999);

        //图片上传操作
        $this -> load -> library('upload', $config);
        $this -> upload -> do_upload('admin_photo');
        $upload_data = $this -> upload -> data();
        

        if ( $upload_data['file_size'] > 0 ) {
            //数据库中存photo的路径
            $photo_url = 'uploads/'.$upload_data['file_name'];
        }else{
            //如果不上传图片,则使用默认图片
            $photo_url = $photo_old_url;
        }

        $this -> load -> model('admin_model');

        $row = $this -> admin_model -> updata_by_all($id,$username,$password,$photo_url);
        
        if($row>0){
            redirect('admin/login');
        }else{
            echo "<script>alert('未修改！');</script>";
            //http://localhost/m/

            echo "<script>location.href='admin_setting?admin_id='+$id;</script>";
            //$this -> load -> view('admin/admin-profile',$data);
            //$this -> admin_index();
            //redirect('admin/admin_setting');
        }

    }

    /**
     *   @admin_mgr
     *   @admin
     *   课程列表页面
     *   @sy
     *   @16/08/23
     */
    public function edit_index($index_id)
    {
        $index = $this -> index_model -> get_by_id($index_id);
        $this -> load -> view('admin/index-edit', array('index' => $index));
    }

    public function update_index()
    {
        $features_id = $this -> input -> post('features_id');
        $features_title_chn = $this -> input -> post('features_title_chn');
        $features_chn  = $this -> input -> post('features_chn');
        $features_title_en = $this -> input -> post('features_title_en');
        $features_en = $this -> input -> post('features_en');
        $row = $this -> index_model -> update_index($features_id, $features_title_chn, $features_chn, $features_title_en, $features_en);
        if($row > 0){
            redirect('admin/index_mgr');
        }else{
            echo '修改失败!';
        }
    }

    public function delete_index($index_id)
    {
        $row = $this -> index_model -> delete_index($index_id);
        if($row > 0){
            redirect('admin/index_mgr');
        }
    }

    public function add_index()
    {
        $this -> load -> view('admin/index-add');
    }

    public function save_index()
    {
//        $features_id = $this -> input -> post('features_id');
        $features_title_chn = $this -> input -> post('features_title_chn');
        $features_chn  = $this -> input -> post('features_chn');
        $features_title_en = $this -> input -> post('features_title_en');
        $features_en = $this -> input -> post('features_en');
        $row = $this -> index_model -> save_index($features_title_chn, $features_chn, $features_title_en, $features_en);
        if($row > 0){
            redirect('admin/index_mgr');
        }
    }
    /**
     *   @admin_mgr
     *   @admin
     *   课程列表页面
     *   @isliuwei
     *   @16/08/23
     */
    public function add_course()
    {
        $this -> load -> view('admin/course-add');
    }

    public function edit_course($course_id)
    {
        $course = $this -> course_model -> get_by_id($course_id);
        $this -> load -> view('admin/course-edit', array('course' => $course));
    }

    public function save_course()
    {
        $levels = $this -> input -> post('levels');
        $age = $this -> input -> post('age');
        $courses = $this -> input -> post('courses');
        $intro = $this -> input -> post('intro');
        $row = $this -> course_model -> save_course($levels, $age, $courses, $intro);
        if($row > 0){
            redirect('admin/course_mgr');
        }
    }

     public function update_course()
    {
        $course_id = $this -> input -> post('course_id');
        $levels = $this -> input -> post('levels');
        $age = $this -> input -> post('age');
        $courses = $this -> input -> post('courses');
        $intro = $this -> input -> post('intro');
        $row = $this -> course_model -> update_course($course_id, $levels, $age, $courses, $intro);
        if($row > 0){
            redirect('admin/course_mgr');
        }else{
            echo '修改课程信息失败!';
        }
    }

     public function delete_course($course_id)
    {
        $row = $this -> course_model -> delete_course($course_id);
        if($row > 0){
            redirect('admin/course_mgr');
        }
    }


    /**
    *   @admin_mgr
    *   @admin团队列表页面
    *   @isliuwei
    *   @16/08/23
    */
    public function add_team()
    {
        $this -> load -> view('admin/team-add');
    }

    public function edit_team()
    {
        $id = $this -> input -> get('team_id');
        $this -> load -> model('team_model');

        $result = $this -> team_model -> get_by_id($id);
        //var_dump($result);
        //die();

        if($result)
        {
            $data = array(
              'team' => $result
            );
            $this -> load -> view('admin/update-team',$data);
        }

    }

    public function save_team()
    {
        $type = $this -> input -> post('team_type');
        $name = $this -> input -> post('team_name');
        $desc = $this -> input -> post('team_desc');
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '3072';
        $config['file_name'] = date("YmdHis") . '_' . rand(10000, 99999);

        //图片上传操作
        $this -> load -> library('upload', $config);
        /**
        $this -> upload -> do_upload('admin_photo');
        */

        $this -> upload -> do_upload('team_photo');
       
        $upload_data = $this -> upload -> data();

        $photo_url = 'uploads/'.$upload_data[file_name];



        $row = $this -> team_model -> save_team($type, $name, $photo_url, $desc);
        if($row > 0){
            redirect('admin/team_mgr');
        }
    }

    public function update_team()
    {
        $id = $this->input -> post('team_id');
        $name = $this->input -> post('team_name');
        $type = $this -> input -> post('team_type');
        $desc = $this->input -> post('team_desc');
        $photo_old_url = $this->input -> post('photo_old_url');



        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '3072';
        $config['file_name'] = date("YmdHis") . '_' . rand(10000, 99999);

        //图片上传操作
        $this -> load -> library('upload', $config);
        /**
        $this -> upload -> do_upload('admin_photo');
        */

        $this -> upload -> do_upload('team_photo');
       
        $upload_data = $this -> upload -> data();




        

        if ( $upload_data['file_size'] > 0 ) {
            //数据库中存photo的路径
            $photo_url = 'uploads/'.$upload_data['file_name'];
        }else{
            //如果不上传图片,则使用默认图片
            $photo_url = $photo_old_url;
        }

        // echo $photo_url;
        // die();

        $this -> load -> model('team_model');

        $row = $this -> team_model -> updata_by_all($id,$name,$desc,$photo_url);
        
        if($row>0){
            redirect('admin/team_mgr');
        }else{
            echo "<script>alert('未修改！');</script>";
            //http://localhost/m/

            echo "<script>location.href='team_update?team_id='+$id;</script>";
            //$this -> load -> view('admin/admin-profile',$data);
            //$this -> admin_index();
            //redirect('admin/admin_setting');
        }
    }

    public function delete_team()
    {
        $id = $this -> input -> get('team_id');
        $row = $this -> team_model -> delete_team($id);
        if($row > 0){
            redirect('admin/team_mgr');
        }
    }

   
    /**
    *   @admin_mgr
    *   @admin招聘列表页面
    *   @isliuwei
    *   @16/08/23
    */
    public function add_job()
    {
        $this -> load -> view('admin/job-add');
    }
    public function edit_job($job_id){
        
        $job = $this -> job_model -> get_by_id($job_id);
        $this -> load -> view('admin/job-edit', array('job' => $job));
    }

    public function save_job()
    {
        $title = $this -> input -> post('title');
        $content = $this -> input -> post('content');
        $row = $this -> job_model -> save_job($title, $content);
        if($row > 0){
            redirect('admin/job_mgr');
        }
    }
    public function update_job()
    {
        $id = $this -> input -> post('id');
        $title = $this -> input -> post('title');
        $content = $this -> input -> post('content');
        $this -> load -> model('job_model');
        $row = $this -> job_model -> update_job($id,$title,$content);
        if($row > 0){
            redirect('admin/job_mgr');
        }else{
            echo '修改问题信息失败!';
        }

    }

    public function delete_job($id)
    {
        $row = $this -> job_model -> delete_job($id);
        if($row > 0){
            redirect('admin/job_mgr');
        }
    }

    /**
    *   @admin_mgr
    *   @admin问题列表页面
    *   @isliuwei
    *   @16/08/23
    */
    public function add_question()
    {
        $this -> load -> view('admin/question-add');
    }

    public function edit_question($FAQ_id)
    {
        $question = $this -> faq_model -> get_by_id($FAQ_id);
        $this -> load -> view('admin/question-edit', array('faq' => $question));
    }

    public function save_question()
    {
        $FAQ_title = $this -> input -> post('FAQ_title');
        $FAQ_content = $this -> input -> post('FAQ_content');
        $row = $this -> faq_model -> save_question($FAQ_title, $FAQ_content);
        // echo $row;
        // die();

        if($row > 0){
            redirect('admin/question_mgr');
        }
    }

    public function update_question()
    {
        $FAQ_id = $this -> input -> post('FAQ_id');
        $FAQ_title = $this -> input -> post('FAQ_title');
        $FAQ_content = $this -> input -> post('FAQ_content');
        $row = $this -> faq_model -> update_question($FAQ_id, $FAQ_title, $FAQ_content);
        if($row > 0){
            redirect('admin/question_mgr');
        }else{
            echo '修改问题信息失败!';
        }
    }

    public function delete_question($FAQ_id)
    {
        $row = $this -> faq_model -> delete_question($FAQ_id);
        if($row > 0){
            redirect('admin/question_mgr');
        }
    }
    /**
    *   @admin_mgr
    *   @admin联系列表页面
    *   @isliuwei
    *   @16/08/23
    */
   
    public function update_contact()
    {
        $id = $this -> input -> post('id');
        $tel = $this -> input -> post('tel');
        $mail = $this -> input -> post('mail');
        $website = $this -> input -> post('website');
        $phone = $this -> input -> post('phone');
        $wechat = $this -> input -> post('wechat');
        $addr = $this -> input -> post('addr');
        $row = $this -> contact_model -> update_contact($id, $tel, $mail, $website, $phone, $wechat, $addr);
        // echo $row;
        // die();

        if($row > 0){
            redirect('admin/contact_mgr');
        }else{
            echo '未修改或修改失败！';
        }   
    }
    // public function update_contact()
    // {
    //     $tel = $this -> input -> post('tel');
    //     $mail = $this -> input -> post('mail');
    //     $website = $this -> input -> post('website');
    //     $phone = $this -> input -> post('phone');
    //     $wechat = $this -> input -> post('wechat');
    //     $addr = $this -> input -> post('addr');
    //     $row = $this -> contact_model -> update_contact($tel, $mail, $website, $phone, $wechat, $addr);
    //     if($row > 0){
    //         redirect('admin/contact_mgr');
    //     }else{
    //         echo '未修改或修改失败！';
    //     }   
    // }
    
        /**
    *   @admin_mgr
    *   @admin活动列表页面
    *   @isliuwei
    *   @16/08/23
    */
   
    // public function edit_news($news_id)
    // {
    //     $this -> load -> model('activity_model');
    //     $news = $this -> activity_model -> get_by_id($news_id);
    //     $this -> load -> view('admin/news-edit', array('news' => $news));
    // }

    // public function update_news()
    // {
    //     $this -> load -> model('activity_model');
    //     $activity_id = $this -> input -> post('activity_id');
    //     $activity_title = $this -> input -> post('activity_title');
    //     $activity_desc = $this -> input -> post('activity_desc');
    //     $activity_content = $this -> input -> post('activity_content');
    //     $row = $this -> activity_model -> update_news($activity_id, $activity_title, $activity_desc, $activity_content);
    //     if($row >0){
    //         redirect('admin/news_mgr');
    //     }else{
    //         echo '未修改或修改失败！';
    //     }
    // }


    public function news_mgr()
    {
        
        
        $news_count = $this -> activity_model -> get_news_count();
        $offset = $this -> uri -> segment(3)==NULL?0 : $this -> uri -> segment(3);

        //分页
        $this->load->library('pagination');
        $config['base_url'] = 'admin/news_mgr';
        $config['total_rows'] = $news_count;
        $config['per_page'] = 5; 

        $config['last_link'] = FALSE;
        $config['prev_link'] = '«';//上一页
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '»';//下一页
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['num_tag_open'] = '<li>';//每个数字页
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="am-active"><a href="'.$config['base_url'].'">';//当前页
        $config['cur_tag_close'] = '</a></li>';


        $this->pagination->initialize($config); 

        $result = $this -> activity_model -> get_news_by_page($config['per_page'],$offset);

        if($result)
        {
            $data = array(
              'activityInfo' => $result
            );
            $this -> load -> view('admin/news-mgr',$data);
        }



    }

    public function add_news()
    {
        $this -> load -> view('admin/add-news');
    }

    public function save_news()
    {
        $title = $this -> input -> post('news_title');
        $content = $this -> input -> post('news_content');
        
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '3072';
        $config['file_name'] = date("YmdHis") . '_' . rand(10000, 99999);
        $this -> load -> library('upload', $config);
        $this -> upload -> do_upload('news_photo');
        $upload_data = $this -> upload -> data();
        $photo_url = 'uploads/'.$upload_data['file_name'];

        $row = $this -> activity_model -> save_news_by_all($title,$content,$photo_url);
        if( $row > 0)
        {
            redirect('admin/news_mgr');
        }else{
            redirect('admin/save_news');
        }




    }

    public function delete_news()
    {
        $id = $this -> uri -> segment(3);
        $row = $this -> activity_model -> delete_by_id($id);
        if($row > 0)
        {
            redirect('admin/news_mgr');
        }
    }

    public function news_setting()
    {
        $id = $this -> input -> get('news_id');
        $row = $this -> activity_model -> get_by_id($id);

        if($row)
        {
            $data = array(
                'news' => $row
            );

            $this -> load -> view('admin/news-update',$data);
        }
    }


    public function update_news()
    {
        $id = $this -> input -> post('news_id');
        $title = $this -> input -> post('news_title');
        $content = $this -> input -> post('news_content');
        $photo_old_url = $this -> input -> post('photo_old_url');
        
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '3072';
        $config['file_name'] = date("YmdHis") . '_' . rand(10000, 99999);
        $this -> load -> library('upload', $config);
        $this -> upload -> do_upload('news_photo');
        $upload_data = $this -> upload -> data();
        $photo_url = 'uploads/'.$upload_data['file_name'];



        if ( $upload_data['file_size'] > 0 ) {
            //数据库中存photo的路径
            $photo_url = 'uploads/'.$upload_data['file_name'];
        }else{
            //如果不上传图片,则使用默认图片
            $photo_url = $photo_old_url;
        }

        $row = $this -> activity_model -> update_news_by_all($id,$title,$content,$photo_url);
        if( $row > 0)
        {
            redirect('admin/news_mgr');
        }else{
            echo "<script>location.href='news_setting?news_id='+$id;</script>";
        }

    }


    // public function news_mgr()
    // {
    //     $this -> load -> model('activity_model');
    //     $result = $this -> activity_model -> get_all();

    //     if($result)
    //     {
    //         $data = array(
    //           'activityInfo' => $result
    //         );
    //         $this -> load -> view('admin/news-mgr',$data);
    //     }

    // }







    

	

 



    















	



}