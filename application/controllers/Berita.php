<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Agenda_model');
        $this->load->model('Berita_model');
    }

    public function index()
    {
        $data['judul'] = 'Berita';
        $data['agenda'] = $this->Agenda_model->getAllAgendaDesc();
        $data['berita'] = $this->Berita_model->getAllBerita();

        $data['agenda_aside'] = 'templates/agenda/aside';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/jumbotron');
        $this->load->view('berita/index', $data);
        $this->load->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Berita';
        $data['detail_berita'] = $this->Berita_model->getBeritaById($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/jumbotron');
        $this->load->view('berita/detail', $data);
        $this->load->view('templates/footer');
    }
}
