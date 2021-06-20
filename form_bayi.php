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
    <input type="hidden" name="req" value="postbayi">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="shadow p-3 mb-2 bg-body rounded custom1"><h4>Permohonan Akta Kelahiran</h4></div>
        </div>
      </div>
    </div>
    <div class="container-custom4">
      <div class="d-grid gap-2 col-10 mx-auto">
        <button class="btn btn-info" type="button"
        style="margin-top: 10pt;">Kembali ke dashboard</button>
      </div>
    </div>
    <br>

    <!-- Data Pelapor -->
    <div class="container-custom">
      <div class="d-grid gap-2 col-10 mx-auto">
          <div class="bg-primary text-white p-3 border font-custom">
              <i class="fas fa-user icon-custom">
              </i> &nbsp;Data Pelapor</div>
      </div>
    </div>
    <br>
    
    <div class="container">
      <div class="red">
        <p class="fst-normal font-custom2"><b>Nomor Induk Kependudukan Pelapor</b></p>
      </div>
      <input name="NIKpelapor" type="number" class="form-control form-custom" id="NIKpelapor" placeholder="Masukkan NIK pelapor">
    </div>
    <br>

    <div class="container-custom2">
      <div class="d-grid gap-2">
          <div class="col text-center">
              <button id="btnnik" type="button" class="btn btn-warning">Periksa NIK Pelapor</button>
          </div>
      </div>
    </div>
    <br>

    <div class="container">
      <div class="red">
        <p class="fst-normal font-custom2"><b>Nama Lengkap Pelapor</b></p>
      </div>
      <input name="namalengkappelapor" type="text" class="form-control form-custom" id="namalengkappelapor" placeholder="Masukkan nama lengkap">
    </div>
    <br>

    <div class="container">
      <div class="red">
        <p class="fst-normal font-custom2"><b>Nomor Telephone Pelapor</b></p>
      </div>
      <input name="notelppelapor" type="text" class="form-control form-custom" id="notelppelapor" placeholder="+62xxxxxxxxxxx">
    </div>
    <br>

    <div class="container">
      <div class="red">
        <p class="fst-normal font-custom2"><b>Alamat Pelapor</b></p>
      </div>
      <input class="form-control" name="alamatpelapor" id="alamatpelapor" placeholder="Masukkan alamat lengkap" rows="3"></input>
    </div>
    <br>

    <br><br><br>
    

    <!-- Data Bayi -->
    <div class="container-custom">
      <div class="d-grid gap-2 col-10 mx-auto">
          <div class="bg-primary text-white p-3 border font-custom">
              <i class="fas fa-user icon-custom"></i> &nbsp;Data Bayi</div>
      </div>
    </div>
    <br>

    <div class="container">
      <div class="red">
        <p class="fst-normal font-custom2"><b>Nama Lengkap</b></p>
      </div>
      <input name="namabayi" type="text" class="form-control form-custom" id="namabayi" placeholder="Masukkan nama lengkap">
    </div>
    <br>

    <div class="container">
      <div class="red">
        <p class="fst-normal font-custom2"><b>Tempat Dilahirkan</b></p>
      </div>
      <input name="tempatlahir" type="text" class="form-control form-custom" id="tempatlahir" placeholder="tempat dilahirkan">
    </div>
    <br>

    <div class="container">
      <div class="red">
        <p class="fst-normal font-custom2"><b>Kota / Kabupaten Kelahiran</b></p>
      </div>
      <input name="kotalahir" type="text" class="form-control form-custom" id="kotalahir" placeholder="kota / kabupaten elahiran">
    </div>
    <br>

    <div class="container">
      <div class="red">
        <p class="fst-normal font-custom2"><b>Hari Kelahiran</b></p>
      </div>
      <input name="harilahir" type="text" class="form-control form-custom" id="harilahir" placeholder="Hari">
    </div>
    <br>
    
    <div class="container">
      <div class="red">
        <p class="fst-normal font-custom2"><b>Jenis Kelahiran</b></p>
      </div>
      <select name="jenislahir" id="jenislahir" class="form-control">
          <option value="1">Normal</option>
          <option value="2">Caesar</option>
          <option value="3">Water Birth</option>
      </select>
      </div>
    <br>

    <div class="container">
      <div class="red">
        <p class="fst-normal font-custom2"><b>Penolong Kelahiran</b></p>
      </div>
      <select name="penolonglahir" id="penolonglahir" class="form-control">
          <option value="1">Bidan</option>
          <option value="2">Dokter</option>
          <option value="3">Dukun Bayi</option>
      </select>
      </div>
    <br>

    <div class="container">
      <div class="red">
        <p class="fst-normal font-custom2"><b>Panjang Bayi</b></p>
      </div>
      <input name="pjgbayi" type="number" class="form-control form-custom" id="pjgbayi" placeholder="panjang (cm)">
    </div>
    <br>

    <div class="container">
      <div class="red">
        <p class="fst-normal font-custom2"><b>Jenis Kelamin</b></p>
      </div>
      <select name="jeniskelamin" id="jeniskelamin" class="form-control">
          <option value="1">Laki-laki</option>
          <option value="2">Perempuan</option>
      </select>
      </div>
    <br>

    <div class="container">
      <div class="red">
        <p class="fst-normal font-custom2"><b>Nama Tampat Dilahirkan</b></p>
      </div>
      <input name="namatempat" type="text" class="form-control form-custom" id="namatempat" placeholder="RS. Suka Cita">
    </div>
    <br>

    <div class="container">
      <div class="red">
        <p class="fst-normal font-custom2"><b>Tanggal Kelahiran</b></p>
      </div>
      <input name="tgllahir" type="date" class="form-control form-custom" id="tgllahir">
    </div>
    <br>

    <div class="container">
      <div class="red">
        <p class="fst-normal font-custom2"><b>Waktu Kelahiran</b></p>
      </div>
      <input name="waktulahir" type="time" class="form-control form-custom" id="waktulahir" placeholder="waktu kelahiran">
    </div>
    <br>

    <div class="container">
      <div class="red">
        <p class="fst-normal font-custom2"><b>Kelahiran ke</b></p>
      </div>
      <input name="kelahiranke" type="number" class="form-control form-custom" id="kelahiranke" placeholder="ke-">
    </div>
    <br>

    <div class="container">
      <div class="red">
        <p class="fst-normal font-custom2"><b>Berat Bayi</b></p>
      </div>
      <input name="beratbayi" type="number" class="form-control form-custom" id="beratbayi" placeholder="berat bayi (kg)">
    </div>
    <br>

    <div class="container">
      <p class="text-center-custom">Dengan ini saya, pemohon menyatakan bahwa:</p>
      <div class="form-check-custom">
        <label class="form-check-label" for="flexCheckDefault">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
          Saya setuju untuk melanjutkan permohonan Akta Kelahiran dengan data tersebut.
        </label>
      </div>
      <div class="form-check-custom2">
        <label class="form-check-label" for="flexCheckDefault">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
          Apabila di kemudian hari ternyata isian permohonan saya tidak benar, saya bersedia diproses secara hukum dan dipidana pernjara paling lama 6 (enam) tahun dan/atau denda paling banyak Rp. 75.000.000,00 (Tujuh Puluh Lima Juta Rupiah) sesuai dengan Pasal 94 Undang-Undang Nomor 24 Tahun 2013, atau pidana penjara selama-lamanya 7 (tujuh) tahun penjara atas pelanggaran terhadap Pasal 242 Ayat 1 KUHP. Serta dokumen yang diterbitkan dari permohonan ini menjadi tidak sah.
        </label>
      </div>
    </div>
    <br>
    
    <div class="col text-center">
        <input type="hidden" name="req" value="postbayi">
        <button type="submit" class="btn btn-success">Simpan dan Lanjutkan</button>
    </div>
    </form>
    <br>
    <br>

    </body>
    <script src="assets\jquery\dist\jquery.min.js"></script>
    <script>
        $("#btnnik").click(function(){
            let NIK = $("#NIKpelapor").val();
            $.ajax({
                url: "service/ApiServices.php?req=getdatabynik",
                type: "POST",
                data: {NIK:NIK},
                success: function(data){
                  let res = JSON.parse(data)
                    console.log(data)
                    $("#namalengkappelapor").val(res[0].nama)
                    $("#notelppelapor").val(res[0].no_telp)
                    $("#alamatpelapor").val(res[0].alamat)
                }
            })
        })
    </script>
</html>