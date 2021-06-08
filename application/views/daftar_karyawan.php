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
					<h1>Daftar Karyawan</h1>
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
							<th>Jabatan</th>
							<th>Cabang</th>
							<th>Alamat</th>
							<th>Pengaturan</th>
						</tr>
					</thead>
					<tbody>
						<?php $no=1; foreach($daftar_karyawan as $row): ?>
						<tr>
							<td><?= $no ?></td>
							<td><?= $row->nama?></td>
							<td><?= $row->role?></td>
							<td><?= $row->nama_cabang?></td>
							<td><?= $row->alamat?></td>
							<td>
								<a href="javascript:void(0)" class="edit_data btn btn-warning btn-xs"
									data-iduser="<?=$row->id_user?>" data-nama="<?=$row->nama?>" data-role="<?=$row->role?>" data-username="<?=$row->username?>" data-email="<?=$row->email?>"
									data-toggle="modal" data-target="#modal-edit"><i class="far fa-edit"></i></a>
								<a href="javascript:void(0)" class="delete_data btn btn-danger btn-xs"
									data-id="<?=$row->id_user?>" data-toggle="modal" data-target="#modal-delete"><i class="fas fa-trash"></i></a>
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
					<form action="<?=site_url("Karyawan/update_karyawan")?>" method="post">
						<div class="modal-body">
							<input type="hidden" name="idUserEdit" id="idUserEdit">
							<div class="form-group">
								<label for="editNama">Nama</label>
								<input type="text" class="form-control" name="editNama" id="editNama">
							</div>
							<div class="form-group">
								<label for="editEmail">Email</label>
								<input type="email" class="form-control" name="editEmail" id="editEmail">
							</div>
							<div class="form-group">
								<label for="editUsername">Username</label>
								<input type="text" class="form-control" name="editUsername" id="editUsername">
							</div>
							<div class="form-group">
							  <label for="editPassword">Password</label>
							  <input type="text" class="form-control" name="editPassword" id="editPassword" aria-describedby="info" placeholder="Password">
							  <small id="info" class="form-text text-red">Biarkan Kosong Jika Tidak Ingin Mengganti</small>
							</div>
                            <div class="form-group">
                              <label for="editRole">Role</label>
                              <select class="form-control" name="editRole" id="editRole">
								<option value="KASIR">KASIR</option>
								<option value="MANAGER">MANAGER</option>
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
						<p>Apakah Anda Yakin Akan Menghapus Akun Karyawan Ini ?</p>
					</div>
					<div class="modal-footer justify-content-between">
						<form action="<?= site_url("Karyawan/delete_karyawan")?>" method="post">
							<input type="hidden" name="idUserDelete" id="idUserDelete">
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
		let idUser = $(this).data("iduser");
		let nama = $(this).data("nama");
		let email = $(this).data("email");
		let username = $(this).data("username");
		let role = $(this).data("role");
		$("#idUserEdit").val(idUser);
		$("#editNama").val(nama);
		$("#editEmail").val(email);
		$("#editUsername").val(username);
		$("#editRole").val(role);
	});

	$("#dataTable").on("click", ".delete_data", function () {
		let id_user = $(this).data("id");
		$("#idUserDelete").val(id_user);
	});
</script>
</body>

</html>
