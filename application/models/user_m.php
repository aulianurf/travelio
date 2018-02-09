<?php
	Class user_m extends CI_Model{
		function cek_login($table, $where){
			return $this->db->get_where($table, $where);
		}

		public function getmembers()
	{
		
		$sql = $this->db->query("SELECT * FROM user");
		return $sql;

	}

	public function tampil_user(){
		return $this->db->get('user');
	}
<<<<<<< HEAD
=======
	public function tampil_rute(){
		return $this->db->get('rute');
	}
	public function Simpan($table, $data){
		return $this->db->insert($table, $data);
	}
>>>>>>> sprint4
	public function getuser($where=" "){
		$data =$this->db->query('select * from user ' .$where);
		return $data;
	}
<<<<<<< HEAD
	public function Hapus($table,$where){
		return $this->db->delete($table,$where);
	}
=======
	public function getrute($where=" "){
		$data =$this->db->query('select * from rute ' .$where);
		return $data;
	}
	public function Hapus($table,$where){
		return $this->db->delete($table,$where);
	}
	function GetData($data) {
        $query = $this->db->get_where('user', $data);
        return $query;
    }
>>>>>>> sprint4
	public function update_data($where,$data,$table){
		$this->db->where($where);
		$query = $this->db->update($table,$data);
		return $query;
	}
}
