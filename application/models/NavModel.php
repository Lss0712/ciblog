<?php
class NavModel extends CI_Model{
		public function get_nav(){
			$query=$this->db->query('select * from nav');
			return $query->result_array();
		}
	}
?>