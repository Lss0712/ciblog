<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Util extends CI_Controller {
	public function do_upload(){
       
	    $config['upload_path']      = './uploads/';
        $config['allowed_types']    = 'gif|jpg|png';
        $config['max_size']     = 0;
        $config['max_width']        = 1024;
        $config['max_height']       = 768;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('file'))
        {
           // $error = array('error' => $this->upload->display_errors());
            //$this->load->view('upload_form', $error);
            echo "错啦";
        }
        else
        {
           // $data = $this->upload->data();
            $data=$this->upload->data('file_name');
           // var_dump($data);
            echo 'uploads/'.$data;
        }
	}
}