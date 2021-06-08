<?php
defined("BASEPATH")or exit("ERROR");

class Kasir_model extends CI_model 
{
    public function showProduk(){
        return $this->db->query("SELECT p.id_produk,p.nama,p.harga,p.id_kategori,k.kategori FROM produk p, kategori k WHERE p.id_kategori = k.id_kategori AND p.kode_usaha = '".$_SESSION["kode_usaha"]."' AND k.kode_usaha = '".$_SESSION["kode_usaha"]."' ")->result();
    }

    public function showFilterProduk($filter){
        return $this->db->query("SELECT p.id_produk,p.nama,p.harga,p.id_kategori,k.kategori FROM produk p, kategori k WHERE p.id_kategori = k.id_kategori AND p.kode_usaha = '".$_SESSION["kode_usaha"]."' AND k.kode_usaha = '".$_SESSION["kode_usaha"]."' AND p.id_kategori = $filter")->result();
    }

    public function getCabang()
    {
        return $this->db->select("c.nama,c.kode_cabang")
                        ->from("user u, cabang c")
                        ->where("u.kode_usaha",$_SESSION['kode_usaha'])
                        ->where("c.kode_usaha",$_SESSION['kode_usaha'])
                        ->group_by("c.kode_cabang")
                        ->get()->result();
    }

    public function getKategori()
    {
        return $this->db->select("*")->from("kategori")->where("kode_usaha",$_SESSION['kode_usaha'])->get()->result();
    }

    public function insertData($table,$data){
        return $this->db->insert($table,$data);
    }
}
