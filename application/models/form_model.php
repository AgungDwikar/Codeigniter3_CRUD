<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class form_model extends CI_Model {
  function get_jenis_instansi(){
    $result = $this->db->get('tb_jenis_instansi');
    return $result;
  }

  function get_instansi($id){
    $result = $this->db->query("SELECT * FROM tb_instansi WHERE instansi_jenis_id='$id'");
    return $result->result();
  }

}