<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Article extends CI_Controller {
  
  public function __construct(){
    parent::__construct();
    
    $this->load->model('ArticleModel'); // Load ArticleModel ke controller ini
  }
  
  public function index(){
    $data['articles'] = $this->ArticleModel->view();
    $this->load->view('article/index', $data);
  }
  
  public function add(){
    if($this->input->post('submit')){
      if($this->ArticleModel->validation()){ // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->ArticleModel->save(); // Panggil fungsi save() yang ada di ArticleModel.php
        redirect('article');
      }
    }
    
    $this->load->view('article/add');
  }
  
  public function edit($id){
    if($this->input->post('submit')){
      if($this->ArticleModel->validation()){ // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->ArticleModel->edit($id); // Panggil fungsi edit() yang ada di ArticleModel.php
        redirect('article');
      }
    }
    
    $data['article'] = $this->ArticleModel->view_by_id($id);
    $this->load->view('article/edit', $data);
  }
  
  public function hapus($id){
    $this->ArticleModel->delete($id); // Panggil fungsi delete() yang ada di ArticleModel.php
    redirect('article');
  }
}