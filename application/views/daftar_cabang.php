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
					<h1>Daftar Cabang</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?=site_url("dashboard")?>">Home</a></li>
						<li class="breadcrumb-item active">Daftar Cabang</li>
					</ol>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>

	<!-- Main content -->
	<section class="content">

		<!-- Default box -->
		<div class="card">
			<div class="card-body">
				<table id="dataTable" class="table dataTable">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama</th>
							<th>Alamat</th>
							<th>Pengaturan</th>
						</tr>
					</thead>
					<tbody>
						<?php $no=1; foreach($daftar_cabang as $row): ?>
						<tr>
							<td><?= $no ?></td>
							<td><?= $row->nama?></td>
							<td><?= $row->alamat?></td>
							<td>
								<a href="javascript:void(0)" class="edit_data btn btn-warning btn-xs"
									data-id="<?=$row->id_cabang?>" data-kodeusaha="<?=$row->kode_usaha?>" data-kodecabang="<?=$row->kode_cabang?>" data-nama="<?=$row->nama?>" data-alamat="<?=$row->alamat?>"
									data-toggle="modal" data-target="#modal-edit"><i class="far fa-edit"></i></a>
								<a href="javascript:void(0)" class="delete_data btn btn-danger btn-xs"
									data-id="<?=$row->id_cabang?>" data-toggle="modal" data-target="#modal-delete"><i class="fas fa-trash"></i></a>
							</td>
						</tr>
						<?php $no++; endforeach ?>
					</tbody>
				</table>
			</div>
			<!-- /.card-body -->
		</div>
		<!-- /.card -->

		<div class="modal fade" id="modal-edit">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Edit Cabang</h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<form action="<?=site_url("Karyawan/update_karyawan")?>" method="post">
						<div class="modal-body">
							<input type="hidden" name="idCabangEdit" id="idCabangEdit">
							<div class="form-group">
								<label for="editNama">Nama</label>
								<input type="text" class="form-control" name="editNama" id="editNama">
							</div>
							<div class="form-group">
								<label for="editAlamat">Alamat</label>
								<input type="tex" class="form-control" name="editAlamat" id="editAlamat">
							</div>
						</div>
						<div class="modal-footer justify-content-between">
							<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
							<button type="submit" class="btn btn-primary">Simpan</button>
						</div>
					</form>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>
		<!-- /.modal -->

		<div class="modal fade" id="modal-delete">
			<div class="modal-dialog modal-sm">
				<div class="modal-content bg-danger">
					<div class="modal-header">
						<h4 class="modal-title">Perhatian !!!</h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<p>Apakah Anda Yakin Akan Menghapus Cabang Ini ?</p>
					</div>
					<div class="modal-footer justify-content-between">
						<form action="<?= site_url("Karyawan/delete_karyawan")?>" method="post">
							<input type="hidden" name="idCabangDelete" id="idCabangDelete">
							<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
							<button type="submit" class="btn btn-primary">Yakin</button>
						</form>
					</div>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>
		<!-- /.modal -->

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
    $("#dataTable").on("click", ".edit_data", function () {
		let id = $(this).data("id");
		let nama = $(this).data("nama");
		let alamat = $(this).data("alamat");
		$("#idCabangEdit").val(id);
		$("#editNama").val(nama);
		$("#editEmail").val(email);
	});

	$("#dataTable").on("click", ".delete_data", function () {
		let id = $(this).data("id");
		$("#idCabangDelete").val(id);
	});
</script>
</html>
