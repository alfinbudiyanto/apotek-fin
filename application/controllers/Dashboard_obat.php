<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_obat extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('dashboard_obat_model');
	}

	public function index()
	{
        $data['title'] = 'Dashboard Obat';
		$data['data_obat'] = $this->dashboard_obat_model->get_data_obat('tabel_obat')->result();
        
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('dashboard_obat', $data);
		$this->load->view('template/footer');
	}
}
