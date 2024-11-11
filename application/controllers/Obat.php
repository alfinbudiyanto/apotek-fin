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
    $data['obat'] = $this->obat_model->get_data('tabel_obat')->result();

    $this->load->view('template/header', $data);
    $this->load->view('template/sidebar', $data);
    $this->load->view('obat', $data);
    $this->load->view('template/footer');
  }

  public function tambah()
  {
    $data['title'] = 'Tambah Data Obat';

    $this->load->view('template/header', $data);
    $this->load->view('template/sidebar', $data);
    $this->load->view('tambah_obat');
    $this->load->view('template/footer');
  }

  public function tambah_aksi()
  {
    $this->_rules();

    if ($this->form_validation->run() == FALSE) {
      $this->tambah();
    } else {
      $data = array(
        'nama_obat' => $this->input->post('nama_obat'),
        'harga_obat' => $this->input->post('harga_obat'),
        'stok_obat' => $this->input->post('stok_obat'),
        'expire_obat' => $this->input->post('expire_obat'),
      );

      $this->obat_model->insert_data($data, 'tabel_obat');
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data Berhasil Ditambahkan!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
      redirect('obat');
    }
  }

  public function edit($id)
  {
    $this->_rules();

    if ($this->form_validation->run() == FALSE) {
      $this->index();
    } else {
      $data = array(
        'id' => $id,
        'nama_obat' => $this->input->post('nama_obat'),
        'harga_obat' => $this->input->post('harga_obat'),
        'stok_obat' => $this->input->post('stok_obat'),
        'expire_obat' => $this->input->post('expire_obat'),
      );

      $this->obat_model->update_data($data, 'tabel_obat');
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data Berhasil Diubah!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
      redirect('obat');
    }
  }

  public function _rules()
  {
    $this->form_validation->set_rules('nama_obat', 'Nama Obat', 'required', array('required' => '%s harus diisi!!!'));
    $this->form_validation->set_rules('harga_obat', 'Harga Obat', 'required', array('required' => '%s harus diisi!!!'));
    $this->form_validation->set_rules('stok_obat', 'Stok Obat', 'required', array('required' => '%s harus diisi!!!'));
    $this->form_validation->set_rules('expire_obat', 'Expire Obat', 'required', array('required' => '%s harus diisi!!!'));
  }

  public function hapus($id)
  {
    $where = array('id' => $id);

    $this->obat_model->delete_data($where, 'tabel_obat');
    $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Data Berhasil Dihapus!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
    redirect('obat');
  }
}