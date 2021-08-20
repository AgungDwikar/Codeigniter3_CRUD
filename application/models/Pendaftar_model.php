<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftar_model extends CI_Model {

  public function get_data(){
    $result = $this->db->get('pendaftar');
    return $result;
  }

}

?>