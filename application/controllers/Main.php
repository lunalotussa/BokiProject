<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
        if(!isset($_SESSION)){
            session_start();
        }
        //-> cek login
        if(isset($_POST["login"])){
            $username   = $this->input->post("username");
            $password   = $this->input->post("password");
            $query      = $this->db->query("SELECT * FROM `user` WHERE username = '$username' AND password='$password'");
            //start session
            if($query->num_rows() > 0){
                $tmp = $query->result_array();
                $_SESSION['id_user']    = $tmp[0]['id_user'];
                $_SESSION['nama']       = $tmp[0]['nama'];
                $_SESSION['username']   = $tmp[0]['username'];
            }
            //end session
        }

        //-> membuat perbedaan tingkat login
        if(isset($_SESSION['id_user'])){

           redirect('Dashboard');
        }

        else{
            $this->load->view('login/login');
        }

	}

    public function register()
    {
        $this->load->view('login/register');
    }

}

/* End of file Main.php */
/* Location: ./application/controllers/Main.php */
