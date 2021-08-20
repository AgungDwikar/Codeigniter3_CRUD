<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
  }
  
  public function index()
  {
    $data['judul'] = "Berita Pagi";
    $data['isi'] = "Isi berita pagi ini adalah .....";
    
    $this->load->view('berita_view', $data);
  }

}

/* End of file Controllername.php */

?>