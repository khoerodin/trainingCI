<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Category extends CI_Controller {
  
  public function __construct(){
    parent::__construct();
    
    $this->load->model('CategoryModel'); // Load CategoryModel ke controller ini
  }
  
  public function index(){
    $data['categories'] = $this->CategoryModel->view();
    $this->load->view('category/index', $data);
  }
  
  public function add(){
    if($this->input->post('submit')){
      if($this->CategoryModel->validation()){ // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->CategoryModel->save(); // Panggil fungsi save() yang ada di CategoryModel.php
        redirect('category');
      }
    }
    
    $this->load->view('category/add');
  }
  
  public function edit($id){
    if($this->input->post('submit')){
      if($this->CategoryModel->validation()){ // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->CategoryModel->edit($id); // Panggil fungsi edit() yang ada di CategoryModel.php
        redirect('category');
      }
    }
    
    $data['category'] = $this->CategoryModel->view_by_id($id);
    $this->load->view('category/edit', $data);
  }
  
  public function delete($id){
    $this->CategoryModel->delete($id); // Panggil fungsi delete() yang ada di CategoryModel.php
    redirect('category');
  }
}