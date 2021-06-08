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
					<h1>Tambah Karyawan</h1>
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
            <form action="<?=site_url("Karyawan/post_karyawan")?>" method="post">
			<div class="card-body">
				<div class="form-group">
					<label for="exampleInputEmail1">Nama Karyawan</label>
					<input type="text" class="form-control" name="nama" placeholder="Nama Lengkap">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Email</label>
					<input type="email" class="form-control" name="email" placeholder="Email">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Username</label>
					<input type="text" class="form-control" name="username" placeholder="Username">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Password</label>
					<input type="password" class="form-control" name="password" placeholder="Password">
				</div>
				<div class="form-group">
					<label for="add_manajer">Pilih Cabang</label>
					<select class="form-control" name="cabang">
                        <?php foreach($data_cabang as $d): ?>
						<option value="<?=$d->kode_cabang?>"><?=$d->nama?></option>
                        <?php endforeach ?>
					</select>
				</div>
				<div class="form-group">
					<label for="role">Pilih Jabatan</label>
					<select class="form-control" name="role" id="role">
						<option value="KASIR">Kasir</option>
						<option value="MANAGER">Manager</option>
					</select>
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
