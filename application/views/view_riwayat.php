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
				<h3 class="card-title">Filter Riwayat</h3>

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
							<input type="date" name="awal" id="awal" class="form-control" required>
						</div>
						<div class="form-group col-4">
							<label for="akhir">Tanggal Akhir</label>
							<input type="date" name="akhir" id="akhir" class="form-control" required>
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
				<table id="dataTable" class="table dataTable">
					<thead>
						<tr>
							<th>No</th>
							<th>Pembuat</th>
							<th>Kode Transaksi</th>
							<th>Grand Total</th>
							<th>Total Bayar</th>
							<th>Tanggal</th>
							<th>Catatan</th>
						</tr>
					</thead>
					<tbody>
						<?php $no=1; foreach($dataTable as $row): ?>
						<tr>
							<td><?= $no ?></td>
							<td><?= $row->nama?></td>
							<td><a href="<?=site_url('transaksi/detail_transaksi/').$row->kode_transaksi?>"><?= $row->kode_transaksi?></a></td>
							<td><?= $row->grand_total?></td>
							<td><?= $row->total_bayar?></td>
							<td><?= $row->tanggal?></td>
							<td><?= $row->catatan?></td>
						</tr>
						<?php $no++; endforeach ?>
					</tbody>
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

</html>
