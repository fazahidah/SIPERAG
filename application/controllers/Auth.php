<?php
defined("BASEPATH")or exit("ERROR");

class Auth extends CI_controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model("auth_model");
    }

    public function index(){
        $this->load->view("view_login");
    }

    public function login(){
        $post = $this->input->post();
        $user = $post['username'];
        $pass = md5($post['password']);

        $query = "SELECT * FROM user WHERE username = ".$this->db->escape($user)." AND password = ".$this->db->escape($pass)."";
        $login = $this->auth_model->login($query);
        if ($login->num_rows() > 0) {
            foreach ($login->result() as $row) {        
                $this->session->set_userdata("username", $row->username);
                $this->session->set_userdata("kode_user", $row->kode_user);
                $this->session->set_userdata("kode_usaha", $row->kode_usaha);
                $this->session->set_userdata("kode_cabang", $row->kode_cabang);
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

    public function register_view(){
        $this->load->view("view_register");
    }

    public function register(){
        $p = $this->input->post();
        $username = $p['username'];
        $pass = $p['password'];
        $pass_conf = $p['password_conf'];
        $nama = $p['nama_lengkap'];
        $nama_toko = $p['nama_toko'];
        $email = $p['email'];
        $cek_username = $this->auth_model->cek_username($username);
        if ($cek_username) {
            if ($pass == $pass_conf) {
                $kode_usaha = $this->create_kode_usaha();
                $kode_user = $this->create_kode_user();
                $table = "cabang";
                $data = [
                    'kode_usaha' => $kode_usaha,
                    'kode_cabang' => 1,
                    'nama' => $nama_toko,
                    'alamat' => ""
                ];
                $this->crud->create($table,$data);
                $table = "user";
                $data = [
                    'kode_usaha' => $kode_usaha,
                    'kode_user' => $kode_user,
                    'username' => $username,
                    'kode_cabang' => 1,
                    'nama' => $nama,
                    'role' => "OWNER",
                    'email' => $email,
                    'password' => md5($pass)
                ];
                $this->crud->create($table,$data);
                $this->session->set_flashdata("register_msg", "Anda Sudah Berhasil Daftar, Silahkan Login");
                redirect(site_url("auth"));
            }
            $callback_error_password = [
                'nama' => $nama,
                'username' => $username,
                'email' => $email,
                'nama_toko' => $nama_toko,
                'msg' => "Password Tidak Sama"
            ];
            $this->session->set_flashdata($callback_error_password);
            redirect(site_url("Auth"));
        }
        $callback_error_username = [
            'nama' => $nama,
            'email' => $email,
            'nama_toko' => $nama_toko,
            'msg' => "Username Sudah Digunakan"
        ];
        $this->session->set_flashdata($callback_error_username);
        redirect(site_url("Auth"));
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect(site_url("Auth"));
    }

    private function create_kode_usaha(){
        $get_index = $this->db->select("kode_usaha")->from("user")->limit(1)->order_by("id_user","DESC")->get()->result();
        $cut = (int)substr($get_index[0]->kode_usaha,4);
        $new_index = $cut + 1;
        $index = str_pad($new_index,6,0,STR_PAD_LEFT);
        $kode = "UMKM".$index;
        return $kode;
    }

    private function create_kode_user(){
        $get_index = $this->db->select("kode_user")->from("user")->like("kode_user","OWNER")->limit(1)->order_by("kode_user","DESC")->get()->result();
        $cut = (int)substr($get_index[0]->kode_user,5);
        $new_index = $cut + 1;
        $index = str_pad($new_index,5,0,STR_PAD_LEFT);
        $kode = "OWNER".$index;
        return $kode;
    }
    
}
