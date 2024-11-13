<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_obat extends CI_Controller {

	public function index()
	{
        $data['title'] = 'Dashboard Obat';
        
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('dashboard_obat');
		$this->load->view('template/footer');
	}
}
