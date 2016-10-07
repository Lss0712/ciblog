<?php
class mangerindexModel extends CI_Model{
	private function get_all(){
        	$query=$this->db->get('article');
        	return $query->result();
        }
    public function count_all(){
        return   $this->db->count_all_results('article');
        }
    public function get_by_page($page,$pagesize){
          
            $startrow=($page-1)*$pagesize;
            $query=$this->db->limit($pagesize,$startrow)->order_by('id','desc')->get('article');
            return $query->result();
        }
    public function get_all_one($id){
        	$query=$this->db->where('id',$id)->get('article');
			return $query->row();
        }
    public function get_article_admin(){
			return $this->get_all();
		}
    public function get_add_admin($array){
         $this->db->set($array);
         $this->db->insert('article');
    }
     public function get_edit_admin($id,$array){
        
        $this->db->set($array);
        $this->db->where('id', $id);
        $this->db->update('article');
  }
   public function dele($id){
       return $this->db->where('id',$id)->delete('article');
   }
   public function rec($id){
             $data['recommend']=1;
             $this->db->where('id', $id);
             $this->db->update('article', $data);
        }
    public function removerec($id){
            $data['recommend']=0;
             $this->db->where('id', $id);
             $this->db->update('article', $data);
        }
}