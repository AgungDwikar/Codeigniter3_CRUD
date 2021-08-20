<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftar extends CI_Controller {

  
  public function __construct()
  {
    parent::__construct();
    $this->load->model('pendaftar_model');
  }
  

  public function index()
  {
    $data['judul'] = "Data Pendaftar";
    $data['pendaftar'] = $this->pendaftar_model->get_data();
    $this->load->view('pendaftar_view',$data);
  }

}

/* End of file Controllername.php */

?>