<?php
defined("BASEPATH")or exit("ERROR");

class Transaksi extends CI_controller 
{
    public function __construct(){
        parent::__construct();
        $this->load->model("transaksi_model");
    }

    public function laporan(){
        $filter = $this->input->post();
        if (@$filter['awal'] != '' && @$filter['akhir'] != '') {
            $data['chartPenjualanKotor'] = $this->transaksi_model->dataChartPenjualanKotor($filter);
            $data['chartPenjualanBersih'] = $this->transaksi_model->dataChartPenjualanBersih($filter);
            $data['chartPengeluaran'] = $this->transaksi_model->dataChartPengeluaran($filter);
            $data['penjualan_kotor'] = $this->transaksi_model->getPenjualanKotor($filter);
            $data['penjualan_bersih'] = $this->transaksi_model->getPenjualanBersih($filter);
            $data['pengeluaran'] = $this->transaksi_model->getTotalPengeluaran($filter);
            $this->load->view("view_transaksi",$data);
        }else{
            $data['awal'] = date("Y-m-01");
            $data['akhir'] = date("Y-m-d");
            $data['chartPenjualanKotor'] = $this->transaksi_model->dataChartPenjualanKotor("");
            $data['chartPenjualanBersih'] = $this->transaksi_model->dataChartPenjualanBersih("");
            $data['chartPengeluaran'] = $this->transaksi_model->dataChartPengeluaran("");
            $data['penjualan_kotor'] = $this->transaksi_model->getPenjualanKotor("");
            $data['penjualan_bersih'] = $this->transaksi_model->getPenjualanBersih("");
            $data['pengeluaran'] = $this->transaksi_model->getTotalPengeluaran("");
            $this->load->view("view_transaksi",$data);
        }

    }

    public function riwayat(){
        $filter = $this->input->post();
        $data = [];
        if (!isset($filter['submit'])) {
            $data['dataTable'] = $this->transaksi_model->dataRiwayat("");
        }else{
            $data['dataTable'] = $this->transaksi_model->dataRiwayat($filter);
        }
        $this->load->view("view_riwayat",$data);
    }

    public function detail_transaksi($kode_transaksi){
        $data['detailTransaksi'] = $this->transaksi_model->getDetailTransaksi($kode_transaksi);
        $data['kode_transaksi'] = $kode_transaksi;
        $this->load->view("view_detail_transaksi",$data);
    }
}
