<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pdf_model extends CI_Model
{
    public function getData()
    {
        // Kode untuk mengambil data dari database
        $query = $this->db->get('tingkat_stres');
        return $query->result_array();
    }
}
