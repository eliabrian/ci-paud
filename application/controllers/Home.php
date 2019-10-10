<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Agenda_model');
        $this->load->model('Berita_model');
    }

    public function index()
    {
        $data['judul'] = 'Home';
        $data['agenda'] = $this->Agenda_model->getAllAgendaDesc();
        $data['berita'] = $this->Berita_model->getAllBerita();
        $this->load->view('templates/header', $data);
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer');
    }
}
