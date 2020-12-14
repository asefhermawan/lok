<?php
	require "../php/connection.php";
    session_start();
    if(!isset($_SESSION['login_role'])){
		    echo "<script language=javascript>document.location.href='login.php'</script>";
	}

    if(isset($_SESSION['login_role'])){
        if($_SESSION['login_role'] != 'Admin')
		    echo "<script language=javascript>document.location.href='login.php'</script>";
	}

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $nama = "";
        $strQuery = "SELECT berita_id, nama, judul, deskripsi FROM berita WHERE berita_id = '$id'";
        $query = mysqli_query($connection, $strQuery);
        if($query){
            $result = mysqli_fetch_array($query, MYSQLI_ASSOC);
            $id = $result['inspirasi_id'];
            $nama = $result['nama'];
            $judul = $result['judul'];
            $tgl_upload = $result['tgl_upload'];
            $deskripsi = $result['deskripsi'];
             $gambar = $result['gambar'];
        }
    }
?>
    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>HiperJob Medan</title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />
        <link href="../css/bootstrap.min.css" rel="stylesheet" />
        <link href="../css/style.css" rel="stylesheet" />
        <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Muli:300,400' rel='stylesheet' type='text/css'>
          <link href='https://fonts.googleapis.com/css?family=Muli:300,400' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Muli:300,400,600,800' rel='stylesheet' type='text/css'>
        <link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
        <link href="font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
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
                            <a class="navbar-brand" href="#">Kategori</a>
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
                     <form method="POST" action="php/berita_edit_proses.php">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                </div>
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="header">
                                            <h4 class="title">Edit Tips & Berita</h4>
                                        </div>
                                        <div class="content">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Nama</label>
                                                        <input type="text" class="form-control border-input" name="nama" placeholder="Nama Sumber" value="<?php echo "$nama"?>"/>
                                                    </div>
                                                </div>
                                                 <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Judul</label>
                                                        <input type="text" class="form-control border-input" name="judul" placeholder="Masukan Judul Berita" value="<?php echo "$judul"?>"/>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                 <div class="form-group">
                                                        <label>Tanggal Upload</label>
                                                        <input type="date" class="form-control border-input" name="tgl_upload" placeholder="Tanggal Upload" value="<?php echo $tgl_upload;?>"/>
                                                 
                                                </div>
                                                 </div>
                                                 <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Deskripsi Tips & Trick</label>
                                                        <textarea type="text" class="ckeditor" id="ckedtor" name="deskripsi" placeholder="Deskripsi Quote Hiper" /><?php echo "$deskripsi"?></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Gambar</label>
                                                        <input type="file" accept="image/*" onchange="preview_imagee(event)" class="form-control border-input" name="gambar" /><br>
                                                        <img 
                                                        src="gambar/<?php echo $gambar?>" 
                                                        id="preview_image"
                                                        style="width:200px; height:200px">
                                                </div>
                                                </div>
                                                <div class="text-center" style="margin-bottom: 34px;">
                                                    <input type="hidden" name="id" value="<?php echo "$id";?>"/>
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
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="copyright pull-right">
                            &copy;
                            <script>
                                document.write(new Date().getFullYear())
                            </script>, made with <i class="fa fa-heart heart"></i> by <a href="#">Lowker Team</a>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="../js/jquery.min.js" type="text/javascript"></script>
        <script src="../js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../js/dashboard.js" type="text/javascript"></script>
        <!--  Modal  -->
        <script>
            <?php
            for($j= 0 ; $j <= $i; $j++){
        ?>
            $('#delete<?php echo $j;?>').appendTo("body")
            <?php
            }
        ?>
            $('#search').appendTo("body")
        </script>
            <script type="text/javascript">
        function  preview_imagee(event){
            var reader = new FileReader();
            reader.onload = function()
            {
                var output = document.getElementById('preview_image');
                output.src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        }
        </script>
    </body>

    </html>