<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftar extends CI_Controller {

  
  public function __construct()
  {
    parent::__construct();
    $this->load->model('pendaftar_model');
    if (!$this->session->userdata('auth')) {
      $this->session->set_flashdata('messageAkses', 'Anda tidak berhak mengakses halaman Pendaftar');
      redirect('auth');
    }
  }
  

  public function index()
  {
    $data['judul'] = "Data Pendaftar";
    $data['pendaftar'] = $this->pendaftar_model->get_data();
    $this->load->view('pendaftar_view',$data);
  }

  public function tambah(){
    $nama = $this->input->post('nama');
    $email = $this->input->post('email');
    $umur = $this->input->post('umur');
    $judul = $this->input->post('judul');
    $pemrakarsa = $this->input->post('pemrakarsa');
    $penanggung_jawab = $this->input->post('penanggung_jawab');
      $data = array(
        'nama' => $nama,
        'email' => $email,
        'umur' => $umur,
        'judul' => $judul,
        'pemrakarsa' => $pemrakarsa,
        'penanggung_jawab' => $penanggung_jawab
      );
      $this->pendaftar_model->tambah($data);
      redirect('pendaftar');
  }

  public function get_ubah(){
    $pendaftar_id = $this->uri->segment(3);
    $result = $this->pendaftar_model->get_id_pendaftar($pendaftar_id);
    if($result->num_rows() > 0){
      $i = $result->row_array();
      $data = array(
        'id' => $i['id'],
        'nama' => $i['nama'],
        'email' => $i['email'],
        'umur' => $i['umur'],
        'judul' => $i['judul'],
        'pemrakarsa' => $i['pemrakarsa'],
        'penanggung_jawab' => $i['penanggung_jawab']
      );
      $this->load->view('pendaftar_ubah', $data);
    }else{
      echo "data tidak tersedia";
    }
  }

  public function ubah(){
    $id = $this->input->post('id');
    $nama = $this->input->post('nama');
    $email = $this->input->post('email');
    $umur = $this->input->post('umur');
    $judul = $this->input->post('judul');
    $pemrakarsa = $this->input->post('pemrakarsa');
    $penanggung_jawab = $this->input->post('penanggung_jawab');

    $data = array(
      'nama' => $nama,
      'email' => $email,
      'umur' => $umur,
      'judul' => $judul,
      'pemrakarsa' => $pemrakarsa,
      'penanggung_jawab' => $penanggung_jawab
    );

    $this->pendaftar_model->ubah($id, $data);
    redirect('pendaftar');
  }

  public function btn_tambah(){
    $this->load->view('pendaftar_tambah');
  }

  public function delete(){
    $id = $this->uri->segment(3);
    $this->pendaftar_model->delete($id);
    redirect('pendaftar');
  }
  

}

/* End of file Controllername.php */

?>