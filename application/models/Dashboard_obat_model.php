<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_obat_model extends CI_Model {

    public function get_data_obat($obat)
    {
        return $this->db->get($obat);
    }
}