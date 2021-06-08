<?php 
defined("BASEPATH") or exit("ERROR");

class Dashboard_model extends CI_model
{
    public function box_pendapatan($date){
        $res = "";
        if ($_SESSION['role'] == "MANAGER") {
            $res = $this->db->select("sum(grand_total) as pendapatan")->from("transaksi")->where("tanggal",$date)->where("kode_usaha",$_SESSION['kode_usaha'])->where("kode_cabang",$_SESSION['kode_cabang'])->get()->result();
        }else{
            $res = $this->db->select("sum(grand_total) as pendapatan")->from("transaksi")->where("tanggal",$date)->where("kode_usaha",$_SESSION['kode_usaha'])->get()->result();
        }
        if ($res == "NULL") {
            return 0;
        }
        return $res;
    }
    public function box_pengeluaran($date){
        if ($_SESSION['role'] == "MANAGER") {
            return $this->db->select("sum(jumlah_pengeluaran) as pengeluaran")->from("pengeluaran")->where("tanggal",$date)->where("kode_usaha",$_SESSION['kode_usaha'])->where("kode_cabang",$_SESSION['kode_cabang'])->get()->result();
        }
        else{
            return $this->db->select("sum(jumlah_pengeluaran) as pengeluaran")->from("pengeluaran")->where("tanggal",$date)->where("kode_usaha",$_SESSION['kode_usaha'])->get()->result();
        }
    }
    public function box_produk_terjual($date){
        if ($_SESSION['role'] == "MANAGER") {
            return $this->db->query("SELECT SUM(detail_transaksi.jumlah_beli) as produk_terjual FROM detail_transaksi, transaksi WHERE transaksi.kode_usaha = '".$_SESSION['kode_usaha']."' AND detail_transaksi.kode_transaksi = transaksi.kode_transaksi AND transaksi.kode_cabang = '".$_SESSION['kode_cabang']."' AND transaksi.tanggal = '".$date."'")->result();
        }
        else{
            return $this->db->query("SELECT SUM(detail_transaksi.jumlah_beli) as produk_terjual FROM detail_transaksi, transaksi WHERE transaksi.kode_usaha = '".$_SESSION['kode_usaha']."' AND detail_transaksi.kode_transaksi = transaksi.kode_transaksi AND transaksi.tanggal = '".$date."'")->result();
        }
    }
    public function box_total_transaksi($date){
        if ($_SESSION['role'] == "MANAGER") {
            return $this->db->select("count(id_transaksi) as total_transaksi")->from("transaksi")->where("tanggal",$date)->where("kode_usaha",$_SESSION['kode_usaha'])->where("kode_cabang",$_SESSION['kode_cabang'])->get()->result();
        }
        else{
            return $this->db->select("count(id_transaksi) as total_transaksi")->from("transaksi")->where("tanggal",$date)->where("kode_usaha",$_SESSION['kode_usaha'])->get()->result();
        }
    }
    public function produk_terlaris(){
        if ($_SESSION['role'] == "MANAGER") {
            return $this->db->select("p.nama,sum(dt.jumlah_beli) as jumlah_beli")->from("produk p, detail_transaksi dt, transaksi t")->where("t.kode_transaksi = dt.kode_transaksi")->where("t.kode_usaha",$_SESSION['kode_usaha'])->where("dt.id_produk = p.id_produk")->where("t.kode_cabang",$_SESSION['kode_cabang'])->group_by("p.id_produk")->order_by("dt.jumlah_beli","DESC")->limit(4)->get()->result();
        }
        else{
            return $this->db->select("p.nama,sum(dt.jumlah_beli) as jumlah_beli")->from("produk p, detail_transaksi dt, transaksi t")->where("t.kode_transaksi = dt.kode_transaksi")->where("t.kode_usaha",$_SESSION['kode_usaha'])->where("dt.id_produk = p.id_produk")->group_by("p.id_produk")->order_by("dt.jumlah_beli","DESC")->limit(4)->get()->result();
        }
    }
    public function produk_terjual(){
        if ($_SESSION['role'] == "MANAGER") {
            return $this->db->select("sum(dt.jumlah_beli) as jumlah")->from("produk p, detail_transaksi dt, transaksi t")->where("t.kode_usaha",$_SESSION['kode_usaha'])->where("t.kode_transaksi = dt.kode_transaksi")->where("dt.id_produk = p.id_produk")->where("t.kode_cabang",$_SESSION['kode_cabang'])->get()->result();
        }
        else{
            return $this->db->select("sum(dt.jumlah_beli) as jumlah")->from("produk p, detail_transaksi dt, transaksi t")->where("t.kode_usaha",$_SESSION['kode_usaha'])->where("t.kode_transaksi = dt.kode_transaksi")->where("dt.id_produk = p.id_produk")->get()->result();
        }
    }

