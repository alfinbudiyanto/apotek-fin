<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Obat_model extends CI_Model {

  public function get_data($obat)
  {
    return $this->db->get($obat);
  }
}