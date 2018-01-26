<?php 
defined ('BASEPATH') or exit ('no direct script access');

/**
* 
*/
class Login extends CI_Controller
{

	public function index()
	{
		# code...
		$this->load->view('home');
	}
}
?>