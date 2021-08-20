<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftar_model extends CI_Model {

  public function get_data(){
    $result = $this->db->get('pendaftar');
    return $result;
  }

  public function tambah($data)
  {
    $this->db->insert('pendaftar', $data);
  }

  public function get_id_pendaftar($id){
    $query = $this->db->get_where('pendaftar', array('id' => $id));
    return $query;
  }

  public function ubah($id, $data){
    $this->db->where('id', $id);
    $this->db->update('pendaftar', $data);
  }

  public function delete($id){
    $this->db->where('id', $id);
    $this->db->delete('pendaftar');
  }

}

?>