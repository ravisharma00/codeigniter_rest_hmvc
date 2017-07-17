<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Api extends MY_Controller {

	public function __construct()
	{
		 parent::__construct();		 
		 $this->load->model('standard_model');
	}


	public function index_get()
	{
		$arr = array("message" => "hello ravi");
		$this->response($arr);
	}
	public function data_get($p=null) {
		if ($p==null) {

			$arr = array("message" => "hello ravi");	
		} else {
			$arr = array("message" => $p);
		}
		$this->response($arr);
	}
	function monthWiseStoryIds_get() {

		$monthdata['table'] = 'tbl_story' ;
		$monthdata['field'] = "MONTH( date_of_creation ) as month";
		$monthdata['group_by'] = array("month");

		$this->standard_model->set_query_data($monthdata);
		$vv = $this->standard_model->select();

		
		$ovralldata['table'] = 'tbl_story' ;
		$ovralldata['field'] = "MONTH( date_of_creation ) as month, story_id";
		$ovralldata['condition'] = array(	    	  
	    	  "story_status != " => "deleted",
	    	  "YEAR(date_of_creation)" => date("Y")
	    );
	    $ovralldata['where_in'] = array("month" => $vv);

		$this->standard_model->set_query_data($ovralldata);
		$data = $this->standard_model->select();

		$this->response($data);
	}
	public function stories_get() {
			$language = 'English';
			$data_query['table'] = STORY_TABLE;
			$data_query['field'] = 'tbl_story.story_id,story_title,story_slug,cover_image,is_anonymous,user.user_profile_photo,date_of_creation,user.user_full_name,user.user_id';
			$data_query['join'] = array(
				USER_TABLE.' as user' => 'tbl_story.user_id=user.user_id', 
				CATEGORY_TABLE.' as category' => 'tbl_story.cat_id=category.cat_id', 
			);
			$data_query['condition'] = array(
				 	'tbl_story.story_status' => 'active',
				 	'category.cat_status' => 'active',
				 	'tbl_story.language' => $language
				);
			$data_query['order_by'] = array('date_of_creation' => 'desc' );	
			$this->standard_model->set_query_data($data_query);
			$result = $this->standard_model->select();
			$this->response($result);

	}
	public function stories_a_get() {
			$language = 'English';
			$data_query['table'] = STORY_TABLE;
			$data_query['field'] = 'story_id,story_title,story_slug,cover_image';
			$data_query['limit'] = 10;

			$data_query['order_by'] = array('date_of_creation' => 'desc' );	
			$this->standard_model->set_query_data($data_query);
			$result['current'] = $this->standard_model->select();
			// echo "<pre>";
			// print_r($result);
			$this->load->view('api_home',$result);
			// $this->response($result);
			// foreach ($result as $key => $value) {
			// 	echo "<pre>";
			// 	print_r($value);
			// }

	}
	public function load_view_get(){
		$this->load->view('api_home_view');
	}


}
