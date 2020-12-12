<?php 
class SessionAct extends CI_Controller{

	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("Login"));
		}
	}

	function index(){
		// $data['_view'] = 'dashboard';
		// $this->load->view('layouts/main');
		redirect(base_url('Dashboard/dash'));
	}
}