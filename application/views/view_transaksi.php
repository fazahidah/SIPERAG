<?php 
 $this->load->view("template/css");
 $this->load->view("template/head");
 $this->load->view("template/sidebar");
 ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Riwayat Transaksi</h1>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>

	<!-- Main content -->
	<section class="content">

  <!-- Default box -->
  <div class="card collapsed-card">
			<div class="card-header" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
				<h3 class="card-title">Filter Tanggal</h3>

				<div class="card-tools">
					<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
						title="Collapse">
						<i class="fas fa-plus"></i></button>
				</div>
			</div>
			<div class="card-body">
				<div class="row">
					<form action="<?=site_url("transaksi/riwayat")?>" method="post" class="form-inline col-12">
						<div class="form-group col-4">
							<label for="awal">Tanggal Awal:</label>
							<input type="date" name="awal" id="awal" class="form-control" value="<?=$awal?>" required>
						</div>
						<div class="form-group col-4">
							<label for="akhir">Tanggal Akhir</label>
							<input type="date" name="akhir" id="akhir" class="form-control" value="<?=$akhir?>" required>
						</div>
						<button type="submit" name="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
			</div>
			<!-- /.card-body -->
		</div>
		<!-- /.card -->

		<!-- Default box -->
		<div class="card">
			<div class="card-body">
      <div class="row">
        <nav class="w-100">
          <div class="nav nav-tabs" id="product-tab" role="tablist">
            <a class="nav-item nav-link active" id="penjualan-kotor-tab" data-toggle="tab" href="#penjualan-kotor" role="tab" aria-controls="penjualan-kotor" aria-selected="true">Penjualan Kotor</a>
            <a class="nav-item nav-link" id="penjualan-bersih-tab" data-toggle="tab" href="#penjualan-bersih" role="tab" aria-controls="penjualan-bersih" aria-selected="false">Penjualan Bersih</a>
            <a class="nav-item nav-link" id="pengeluaran-tab" data-toggle="tab" href="#pengeluaran" role="tab" aria-controls="pengeluaran" aria-selected="false">Pengeluaran</a>
          </div>
        </nav>
        <div class="tab-content p-3" id="nav-tabContent" style="width:100%">
          <div class="tab-pane fade show active" id="penjualan-kotor" role="tabpanel" aria-labelledby="penjualan-kotor-tab">
            <center>
              <canvas id="penjualan_kotor" style="min-height: 300px; height: 300px; max-height: 300px; max-width: 70%;"></canvas>
            </center>
          </div>
          <div class="tab-pane fade" id="penjualan-bersih" role="tabpanel" aria-labelledby="penjualan-bersih-tab">
            <center>
              <canvas id="penjualan_bersih" style="min-height: 300px; height: 300px; max-height: 300px; max-width: 70%;"></canvas>
            </center>
          </div>
          <div class="tab-pane fade" id="pengeluaran" role="tabpanel" aria-labelledby="pengeluaran-tab">
            <center>
              <canvas id="chart_pengeluaran" style="min-height: 300px; height: 300px; max-height: 300px; max-width: 70%;"></canvas>
            </center>
          </div>
        </div>
      </div>
        <hr>
        <table class="w-100" style="border-top:1px solid grey;border-left:1px solid grey;border-right:1px solid grey;border-bottom:1px solid grey;">
          <tr>
            <td>Penjualan Kotor</td>
            <td align="right">Rp <?= $penjualan_kotor[0]->total?></td>
          </tr>
        </table>
        <table class="w-100" style="border-left:1px solid grey;border-right:1px solid grey;border-bottom:1px solid grey;">
          <tr>
            <td>Penjualan Bersih</td>
            <td align="right">Rp <?= $penjualan_bersih[0]->total?></td>
          </tr>
        </table>
        <table class="w-100" style="border-left:1px solid grey;border-right:1px solid grey;border-bottom:1px solid grey;">
          <tr>
            <td>Pengeluaran</td>
            <td align="right">Rp <?= $pengeluaran[0]->total?></td>
          </tr>
        </table>
			</div>
			<!-- /.card-body -->
		</div>
		<!-- /.card -->

	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php
$this->load->view("template/footer");
$this->load->view("template/js");
?>
</body>

<script>
   var dataPenjualanKotor = {
        labels: [<?php foreach($chartPenjualanKotor as $i){ echo "'".$i->tanggal."',"; } ?>],
        datasets: [{
            label: 'Total Penjualan',
            borderColor: 'rgb(255, 99, 132)',
            backgroundColor: 'rgb(255, 99, 132)',
            fill: false,
            data: [<?php foreach($chartPenjualanKotor as $i) { echo "'".$i->total."',"; }?> ],
            yAxisID: 'y-axis-1',
        }]
    };

   var dataPenjualanBersih = {
        labels: [<?php foreach($chartPenjualanBersih as $i){ echo "'".$i->tanggal."',"; } ?>],
        datasets: [{
            label: 'Total Penjualan',
            borderColor: 'rgb(255, 99, 132)',
            backgroundColor: 'rgb(255, 99, 132)',
            fill: false,
            data: [<?php foreach($chartPenjualanBersih as $i) { echo "'".($i->pendapatan - $i->pengeluaran)."',"; }?> ],
            yAxisID: 'y-axis-1',
        }]
    };

   var dataPengeluaran = {
        labels: [<?php foreach($chartPengeluaran as $i){ echo "'".$i->tanggal."',"; } ?>],
        datasets: [{
            label: 'Pengeluaran',
            borderColor: 'rgb(255, 99, 132)',
            backgroundColor: 'rgb(255, 99, 132)',
            fill: false,
            data: [<?php foreach($chartPengeluaran as $i) { echo "'".$i->total."',"; }?> ],
            yAxisID: 'y-axis-1',
        }]
    };

    window.onload = function() {
      var penjualanKotor = document.getElementById('penjualan_kotor').getContext('2d');
      var penjualanBersih = document.getElementById('penjualan_bersih').getContext('2d');
      var pengeluaran = document.getElementById('chart_pengeluaran').getContext('2d');
			window.myLine = Chart.Line(penjualanKotor, {
				data: dataPenjualanKotor,
				options: {
					responsive: true,
					hoverMode: 'index',
					stacked: false,
					title: {
						display: true,
						text: 'Penjualan Kotor'
					},
					scales: {
						yAxes: [{
							type: 'linear', 
							display: true,
							position: 'left',
							id: 'y-axis-1',

							// gridLines: {
							// 	drawOnChartArea: false,
							// },
						}],
					}
				}
      });
      
			window.myLine = Chart.Line(pengeluaran, {
				data: dataPengeluaran,
				options: {
					responsive: true,
					hoverMode: 'index',
					stacked: false,
					title: {
						display: true,
						text: 'Pengeluaran'
					},
					scales: {
						yAxes: [{
							type: 'linear', 
							display: true,
							position: 'left',
							id: 'y-axis-1',

							// gridLines: {
							// 	drawOnChartArea: false,
							// },
						}],
					}
				}
      });
      
			window.myLine = Chart.Line(penjualanBersih, {
				data: dataPenjualanBersih,
				options: {
					responsive: true,
					hoverMode: 'index',
					stacked: false,
					title: {
						display: true,
						text: 'Penjualan Bersih'
					},
					scales: {
						yAxes: [{
							type: 'linear', 
							display: true,
							position: 'left',
							id: 'y-axis-1',

							// gridLines: {
							// 	drawOnChartArea: false,
							// },
						}],
					}
				}
			});
    };
  
</script>

</html>