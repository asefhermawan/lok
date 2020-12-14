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
        $perusahaan_id = "";
        $kategori_id = "";
        $judul = "";
        $alamat = "";
        $posisi = "";
        $idr = "";
        $idr2 = "";
        $tamatan_id = "";
        $jurusan = "";
        $deskripsi = "";
        $tgl_buka = "";
        $tgl_tutup = "";
        $strQuery = "SELECT * FROM lowongan WHERE lowongan_id = '$id'";
        $query = mysqli_query($connection, $strQuery);
        if($query){
            $result = mysqli_fetch_array($query, MYSQLI_ASSOC);
            $id = $result['lowongan_id'];
            $perusahaan_id = $result['perusahaan_id'];
            $kategori_id = $result['kategori_id'];
            $judul = $result['lowongan_judul'];
            $alamat = $result['alamat'];
            $posisi = $result['posisi'];
            $idr = $result['idr'];
            $idr2 = $result['idr2'];
            $tamatan_id = $result['tamatan_id'];
            $jurusan= $result['jurusan'];
            $deskripsi = $result['lowongan_deskripsi'];
            $tgl_buka = $result['lowongan_tgl_buka'];
            $tgl_tutup = $result['lowongan_tgl_tutup'];
            $gambar = $result['gambar'];
        }
    }
?>
    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>HiperJob medan</title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />
        <link href="../css/bootstrap.min.css" rel="stylesheet" />
        <link href="../css/style.css" rel="stylesheet" />
        <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Muli:300,400' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
                            <a class="navbar-brand" href="#">Lowongan</a>
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
                 <div class="content">
                     <form method="POST" action="php/lowongan_edit_proses.php" enctype="multipart/form-data">
                      
                                    <div class="card">
                                        <div class="header">
                                            <h4 class="title">Edit Lowongan</h4>
                                        </div>
                                        <div class="content">
                                    
                                                    <div class="form-group">
                                                        <label>Judul Lowongan</label>
                                                        <input type="text" class="form-control border-input" name="judul" placeholder="Judul Lowongan" value="<?php echo $judul;?>"/>
                                                 
                                                </div>
                                                 <div class="form-group">
                                                        <label>Alamat Perusahaan</label>
                                                        <input type="text" class="form-control border-input" name="alamat" placeholder="Alamat Perusahaan" value="<?php echo $alamat;?>"/>
                                                 
                                                </div>
                                                 <div class="form-group">
                                                        <label>Posisi</label>
                                                        <input type="text" class="form-control border-input" name="posisi" placeholder="Posisi" value="<?php echo $posisi;?>"/>
                                                 
                                                </div>
                                                          <div class="form-inline">
                                                        <label>Gaji</label><br>
                                                        <input type="text" class="form-control border-input" name="idr" placeholder="IDR" value="<?php echo $idr;?>" id="inputku" onkeydown="return numbersonly(this, event);" onkeyup="javascript:tandaPemisahTitik(this); "
                                                            required />
                                                            <label>Sampai Dengan</label>
                                                         <input type="text" class="form-control border-input" name="idr2" placeholder="IDR" value="<?php echo $idr2;?>" id="inputku" onkeydown="return numbersonly(this, event);" onkeyup="javascript:tandaPemisahTitik(this);"
                                                            required />

                                                    </div><br>

                                                    <div class="form-group">
                                                        <label>Kategori</label>
                                                        <select class="form-control border-input" name="kategori_id">
                                                            <?php
                                                                $strQuery = "SELECT kategori_id, kategori_nama FROM kategori";
                                                                $query = mysqli_query($connection, $strQuery);
                                                                while($result = mysqli_fetch_assoc($query)){
                                                                if($result['kategori_id'] == $kategori_id)
                                                                        echo "<option value=$result[kategori_id] selected>$result[kategori_nama]</option>";
                                                                    else
                                                                        echo "<option value=$result[kategori_id]>$result[kategori_nama]</option>";
                                                                }
                                                            ?>
                                                        </select>
                                             
                                                </div>
                                          
                                                    <div class="form-group">
                                                        <label>Tanggal Buka Lowongan</label>
                                                        <input type="date" class="form-control border-input" name="tgl_buka" placeholder="Tanggal Buka" value="<?php echo $tgl_buka;?>"/>
                                                 
                                                </div>
                                     
                                                    <div class="form-group">
                                                        <label>Tanggal Tutup Lowongan</label>
                                                        <input type="date" class="form-control border-input" name="tgl_tutup" placeholder="tgl_tutup" value="<?php echo $tgl_tutup;?>"/>
                                                  
                                                </div>
                                                
                                                    <div class="form-group">
                                                        <label>Minimal Tamatan</label>
                                                       <select class="form-control border-input" name="tamatan_id">
                                                            <?php
                                                                $strQuery = "SELECT tamatan_id, tamatan_nama FROM tamatan";
                                                                $query = mysqli_query($connection, $strQuery);
                                                                while($result = mysqli_fetch_assoc($query)){
                                                                if($result['tamatan_id'] == $kategori_id)
                                                                        echo "<option value=$result[tamatan_id] selected>$result[tamatan_nama]</option>";
                                                                    else
                                                                        echo "<option value=$result[tamatan_id]>$result[tamatan_nama]</option>";
                                                                }
                                                            ?>
                                                        </select>
                                               
                                                </div>
                                            
                                                    <div class="form-group">
                                                        <label>Jurusan</label>
                                                        <input type="text" class="form-control border-input" name="jurusan" placeholder="Jurusan" value="<?php echo $jurusan;?>"/>
                                              
                                                </div>
                                              
                                                    <div class="form-group">
                                                        <label>Deskripsi</label>
                                                        <textarea class="form-control border-input" name="deskripsi" placeholder="Deskripsi"><?php echo $deskripsi;?></textarea>
                                                    </div>
                                                      <div class="form-group">
                                                        <label>Gambar</label>
                                                        <input type="file" accept="image/*" onchange="preview_imagee(event)" class="form-control border-input" name="gambar" /><br>
                                                        <img 
                                                        src="../perusahaan/gambar/<?php echo $gambar?>" 
                                                        id="preview_image"
                                                        style="width:200px; height:200px">
                                                </div>
                                                </div>
                                                <div class="text-center" style="margin-bottom: 34px;">
                                                    <input type="hidden" name="id" value="<?php echo $id;?>"/>
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
                           HiperJob Medan
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
    </body>

    </html>