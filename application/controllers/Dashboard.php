<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Dashboard_model');
  }

  public function index()
  {
    $data['page_title'] = 'Dashboard';
    $data['obat'] = $this->Dashboard_model->get_data('obat')->result();

    $this->load->view('index', $data);
  }
}
