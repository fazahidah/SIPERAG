<?php
defined("BASEPATH")or exit("ERROR");

class Kasir_model extends CI_model 
{
    public function showProduk(){
        return $this->db->query("SELECT p.id_produk,p.nama,p.harga,p.id_kategori,k.kategori FROM produk p, kategori k WHERE p.id_kategori = k.id_kategori")->result();
    }

    public function showFilterProduk($filter){
        return $this->db->query("SELECT p.id_produk,p.nama,p.harga,p.id_kategori,k.kategori FROM produk p, kategori k WHERE p.id_kategori = k.id_kategori AND p.id_kategori = $filter")->result();
    }

    public function getKategori()
    {
        return $this->db->get("kategori")->result();
    }

    public function insertData($table,$data){
        return $this->db->insert($table,$data);
    }
}
