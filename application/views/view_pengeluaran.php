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
		<div class="card ">
			<div class="card-header" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
				<h3 class="card-title">Tambah Produk</h3>

				<div class="card-tools">
					<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
						title="Collapse">
						<i class="fas fa-plus"></i></button>
				</div>
			</div>
			<div class="card-body">
				<div class="row">
					<form action="<?=site_url("pengeluaran/tambah_pengeluaran")?>" method="post" class="form-inline col-12">
						<div class="form-group col-4">
							<label for="addKeterangan">Keterangan:</label>
							<input type="text" name="addKeterangan" id="addKeterangan" class="form-control"
								placeholder="ex: Beli Susu" aria-describedby="addKeterangan" required>
						</div>
						<div class="form-group col-4">
							<label for="addJumlah">Jumlah</label>
							<input type="number" name="addJumlah" id="addJumlah" class="form-control"
								placeholder="ex: 5000" aria-describedby="addJumlah" required>
						</div>
						<div class="form-group col-3">
							<label for="addTanggal">Tanggal</label>
							<input type="date" name="addTanggal" id="addTanggal" class="form-control"
								placeholder="ex: 5000" aria-describedby="addTanggal" required>
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
				<h3 class="card-title">Daftar Produk</h3>
			</div>
			<div class="card-body">
				<table id="dataTable" class="table dataTable">
					<thead>
						<tr>
							<th>No</th>
							<th>Pembuat</th>
							<th>Keterangan</th>
							<th>Jumlah</th>
							<th>Tanggal</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php $no=1; foreach($dataTable as $row): ?>
						<tr>
							<td><?= $no ?></td>
							<td><?= $row->nama?></td>
							<td><?= $row->keterangan?></td>
							<td><?= $row->jumlah_pengeluaran?></td>
							<td><?= $row->tanggal?></td>
							<td>
								<a href="javascript:void(0)" class="edit_data btn btn-warning btn-xs"
									data-id="<?=$row->id_pengeluaran?>" data-nama="<?=$row->nama?>" data-keterangan="<?=$row->keterangan?>" data-jumlah="<?=$row->jumlah_pengeluaran?>"
									data-toggle="modal" data-target="#modal-edit"><i class="far fa-edit"></i></a>
								<a href="javascript:void(0)" class="delete_data btn btn-danger btn-xs"
									data-id="<?=$row->id_pengeluaran?>" data-toggle="modal" data-target="#modal-delete"><i
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
					<form action="<?=site_url("pengeluaran/edit_pengeluaran")?>" method="post">
						<div class="modal-body">
							<input type="hidden" name="idPengeluaranEdit" id="idPengeluaranEdit">
							<div class="form-group">
								<label for="editPembuat">Pembuat</label>
								<input type="text" class="form-control" name="editPembuat" id="editPembuat" readonly>
							</div>
							<div class="form-group">
								<label for="editKeterangan">Keterangan</label>
								<input type="text" class="form-control" name="editKeterangan" id="editKeterangan">
							</div>
							<div class="form-group">
								<label for="editJumlah">Jumlah</label>
								<input type="text" class="form-control" name="editJumlah" id="editJumlah">
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
						<p>Apakah Anda Yakin Akan Menghapus Pengeluaran Ini ?</p>
					</div>
					<div class="modal-footer justify-content-between">
						<form action="<?= site_url("pengeluaran/hapus_pengeluaran")?>" method="post">
							<input type="hidden" name="idPengeluaranHapus" id="idPengeluaranHapus">
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
		let id = $(this).data("id");
		let nama = $(this).data("nama");
		let jumlah = $(this).data("jumlah");
		let keterangan = $(this).data("keterangan");
		$("#idPengeluaranEdit").val(id);
		$("#editPembuat").val(nama);
		$("#editJumlah").val(jumlah);
		$("#editKeterangan").val(keterangan);
	});

	$("#dataTable").on("click", ".delete_data", function () {
		let id = $(this).data("id");
		$("#idPengeluaranHapus").val(id);
	});
</script>
</body>

</html>
