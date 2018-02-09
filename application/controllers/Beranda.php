<?php 

	/**
	* 
	*/
class Beranda extends CI_Controller
{
	function index(){
		$this->cek_sessionfalse();
		$data = array(
		'data_user' => $this->user_m->getuser("order by id asc")->result_array()
		);
		$this->load->view('beranda', $data);
	}
	public function rute()
	{
		$this->cek_sessionfalse();
		$data['rute'] = $this->user_m->tampil_rute()->result();
		$this->load->view('rute/rute',$data);
	}
	public function editrute($kode = 0){
		$rute = $this->user_m->getrute("where id = '$kode'")->result_array();
		$data = array(
			'id' => $rute[0]['id'],
			'depart_at' => $rute[0]['depart_at'],
			'arrival_at' => $rute[0]['arrival_at'],
			'rute_from' => $rute[0]['rute_from'],
			'rute_to' => $rute[0]['rute_to'],
			'transit_place' => $rute[0]['transit_place'],
			'price' => $rute[0]['price'],
			'transportation_id' => $rute[0]['transportation_id'],
			);
		$this->load->view('rute/editrute', $data);
	}
	public function tambahuser(){
		$this->cek_sessionfalse();
		$this->load->view('tambahuser');
	}
	function saveuser(){
		$this->cek_sessionfalse();
		$data = array(
			'username' => $this->input->post('username'),
			'password' =>md5($this->input->post('password')),
			'fullname' => $this->input->post('fullname'),
			'level' => $this->input->post('level'),
			);
		$result = $this->user_m->Simpan('user', $data);
		if($result == 1){
			$this->session->set_flashdata("sukses", "<div class='alert alert-success'><strong>Simpan data BERHASIL dilakukan</strong></div>");
			header('location:'.base_url().'beranda');
		}else{
			$this->session->set_flashdata("alert", "<div class='alert alert-danger'><strong>Simpan data GAGAL di lakukan</strong></div>");
			header('location:'.base_url().'beranda/tambahuser');
		}
	}
	public function hapususer($kode = 1){
		$this->cek_sessionfalse();
		$result = $this->user_m->Hapus('user', array('id' => $kode));
		header('location:'.base_url().'beranda');
	}
	public function edituser($kode = 0){
		$this->cek_sessionfalse();
		$data_user = $this->user_m->getuser("where id ='$kode'")->result_array();

		$data = array(
			'id' => $data_user[0]['id'],
			'username' => $data_user[0]['username'],
			'password' => $data_user[0]['password'],
			'fullname' => $data_user[0]['fullname'],
			'level' => $data_user[0]['level'],
			);
		$this->load->view('edituser', $data);
	}
	public function saveedituser()
	{
		$this->cek_sessionfalse();
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$fullname = $this->input->post('fullname');
		$level = $this->input->post('level');
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
		$simpan = $this->user_m->update_data($where,$data,'user');
		if ($simpan==1){
			$this->session->set_flashdata('messages', '<div class="alert alert-success">Data Telah Ter<strong>EDIT</strong></div>');
		}else{
			$this->session->set_flashdata('messages', '<div class="alert alert-danger">Maaf Anda <strong>GAGAL</strong> Mengedit</div>');
		}
		redirect(base_url().'beranda');
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