<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('dashboard_model');
  }
	
	public function index(){
    $data['title'] = 'Dashboard';
    $data['obat'] = $this->dashboard_model->get_data('obat')->result();
    
    $this->load->view('template/header', $data);
    $this->load->view('template/sidebar', $data);
    $this->load->view('dashboard', $data);
    $this->load->view('template/footer');
  }
}
