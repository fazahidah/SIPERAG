<?php 
include_once("_header.php");
?>

<html>
  <body>
      <br>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="shadow p-3 mb-2 bg-body rounded custom1"><h4>Permohonan Akta Kelahiran</h4></div>
        </div>
      </div>
    </div>
    <div class="container-custom4">
      <div class="d-grid gap-2 col-10 mx-auto">
    <a class="btn btn-primary" href="dashboard.php" role="button" style="margin-top:10pt;">Kembali ke dashboard</a>
      </div>
    </div>
    <br>
    <form action="service/ApiServices.php?req=uploadFile" method="POST">
  <div class="form-group">
    <label for="exampleFormControlFile1">Upload Surat pertanggungjawaban suami istri</label>
    <input name="berkas1" type="file" class="form-control-file" id="berkas1">
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">Upload Surat pertanggungjawaban suami istri</label>
    <input name="berkas2" type="file" class="form-control-file" id="berkas2">
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">Upload Surat pertanggungjawaban suami istri</label>
    <input name="berkas3" type="file" class="form-control-file" id="berkas3">
  </div>
  <div class="col text-center">
        <button type="submit" class="btn btn-success">Upload dan Lanjutkan</button>
    </div>
</form>
</body>