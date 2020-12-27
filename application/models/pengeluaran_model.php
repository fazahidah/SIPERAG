<?php
defined("BASEPATH")or exit("ERROR");

class Pengeluaran_model extends CI_model 
{
    public function dataTable(){
        return $this->db->query("SELECT p.keterangan,p.jumlah_pengeluaran,p.tanggal,p.id_pengeluaran,p.kode_user,u.nama FROM pengeluaran p, user u WHERE P.kode_user = u.kode_user")->result();
    }

    public function insertData($table,$data){
        return $this->db->insert($table,$data);
    }

    public function updateData($table,$data,$where){
        return $this->db->update($table,$data,$where);
    }
    
    public function deleteData($table,$where){
        return $this->db->delete($table,$where);
    }
}
