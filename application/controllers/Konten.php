<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Konten extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Konten_model');
        $this->load->library('form_validation');
    }

    public function berita()
    {
        $data['judul'] = 'Berita';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['berita'] = $this->Konten_model->getBerita();
        $this->load->view('templates/backend/header', $data);
        $this->load->view('templates/backend/sidebar', $data);
        $this->load->view('templates/backend/topbar', $data);
        $this->load->view('konten/berita', $data);
        $this->load->view('templates/backend/footer');
    }

    public function tambahberita()
    {
        $data['judul'] = 'Berita';
        $data['user'] =  $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/backend/header', $data);
        $this->load->view('templates/backend/sidebar', $data);
        $this->load->view('templates/backend/topbar', $data);
        $this->load->view('konten/tambah_berita', $data);
        $this->load->view('templates/backend/footer');
    }
}
