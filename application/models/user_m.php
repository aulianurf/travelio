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

	function tampil_user(){
		return $this->db->get('user');
	}	
}
