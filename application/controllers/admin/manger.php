
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class manger extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->model('admin/mangerindexModel');
         $this->output->enable_profiler(TRUE);
		if(!$this->session->userdata('is_login')){
			redirect('admin/manger/login');
		}
	}
	public function getAlllist($page=1){
        
        $pagesize=10;
		$mangers=$this->mangerindexModel->get_by_page($page,$pagesize);
		$data=array('mangers'=>$mangers);
        $tate=$this->mangerindexModel->count_all();
        
        $this->load->library('pagination');
        $config['base_url'] = 'http://localhost/CI/index.php/admin/manger/getAlllist';
        $config['total_rows'] = $tate;
        $config['per_page'] = $pagesize;
        $config['use_page_numbers'] = TRUE;
        $this->pagination->initialize($config);
		$this->load->view('admin/index',$data);
	
		
	}
	public function add(){
	 $this->load->library('form_validation');
     $this->form_validation->set_rules('title', '标题', 'required');
     $this->form_validation->set_rules('catalog_id', '分类', 'required');
     $this->form_validation->set_rules('img', '图片', 'required');
     $this->form_validation->set_rules('desc', '简介', 'required');
     $this->form_validation->set_rules('content', '内容', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->model('NavModel');
            $nav=$this->NavModel->get_nav();
          $editarticle=new stdClass();
          $editarticle->title='';
          $editarticle->catalog_id='';
          $editarticle->img='';
          $editarticle->desc='';
          $editarticle->content='';

            $data=array(
                'data'=>$nav,
                 'editarticle'=>$editarticle,
                'title'=>"添加"
                );
            $this->load->view('admin/form',$data);
       
        }else{

              $array =$this->input->post();
              $array['create_time']=time();
              $this->mangerindexModel->get_add_admin($array);
              redirect('admin/manger/getAlllist');

        }
	}
	
	public function edit($id){
        $editarticle=$this->mangerindexModel->get_all_one($id);
		$data=array('editarticle'=>$editarticle);
       if($this->input->post('ac')=="edit"){
         $array = array(
          //  'catalog_id' => $this->input->post('catalog_id'),
            'title' =>$this->input->post('title'),
            'desc' =>$this->input->post('desc'),
            'content' => $this->input->post('content'),
            'create_time' => time(),
            'img' => $this->input->post('img')
           // 'view' => $this->input->post('view'),
           // 'recommend' => $this->input->post('recommend')
            );     
         $this->mangerindexModel->get_edit_admin($id,$array);
      
         $this->getAlllist();
        }else{
    	$editarticle=$this->mangerindexModel->get_all_one($id);
         $this->load->model('NavModel');
        $nav=$this->NavModel->get_nav();
		$data=array(
            'editarticle'=>$editarticle,
             'data'=>$nav,
             'title'=>"编辑"
            );
		 $this->load->view('admin/form',$data);
       }    
   }
   public function del($id){
          $this->mangerindexModel->dele($id);
          redirect('admin/manger/getAlllist');
   }  
   public function recommend($id){
        $this->mangerindexModel->rec($id);
      // $this->getAlllist($page=1);
       redirect('admin/manger/getAlllist');
   }  
    public function removeRecommend($id){
        $this->mangerindexModel->removerec($id);
        redirect('admin/manger/getAlllist');
   }  
}
