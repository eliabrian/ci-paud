<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
        $this->load->library('form_validation');
    }

    public function agenda()
    {
        $data['judul'] = 'Agenda';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['agenda'] = $this->Admin_model->getAgenda();

        $this->load->view('templates/backend/header', $data);
        $this->load->view('templates/backend/sidebar', $data);
        $this->load->view('templates/backend/topbar', $data);
        $this->load->view('admin/agenda', $data);
        $this->load->view('templates/backend/footer');
    }

    public function tambahagenda()
    {
        $data['judul'] = 'Agenda';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim', ['required' => 'Kolom %s harus diisi.']);
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required', ['required' => 'Kolom %s harus diisi.']);
        $this->form_validation->set_rules('editor_content', 'Deskripsi', 'required', ['required' => 'Kolom %s harus diisi.']);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/backend/header', $data);
            $this->load->view('templates/backend/sidebar', $data);
            $this->load->view('templates/backend/topbar', $data);
            $this->load->view('admin/tambah_agenda', $data);
            $this->load->view('templates/backend/footer');
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'gambar' => "empty.png",
                'deskripsi' => htmlspecialchars($this->input->post('editor_content', true)),
                'tanggal' => strtotime($this->input->post('tanggal', true)),
                'tanggal_masuk' => time(),
                'penulis' => 'Kabupaten Himpaudi Bekasi',
                'aktif' => 1
            ];

            $this->db->insert('agenda', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Agenda berhasil di masukkan
          </div>');
            redirect(base_url('admin/agenda'));
        }
    }
}
