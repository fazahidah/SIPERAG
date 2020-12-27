<?php
defined("BASEPATH")or exit("ERROR");

class Produk_model extends CI_model
{
    public function showAll($table){
        return $this->db->select("*")->from($table)->get()->result();
    }

    public function show_produk(){
        return $this->db->query("SELECT p.id_produk,p.nama,p.harga,p.id_kategori,k.kategori FROM produk p, kategori k WHERE p.id_kategori = k.id_kategori")->result();
    }

    public function inputData($table,$data){
        return $this->db->insert($table,$data);
    }
    public function editData($table,$data,$where){
        return $this->db->update($table,$data,$where);
    }

    public function deleteData($table,$where){
        return $this->db->delete($table,$where);
    }
}
