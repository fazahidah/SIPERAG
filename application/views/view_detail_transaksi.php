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
			
		</div><!-- /.container-fluid -->
	</section>

	<!-- Main content -->
	<section class="content">

  <!-- Default box -->
		<!-- Default box -->
		<div class="card">
			<div class="card-body">
                <button id="back" class="btn btn-default">Back</button>
                <br>
                <p>KODE TRANSAKSI: <?=$kode_transaksi?></p>
				<table id="dataTable" class="table">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama</th>
							<th>Qty</th>
							<th>Harga</th>
							<th>Subtotal</th>
						</tr>
					</thead>
					<tbody>
						<?php $no=1; foreach($detailTransaksi as $row): ?>
						<tr>
							<td><?= $no ?></td>
							<td><?= $row->nama?></td>
							<td><?= $row->jumlah_beli?></td>
							<td><?= $row->harga?></td>
							<td><?= $row->subtotal?></td>
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
<script>
    $("#back").click(function(){
        window.history.back();
    })
</script>

</html>
