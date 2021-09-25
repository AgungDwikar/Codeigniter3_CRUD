<?php
defined('BASEPATH') or exit('No direct script access allowed');

class instansiJenis_model extends CI_Controller
{
    public function get_data()
    {
        $result = $this->db->get('tb_jenis_instansi');
        return $result;
    }
    public function tambah($data)
    {
        $this->db->insert('tb_jenis_instansi', $data);
    }
    public function get_id_instansi($jenis_id)
    {
        $query = $this->db->get_where('tb_jenis_instansi', array('jenis_id' => $jenis_id));
        return $query;
    }
    public function ubah($jenis_id, $data)
    {
        $this->db->where('jenis_id', $jenis_id);
        $this->db->update('tb_jenis_instansi', $data);
    }
    public function delete($jenis_id)
    {
        $this->db->where('jenis_id', $jenis_id);
        $this->db->delete('tb_jenis_instansi');
    }
    public function cariDataJenisInstansi()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('jenis_nama', $keyword);
        $this->db->or_like('jenis_id', $keyword);
        $this->db->like('jenis_desk', $keyword);
        $result = $this->db->get('tb_instansi');
        return $result;
    }
}
