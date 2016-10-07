<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class artileController extends CI_Controller {
	private $nav;
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
 		$this->load->model('NavModel');
 		$this->load->model('articleModel');
 		$this->nav=$this->NavModel->get_nav();
	}
	public function index()  //显示主页
	{	
 		$article=$this->articleModel->get_article();
 		$data=array('nav'=>$this->nav,'articles'=>$article,'catalog_id'=>0);
		$this->load->view('article',$data);
	}
	public function view($id){   //查看一条数据
       $articel_view=$this->articleModel->get_one($id);
       $data=array(
       	'nav'=>$this->nav,
       	'view'=>$articel_view,
       	'catalog_id'=>$articel_view->catalog_id );
		$this->load->view('view',$data);
	}
	public function navlist($catalog){  //获取导航所属的内容
		$php=$this->articleModel->get_php($catalog);
		$data=array('nav'=>$this->nav,'articles'=>$php,'catalog_id'=>$catalog);
		$this->load->view('article',$data);

	}

}