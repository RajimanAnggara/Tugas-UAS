<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lokasi extends CI_Controller {
    public function index()
    {
        $data = array(
            'judul' => "Lokasi| Web GIS Kabupaten Lombok Tengah",
            'page' => "dashboard/lokasi/index",
            'data_lokasi' => $this->Lokasi_model->getAll()
        );
        $this->load->view('dashboard/tempelate/tempelate', $data);
    }

    function add(){
        $lokasi = $this->Lokasi_model;
        $validation = $this->form_validation;
        $validation->set_rules($lokasi->rules());

        if($validation->run()){
            $lokasi->saveData();
            $this->session->set_flashdata('massage', ' Data Berhasil Disimpan');
            redirect('lokasi');
        }
        $data = array(
            'judul' => "Add Data Lokasi | Web GIS Kabupaten Lombok Tengah",
            'page' => "dashboard/lokasi/form",
        );
        $this->load->view('dashboard/tempelate/tempelate', $data);
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('lokasi');
       
        $lokasis = $this->Lokasi_model;
        $validation = $this->form_validation;
        $validation->set_rules($lokasis->rules());

        if ($validation->run()) {
            $lokasis->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["lokasi"] = $lokasis->getById($id);
        $data["judul"] = "Edit Data Lokasi | Web GIS Kabupaten Lombok Tengah";
        if (!$data["lokasi"]) show_404();
        $data["page"] = "dashboard/lokasi/edit";
        $this->load->view('dashboard/tempelate/tempelate', $data);
    }
    
    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->Lokasi_model->deleteData($id)) {
            redirect(site_url('lokasi'));
        }
    }
}