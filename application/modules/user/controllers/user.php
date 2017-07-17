<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends MY_Controller {

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
	function user_data_get() {
		echo "string";
		$monthdata['table'] = 'demo_user_hmvc' ;
		$monthdata['field'] = "full_name";

		$this->standard_model->set_query_data($monthdata);
		$vv = $this->standard_model->select();
		print_r($vv);
	}

}
