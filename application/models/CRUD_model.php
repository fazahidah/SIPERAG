<?php
defined("BASEPATH")or exit("ERROR");

class CRUD_model extends CI_model
{
    public function create($table,$data){
        return $this->db->insert($table,$data);
    }

    public function update($table,$data,$id){
        return $this->db->update($table,$data,$id);
    }

    public function delete($table,$data,$id){
        return $this->db->delete($table,$data,$id);
    }
}
