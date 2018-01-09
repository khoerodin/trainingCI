<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CategoryModel extends CI_Model {
  // Fungsi untuk menampilkan semua data
  public function view(){
    return $this->db->get('categories')->result();
  }
  
  // Fungsi untuk menampilkan data berdasarkan ID
  public function view_by_id($id){
    $this->db->where('id', $id);
    return $this->db->get('categories')->row();
  }
  
  // Fungsi untuk validasi form
  public function validation(){
    $this->load->library('form_validation'); // Load library form_validation untuk proses validasinya
    
    $this->form_validation->set_rules('input_title', 'Title', 'required|max_length[45]');
      
    if($this->form_validation->run()) // Jika validasi benar
      return TRUE; // Maka kembalikan hasilnya dengan TRUE
    else // Jika ada data yang tidak sesuai validasi
      return FALSE; // Maka kembalikan hasilnya dengan FALSE
  }
  
  // Fungsi untuk melakukan simpan data ke tabel
  public function save(){
    $data = array(
      "title" => $this->input->post('input_title')
    );
    
    $this->db->insert('categories', $data); // Untuk mengeksekusi perintah insert data
  }
  
  // Fungsi untuk melakukan ubah data berdasarkan ID
  public function edit($id){
    $data = array(
      "title" => $this->input->post('input_title')
    );
    
    $this->db->where('id', $id);
    $this->db->update('categories', $data); // Untuk mengeksekusi perintah update data
  }
  
  // Fungsi untuk melakukan menghapus data berdasarkan ID
  public function delete($id){
    $this->db->where('id', $id);
    $this->db->delete('categories'); // Untuk mengeksekusi perintah delete data
  }
}