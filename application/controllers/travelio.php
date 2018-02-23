<?php
/**
* 
*/
class Travelio extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('user_m');
		$this->load->library('session');
	}

	public function cari_rute()
	{
		$rute_from = $this->input->get('rute_from');
		$rute_to = $this->input->get('rute_to');

		$data['rute'] = $this->user_m->tampilPencarian($rute_from, $rute_to);
		$this->load->view('cari', $data);
	}
}