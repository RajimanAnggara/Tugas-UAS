<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function index()
	{
		$data['judul'] = "Dasboard | Web GIS Kabupaten Lombok Tengah";
		$data['page'] = "dashboard/index";
		$this->load->view('dashboard/tempelate/tempelate', $data);
	}
}
