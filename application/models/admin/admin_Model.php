<?php
class admin_Model extends CI_Model{
		   public function get_admin($name,$pwd){
           $array=array(
           	'username'=>$name,
           	'password'=>$pwd
           	);
           
           $query=$this->db->where($array)->get("admin");
          return $query->row();


        }
	}
