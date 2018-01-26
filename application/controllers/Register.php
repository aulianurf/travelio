<?php
defined('BASEPATH') or exit('no direct script access');
	/**
	* 
	*/
	class Register extends CI_Controller
	{
		
		public function __construct(){
			parent::__construct();
		}

		public function index()
		{
				# code...

			if ($this->input->post('submit')) {
					# code...
				$username = strip_tags($this->input->post('username'));
				$password = strip_tags(md5($this->input->post('password')));
				$fullname = strip_tags($this->input->post('fullname'));
				$level = strip_tags($this->input->post('level'));

				// var_dump($username, $password, $fullname, $level);

				$query = $this->db->query("INSERT INTO `user` (`username`, `password`, `fullname`, `level`) VALUES ('$username', '$password', '$fullname', '$level')");

				if ($query) {
						#code...
					echo "Success";
					redirect(base_url().'Welcome/daftar');
				}else{
					echo "Failed";
				}
			}
		 function signin(){
		$username =$this->input->post('username');
		$password =$this->input->post('password');
		$where = array('username' => $username, 
					    'password' => md5($password)
					);

		$cek_user = $this->model->getUserByUsername($where,'user');

		if($cek_user==true){
			$dataarray=array(
				"name"=>$username,
				"status"=>"login"
			);
			$this->session->set_userdata($dataarray);
			redirect(base_url().'Travelio/home');
		}else
		{ 
			echo '<script type="text/javascript">';
        	echo 'alert("Username Atau Password Salah!")';
        	echo '</script>';
		}
	}
			$this->load->view('vRegisterform');
		}

		
	}
	?>