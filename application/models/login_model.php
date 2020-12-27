<?php
defined("BASEPATH") or exit("ERROR");

class Login_model extends CI_model
{
    public function login($sql){
        $res = $this->db->query($sql);
        return $res;
    }
}
