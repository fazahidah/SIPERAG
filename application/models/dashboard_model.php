<?php 
defined("BASEPATH") or exit("ERROR");

class Dashboard_model extends CI_model
{
    public function box_pendapatan($date){
        return $this->db->select("sum(grand_total) as pendapatan")->from("transaksi")->where("tanggal",$date)->get()->result();
    }
    public function box_pengeluaran($date){
        return $this->db->select("sum(jumlah_pengeluaran) as pengeluaran")->from("pengeluaran")->where("tanggal",$date)->get()->result();
    }
    public function box_produk_terjual($date){
        return $this->db->query("SELECT SUM(detail_transaksi.jumlah_beli) as produk_terjual FROM detail_transaksi, transaksi WHERE detail_transaksi.kode_transaksi = transaksi.kode_transaksi AND transaksi.tanggal = '".$date."'")->result();
    }
    public function box_total_transaksi($date){
        return $this->db->select("count(id_transaksi) as total_transaksi")->from("transaksi")->where("tanggal",$date)->get()->result();
    }

    public function produk_terlaris(){
        return $this->db->select("p.nama,sum(dt.jumlah_beli) as jumlah_beli")->from("produk p, detail_transaksi dt")->where("dt.id_produk = p.id_produk")->group_by("p.id_produk")->order_by("jumlah_beli","DESC")->limit(4)->get()->result();
    }
    public function produk_terjual(){
        return $this->db->select("sum(dt.jumlah_beli) as jumlah")->from("produk p, detail_transaksi dt")->where("dt.id_produk = p.id_produk")->get()->result();
    }

    public function dataChart(){
        $awal = date("Y-m-01");
        $akhir = date("Y-m-d");
        return $this->db->query("SELECT transaksi.tanggal, sum(transaksi.grand_total) as total, SUM(pengeluaran.jumlah_pengeluaran) as pengeluaran FROM transaksi LEFT JOIN pengeluaran ON pengeluaran.tanggal = transaksi.tanggal WHERE transaksi.tanggal >= '".$awal."'  AND transaksi.tanggal <= '".$akhir."' GROUP BY transaksi.tanggal")->result();
    }
}
