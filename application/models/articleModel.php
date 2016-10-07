<?php
	class articleModel extends CI_Model{
        private function get_all(){
        	$query=$this->db->get('article');
        	return $query->result();
        }
         private function get_all_one($id){
        	$query=$this->db->where('id',$id)->get('article');
			return $query->row();
        }

        public function get_article(){
			return $this->get_all();
		}
		public function get_one($id){
			$this->db->set('view', 'view+1', FALSE);
			$this->db->where('id', $id);
			$this->db->update('article');
			return $this->get_all_one($id);				
		}
		
		public function get_php($catalog_id){
			$query=$this->db->where("catalog_id",$catalog_id)->get('article');
			return $query->result();
		}
		
	}
?>