<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="Assets/bootstrap-4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="Assets/fontawesome-free-5.12.0/css/all.min.css">
    <script src="Assets/jquery/dist/jquery.js"></script>
    <script src="Assets/bootstrap-4.4.1/js/bootstrap.min.js"></script>
    <script src="Assets/chart.js/dist/Chart.min.js"></script>
    <script src="Assets/fontawesome-free-5.12.0/js/all.min.js"></script>

</head>

<body>
    <header class="top-navbar">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" href="dashboard.php">
                    <img src="Assets/logoo.png" alt="Iki Logo" width="60" height="60" />
                </a>
                <h2 style="font-family: Comfortaa; margin-top: 10pt; color: white; margin-right:1000pt;"><b>SIPERAG</b></h2>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food"
                    aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
    </header>

    <br>
    <div class="container">
      <div class="row row-custom">
        <div class="col-md-12">
          <div class="shadow p-3 mb-2 bg-body rounded custom1"><h4>Verifikasi KTP</h4></div>
        </div>
        <span>Pastikan Nomor Induk Kependudukan di KTP sesuai dengan yang telah Anda isikan di form sebelumnya dan pastikan wajah anda jelas dan tidak tertutup oleh apapun</span>
      </div>
    </div>
    <br>
    <form id="loginForm" method="post" action="service/apiservices.php">
  <div class="container">
      <div class="red">
        <p class="fst-normal font-custom2"><b>Upload file KTP</b></p>
      </div>
      <input class="form-control form-custom" type="file" id="formFile">
    </div>
    <br>

    <div class="container">
      <div class="red">
        <p class="fst-normal font-custom2"><b>Upload file selfie dengan KTP</b></p>
      </div>
      <input class="form-control form-custom" type="file" id="formFile">
    </div>
    <br>
    
    <div class="col text-center">
        <button type="button" class="btn btn-danger">Kembali ke Halaman Awal</button>
      <div>
      <!--  <input type="hidden" name="req" value="verification"> -->
        <button type="button" class="btn btn-success" href="dashboard.php">Daftar</button>
      </div>
    </div>
  </form>
    
    <br>
    <br>


</html>