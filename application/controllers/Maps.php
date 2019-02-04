<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Maps extends CI_Controller {
	public function index()
	{
		$data['judul'] = "Peta Kabupaten Lombok Tengah";
		$this->load->view('index', $data);
	}
}
