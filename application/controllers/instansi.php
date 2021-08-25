<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class instansi extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('instansi_model');
    }
	public function index()
	{
        $data['judul']="Data Instansi";
        $data['instansi'] = $this->instansi_model->get_data();
        if ($this->input->post('keyword') ) {
            $data['instansi'] = $this->instansi_model->cariDataInstansi();
        }
		$this->load->view('instansi_view',$data);
	}
    public function tambah()
    {
        $instansi_nama = $this->input->post('instansi_nama');
        $instansi_jenis_id = $this->input->post('instansi_jenis_id');
        $data = array(
            'instansi_nama' => $instansi_nama,
            'instansi_jenis_id' => $instansi_jenis_id
        );
            $this->instansi_model->tambah($data);
            redirect('instansi');
    }
    public function btn_tambah()
    {
        $this->load->view('instansi_tambah');
    }
    public function get_ubah()
    {
    $instansi_id = $this->uri->segment(3);
    $result = $this->instansi_model->get_id_instansi($instansi_id);
    if($result->num_rows() > 0){
        $i = $result->row_array();
      $data = array(
        'instansi_id' => $i['instansi_id'],
        'instansi_nama' => $i['instansi_nama'],
        'instansi_jenis_id' => $i['instansi_jenis_id'],
      );
      $this->load->view('instansi_ubah', $data);
    }else{
      echo "data tidak tersedia";
    }
}
    public function ubah()
    {
        $instansi_id = $this->input->post('instansi_id');
        $instansi_nama = $this->input->post('instansi_nama');
        $instansi_jenis_id = $this->input->post('instansi_jenis_id');
        $data = array(
            'instansi_nama' => $instansi_nama,
            'instansi_jenis_id' => $instansi_jenis_id
        );
        $this->instansi_model->ubah($instansi_id, $data);
        redirect('instansi');
    }

    public function delete()

    {
        $instansi_id = $this->uri->segment(3);
        $this->instansi_model->delete($instansi_id);
        redirect('instansi');
        
    }
    
}