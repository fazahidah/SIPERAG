<?php
defined("BASEPATH")or exit("ERROR");

class Cabang_model extends CI_Model
{
    public function get_cabang(){
        return $this->db->select("*")->from("cabang")->where("kode_usaha",$_SESSION['kode_usaha'])->get()->result();
    }

    public function get_kode_cabang(){
        return $this->db->select("kode_cabang")
                        ->from("cabang")
                        ->where("kode_usaha",$_SESSION['kode_usaha'])
                        ->order_by("kode_cabang","DESC")
                        ->get()->result();
    }
}
