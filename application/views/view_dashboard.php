<?php
$this->load->view("template/css");
$this->load->view("template/head");
$this->load->view("template/sidebar");
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box">
            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Pendapatan</span>
              <span class="info-box-number"><?=(empty($box_pendapatan[0]->pendapatan))? "0": $box_pendapatan[0]->pendapatan ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Pangeluaran</span>
              <span class="info-box-number"><?=(empty($box_pengeluaran[0]->pengeluaran))? "0" : $box_pengeluaran[0]->pengeluaran ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix hidden-md-up"></div>

        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Produk Terjual</span>
              <span class="info-box-number"><?=(empty($box_produk_terjual[0]->produk_terjual))? "0" : $box_produk_terjual[0]->produk_terjual ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Total Transaksi</span>
              <span class="info-box-number"><?=$box_total_transaksi[0]->total_transaksi?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h5 class="card-title">Laporan Rekap Bulanan</h5>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="row">
                <div class="col-md-8">
                  <p class="text-center">
                    <strong>Penjualan: <?=date("01 M, Y - d M, Y")?></strong>
                  </p>

                  <div class="chart">
                    <!-- Sales Chart Canvas -->
                    <canvas id="chart" height="180" style="height: 180px;"></canvas>
                  </div>
                  <!-- /.chart-responsive -->
                </div>
                <!-- /.col -->
                <div class="col-md-4">
                  <p class="text-center">
                    <strong>Menu Terlaris</strong>
                  </p>
                  <?php foreach($produk_terlaris as $i): ?>
                  <div class="progress-group">
                    <?=$i->nama?>
                    <span class="float-right"><b><?=$i->jumlah_beli?></b>/<?=$produk_terjual[0]->jumlah?></span>
                    <div class="progress progress-sm">
                      <div class="progress-bar bg-primary" style="width: <?= round(($i->jumlah_beli / $produk_terjual[0]->jumlah)*100) ?>%"></div>
                    </div>
                  </div>
                  <!-- /.progress-group -->
                  <?php endforeach ?>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- ./card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </div><!--/. container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php 
  $this->load->view("template/footer");
  $this->load->view("template/js");
?>
<script>
  window.onload = function() {
  let tgl1 = [<?php foreach($dataChartPendapatan as $data){ echo "'".$data->tanggal."',"; }?>];
  let tgl2 = [<?php foreach($dataChartPengeluaran as $data){ echo "'".$data->tanggal."',"; }?>];
  let pengeluaran = [<?php foreach($dataChartPengeluaran as $data){ echo "'".$data->total."',"; }?>];
  let tglConcat = tgl1.concat(tgl2);
  let length = tgl1.length + tgl2.length;
  let result = [];
  for (let index = 0; index < length; index++) {
    let cek = result.indexOf(tglConcat[index]);
    if (cek == -1) {
      result.push(tglConcat[index]);
    }
  }
  let len = result.length;
  let res_pengeluaran = []
  let i = 0;
  while (tgl2.length > 0) {
    if (result[i] == tgl2[0]) {
      res_pengeluaran.push(pengeluaran.shift());
      tgl2.shift();
    }else{
      res_pengeluaran.push(0);
    }
    i++;
  }
  var salesChartData = {
    labels  : result,
    datasets: [
      {
        label               : 'Pendapatan',
        backgroundColor     : 'rgba(60,141,188,0.9)',
        borderColor         : 'rgba(60,141,188,0.8)',
        pointRadius         : true,
        pointColor          : '#3b8bba',
        pointStrokeColor    : 'rgba(60,141,188,1)',
        pointHighlightFill  : '#fff',
        pointHighlightStroke: 'rgba(60,141,188,1)',
        data                : [<?php foreach($dataChartPendapatan as $data){ echo "'".$data->total."',"; }?>]
      },
      {
        label               : 'Pengeluaran',
        backgroundColor     : 'rgba(210, 50, 50, 1)',
        borderColor         : 'rgba(210, 50, 50, 1)',
        pointRadius         : true,
        pointColor          : 'rgba(210, 50, 50, 1)',
        pointStrokeColor    : '#c1c7d1',
        pointHighlightFill  : '#fff',
        pointHighlightStroke: 'rgba(220,220,220,1)',
        data                : res_pengeluaran
      },
    ]
  }

  var salesChartOptions = {
    maintainAspectRatio : false,
    responsive: true,
    hoverMode: 'index',
    stacked: false,
    legend: {
      display: false
    },
    scales: {
      xAxes: [{
        gridLines : {
          display : false,
        }
      }],
      yAxes: [{
        gridLines : {
          display : false,
        }
      }]
    }
  }

  // This will get the first returned node in the jQuery collection.
  var ctx = document.getElementById('chart').getContext('2d');
  var salesChart = new Chart(ctx, { 
      type: 'line', 
      data: salesChartData, 
      options: salesChartOptions
    }
  )      
};
</script>