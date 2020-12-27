<?php
defined("BASEPATH")or exit("ERROR");

class Pengeluaran extends CI_controller 
{
    public function __construct(){
        parent::__construct();
        $this->load->model("pengeluaran_model");
    }

    public function index(){
        $data['dataTable'] = $this->pengeluaran_model->dataTable();
        $this->load->view("view_pengeluaran",$data);
    }

    public function tambah_pengeluaran(){
        $post = $this->input->post();
        $data = [
            'kode_user' => $_SESSION['kode_user'],
            'keterangan' => $post['addKeterangan'],
            'jumlah_pengeluaran' => $post['addJumlah'],
            'tanggal' => $post['addTanggal']
        ];
        $this->pengeluaran_model->insertData("pengeluaran",$data);
        redirect(site_url("pengeluaran"));
    }

    public function edit_pengeluaran(){
        $post = $this->input->post();
        $data = [
            'keterangan' => $post['editKeterangan'],
            'jumlah_pengeluaran' => $post['editJumlah']
        ];
        $id = ['id_pengeluaran'=>$post['idPengeluaranEdit']];
        $this->pengeluaran_model->updateData("pengeluaran",$data,$id);
        redirect(site_url("pengeluaran"));

    }

    public function hapus_pengeluaran(){
        $id = ['id_pengeluaran'=>$this->input->post("idPengeluaranHapus")];
        $this->pengeluaran_model->deleteData("pengeluaran",$id);
        redirect(site_url("pengeluaran"));

    }
}
