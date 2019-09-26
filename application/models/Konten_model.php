<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Konten_model extends CI_Model
{



    public function getBerita()
    {
        return $this->db->get('berita')->result_array();
    }
}
