<?php
defined("BASEPATH")or exit("ERROR");

class Kasir extends CI_controller 
{
    public function __construct(){
        parent::__construct();
        $this->load->model("kasir_model");
    }

    public function index(){
        $data['dataProduk'] = $this->kasir_model->showProduk();
        $data['kategori'] = $this->kasir_model->getKategori();
        $this->load->view("view_kasir",$data);
    }

    public function filterKategori($filter){
        header("Content-Type: application/json");
        echo json_encode($this->kasir_model->showFilterProduk($filter));
    }

    public function transaksi(){
        $post = $this->input->post();
        $kode = $this->createKodeTransaksi();
        $transaksi = [
            'kode_user' => @$_SESSION['kode_user'],
            'kode_transaksi' => $kode,
            'tanggal' => date("Y-m-7"),
            'grand_total' => $post['total'],
            'total_bayar' => "",
            'catatan' => ""
        ];
        $this->kasir_model->insertData("transaksi",$transaksi);
        foreach ($post['id_produk'] as $key => $val) {
            $detailTransaksi = [
                'kode_transaksi'=>$kode,
                'id_produk'=> $post['id_produk'][$key],
                'jumlah_beli'=> $post['qty'][$key],
                'subtotal' => $post['subtotal'][$key]
            ];
            $this->kasir_model->insertData("detail_transaksi",$detailTransaksi);
        }
        redirect(site_url("kasir"));
    }

    function createKodeTransaksi(){
        $kode = "TRX".random_int(100000,999999);
        return $kode;
    }
}
