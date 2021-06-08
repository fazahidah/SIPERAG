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
					<h1>Tambah Cabang</h1>
				</div>
				<div class="col-sm-6">

				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>

	<!-- Main content -->
	<section class="content">

		<!-- Default box -->
		<div class="card">
		<form action="<?=site_url('Cabang/post_cabang')?>" method="post">
			<div class="card-body">
				<div class="form-group">
					<label for="nama_cabang">Nama Cabang</label>
					<input type="text" class="form-control" id="nama_cabang" placeholder="Nama Cabang" name="nama_cabang" required>
				</div>
				<div class="form-group">
					<label for="alamat_cabang">Alamat Cabang</label>
					<input type="text" class="form-control" id="alamat_cabang" placeholder="Alamat Cabang" name="alamat_cabang" required>
				</div>
			</div>
			<!-- /.card-body -->
			<div class="card-footer">
				<button type="submit" class="btn btn-primary float-right">Submit</button>
			</div>
		</form>
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
