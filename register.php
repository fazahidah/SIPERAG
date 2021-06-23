<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="Assets/bootstrap-4.4.1/css/bootstrap.min.css">
    <script src="Assets/jquery/dist/jquery.js"></script>
    <script src="Assets/bootstrap-4.4.1/js/bootstrap.min.js"></script>

</head>

<body style="background-image: url(assets/bg.png); background-size: cover; background-attachment: fixed;">
    <div class="headlogin mt-5">
        <img src="Assets/logoo.png" alt="Iki Logo" width="120" height="100" />
    </div>
    <form id="loginForm" method="post" action="service/apiservices.php">
        <div class="login">
            <h4 class="col-md-13 text-center">Daftar Baru</h4>
            <div class="col-md-13">
                <div class="form-group">
                    <h6>NIK</h6>
                    <input type="text" class="form-control" id="NIK" name="NIK" tabindex="1"
                        placeholder="Masukkan NIK" required data-error="Masukkan NIK dengan benar!">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-13">
                <div class="form-group">
                    <h6>Nama Lengkap</h6>
                    <input type="text" placeholder="Masukkan Nama Lengkap" tabindex="2" id="nama" class="form-control" name="nama"
                        required data-error="Please enter your password">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-13">
                <div class="form-group">
                    <h6>Alamat</h6>
                    <input type="text" placeholder="Masukkan Alamat sesuai KTP" tabindex="2" id="alamat" class="form-control" name="alamat"
                        required data-error="Please enter your password">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-13">
                <div class="form-group">
                    <h6>Username</h6>
                    <input type="text" placeholder="Masukkan Username" tabindex="3" id="username" class="form-control" name="username"
                        required data-error="Please enter your password">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-13">
                <div class="form-group">
                    <h6>No HP yang Dapat Dihubungi</h6>
                    <input type="text" placeholder="Masukkan No HP" tabindex="4" id="no_telp" class="form-control" name="no_telp"
                        required data-error="Please enter your password">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-13">
                <div class="form-group">
                    <h6>Alamat Email</h6>
                    <input type="text" placeholder="Masukkan Email" tabindex="5" id="email" class="form-control" name="email"
                        required data-error="Please enter your password">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-13">
                <div class="form-group">
                    <h6>Password</h6>
                    <input type="password" placeholder="Masukkan Password" tabindex="6" id="password" class="form-control" name="password"
                        required data-error="Please enter your password">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-13">
                <div class="form-group">
                    <h6>Konfirmasi Password</h6>
                    <input type="password" placeholder="Konfirmasi Password" tabindex="7" id="konfirmasi_password" class="form-control" name="konfirmasi_password"
                        required data-error="Please enter your password">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-13 row m-0">
                <div class="col-md-9 p-md-0">
                </div>
                <input type="hidden" name="req" value="register">
                <button class="btn btn-primary col-md-3" tabindex="3" id="submit" type="submit">Daftar</button>
            </div>
        </div>
    </form>
    
    <script>
        $("#submit").click(function(){
            if ($("#username").val() !== "0") {
                alert("Username sudah tersedia");
                $("#username").focus();
                return false;
            }
            else ($("#password").val() != $("#konfirmasi_password").val()) {
                alert("Password Tidak Sama");
                $("#konfirmasi_password").focus();
                return false;
            }
            $("#loginForm").submit();
        })
    </script>
</body>
</html>