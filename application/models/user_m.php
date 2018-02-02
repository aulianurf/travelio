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
	public function getuser($where=" "){
		$data =$this->db->query('select * from user ' .$where);
		return $data;
	}
	public function Hapus($table,$where){
		return $this->db->delete($table,$where);
	}
	public function update_data($where,$data,$table){
		$this->db->where($where);
		$query = $this->db->update($table,$data);
		return $query;
	}
}
