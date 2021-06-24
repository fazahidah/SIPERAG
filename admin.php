<?php 
include_once("_header.php");
?>

<html>
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
					<h4>Admin SIPERAG</h4>
				</div>
			</div>
		</div>
	</div>
	<br>

	<div class="container">
		<h5>Daftar Permohonan</h5>
		<table id="table" class="table table-striped">
			<?php
      $getPermohonan = $db->select("SELECT k.*,p.status FROM akta_kelahiran k LEFT JOIN persetujuan p ON p.no_permohonan = k.no_permohonan ORDER BY 'DESC'");  
    ?>
			<thead>
				<tr>
					<th scope="col">No</th>
					<th scope="col">No Permohonan</th>
					<th scope="col">No Akta</th>
					<th scope="col">Nama</th>
					<th scope="col">Alamat</th>
					<th scope="col">Tanggal</th>
					<th scope="col">Status</th>
					<th scope="col">Pengaturan</th>
				</tr>
			</thead>
			<tbody>
				<?php $no=1; foreach($getPermohonan as $data): ?>
				<tr>
					<td scope="row"><?= $no ?></td>
					<td><?=$data['no_permohonan']?></td>
					<td><?=$data['no_akta']?></td>
					<td><?=$data['nama']?></td>
					<td><?=$data['alamat']?></td>
					<td><?=$data['tanggal']?></td>
					<td><span class="badge <?=(empty($data['status']))? "badge-warning" : (($data['status'] == "1")? "badge-success" : "badge-danger") ?>"><?=(empty($data['status']))? "Pending" : (($data['status'] == "1")? "Disetujui" : "Tidak Disetujui") ?></span></td>
					<td><button type="button" title="Persetujuan" class="btnPersetujuan btn btn-sm btn-primary" data-permohonan="<?=$data['no_permohonan']?>"><i class="fas fa-check"></i></button></td>
				</tr>
				<?php $no++; endforeach ?>
			</tbody>
		</table>
	</div>

	<div class="modal fade" id="modalPersetujuan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
		aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Persetujuan</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
        <form action="service/ApiServices.php?req=persetujuan" method="post">
				<div class="modal-body">
					<div class="form-group">
            <label for="addPersetujuan">Persetujuan</label>
            <select required class="form-control" name="addPersetujuan" id="addPersetujuan">
              <option selected disable value>-Pilih-</option>
              <option value="1">Setujui</option>
              <option value="0">Tidak Disetujui</option>
            </select>
            <div class="form-group">
              <label for="addKeterangan">Keterangan</label>
              <input type="text" name="addKeterangan" id="addKeterangan" class="form-control" placeholder="Keterangan" aria-describedby="">
            </div>
          </div>
				</div>
				<div class="modal-footer">
          <input type="hidden" name="noPermohonan" id="noPermohonan">
					<button type="submit" class="btn btn-success">Simpan</button>
				</div>
        </form>
			</div>
		</div>
	</div>

<script>
  $("#table").on("click",".btnPersetujuan",function(){
    let noPermohonan = $(this).data("permohonan");
    $("#modalPersetujuan").modal("show");
    $("#noPermohonan").val(noPermohonan);
  })
</script>
</html>
