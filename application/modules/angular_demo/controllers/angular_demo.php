<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Angular_demo extends MY_Controller {

	public function __construct()
	{
		 parent::__construct();		 
		 $this->load->model('standard_model');
	}

	public function index_get()
	{
		$this->load->view('angular_view');
	}

}
