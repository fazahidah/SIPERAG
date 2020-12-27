<?php
defined("BASEPATH")or exit("ERROR");

class Transaksi_model extends CI_model 
{
    public function insertData($table,$data){
        return $this->db->insert($table,$data);
    }

    public function updateData($table,$data,$where){
        return $this->db->update($table,$data,$where);
    }
    
    public function deleteData($table,$where){
        return $this->db->delete($table,$where);
    }

    public function dataRiwayat($filter){
        if ($filter != "") {
            return $this->db->select("transaksi.*,user.nama")->from("transaksi")->join("user","transaksi.kode_user = user.kode_user")->where("tanggal >=",$filter['awal'])->where("tanggal <=", $filter['akhir'])->get()->result();
        }else{
            return $this->db->select("transaksi.*,user.nama")->from("transaksi")->join("user","transaksi.kode_user = user.kode_user")->where("tanggal",date("Y-m-d"))->get()->result();
        }
    }

    public function dataChartPenjualanKotor($filter){
        if ($filter == "") {
            $awal = date("Y-m-01");
            $akhir = date("Y-m-d");
            return $this->db->query("SELECT transaksi.tanggal, sum(transaksi.grand_total) as total FROM transaksi WHERE transaksi.tanggal >= '".$awal."' AND transaksi.tanggal <= '".$akhir."' GROUP BY transaksi.tanggal")->result();
        }else{
            return $this->db->query("SELECT transaksi.tanggal, sum(transaksi.grand_total) as total FROM transaksi WHERE transaksi.tanggal >= '".$filter['awal']."' AND transaksi.tanggal <= '".$akhir."' GROUP BY transaksi.tanggal")->result();
        }
    }

    public function dataChartPengeluaran($filter){
        if ($filter == "") {
            $awal = date("Y-m-01");
            $akhir = date("Y-m-d");
            return $this->db->query("SELECT pengeluaran.tanggal, sum(pengeluaran.jumlah_pengeluaran) as total FROM pengeluaran WHERE pengeluaran.tanggal >= '".$awal."' AND pengeluaran.tanggal <= '".$akhir."' GROUP BY pengeluaran.tanggal")->result();
        }else{
            return $this->db->query("SELECT pengeluaran.tanggal, sum(pengeluaran.jumlah_pengeluaran) as total FROM pengeluaran WHERE pengeluaran.tanggal >= '".$filter['awal']."' AND pengeluaran.tanggal <= '".$akhir."' GROUP BY pengeluaran.tanggal")->result();
        }
    }

    public function dataChartPenjualanBersih($filter){
        if ($filter == "") {
            $awal = date("Y-m-01");
            $akhir = date("Y-m-d");
            return $this->db->query("SELECT transaksi.tanggal, sum(transaksi.grand_total) as pendapatan ,SUM(pengeluaran.jumlah_pengeluaran) as pengeluaran FROM transaksi LEFT JOIN pengeluaran ON pengeluaran.tanggal = transaksi.tanggal WHERE transaksi.tanggal >= '".$awal."' AND transaksi.tanggal <= '".$akhir."' GROUP BY transaksi.tanggal")->result();
        }else{
            return $this->db->query("SELECT transaksi.tanggal, sum(transaksi.grand_total) as pendapatan ,SUM(pengeluaran.jumlah_pengeluaran) as pengeluaran FROM transaksi LEFT JOIN pengeluaran ON pengeluaran.tanggal = transaksi.tanggal WHERE transaksi.tanggal >= '".$filter['awal']."' AND transaksi.tanggal <= '".$akhir."' GROUP BY transaksi.tanggal")->result();
        }
    }

    public function getPenjualanKotor($filter){
        if ($filter == "") {
            $awal = date("Y-m-01");
            $akhir = date("Y-m-d");
            return $this->db->query("SELECT sum(transaksi.grand_total) as total FROM transaksi WHERE transaksi.tanggal >= '".$awal."' AND transaksi.tanggal <= '".$akhir."'")->result();
        }else{
            return $this->db->query("SELECT sum(transaksi.grand_total) as total FROM transaksi WHERE transaksi.tanggal >= '".$filter['awal']."' AND transaksi.tanggal <= '".$akhir."'")->result();
        }
    }

    public function getPenjualanBersih($filter){
        if ($filter == "") {
            $awal = date("Y-m-01");
            $akhir = date("Y-m-d");
            return $this->db->query("SELECT (sum(transaksi.grand_total) - (SELECT SUM(pengeluaran.jumlah_pengeluaran) FROM pengeluaran WHERE pengeluaran.tanggal >= '".$awal."' AND pengeluaran.tanggal <= '".$akhir."' )) as total FROM transaksi WHERE transaksi.tanggal >= '".$awal."' AND transaksi.tanggal <= '".$akhir."'")->result();
        }else{
            return $this->db->query("SELECT (sum(transaksi.grand_total) - (SELECT SUM(pengeluaran.jumlah_pengeluaran) FROM pengeluaran WHERE pengeluaran.tanggal >= '".$filter['awal']."' AND pengeluaran.tanggal <= '".$filter['akhir']."' ))) as total FROM transaksi WHERE transaksi.tanggal >= '".$filter['awal']."' AND transaksi.tanggal <= '".$akhir."'")->result();
        }
    }

    public function getTotalPengeluaran($filter){
        if ($filter == "") {
            $awal = date("Y-m-01");
            $akhir = date("Y-m-d");
            return $this->db->query("SELECT sum(pengeluaran.jumlah_pengeluaran) as total FROM pengeluaran WHERE pengeluaran.tanggal >= '".$awal."' AND pengeluaran.tanggal <= '".$akhir."' GROUP BY pengeluaran.tanggal")->result();
        }else{
            return $this->db->query("SELECT sum(pengeluaran.jumlah_pengeluaran) as total FROM pengeluaran WHERE pengeluaran.tanggal >= '".$filter['awal']."' AND pengeluaran.tanggal <= '".$filter['akhir']."' GROUP BY pengeluaran.tanggal")->result();
        }
    }

    public function getDetailTransaksi($kode_transaksi){
        return $this->db->query("SELECT detail_transaksi.*,produk.* FROM detail_transaksi,produk WHERE detail_transaksi.id_produk = produk.id_produk AND detail_transaksi.kode_transaksi = '".$kode_transaksi."' ")->result();
    }
}
