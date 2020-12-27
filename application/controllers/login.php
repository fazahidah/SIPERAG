<?php
defined("BASEPATH")or exit("ERROR");

class Login extends CI_controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model("login_model");
    }

    public function index(){
        $this->load->view("view_login");
    }

    public function auth(){
        $post = $this->input->post();
        $user = $post['username'];
        $pass = $post['password'];

        $query = "SELECT * FROM user WHERE username = '".$user."' AND password = '".md5($pass)."'";
        $login = $this->login_model->login($query);
        if ($login->num_rows() > 0) {
            foreach ($login->result() as $row) {
                $this->session->set_userdata("username", $row->username);
                $this->session->set_userdata("kode_user", $row->kode_user);
                $this->session->set_userdata("role", $row->role);
                $this->session->set_userdata("nama", $row->nama);
                if ($row->role == "OWNER") {
                    redirect("dashboard");
                }else {
                    redirect("kasir");
                }
            }
        }else {
            $this->session->set_flashdata("msg","Username/Password Salah !");
            $this->load->view("view_login");
        }
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect(site_url("login"));
    }
    
}
