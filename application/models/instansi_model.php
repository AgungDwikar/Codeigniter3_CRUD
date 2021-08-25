<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class instansi_model extends CI_Controller {
	public function get_data()
	{
        $result = $this->db->get('tb_instansi');
        return $result;
		
	}
    public function tambah($data)
    {
        $this->db->insert('tb_instansi',$data);
    }
    public function get_id_instansi($instansi_id)
    {
        $query = $this->db->get_where('tb_instansi', array('instansi_id' =>$instansi_id) );
        return $query;
    }
    public function ubah($instansi_id, $data)
    {
        $this->db->where('instansi_id',$instansi_id) ;
      $this->db->update('tb_instansi', $data);
    }
    public function delete($instansi_id)
    {
        $this->db->where('instansi_id', $instansi_id);
        $this->db->delete('tb_instansi');
        
    }
    public function cariDataInstansi(){
        $keyword = $this->input->post('keyword', true);
        $this->db->like('instansi_nama', $keyword);
        $this->db->or_like('instansi_jenis_id', $keyword);
        $result = $this->db->get('tb_instansi');
        return $result;
      }
}

