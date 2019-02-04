<?php defined('BASEPATH') OR exit ('No direct script access allowed');

class Kategori_model extends CI_Model{
    private $_table = "kategori";

    public $idkategori;
    public $nama_kategori;
    public $icon = "default.png";
    public $keterangan;

    public function rules(){
        return[
                [
                    'field'=>'nama_kategori',
                    'label'=>'Nama Kategori',
                    'rules'=>'required'
                ]
            ];
    }

    public function getAll(){
        return $this->db->get($this->_table)->result();
    }

    public function getById($id){
        return $this->db->get_where($this->_table, ["idkategori" => $id])->row();
    }

    public function saveData(){
        $post = $this->input->post();
        $this->idkategori = uniqid();
        $this->nama_kategori = $post['nama_kategori'];
        $this->icon = $this->_uploadImage();
        $this->keterangan = $post['keterangan'];
        $this->db->insert($this->_table, $this);
    }

    public function updateData(){
        $post = $this->input->post();
        $this->idkategori = $post['id'];
        $this->nama_kategori = $post['nama_kategori'];
        //$this->icon = $post['icon'];
        if(!empty($_FILES["icon"]["nama_kategori"])){
            $this->icon = $this->_uploadImage();
        }else{
            $this->icon = $post["old_icon"];
        }
        $this->keterangan = $post['keterangan'];
        $this->db->update($this->_table, $this, array("idkategori" => $post['id']));
    }

    public function deleteData($id){
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("idkategori" => $id));
    }

    private function _uploadImage()
    {
    $config['upload_path']          = './assets/upload/icon/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['file_name']            = $this->idkategori;
    $config['overwrite']			= true;
    $config['max_size']             = 1024; // 1MB
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('icon')) {
        return $this->upload->data("file_name");
    }
    
    return "default.png";
    }

    private function _deleteImage($id){
        $kategori = $this->getById($id);
        if($kategori->icon != "default.png"){
            $filename = explode(".", $kategori->icon)[0];
            return array_map('unlink', glob(FCPATH."assets/upload/icon/$filename.*"));
        }
    }


}