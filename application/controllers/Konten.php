<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Konten extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Berita_model');
        $this->load->library('form_validation');
    }

    public function berita()
    {
        $data['judul'] = 'Berita';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['berita'] = $this->Berita_model->getAllBerita();
        $this->load->view('templates/backend/header', $data);
        $this->load->view('templates/backend/sidebar', $data);
        $this->load->view('templates/backend/topbar', $data);
        $this->load->view('konten/berita', $data);
        $this->load->view('templates/backend/footer');
    }

    public function tambahBerita()
    {
        $data['judul'] = 'Berita';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('judul', 'Judul', 'required|trim', ['required' => 'Kolom %s harus diisi.']);
        $this->form_validation->set_rules('headline', 'Headline', 'required|trim', ['required' => 'Kolom %s harus diisi.']);
        $this->form_validation->set_rules('editor_content', 'Deskripsi', 'required', ['required' => 'Kolom %s harus diisi.']);

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/backend/header', $data);
            $this->load->view('templates/backend/sidebar', $data);
            $this->load->view('templates/backend/topbar', $data);
            $this->load->view('konten/tambah_berita', $data);
            $this->load->view('templates/backend/footer');
        } else {
            $this->Berita_model->addBerita();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Berita berhasil di masukkan
          </div>');
            redirect(base_url('konten/berita'));
        }
    }

    public function hapusBerita($id)
    {
        $this->Berita_model->deleteBerita($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Berita berhasil di hapus
          </div>');
        redirect(base_url('konten/berita'));
    }

    public function ubahBerita($id)
    {

        $data['judul'] = 'Agenda';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['berita'] = $this->Berita_model->getBeritaById($id);

        $this->form_validation->set_rules('judul', 'Judul', 'required|trim', ['required' => 'Kolom %s harus diisi.']);
        $this->form_validation->set_rules('headline', 'Headline', 'required|trim', ['required' => 'Kolom %s harus diisi.']);
        $this->form_validation->set_rules('editor_content', 'Deskripsi', 'required', ['required' => 'Kolom %s harus diisi.']);

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/backend/header', $data);
            $this->load->view('templates/backend/sidebar', $data);
            $this->load->view('templates/backend/topbar', $data);
            $this->load->view('konten/ubah_berita', $data);
            $this->load->view('templates/backend/footer');
        } else {
            $this->Berita_model->updateBerita($id);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Berita berhasil di ubah
          </div>');
            redirect(base_url('konten/berita'));
        }
    }
}
