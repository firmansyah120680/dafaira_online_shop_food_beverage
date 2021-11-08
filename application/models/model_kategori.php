<?php

class Model_kategori extends CI_Model
{
    public function data_sarapan()
    {
        return $this->db->get_where("tb_barang", array('kategori' => 'sarapan'));
    }

    public function data_food()
    {
        return $this->db->get_where("tb_barang", array('kategori' => 'food'));
    }

    public function data_kue()
    {
        return $this->db->get_where("tb_barang", array('kategori' => 'kue'));
    }

    public function data_minuman()
    {
        return $this->db->get_where("tb_barang", array('kategori' => 'minuman'));
    }
}
