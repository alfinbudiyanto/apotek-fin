<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Obat extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('obat_model');
  }

  public function index()
  {
    $data['title'] = 'Obat';
    $data['obat'] = $this->obat_model->get_data('obat')->result();

    $this->load->view('template/header', $data);
    $this->load->view('template/sidebar', $data);
    $this->load->view('obat', $data);
    $this->load->view('template/footer');
  }
}