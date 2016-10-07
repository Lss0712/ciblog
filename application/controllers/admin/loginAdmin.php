<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class loginAdmin extends CI_Controller {
       public function __construct(){
        parent::__construct();
        $this->load->helper(array('form','url'));
        $this->load->model('admin/mangerindexModel');
    }
     
        public function login(){	
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', '用户名', 'required|callback__username_check');
		$this->form_validation->set_rules('password', '密码', 'required');
        if ($this->form_validation->run() == FALSE)
        {
           $this->load->view('admin/login');
        }
        else
        {

            $this->session->set_userdata('is_login','qzk');
           // echo "登录成功";
            redirect('admin/manger/getAlllist');
        }	

		
	}
	  public function _username_check() {

        $username=$this->input->post('username');
        $password=$this->input->post('password');
        $this->load->model('admin/admin_Model');
        $admin= $this->admin_Model->get_admin($username,$password);
        
        if ($admin) {
             return TRUE;

        }else{
            $this->form_validation->set_message('_username_check', '用户名或密码错误');
            return FALSE;
        }
    }


}
?>