    public function dataChart(){
        $awal = date("Y-m-01");
        $akhir = date("Y-m-d");
        if ($_SESSION['role'] == "MANAGER") {
            return $this->db->query("SELECT transaksi.tanggal, sum(transaksi.grand_total) as total, SUM(pengeluaran.jumlah_pengeluaran) as pengeluaran FROM transaksi LEFT JOIN pengeluaran ON pengeluaran.tanggal = transaksi.tanggal WHERE transaksi.kode_usaha = '".$_SESSION['kode_usaha']."' AND transaksi.tanggal >= '".$awal."'  AND transaksi.tanggal <= '".$akhir."' AND transaksi.kode_cabang = '".$_SESSION['kode_cabang']."' GROUP BY transaksi.tanggal")->result();
        }
        else{
            return $this->db->query("SELECT transaksi.tanggal, sum(transaksi.grand_total) as total, SUM(pengeluaran.jumlah_pengeluaran) as pengeluaran FROM transaksi LEFT JOIN pengeluaran ON pengeluaran.tanggal = transaksi.tanggal WHERE transaksi.kode_usaha = '".$_SESSION['kode_usaha']."' AND transaksi.tanggal >= '".$awal."'  AND transaksi.tanggal <= '".$akhir."' GROUP BY transaksi.tanggal")->result();
        }
    }
    public function dataChartPendapatan(){
        $awal = date("Y-m-01");
        $akhir = date("Y-m-d");
        if ($_SESSION['role'] == "MANAGER") {
            return $this->db->query("SELECT transaksi.tanggal, sum(transaksi.grand_total) as total FROM transaksi WHERE transaksi.kode_usaha = '".$_SESSION['kode_usaha']."' AND transaksi.tanggal >= '".$awal."' AND transaksi.tanggal <= '".$akhir."' AND transaksi.kode_cabang = '".$_SESSION['kode_cabang']."' GROUP BY transaksi.tanggal")->result();
        }
        else{
            return $this->db->query("SELECT transaksi.tanggal, sum(transaksi.grand_total) as total FROM transaksi WHERE transaksi.kode_usaha = '".$_SESSION['kode_usaha']."' AND transaksi.tanggal >= '".$awal."' AND transaksi.tanggal <= '".$akhir."' GROUP BY transaksi.tanggal")->result();
        }
    }

    public function dataChartPengeluaran(){
        $awal = date("Y-m-01");
        $akhir = date("Y-m-d");
        if ($_SESSION['role'] == "MANAGER") {
            return $this->db->query("SELECT pengeluaran.tanggal, sum(pengeluaran.jumlah_pengeluaran) as total FROM pengeluaran WHERE pengeluaran.kode_usaha = '".$_SESSION['kode_usaha']."' AND pengeluaran.tanggal >= '".$awal."' AND pengeluaran.tanggal <= '".$akhir."' AND pengeluaran.kode_cabang = '".$_SESSION['kode_cabang']."' GROUP BY pengeluaran.tanggal")->result();
        }
        else{
            return $this->db->query("SELECT pengeluaran.tanggal, sum(pengeluaran.jumlah_pengeluaran) as total FROM pengeluaran WHERE pengeluaran.kode_usaha = '".$_SESSION['kode_usaha']."' AND pengeluaran.tanggal >= '".$awal."' AND pengeluaran.tanggal <= '".$akhir."' GROUP BY pengeluaran.tanggal")->result();
        }
    }
}
