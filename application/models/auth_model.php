<?php
defined("BASEPATH") or exit("ERROR");

class Auth_model extends CI_model
{
    public function login($sql){
        $res = $this->db->query($sql);
        return $res;
    }

    public function cek_username($username){
        $cek = $this->db->select("username")->from("user")->where("username",$username)->get()->num_rows();
        return ($cek == 0)? true : false;
    }

}
