<?php
defined("BASEPATH") or exit("error");

class Dashboard extends CI_controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("dashboard_model");
    }

    public function index()
    {
        $date = date("Y-m-d");
        $data['box_pendapatan'] = $this->dashboard_model->box_pendapatan($date);
        $data['box_pengeluaran'] = $this->dashboard_model->box_pengeluaran($date);
        $data['box_produk_terjual'] = $this->dashboard_model->box_produk_terjual($date);
        $data['box_total_transaksi'] =$this->dashboard_model->box_total_transaksi($date);
        $data['dataChart'] = $this->dashboard_model->dataChart();
        $data['dataChartPendapatan'] = $this->dashboard_model->dataChartPendapatan();
        $data['dataChartPengeluaran'] = $this->dashboard_model->dataChartPengeluaran();
        $data['produk_terlaris'] = $this->dashboard_model->produk_terlaris();
        $data['produk_terjual'] = $this->dashboard_model->produk_terjual();
        $this->load->view("view_dashboard", $data);
    }

    public function generate_grafik(){
        $pendapatan = $this->dashboard_model->grafik_pendapatan();
        $pengeluaran = $this->dashboard_model->grafik_pengeluaran();
        $result = [];
        for ($i=0; $i < count($pendapatan); $i++) { 
            if ($pengeluaran[$i]['tanggal'] == $pendapatan[$i]['tanggal']) {
                $temp = $pendapatan[$i]['pendapatan'] - $pengeluaran[$i]['pengeluaran'];
                $result[$i] = ["keuntungan"=>$temp,"tanggal"=>$pendapatan[$i]['tanggal']];
            }
        }
        var_dump($result);
    }
}
