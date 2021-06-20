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
    <input type="hidden" name="req" value="postortu">

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
    <!-- Data Ortu -->
    <div class="container-custom">
      <div class="d-grid gap-2 col-10 mx-auto">
          <div class="bg-primary text-white p-3 border font-custom">
              <i class="fas fa-user icon-custom">
              </i> &nbsp;Data Orang Tua</div>
      </div>
    </div>
    <br>
    <br>
    <div class="container-custom">
      <div class="d-grid gap-2 col-11 mx-auto">
          <div class="text-black bg-light p-3 border font-custom">
              <i class="fas fa-user icon-custom">
              </i> &nbsp;Data Ibu</div>
      </div>
    </div>
    <br>
    
    <div class="container">
      <div class="red">
        <p class="fst-normal font-custom2"><b>NIK Ibu Bayi</b></p>
      </div>
      <input name="NIKibu" type="number" class="form-control form-custom" id="NIKibu" placeholder="Masukkan NIK pelapor">
    </div>
    <br>

    <div class="container">
      <div class="red">
        <p class="fst-normal font-custom2"><b>Nama Lengkap Ibu</b></p>
      </div>
      <input name="namalengkapibu" type="text" class="form-control form-custom" id="namalengkapibu" placeholder="Masukkan nama lengkap">
    </div>
    <br>

<div class="container right">
  <div class="red form-right2">
    <p class="fst-normal font-custom2"><b>Tanggal Lahir</b></p>
  </div>
  <input name="tgllahiribu" type="date" class="form-control form-custom2" id="tgllahiribu">
</div>
<br>

    <div class="container">
      <div class="red">
        <p class="fst-normal font-custom2"><b>Pekerjaan Ibu</b></p>
      </div>
      <input name="pekerjaanibu" type="text" class="form-control form-custom" id="pekerjaanibu" placeholder="Masukkan nama lengkap">
    </div>
    <br>

<div class="container right">
  <div class="red form-right3">
    <p class="fst-normal font-custom2"><b>Alamat</b></p>
  </div>
  <input nama="alamatibu" type="text" class="form-control form-custom3" id="alamatibu" placeholder="masukkan alamat">
</div>
<br>

    <div class="container">
      <div class="red">
        <p class="fst-normal font-custom2"><b>Provinsi</b></p>
      </div>
      <input name="provinsiibu" type="text" class="form-control form-custom" id="provinsiibu" placeholder="Masukkan provinsi">
    </div>
    <br>

<div class="container right">
  <div class="red form-right4">
    <p class="fst-normal font-custom2"><b>Kabupaten/Kota</b></p>
  </div>
  <input name="kabibu" type="text" class="form-control form-custom4" id="kabibu" placeholder="masukkan kabupaten/kota">
</div>
<br>

    <div class="container">
      <div class="red">
        <p class="fst-normal font-custom2"><b>Kecamatan</b></p>
      </div>
      <input name="kecamatanibu" type="text" class="form-control form-custom" id="kecamatanibu" placeholder="Masukkan kecamatan">
    </div>
    <br>

<div class="container right">
  <div class="red form-right5">
    <p class="fst-normal font-custom2"><b>Kelurahan</b></p>
  </div>
  <input name="kelibu" type="text" class="form-control form-custom5" id="kelibu" placeholder="masukkan kelurahan">
</div>
<br>

    <div class="container">
      <div class="red">
        <p class="fst-normal font-custom2"><b>RW</b></p>
      </div>
      <input name="rwibu" type="number" class="form-control form-custom" id="rwibu" placeholder="1">
    </div>
    <br>

<div class="container right">
  <div class="red form-right6">
    <p class="fst-normal font-custom2"><b>RT</b></p>
  </div>
  <input name="rtibu" type="number" class="form-control form-custom6" id="rtibu" placeholder="contoh: 005">
