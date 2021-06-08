<?php

class Karyawan_model extends CI_Model
{
    public function getKaryawan()
    {
        return $this->db->select("user.*,cabang.nama as nama_cabang,cabang.alamat")
                        ->from("user")
                        ->join("cabang", "cabang.kode_usaha = user.kode_usaha", "left")
                        ->where("user.kode_usaha",$_SESSION['kode_usaha'])
                        ->where("user.kode_cabang = cabang.kode_cabang")
                        ->where_not_in("user.role","OWNER")
                        ->group_by("cabang.kode_cabang")
                        ->get()->result();
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
}
