<?php

class Karyawan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("karyawan_model");
        $this->load->model("CRUD_model");
    }

    public function index()
    {
        $data['daftar_karyawan'] = $this->karyawan_model->getKaryawan();
        $this->load->view("daftar_karyawan",$data);
    }

    public function tambah_karyawan()
    {
        $data['data_cabang'] = $this->karyawan_model->getCabang();
        $this->load->view("tambah_karyawan",$data);
    }

    public function post_karyawan()
    {
        $p = $this->input->post();
        $data = [
            "kode_user" => $this->create_kode_user(),
            "kode_usaha" => $_SESSION['kode_usaha'],
            "kode_cabang" => $p['cabang'],
            "username" => $p['username'],
            "nama" => $p['nama'],
            "role" => $p['role'],
            "email" => $p['email'],
            "password" => md5($p['password'])
        ];
        $post = $this->CRUD_model->create("user",$data);
        $this->session->set_flashdata("succ","Karyawan Telah Dibuat");
        redirect("karyawan");
    }

    public function update_karyawan()
    {
        $p = $this->input->post();
        if (empty($p['editPassword'])) {
            $data = [
                'nama' => $p['editNama'],
                'username' => $p['editUsername'],
                'role' => $p['editRole'],
                'email' => $p['editEmail'],
            ];
        }else{
            $data = [
                'nama' => $p['editNama'],
                'username' => $p['editUsername'],
                'role' => $p['editRole'],
                'email' => $p['editEmail'],
                'password' => md5($p['editPassword'])
            ];
        }
        $id = ['id_user' => $p['idUserEdit']];
        $this->CRUD_model->update("user",$data,$id);
        redirect("Karyawan");
    }

    public function delete_karyawan()
    {
        $this->CRUD_model->delete("user",$this->input->post("idUserDelete"));
        redirect("Karyawan");
    }

    private function create_kode_user()
    {
        $get_index = $this->db->select("kode_user")->from("user")->where("kode_usaha",$_SESSION['kode_usaha'])->like("kode_user","EMPLOYE")->limit(1)->order_by("kode_user","DESC")->get()->result();
        if (empty($get_index)) {
            return "EMPLOYE001";
        }
        $cut = (int)substr($get_index[0]->kode_user,7);
        $new_index = $cut + 1;
        $index = str_pad($new_index,3,0,STR_PAD_LEFT);
        $kode = "EMPLOYE".$index;
        return $kode;
    }
}
