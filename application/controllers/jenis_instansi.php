<?php
defined('BASEPATH') or exit('No direct script access allowed');

class jenis_instansi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('instansiJenis_model');
    }
    public function index()
    {
        $data['judul'] = "Data jenis";
        $data['jenis_instansi'] = $this->instansiJenis_model->get_data();
        if ($this->input->post('keyword')) {
            $data['jenis_instansi'] = $this->instansiJenis_model->cariDataInstansi();
        }
        $this->load->view('jenisInstansi_view', $data);
    }
    public function tambah()
    {
        $jenis_nama = $this->input->post('jenis_nama');
        $jenis_desk = $this->input->post('jenis_desk');
        $data = array(
            'jenis_nama' => $jenis_nama,
            'jenis_desk' => $jenis_desk
        );
        $this->instansiJenis_model->tambah($data);
        redirect('jenis_instansi');
    }
    public function btn_tambah()
    {
        $this->load->view('jenisInstansi_tambah');
    }
    public function get_ubah()
    {
        $jenis_id = $this->uri->segment(3);
        $result = $this->instansiJenis_model->get_id_instansi($jenis_id);
        if ($result->num_rows() > 0) {
            $i = $result->row_array();
            $data = array(
                'jenis_id' => $i['jenis_id'],
                'jenis_nama' => $i['jenis_nama'],
                'jenis_desk' => $i['jenis_desk'],
            );
            $this->load->view('jenisInstansi_ubah', $data);
        } else {
            echo "data tidak tersedia";
        }
    }
    public function ubah()
    {
        $jenis_id = $this->input->post('jenis_id');
        $jenis_nama = $this->input->post('jenis_nama');
        $jenis_desk = $this->input->post('jenis_desk');
        $data = array(
            'jenis_nama' => $jenis_nama,
            'jenis_desk' => $jenis_desk
        );
        $this->instansiJenis_model->ubah($jenis_id, $data);
        redirect('jenis_instansi');
    }

    public function delete()

    {
        $jenis_id = $this->uri->segment(3);
        $this->instansiJenis_model->delete($jenis_id);
        redirect('jenis_instansi');
    }
}
