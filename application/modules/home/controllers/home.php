<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller {

	public function __construct()
	{
		 parent::__construct();		 
		 $this->load->model('standard_model');
	}

	public function index_get()
	{
		$this->load->view('home_view');
	}
	public function save_userinput_get() {
      $data = array(
				'name' => $this->input->get('fullname'),
				'address'=>$this->input->get('address'),
				'email'=>$this->input->get('email'),
				'contact'=>$this->input->get('contact')
				);
  	 		$insert_data['table'] = 'demo_user_hmvc';
		                $this->standard_model->set_query_data($insert_data);
		                $iid = $this->standard_model->insert(array('full_name' => $data['name'],
		                    'address' 		=> $data['address'],
		                    'email' 		=>$data['email'],
		                    'contact' 		=>$data['contact'],
		        ));
		        if($iid) {
		    		$reponse = array('status' => true, 'message' => "Added Succeessfully.");
		        } else {
		        	$reponse = array('status' => false, 'message' => "Something went wrong");
		        }
			$this->response($reponse);		                
	}
	public function select_get() {
		$data['table'] = 'demo_user_hmvc';
		$data['field'] = '*';
		$this->load->standard_model->set_query_data($data);
		$result['user_details'] = $this->standard_model->select();
		$this->response($result);
		// echo "<pre>";
		// print_r($result);
		// return $result;
		// $this->load->view('home_view',$result);

	}	



}
