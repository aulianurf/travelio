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
		$this->cek_sessiontrue();
		$this->load->view('home');
	}
	public function register(){
		$this->cek_sessiontrue();
		$this->load->view('register');
	}
	public function signin(){
		$data = array(
			'username' => $this->input->post('username', TRUE),
			'password' => md5($this->input->post('password', TRUE)),
			);

		$hasil = $this->user_m->GetData($data);
		if ($hasil->num_rows() == 1) {
			foreach ($hasil->result() as $sess) {
				$sess_data['id'] = $sess->id;
				$sess_data['username'] = $sess->username;
				$sess_data['fullname'] = $sess->fullname;
				$sess_data['email'] = $sess->email;
				$sess_data['status'] = 'login';
			}
			$this->session->set_userdata($sess_data);
				redirect(base_url().'beranda');
		}
		else {
			$info='<div style="color:red">PERIKSA KEMBALI NIK DAN PASSWORD ANDA!</div>';
			$this->session->set_userdata('info',$info);

			redirect(base_url().'welcome');

		}
	}
	public function daftar()
	{
		$this->cek_sessiontrue();
		$data['user'] = $this->user_m->tampil_user()->result();
		$this->load->view('daftar',$data);
	}

	public function login()
	{
		$this->cek_sessiontrue();
		$this->load->view('login');
	}
	function savedata(){
		$data = array(
			'username' => $this->input->post('username'),
			'password' =>md5($this->input->post('password')),
			'fullname' => $this->input->post('fullname'),
			'level' => $this->input->post('level'),
			);
		$result = $this->user_m->Simpan('user', $data);
		if($result == 1){
			$this->session->set_flashdata("sukses", "<div class='alert alert-success'><strong>Simpan data BERHASIL dilakukan</strong></div>");
			header('location:'.base_url());
		}else{
			$this->session->set_flashdata("alert", "<div class='alert alert-danger'><strong>Simpan data GAGAL di lakukan</strong></div>");
			header('location:'.base_url());
		}
	}
	public function hapususer($kode = 1){
		$result = $this->user_m->Hapus('user', array('id' => $kode));
		header('location:'.base_url().'Welcome/daftar');
	}
	public function edituser($kode = 0){
		$data_user = $this->user_m->getuser("where id = '$kode'")->result_array();
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
	public function hapusrute($kode = 1){
		$result = $this->user_m->Hapus('rute', array('id' => $kode));
		header('location:'.base_url().'Welcome/rute');
	}
	public function editrute($kode = 0){
		$rute = $this->user_m->getrute("where id = '$kode'")->result_array();
		$data = array(
			'date' => $rute[0]['date'],
			'depart_at' => $rute[0]['depart_at'],
			'arrival_at' => $rute[0]['arrival_at'],
			'rute_from' => $rute[0]['rute_from'],
			'rute_to' => $rute[0]['rute_to'],
			'transit_place' => $rute[0]['transit_place'],
			'price' => $rute[0]['price'],
			'transportation_id' => $rute[0]['transportation_id'],
			);
		$this->load->view('editrute', $data);
	}
	public function saveeditrute()
	{
		$datet = $this->input->post('date');
		$depart_at = $this->input->post('depart_at');
		$arrival_at = $this->input->post('arrival_at');
		$rute_from = $this->input->post('rute_from');
		$rute_to = $this->input->post('rute_to');
		$transit_place = $this->input->post('transit_place');
		$price = $this->input->post('price');
		$transportation_id = $this->input->post('transportation_id');
		$data = array(
			'date' => $date,
			'depart_at' => $depart_at,
			'arrival_at' => $arrival_at,
			'rute_from' => $rute_from,
			'rute_to' => $rute_to,
			'transit_place' => $transit_place, 
			'price' => $price,
			'transportation_id' => $transportation_id,
		);
		$where = array(
			'id' => $id
		);
		$simpan = $this->user_m ->update_data($where,$data,'rute');
		if ($simpan==1){
			$this->session->set_flashdata('messages', '<div class="alert alert-success">Data Telah Ter<strong>EDIT</strong></div>');
		}else{
			$this->session->set_flashdata('messages', '<div class="alert alert-danger">Maaf Anda <strong>GAGAL</strong> Mengedit</div>');
		}
		redirect(base_url().'welcome/rute');
		}
	public function cari(){
		$this->cek_sessiontrue();
		$rute_from = $this->input->post('rute_from');
		$rute_to = $this->input->post('rute_to');
		$data = array(
			'data_rute' => $this->model->getrutetrans("where rute_from LIKE'%$rute_from' AND rute_to LIKE '%$rute_to%'")->result_array(),
			);
		$this->load->view('cari', $data);
	}
	public function pesan($kode = 0){
		$rute = $this->user_m->getrutetrans("where rute.id = '$kode' AND rute.transportation_id = transportation.id")->result_array();
		$data = array(
			'date' => $rute[0]['date'],
			'depart_at' => $rute[0]['depart_at'],
			'arrival_at' => $rute[0]['arrival_at'],
			'rute_from' => $rute[0]['rute_from'],
			'rute_to' => $rute[0]['rute_to'],
			'price' => $rute[0]['price'],
			'plane_name' => $rute[0]['plane_name'],
			'seat_qty' => $rute[0]['seat_qty'],
			'transportation_id' => $rute[0]['transportation_id'],
			);
		$this->load->view('pesan', $data);
	}
	public function saveres(){
		$id_rute = $this->input->post('id_rute');
		$name = $this->input->post('name');
		$phone =  $this->input->post('phone');
		$seat_code =  $this->input->post('seat_code');
		$reservation_code =  $this->input->post('reservation_code');
		$data = array(
			'name' => $this->input->post('name'),
			'address' =>$this->input->post('address'),
			'phone' => $this->input->post('phone'),
			'gender' => $this->input->post('gender'),
			'email' => $this->input->post('email'),
			);
		$result = $this->model->Simpan('customer', $data);
		date_default_timezone_set("Asia/Jakarta");
		$data_cus = $this->model->getcustomer("where name ='$name' AND phone ='$phone'")->result_array();
		$data2 = array(
			'reservation_code'=> $this->input->post('reservation_code'),
			'reservation_at' => date("G:i:s"),
			'reservation_date' => date('Y-m-d'),
			'seat_code' => $this->input->post('seat_code'),
			'customer_id' => $data_cus[0]['customer_id'],
			'rute_id' => $rute_id,
			'depart_at' => $this->input->post('depart_at'),
			'price' => $this->input->post('price'),
		);
		$result = $this->model->Simpan('reservation', $data2);
		$data_ress = $this->model->getreservation("where reservation_code ='$reservation_code' AND seat_code ='$seat_code'")->result_array();
		$id_reservation = $data_ress[0]['id_reservation'];
		if($result == 1){
			$this->session->set_flashdata("sukses", "<div class='alert alert-success'><strong>Simpan data BERHASIL dilakukan</strong></div>");
			header('location:'.base_url().'travelio/pesan1/'.$id_reservation);
		}else{
			$this->session->set_flashdata("alert", "<div class='alert alert-danger'><strong>Simpan data GAGAL di lakukan</strong></div>");
			header('location:'.base_url().'travelio/pesan1');
		}
	}
	function savecus(){
		$data = array(
			'name' => $this->input->post('name'),
			'address' =>md5($this->input->post('address')),
			'phone' => $this->input->post('phone'),
			'gender' => $this->input->post('gender'),
			'email' => $this->input->post('email'),
			);
		$result = $this->user_m->Simpan('user', $data);
		if($result == 1){
			$this->session->set_flashdata("sukses", "<div class='alert alert-success'><strong>Simpan data BERHASIL dilakukan</strong></div>");
			header('location:'.base_url());
		}else{
			$this->session->set_flashdata("alert", "<div class='alert alert-danger'><strong>Simpan data GAGAL di lakukan</strong></div>");
			header('location:'.base_url());
		}
	}
	public function cek_sessiontrue(){
    	$sesion = $this->session->status;
    	if(!empty($sesion)){ 
    	  	redirect(base_url().'Beranda');
    	}
    }
    public function cek_session(){
    	$sesion = $this->session->status;
    	if(empty($sesion)){ 
    	  	return 0;
    	}else{
    		return 1;
    	}
  	}
    public function cek_sessionfalse(){
    	$sesion = $this->session->status;
    	if(empty($sesion)){ 
      		redirect(base_url().'Welcome');
         }
     }
    public function logout(){
    	$this->session->sess_destroy();
    	redirect(base_url().'Welcome');
     }
}
