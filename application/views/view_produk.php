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
				<h3 class="card-title">Tambah Produk</h3>

				<div class="card-tools">
					<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
						title="Collapse">
						<i class="fas fa-plus"></i></button>
				</div>
			</div>
			<div class="card-body">
				<div class="row">
					<form action="<?=site_url()?>produk/tambah_produk" method="post" class="form-inline col-12">
						<div class="form-group col-4">
							<label for="inputMenu">Nama Menu:</label>
							<input type="text" name="inputMenu" id="inputMenu" class="form-control"
								placeholder="ex: burger" aria-describedby="inputMenu">
						</div>
						<div class="form-group col-4">
							<label for="inputHarga">Harga</label>
							<input type="text" name="inputHarga" id="inputHarga" class="form-control"
								placeholder="ex: 5000" aria-describedby="inputHarga">
						</div>
						<div class="form-group col-3">
							<label for="inputKategori">Kategori:</label>
							<select class="form-control" name="inputKategori" id="inputKategori">
								<?php foreach($kategori as $i): ?>
								<option value="<?=$i->id_kategori?>"><?=$i->kategori?></option>
								<?php endforeach ?>
							</select>
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
							<th>Nama Menu</th>
							<th>Harga</th>
							<th>kategori</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php $no=1; foreach($menu as $row): ?>
						<tr>
							<td><?= $no ?></td>
							<td><?= $row->nama?></td>
							<td><?= $row->harga?></td>
							<td><?= $row->kategori?></td>
							<td>
								<a href="javascript:void(0)" class="edit_data btn btn-warning btn-xs"
									data-id="<?=$row->id_produk?>" data-nama="<?=$row->nama?>" data-harga="<?=$row->harga?>" data-kategori="<?=$row->id_kategori?>"
									data-toggle="modal" data-target="#modal-edit"><i class="far fa-edit"></i></a>
								<a href="javascript:void(0)" class="delete_data btn btn-danger btn-xs"
									data-id="<?=$row->id_produk?>" data-toggle="modal" data-target="#modal-delete"><i
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
					<form action="<?=site_url("produk/edit_produk")?>" method="post">
						<div class="modal-body">
							<input type="hidden" name="idProdukEdit" id="idProdukEdit">
							<div class="form-group">
								<label for="editNama">Nama</label>
								<input type="text" class="form-control" name="editNama" id="editNama">
							</div>
							<div class="form-group">
								<label for="editHarga">Harga</label>
								<input type="text" class="form-control" name="editHarga" id="editHarga">
							</div>
                            <div class="form-group">
                              <label for="editKategori">Kategori</label>
                              <select class="form-control" name="editKategori" id="editKategori">
                                <?php foreach($kategori as $i): ?>
								<option value="<?=$i->id_kategori?>"><?=$i->kategori?></option>
								<?php endforeach ?>
                              </select>
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
						<p>Apakah Anda Yakin Akan Menghapus Produk Ini ?</p>
					</div>
					<div class="modal-footer justify-content-between">
						<form action="<?= site_url("produk/hapus_produk")?>" method="post">
							<input type="hidden" name="idProdukHapus" id="idProdukHapus">
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
		let id_produk = $(this).data("id");
		let nama = $(this).data("nama");
		let harga = $(this).data("harga");
		let kategori = $(this).data("kategori");
		$("#idProdukEdit").val(id_produk);
		$("#editNama").val(nama);
		$("#editHarga").val(harga);
		$("#editKategori").val(kategori);
	});

	$("#dataTable").on("click", ".delete_data", function () {
		let id_produk = $(this).data("id");
		$("#idProdukHapus").val(id_produk);
	});
</script>
</body>

</html>
