<?php 
include_once("_header.php");
?>

</head>

<body>
	<br>
	<div class="">

	</div>
	<br>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="shadow p-3 mb-2 bg-body rounded custom1">
					<h4>Daftar Permohonan Selesai</h4>
				</div>
			</div>
		</div>
	</div>
	<br>

	<div class="container">
		<table id="table" class="table table-striped">
			<?php
      $getPermohonan = $db->select("SELECT k.*,p.status,p.tgl_disetujui FROM akta_kelahiran k LEFT JOIN persetujuan p ON p.no_permohonan = k.no_permohonan ORDER BY 'DESC'");  
    ?>
			<thead>
				<tr>
					<th scope="col">No</th>
					<th scope="col">Jenis Permohonan</th>
					<th scope="col">No Permohonan</th>
					<th scope="col">tanggal Disetujui</th>
					<th scope="col">Verifikasi Pemohon</th>
					<th scope="col">Unduh Dokumen</th>
				</tr>
			</thead>
			<tbody>
				<?php $no=1; foreach($getPermohonan as $data): ?>
				<tr>
					<td scope="row"><?= $no ?></td>
					<td>AKTA KELAHIRAN</td>
					<td><?=$data['no_permohonan']?></td>
					<td><?=$data['tgl_disetujui']?></td>
					<?php if(empty($_SESSION['info'])): ?>
					<td>
						<form action="service/ApiServices.php?req=faceVerif" method="post">
							<div class="input-group mb-3">
								<div class="custom-file">
									<input type="file" class="custom-file-input" id="inputGroupFile02" accept="image/*"capture="user">
									<label class="custom-file-label" for="inputGroupFile02">Choose file</label>
								</div>
								<div class="input-group-append">
									<input type="hidden" value="<?=$data['no_permohonan']?>" name="<?=$data['no_permohonan']?>">
									<button type="submit" class="input-group-text" id="">Upload</button>
								</div>
							</div>
						</form>
					</td>
					<?php else: ?>
					<td><span class="badge badge-success">Berhasil Verifikasi</span></td>
					<?php endif ?>
					<td><a href="#"><button type="button" title="Unduh Dokumen" class="btn btn-sm <?=($_SESSION['info'] == "Berhasil")? "btn-success": "btn-warning" ?>" data-permohonan=""><i class="fas fa-check"></i></button></a></td>
				</tr>
				<?php $no++; endforeach ?>
			</tbody>
		</table>
	</div>

	<div class="modal fade" id="modalInfo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
		aria-hidden="true">
		<div class="modal-dialog " role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Berhasil</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form action="service/ApiServices.php?req=persetujuan" method="post">
					<div class="modal-body">
						<div class="row" style="">
							<img src="assets/Foto-Formal.jpg" class="img-fluid rounded-top p-2" width="100" alt="">
							<img src="assets/Foto-Formal.jpg" class="img-fluid rounded-top p-2" width="100" alt="">
						</div>
					</div>
					<div class="modal-footer">
						<input type="hidden" name="noPermohonan" id="noPermohonan">
						<button type="button" class="btn btn-success" data-dismiss="modal">Ok</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<script>
		$("#modalInfo").modal("show");
	</script>

	</html>
