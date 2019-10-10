<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita_model extends CI_Model
{
    public function getAllBerita()
    {
        return $this->db->get_where('berita', ['aktif' => 1])->result_array();
    }

    public function getBeritaById($id)
    {
        return $this->db->get_where('berita', ['id' => $id])->row_array();
    }

    public function addBerita()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data = [
            'judul' => htmlspecialchars($this->input->post('judul', true)),
            'headline' => htmlspecialchars($this->input->post('headline', true)),
            'deskripsi' => htmlspecialchars($this->input->post('editor_content', true)),
            'gambar' => "empty.svg",
            'tgl_masuk' => time(),
            'penulis' => $data['user']['nama'],
            'aktif' => 1
        ];

        $this->db->insert('berita', $data);
    }

    public function deleteBerita($id)
    {
        $data = ['aktif' => 0];
        $this->db->where('id', $id);
        $this->db->update('berita', $data);
    }

    public function updateBerita($id)
    {
        $data = [
            'judul' => htmlspecialchars($this->input->post('judul', true)),
            'headline' => htmlspecialchars($this->input->post('headline', true)),
            'deskripsi' => htmlspecialchars($this->input->post('editor_content', true))
        ];

        $this->db->where('id', $id);
        $this->db->update('berita', $data);
    }
}
