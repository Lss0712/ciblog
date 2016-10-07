<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class managerController extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('admin/mangerindexModel');
	}

	public function getAllAdmin()
	{
		
		
		$mangers=$this->mangerindexModel->get_article_admin();
		$data=array('mangers'=>$mangers);
		$this->load->view('admin/index',$data);
	}
	public function add(){

		$this->load->view('admin/add');
	}
	public function edit($id){
        
		$editarticle=$this->mangerindexModel->get_edit_admin($id);
		$data=array('editarticle'=>$editarticle);
		$this->load->view('admin/edit',$data);
		var_dump($_POST);
	   $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('admin/edit',$data);
        }
        else
        {
            $this->load->view('formsuccess');
        }
  
}

