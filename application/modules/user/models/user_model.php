<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{

	var $table = 'demo_user_hmvc';
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function get_all_user() {
		$this->db->from('demo_user_hmvc');
		$data = $this->db->get();
		return $query->result();
		
	}
}	
