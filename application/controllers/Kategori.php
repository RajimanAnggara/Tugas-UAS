<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {
	public function index()
	{
		$data = array(
			'judul' => "Kategori | Web GIS Kabupaten Lombok Tengah",
			'page' => "dashboard/kategori/index",
			'data_kategori' => $this->Kategori_model->getAll()
		);
		$this->load->view('dashboard/tempelate/tempelate', $data);
	}

	function add(){
		$kategori = $this->Kategori_model;
		$validation = $this->form_validation;
		$validation->set_rules($kategori->rules());

		if($validation->run()){
			$kategori->saveData();
			$this->session->set_flashdata('massage', ' Data Berhasil Disimpan');
			redirect('kategori');
		}
		$data = array(
			'judul' => "Add Data Kategori | Web GIS Kabupaten Lombok Tengah",
			'page' => "dashboard/kategori/form",
		);
		$this->load->view('dashboard/tempelate/tempelate', $data);
	}

	public function edit($id = null)
    {
        if (!isset($id)) redirect('kategori');
       
        $kategoris = $this->Kategori_model;
        $validation = $this->form_validation;
        $validation->set_rules($kategoris->rules());

        if ($validation->run()) {
            $kategoris->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

		$data["kategori"] = $kategoris->getById($id);
		$data["judul"] = "Edit Data Kategori | Web GIS Kabupaten Lombok Tengah";
        if (!$data["kategori"]) show_404();
        $data["page"] = "dashboard/kategori/edit";
		$this->load->view('dashboard/tempelate/tempelate', $data);
	}
	
	public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->Kategori_model->deleteData($id)) {
            redirect(site_url('kategori'));
        }
    }
}