<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kategori_model extends CI_Model {

    public function get_kategori()
    {
        $data_kategori=$this->db->get('kategori')->result();
        return $data_kategori;
    }
    public function masuk_db()
    {
        $data_kategori=array(
            'nama_barang' => $this->input->post('nama_barang')
        );
        $sql_masuk=$this->db->insert('kategori', $data_kategori);
        return $sql_masuk;
    }
}
?>