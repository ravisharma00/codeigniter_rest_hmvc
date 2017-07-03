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

}
