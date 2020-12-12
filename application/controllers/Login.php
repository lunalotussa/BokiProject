<?php
class Login extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
	} 

	function index()
	{
		$this->load->view('login');
	}

	function checklogin()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => $password
		);
		$cek = $this->User_model->cek_login("user",$where)->num_rows();
		//$id_user = $this->Model_user->hakAkses("");
		// $dato = $this->Model_user->hakAkses();
		// $id_user = $dato['id_user'];

		if($cek > 0){

			$data_session = array(
				'nama' => $username,
				'id_user'=>$id_user,
				'status' => "login"

			);
			$this->session->set_userdata($data_session);
			redirect('SessionAct');
			// redirect(base_url("controller_session"));

		}else{
			//echo "Username dan password salah !";
			redirect(base_url('Login'));
		}

		
	}
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('Login'));
	}
}