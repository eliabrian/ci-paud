<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kabupaten extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        dashboard_role();
    }

    public function index()
    {
        $data['judul'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/backend/header', $data);
        $this->load->view('templates/backend/sidebar', $data);
        $this->load->view('templates/backend/topbar', $data);
        $this->load->view('kabupaten/index', $data);
        $this->load->view('templates/backend/footer');
    }
}
