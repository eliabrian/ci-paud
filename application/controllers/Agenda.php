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
        $this->load->view('templates/header', $data);
        $this->load->view('agenda/index', $data);
        $this->load->view('templates/footer');
    }
}
