<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{

    public function getAgenda()
    {
        return $this->db->get('agenda')->result_array();
    }
}
