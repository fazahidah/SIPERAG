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

    <?php $cek = $db->select("SELECT * FROM user WHERE username = '".$_SESSION['username']."' "); ?>

    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="shadow p-3 mb-2 bg-body rounded custom1"><h4>Permohonan Baru</h4> <?php if($cek[0]['verif'] == 0): ?><a href="verification.php" class="pull-right">Verifikasi Akun</a> <?php endif ?></div>
        </div>
      </div>
    </div>
    <br>
    
    <div class="container">
      <div class="row">
        <div class="card card-custom" style="width: 15rem; margin:15px">
          <img src="https://imglink.io/ib/EGAETTB0vh.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Daftar Permohonan Selesai</h5>
            <a href="daftar_permohonan.php" class="btn btn-success">Masuk</a>
          </div>
        </div>
        <div class="card card-custom" style="width: 15rem; margin:15px">
          <img src="https://imglink.io/ib/EGAETTB0vh.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Akta Kelahiran</h5>
            <a href="dokumenakta.php" class="btn btn-success">Buat Akta Kelahiran</a>
          </div>
        </div>
      </div>
    </div>
    
</html>