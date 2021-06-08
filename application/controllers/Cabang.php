<?php
defined("BASEPATH")or exit("ERROR");

class Cabang extends CI_controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model("Cabang_model");
        $this->load->model("CRUD_model");
    }

    public function index(){
        $data['daftar_cabang'] = $this->Cabang_model->get_cabang();
        $this->load->view("daftar_cabang",$data);

    }

    public function tambah_cabang(){
        $this->load->view("tambah_cabang");
    }

    public function post_cabang(){
        $p = $this->input->post();
        $data = [
            'kode_usaha' => $_SESSION['kode_usaha'],
            'kode_cabang' => (int)$this->Cabang_model->get_kode_cabang()[0]->kode_cabang + 1,
            'nama' => $p['nama_cabang'],
            'alamat' => $p['alamat_cabang']
        ];
        $this->CRUD_model->create("cabang",$data);
        $this->session->set_flashdata("msg","Berhasil Menambahkan Cabang");
        redirect("Cabang");
    }


}