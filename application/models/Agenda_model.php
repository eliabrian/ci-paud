<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Agenda_model extends CI_Model
{

    public function getAllAgenda()
    {
        return $this->db->get_where('agenda', ['aktif' => 1])->result_array();
    }

    public function getAllAgendaDesc()
    {
        $this->db->order_by('tanggal', 'DESC');
        return $this->db->get_where('agenda', ['aktif' => 1])->result_array();
    }

    public function getAgendaById($id)
    {
        return $this->db->get_where('agenda', ['id' => $id])->row_array();
    }

    public function addAgenda()
    {
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
    }

    public function deleteAgenda($id)
    {
        $data = ['aktif' => 0];
        $this->db->where('id', $id);
        $this->db->update('agenda', $data);
    }

    public function updateAgenda($id)
    {
        $data = [
            'nama' => htmlspecialchars($this->input->post('nama', true)),
            'gambar' => "empty.png",
            'deskripsi' => htmlspecialchars($this->input->post('editor_content', true)),
            'tanggal' => strtotime($this->input->post('tanggal', true)),
            'penulis' => 'Kabupaten Himpaudi Bekasi',
            'aktif' => 1
        ];

        $this->db->where('id', $id);
        $this->db->update('agenda', $data);
    }
}
