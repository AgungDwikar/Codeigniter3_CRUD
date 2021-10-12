<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {

  function __construct()
  {
    parent::__construct();
    $this->load->model('form_model');
  }
  function index()
  {
    $data['jenis'] = $this->form_model->get_jenis_instansi();
    $this->load->view('form_view', $data);
  }

  function get_instansi(){
    $id = $this->input->post('id');
    $data = $this->form_model->get_instansi($id);
    echo json_encode($data);
  }

}

/* End of file Form.php */
