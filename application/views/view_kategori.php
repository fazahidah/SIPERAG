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
		<div class="card collapsed-card">
			<div class="card-header" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
				<h3 class="card-title">Tambah Kategori</h3>

				<div class="card-tools">
					<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
						title="Collapse">
						<i class="fas fa-plus"></i></button>
				</div>
			</div>
			<div class="card-body">
				<div class="row">
					<form action="<?=site_url()?>produk/tambah_kategori" method="post" class="form-inline col-12">
						<div class="form-group col-5">
							<label for="inputKategori">Nama Kategori:</label>
							<input type="text" name="inputKategori" id="inputKategori" class="form-control"
								placeholder="ex: Makanan" aria-describedby="inputMenu">
						</div>
						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
			</div>
			<!-- /.card-body -->
		</div>
		<!-- /.card -->

		<!-- Default box -->
		<div class="card">
			<div class="card-header">
				<h3 class="card-title">Daftar Kategori</h3>
			</div>
			<div class="card-body">
				<table id="dataTable" class="table dataTable">
					<thead>
						<tr>
							<th>No</th>
							<th>Kategori</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php $no=1; foreach($kategori as $row): ?>
						<tr>
							<td><?=$no?></td>
							<td><?=$row->kategori?></td>
							<td>
								<a href="javascript:void(0)" class="edit_data btn btn-warning btn-xs"
									data-id="<?=$row->id_kategori?>" data-kategori="<?=$row->kategori?>"
									data-toggle="modal" data-target="#modal-edit"><i class="far fa-edit"></i></a>
								<a href="javascript:void(0)" class="delete_data btn btn-danger btn-xs"
									data-id="<?=$row->id_kategori?>" data-toggle="modal" data-target="#modal-delete"><i
										class="fas fa-trash"></i></a>
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
						<h4 class="modal-title">Edit Kategori</h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<form action="<?=site_url("produk/edit_kategori")?>" method="post">
						<div class="modal-body">
							<input type="hidden" name="idKategori" id="idKategori">
							<div class="form-group">
								<label for="editKategori">Kategori</label>
								<input type="text" class="form-control" name="editKategori" id="editKategori">
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
						<p>Apakah Anda Yakin Akan Mengnhapus Kategori Ini ?</p>
					</div>
					<div class="modal-footer justify-content-between">
						<form action="<?= site_url("produk/hapus_kategori")?>" method="post">
							<input type="hidden" name="idKategori" id="idHapusKategori">
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
<script>
	$("#dataTable").on("click", ".edit_data", function () {
		let id_kategori = $(this).data("id");
		let kategori = $(this).data("kategori");
		$("#idKategori").val(id_kategori);
		$("#editKategori").val(kategori);
	});

	$("#datatable").on("cick", ".delete_data", function () {
		let id_kategori = $(this).data("id");
		$("#idHapusKategori").val(id_kategori);
	});

</script>
</body>

</html>
