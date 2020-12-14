<?php
error_reporting(0); 
    require "../php/connection.php";
    session_start();
    if(!isset($_SESSION['login_role'])){
            echo "<script language=javascript>document.location.href='login.php'</script>";
    }

    if(isset($_SESSION['login_role'])){
        if($_SESSION['login_role'] != 'Admin')
            echo "<script language=javascript>document.location.href='login.php'</script>";
    }
?>
    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>Hiper Job Vacancy</title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />
        <link href="../css/bootstrap.min.css" rel="stylesheet" />
        <link href="../css/style.css" rel="stylesheet" />
        <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="../css/themify-icons.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Muli:300,400' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
          <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
    </head>

    <body>
   <div class="wrapper">
            <div class="sidebar" data-background-color="white" data-active-color="info">
                <div class="sidebar-wrapper">
                    <div class="logo">
                        <!--<img src="../img/logo.png" width="60px" />-->
                        <a href="#" class="simple-text">
                            HIPERSHOP-JOB VACANCY
                        </a>
                    </div>
                    <ul class="nav">
                        <li class="active">
                            <a href="dashboard.php">
                                <i class="fa fa-dashboard" style="font-size: 18px;"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li>
                            <a href="calonpekerja.php">
                                <i class="fa fa-user" style="font-size: 18px;"></i>
                                <p>Calon Pekerja</p>
                            </a>
                        </li>
                        <li>
                            <a href="perusahaan.php">
                                <i class="fa fa-industry" style="font-size: 18px;"></i>
                                <p>Perusahaan</p>
                            </a>
                        </li>
                        <li>
                            <a href="kategori.php">
                                <i class="fa fa-tags" style="font-size: 18px;"></i>
                                <p>Kategori</p>
                            </a>
                        </li>
                        <li>
                            <a href="lowongan.php">
                                <i class="fa fa-info" style="font-size: 18px;"></i>
                                <p>Lowongan</p>
                            </a>
                        </li>
                        <li>
                            <a href="lamaran.php">
                                <i class="fa fa-paperclip" style="font-size: 18px;"></i>
                                <p>Lamaran</p>
                            </a>
                        </li>
					<li>
                            <a href="provinsi.php">
                                <i class="fa fa-user" style="font-size: 18px;"></i>
                                <p>Provinsi</p>
                            </a>
                        </li>
                        <li>
                            <a href="kota.php">
                                <i class="fa fa-bank" style="font-size: 18px;"></i>
                                <p>Kabupaten / Kota</p>
                            </a>
                        </li>
                         <li>
                            <a href="tamatan.php">
                                <i class="fa fa-bank" style="font-size: 18px;"></i>
                                <p>Tamatan</p>
                            </a>
                        </li>
                            <li>
                            <a href="inspirasi.php">
                                <i class="fa fa-bank" style="font-size: 18px;"></i>
                                <p>Inspirasi Hiper</p>
                            </a>
                        </li>
                          <li>
                            <a href="berita.php">
                                <i class="fa fa-user" style="font-size: 18px;"></i>
                                <p>Tips & Berita</p>
                            </a>
                        </li>
                          <li>
                            <a href="komentar.php">
                                <i class="fa fa-user" style="font-size: 18px;"></i>
                                <p>Komentar</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="main-panel">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                            <a class="navbar-brand" href="#">Dashboard</a>
                        </div>
                        <div class="collapse navbar-collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                    <a href="profil_edit.php">
                                        <p>
                                            <i class="fa fa-user-circle" style="font-size: 18px;"></i> Hallo,
                                            <?php echo $_SESSION['admin_nama'];?>
                                        </p>
                                    </a>
                                </li>
                                <li>
                                    <a href="../php/logout.php">
                                        <i class="fa fa-sign-out"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                  <div class="content">
                     <form method="POST" action="php/berita_tambah_proses.php" enctype="multipart/form-data">
                     
                                           
                                                    <div class="form-group">
                                                        <label>Nama</label>
                                                        <input type="text" class="form-control border-input" name="nama" placeholder="Nama penulis" required />
                                                    </div>
                                                      <div class="form-group">
                                                        <label>Judul</label>
                                                        <input type="text" class="form-control border-input" name="judul" placeholder="Nama Judul" required />
                                                    </div>
                                                      <div class="form-group">
                                                        <label>Tanggal Upload</label>
                                                        <input type="date" class="form-control border-input" name="tgl_upload" placeholder="Tanggal Buka" value="<?php echo date('Y-m-d');?>" required />
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Deskripsi Inspirasi</label>
                                                        <textarea class="ckeditor" id="ckedtor" name="deskripsi" placeholder="Deskripsi Inspirasi"required></textarea>
                                                </div>
                                                    <div class="form-group">
                                                        <label>Upload Gambar</label>
                                                        <input type="file" class="form-control border-input" name="gambar" />
                                                
                                                </div>
                                                <div class="text-center" style="margin-bottom: 34px;">
                                                    <button type="submit" class="btn btn-info btn-fill btn-wd">Submit Data</button>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                
            </div>
        </div>
        <script src="../js/jquery.min.js" type="text/javascript"></script>
        <script src="../js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../js/dashboard.js" type="text/javascript"></script>
   
    </body>

    </html>