<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct () {
		parent::__construct();
		$this->load->model('user_m');
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('home');
	}
	public function daftar()
	{
		$data['user'] = $this->user_m->tampil_user()->result();
		$this->load->view('daftar',$data);
	}
	public function hapususer($kode = 1){
		$result = $this->user_m->Hapus('user', array('id' => $kode));
		header('location:'.base_url().'Welcome/daftar');
	}
	public function edituser($kode = 0){
		$data_user = $this->user_m->getuser("where id ='$kode'")->result_array();
		$data = array(
			'username' => $data_user[0]['username'],
			'password' => $data_user[0]['password'],
			'fullname' => $data_user[0]['fullname'],
			'level' => $data_user[0]['level'],
			);
		$this->load->view('edituser', $data);
	}
	public function saveedituser()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$fullname = $this->input->post('fullname');
		$email = $this->input->post('email');
		$id = $this->input->post('id');
		
		$data = array(
			'username' => $username,
			'password' => $password,
			'fullname' => $fullname,
			'level' => $level,
		);
		$where = array(
			'id' => $id
		);
		$simpan = $this->user_m ->update_data($where,$data,'user');
		if ($simpan==1){
			$this->session->set_flashdata('messages', '<div class="alert alert-success">Data Telah Ter<strong>EDIT</strong></div>');
		}else{
			$this->session->set_flashdata('messages', '<div class="alert alert-danger">Maaf Anda <strong>GAGAL</strong> Mengedit</div>');
		}
		redirect(base_url().'welcome/daftar');
	}
}
