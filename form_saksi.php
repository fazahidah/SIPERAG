<?php 
include_once("_header.php");
?>

<html>
</head>
  <body>
  <title>Pemohon Akta Kelahiran</title>
  </head>
  <body>
    <br>
    <form action="service/apiservices.php" method="post">
    <input type="hidden" name="req" value="postsaksi">

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
    <!-- Data saksi -->
    <div class="container-custom">
      <div class="d-grid gap-2 col-10 mx-auto">
          <div class="bg-primary text-white p-3 border font-custom">
              <i class="fas fa-user icon-custom">
              </i> &nbsp;Data Saksi 1</div>
      </div>
    </div>
    <br>
    
    <div class="container">
      <div class="red">
        <p class="fst-normal font-custom2"><b>NIK Saksi</b></p>
      </div>
      <input name="NIKsaksi1" type="number" class="form-control form-custom" id="NIKsaksi1" placeholder="Masukkan NIK pelapor">
    </div>
    <br>

    <div class="container">
      <div class="red">
        <p class="fst-normal font-custom2"><b>Nama Lengkap Saksi</b></p>
      </div>
      <input name="namalengkapsaksi1" type="text" class="form-control form-custom" id="namalengkapsaksi1" placeholder="Masukkan nama lengkap">
    </div>
    <br>

<div class="container right">
  <div class="red form-right2">
    <p class="fst-normal font-custom2"><b>Agama</b></p>
  </div>
  <input name="agamasaksi1" type="text" class="form-control form-custom2" id="agamasaksi1" placeholder="Masukkan agama">
</div>
<br>

<div class="container right">
  <div class="red form-right2">
    <p class="fst-normal font-custom2"><b>Tempat</b></p>
  </div>
  <input name="tempatsaksi1" type="text" class="form-control form-custom2" id="tempatsaksi1" placeholder="contoh : Gresik">
</div>
<br>

<div class="container right">
  <div class="red form-right2">
    <p class="fst-normal font-custom2"><b>Tanggal Lahir</b></p>
  </div>
  <input name="tgllhrsaksi1" type="date" class="form-control form-custom2" id="tgllhrsaksi1">
</div>
<br>

    <div class="container">
      <div class="red">
        <p class="fst-normal font-custom2"><b>Pekerjaan Saksi</b></p>
      </div>
      <input name="pekerjaansaksi1" type="text" class="form-control form-custom" id="pekerjaansaksi1" placeholder="Masukkan pekerjaan">
    </div>
    <br>

<div class="container right">
  <div class="red form-right3">
    <p class="fst-normal font-custom2"><b>Alamat</b></p>
  </div>
  <input name="alamatsaksi1" type="text" class="form-control form-custom3" id="alamatsaksi1" placeholder="masukkan alamat">
</div>
<br>

<!-- Data saksi 2-->
<div class="container-custom">
      <div class="d-grid gap-2 col-10 mx-auto">
          <div class="bg-primary text-white p-3 border font-custom">
              <i class="fas fa-user icon-custom">
              </i> &nbsp;Data Saksi 2</div>
      </div>
    </div>
    <br>
    
    <div class="container">
      <div class="red">
        <p class="fst-normal font-custom2"><b>NIK Saksi</b></p>
      </div>
      <input name="NIKsaksi2" type="number" class="form-control form-custom" id="NIKsaksi2" placeholder="Masukkan NIK pelapor">
    </div>
    <br>

    <div class="container">
      <div class="red">
        <p class="fst-normal font-custom2"><b>Nama Lengkap Saksi</b></p>
      </div>
      <input name="namalengkapsaksi2" type="text" class="form-control form-custom" id="namalengkapsaksi2" placeholder="Masukkan nama lengkap">
    </div>
    <br>

<div class="container right">
  <div class="red form-right2">
    <p class="fst-normal font-custom2"><b>Agama</b></p>
  </div>
  <input name="agamasaksi2" type="text" class="form-control form-custom2" id="agamasaksi2" placeholder="Masukkan agama">
</div>
<br>

<div class="container right">
  <div class="red form-right2">
    <p class="fst-normal font-custom2"><b>Tempat</b></p>
  </div>
  <input name="tempatsaksi2" type="text" class="form-control form-custom2" id="tempatsaksi2" placeholder="contoh : Gresik">
</div>
<br>

<div class="container right">
  <div class="red form-right2">
    <p class="fst-normal font-custom2"><b>Tanggal Lahir</b></p>
  </div>
  <input name="tgllhrsaksi2" type="date" class="form-control form-custom2" id="tgllhrsaksi2">
</div>
<br>

    <div class="container">
      <div class="red">
        <p class="fst-normal font-custom2"><b>Pekerjaan Saksi</b></p>
      </div>
      <input name="pekerjaansaksi2" type="text" class="form-control form-custom" id="pekerjaansaksi2" placeholder="Masukkan pekerjaan">
    </div>
    <br>

<div class="container right">
  <div class="red form-right3">
    <p class="fst-normal font-custom2"><b>Alamat</b></p>
  </div>
  <input name="alamatsaksi2" type="text" class="form-control form-custom3" id="alamatsaksi2" placeholder="masukkan alamat">
</div>
<br>
    
    <div class="col text-center">
        <input type="hidden" name="req" value="postsaksi">
        <button type="submit" class="btn btn-success">Simpan dan Lanjutkan</button>
    </div>
        <br>
      </div>
    </div></form>

    <br>
    <br>

    </body>
</html>