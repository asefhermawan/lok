<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<title>Daftar Calon Pencari Kerja - HiperJob Medan</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style type="text/css">

 body, html {
    height: 100%;
}

 body {
    background-image: url('../img/bg-02.PNG');
    height: 100%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
    .form-control, .form-control:focus, .input-group-addon {
        border-color: #19aa8d;
        border-radius: 0;
    }
    .signup-form {
        width: 400px;
        margin: 0 auto;
        padding: 30px 0;
    }
    .signup-form h2 {
        color: #636363;
        margin: 0 0 15px;
        text-align: center;
    }
    .signup-form .lead {
        font-size: 14px;
        margin-bottom: 30px;
        text-align: center;
    }
    .signup-form form {     
        border-radius: 1px;
        margin-bottom: 15px;
        background: #fff;
        border: 1px solid #f3f3f3;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .signup-form .form-group {
        margin-bottom: 25px;
    }
    .signup-form label {
        font-weight: normal;
        font-size: 13px;
    }
    .signup-form .form-control {
        min-height: 38px;
        box-shadow: none !important;
        border-width: 0 0 1px 0;
    }   
    .signup-form .input-group-addon {
        max-width: 42px;
        text-align: center;
        background: none;
        border-width: 0 0 1px 0;
        padding-left: 5px;
    }
    .signup-form .btn {        
        font-size: 16px;
        font-weight: bold;
        background: #19aa8d;
        border-radius: 3px;
        border: none;
        min-width: 140px;
        outline: none !important;
    }
    .signup-form .btn:hover, .signup-form .btn:focus {
        background: #179b81;
    }
    .signup-form a {
        color: #19aa8d;
        text-decoration: none;
    }   
    .signup-form a:hover {
        text-decoration: underline;
    }
    .signup-form .fa {
        font-size: 21px;
    }
    .signup-form .fa-paper-plane {
        font-size: 17px;
    }
    .signup-form .fa-check {
        color: #fff;
        left: 9px;
        top: 18px;
        font-size: 7px;
        position: absolute;
    }
    .social-btn .btn {
        color: #fff;
        margin: 10px 0 0 15px;
        font-size: 15px;
        border-radius: 50px;
        font-weight: normal;
        border: none;
        transition: all 0.4s;
    }   
    .social-btn .btn:first-child {
        margin-left: 0;
    }
    .social-btn .btn:hover {
        opacity: 0.8;
    }
    .social-btn .btn-primary {
        background: #3b5999;
    }
    .social-btn .btn-info {
        background: #64ccf1;
    }
    .social-btn .btn-danger {
        background: #e4405f;
    }
    .social-btn .btn i {
        float: left;
        margin: 3px 10px;
        font-size: 20px;
    }
    .or-seperator {
        margin: 50px 0 15px;
        text-align: center;
        border-top: 1px solid #e0e0e0;
    }
    .or-seperator b {
        padding: 0 10px;
        width: 50px;
        height: 40px;
        font-size: 16px;
        text-align: center;
        line-height: 40px;
        background: #fff;
        display: inline-block;
        border: 1px solid #e0e0e0;
        border-radius: 50%;
        position: relative;
        top: -22px;
        z-index: 1;
</style>
</head>
<body>
    <button type="button" class="btn btn-success">HiperJob Medan</button>
<div class="signup-form">   
     <form class="form-signin" method="POST" action="php/calonpekerja_tambah_proses.php" enctype="multipart/form-data" style="border: none; padding: 30px 30px;">

        <h2>Daftar Calon Pencari Kerja</h2>
     <!-- Avatar Logo   <center><div class="avatar">
                    <img src="../img/logo-user.png" alt="Avatar">
                </div></center> -->
        
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user-plus"></i></span>
                <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" required="required">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <input type="text" class="form-control" name="email" placeholder="Email" required="required">
            </div>

        </div>
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control" name="username" placeholder="User Name" required="required">
            </div>
            </div>
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-key"></i></span>
                <input type="password" class="form-control" name="password" placeholder="Password" required="required">
            </div>
            </div>
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-unlock-alt"></i></span>
                <input type="password" class="form-control" name="konfirmasi_password" placeholder="Konfirmasi Password" required="required">
            </div>
                 <input class="form-control" type="hidden" name="alamat" value="" required/>
                            <input class="form-control" type="hidden" name="kota_id" value="1" required/>
                            <input class="form-control" type="hidden" name="jk" value="L" required/>
                            <input class="form-control" type="hidden" name="tanggal_lahir" value="" required/>
                            <input class="form-control" type="hidden" name="tempat_lahir" value="" required/>
                            <input class="form-control" type="hidden" name="status_pernikahan" value="Lajang" required/>
                            <input class="form-control" type="hidden" name="telepon" value="" required/>
                            <input class="form-control" type="hidden" name="pendidikan_terakhir" value="SD" required/>
                            <input class="form-control" type="hidden" name="tempat_pendidikan_terakhir" value="" required/>
                            <input class="form-control" type="hidden" name="tempat_bekerja_terakhir" value="" required/>
                            <input class="form-control" type="hidden" name="pekerjaan_bekerja_terakhir" value="" required/>

        </div>        
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block btn-lg">Sign Up</button>
            <br>
        <!--<p class="small text-center">Saya telah membaca dan menyetujui<br><a href="#">Peraturan yang Kami buat</a>, dan <a href="#">Kebijakan privasi kami</a>.</p>-->
            <div class="text-center">Belum punya akun?<a href="login.php">Login disini</a>.</div>
            <div class="text-center"><a href="../index.php">Back To Home</a>
            
        </div>
        </div>
        <!--<div class="or-seperator"><b>Atau</b></div>
        <center>Atau daftar melalui sosial media</center>
        <div class="social-btn text-center">
            <a href="#" class="btn btn-primary btn-lg"><i class="fa fa-facebook"></i> Facebook</a>
            <a href="#" class="btn btn-danger btn-lg"><i class="fa fa-Google"></i> Google</a>-->
        </div>
        
    </form>
</div>
</body>
</html>                            