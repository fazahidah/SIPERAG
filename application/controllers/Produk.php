<?php
defined("BASEPATH")or exit("ERROR");

class Produk extends CI_controller 
{    
    public function __construct(){
        parent::__construct();
        $this->load->model("produk_model");
    }

    public function index(){
        $data['menu'] = $this->produk_model->show_produk();
        $data['kategori'] = $this->produk_model->showAll("kategori");
        $this->load->view("view_produk",$data);
    }

    public function kategori(){
        $data['kategori'] = $this->produk_model->showAll("kategori");
        $this->load->view("view_kategori",$data);
    }

    public function tambah_produk(){
        $post = $this->input->post();
        $data = [
            'nama'=> $post['inputMenu'],
            'harga'=> $post['inputHarga'],
            'id_kategori'=> $post['inputKategori'],
            'kode_usaha' => $_SESSION['kode_usaha'],
            'kode_cabang' => $_SESSION['kode_cabang']
        ];
        if ($this->produk_model->inputData("produk",$data)) {
            redirect(site_url("produk"));
        }
    }

    public function tambah_kategori(){
        $post = $this->input->post();
        $data = [
            'kategori'=> $post['inputKategori'],
            'kode_usaha' => $_SESSION['kode_usaha'],
            'kode_usaha' => $_SESSION['kode_usaha']
        ];
        if ($this->produk_model->inputData("kategori",$data)) {
            redirect(site_url("produk/kategori"));
        }
    }

    public function edit_kategori(){
        $post = $this->input->post();
        $data = [
            'kategori'=>$post['editKategori']
        ];
        $id = ['id_kategori' => $post['idKategori']];
        if ($this->produk_model->editData("kategori",$data,$id)) {
            redirect(site_url("produk/kategori"));
        }
    }

    public function hapus_kategori(){
        $id = ['id_kategori'=>$this->input->post("idKategori")];
        if ($this->produk_model->deleteData("kategori",$id)) {
            redirect(site_url("produk/kategori"));
        }
    }

    public function edit_produk(){
        $post = $this->input->post();
        $data = [
            'nama' => $post['editNama'],
            'harga' => $post['editHarga'],
            'id_kategori' => $post['editKategori']
        ];
        $id = ['id_produk' => $post['idProdukEdit']];
        if ($this->produk_model->editData("produk",$data,$id)) {
            redirect(site_url("produk"));
        }
    }

    public function hapus_produk(){
        $id = ['id_produk' => $this->input->post("idProdukHapus")];
        if ($this->produk_model->deleteData("produk",$id)) {
            redirect(site_url("produk"));
        }
    }

}
