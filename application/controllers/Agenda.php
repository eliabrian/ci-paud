<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Agenda extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Agenda_model');
    }

    public function index()
    {
        $data['judul'] = 'Agenda';
        $data['agenda'] = $this->Agenda_model->getAllAgendaDesc();

        $data['berita_aside'] = 'templates/berita/aside';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/jumbotron');
        $this->load->view('agenda/index', $data);
        $this->load->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Agenda';
        $data['agenda'] = $this->Agenda_model->getAgendaById($id);
        $data['agenda_lain'] = $this->Agenda_model->getAllAgendaNotEqual($id);

        $data['berita_aside'] = 'templates/berita/aside';
        $data['agenda_aside'] = 'templates/agenda/aside';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/jumbotron');
        $this->load->view('agenda/detail', $data);
        $this->load->view('templates/footer');
    }
}
