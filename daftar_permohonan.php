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
	<a href="dashboard.php"><button type="button" class="btn btn-secondary">Kembali</button></a>
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
						<form id="formVerif" action="service/ApiServices.php?req=faceVerif" enctype="multipart/form-data" method="post">
							<div class="input-group mb-3">
								<div class="custom-file">
									<input type="file" name="faceVerif" class="custom-file-input" id="inputGroupFile02" accept="image/*" capture="user">
									<label class="custom-file-label" for="inputGroupFile02">Choose file</label>
								</div>
								<div class="input-group-append">
									<button type="button" class="btnVerif input-group-text" id="">Upload</button>
								</div>
							</div>
						</form>
					</td>
					<?php else: ?>
					<td><span class="badge badge-success">Berhasil Verifikasi</span></td>
					<?php endif ?>
					<td>
						<a href="pdf.php"><button type="button" title="Unduh Dokumen" class="btn btn-sm <?=($_SESSION['info'] == "Berhasil")? "btn-success": "btn-warning" ?>" data-permohonan=""><i class="fas fa-check"></i></button></a>
					</td>
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
					<h5 class="modal-title" id="exampleModalLabel">Prosess</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form action="service/ApiServices.php?req=persetujuan" method="post">
					<div class="modal-body">
						<div class="row " style="">
						<!-- Ubah sing bagian iki -->
							<img src="assets/Foto-Formal.jpg" class="rounded-top p-2 col-md-2" width="100" alt="">
							<div class="col-md-8 mt-3" align="center">
								<div class="spinner-border" role="status">
									<span class="sr-only">Loading...</span>
								</div>
								<br>
								<p class="dataLoading">Sedang Mencocokkan Wajah...</p>
							</div>
							<img src="assets/Foto-Formal.jpg" id="foto" class="rounded-top p-2 col-md-2" width="100" alt="">
						</div>
					</div>
					<div class="modal-footer">
						<input type="hidden" name="noPermohonan" id="noPermohonan">
					</div>
				</form>
			</div>
		</div>
	</div>

	<script>
		$("#inputGroupFile02").on("change", function(e){
			$("#foto").attr("src",URL.createObjectURL(e.target.files[0]));
			console.log(URL.createObjectURL(e.target.files[0]));
		})
		$('#inputGroupFile02').on('change',function(){
			//get the file name
			var fileName = $(this).val();
			//replace the "Choose a file" label
			$(this).next('.custom-file-label').html(fileName);
		})
		$(".btnVerif").click(function(){
			$("#modalInfo").modal("show");
			setInterval(() => {
				$("#formVerif").submit();
			}, 3000);
		})

	</script>

	</html>
