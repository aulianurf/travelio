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
				}else{
					echo "Failed";
				}
			}

			$this->load->view('vRegisterform');
		}

		
	}
	?>