</div>
<br>
	
	<div class="container">
      <div class="red">
        <p class="fst-normal font-custom2"><b>Tanggal Perkawinan</b></p>
      </div>
      <input name="tglnikah" type="date" class="form-control form-custom" id="tglnikah">
    </div>
    <br>

    <div class="container right">
      <div class="red form-right6">
        <p class="fst-normal font-custom2"><span style="color: orange;"><i class="fas fa-exclamation-triangle icon-custom"></i> &nbsp;Jika Anda tidak mengisi tanggal perkawinan Ibu, maka Anda tidak diperkenankan mengisi data Ayah.</span></p>
      </div>
    </div>

    <!-- data ayah -->

    <div class="container-custom">
      <div class="d-grid gap-2 col-11 mx-auto">
          <div class="text-black bg-light p-3 border font-custom">
              <i class="fas fa-user icon-custom">
              </i> &nbsp;Data Ayah</div>
      </div>
    </div>
    <br>
    
    <div class="container">
      <div class="red">
        <p class="fst-normal font-custom2"><b>NIK Ayah Bayi</b></p>
      </div>
      <input name="NIKayah" type="number" class="form-control form-custom" id="NIKayah" placeholder="Masukkan NIK pelapor">
    </div>
    <br>

    <div class="container">
      <div class="red">
        <p class="fst-normal font-custom2"><b>Nama Lengkap Ayah</b></p>
      </div>
      <input name="namalengkapayah" type="text" class="form-control form-custom" id="namalengkapayah" placeholder="Masukkan nama lengkap">
    </div>
    <br>

<div class="container right">
  <div class="red form-right2">
    <p class="fst-normal font-custom2"><b>Tanggal Lahir</b></p>
  </div>
  <input name="tgllahirayah" type="date" class="form-control form-custom2" id="tgllahirayah">
</div>
<br>

    <div class="container">
      <div class="red">
        <p class="fst-normal font-custom2"><b>Pekerjaan Ayah</b></p>
      </div>
      <input name="pekerjaanayah" type="text" class="form-control form-custom" id="pekerjaanayah" placeholder="Masukkan nama lengkap">
    </div>
    <br>

<div class="container right">
  <div class="red form-right3">
    <p class="fst-normal font-custom2"><b>Alamat</b></p>
  </div>
  <input nama="alamatayah" type="text" class="form-control form-custom3" id="alamatayah" placeholder="masukkan alamat">
</div>
<br>

    <div class="container">
      <div class="red">
        <p class="fst-normal font-custom2"><b>Provinsi</b></p>
      </div>
      <input name="provinsiayah" type="text" class="form-control form-custom" id="provinsiayah" placeholder="Masukkan provinsi">
    </div>
    <br>

<div class="container right">
  <div class="red form-right4">
    <p class="fst-normal font-custom2"><b>Kabupaten/Kota</b></p>
  </div>
  <input name="kabayah" type="text" class="form-control form-custom4" id="kabayah" placeholder="masukkan kabupaten/kota">
</div>
<br>

    <div class="container">
      <div class="red">
        <p class="fst-normal font-custom2"><b>Kecamatan</b></p>
      </div>
      <input name="kecamatanayah" type="text" class="form-control form-custom" id="kecamatanayah" placeholder="Masukkan kecamatan">
    </div>
    <br>

<div class="container right">
  <div class="red form-right5">
    <p class="fst-normal font-custom2"><b>Kelurahan</b></p>
  </div>
  <input name="kelayah" type="text" class="form-control form-custom5" id="kelayah" placeholder="masukkan kelurahan">
</div>
<br>

    <div class="container">
      <div class="red">
        <p class="fst-normal font-custom2"><b>RW</b></p>
      </div>
      <input name="rwayah" type="number" class="form-control form-custom" id="rwayah" placeholder="1">
    </div>
    <br>

<div class="container right">
  <div class="red form-right6">
    <p class="fst-normal font-custom2"><b>RT</b></p>
  </div>
  <input name="rtayah" type="number" class="form-control form-custom6" id="rtayah" placeholder="contoh: 005">
</div>
<br>
    <div class="col text-center">
        <input type="hidden" name="req" value="postortu">
        <button type="submit" class="btn btn-success">Simpan dan Lanjutkan</button>
    </div>
        <br>
      </div>
    </div></form>

    <br>
    <br>

    </body>
</html>