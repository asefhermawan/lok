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
?>
    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>Admin - HiperJob Medan</title>
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
                     <form method="POST" action="php/lowongan_tambah_proses.php">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                </div>
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="header">
                                            <h4 class="title">Tambah Lowongan</h4>
                                        </div>
                                        <div class="content">
                                            <div class="row">
                                             
                                                    <div class="form-group">
                                                        <label>Perusahaan</label>
                                                        <select class="form-control border-input" name="perusahaan_id">
                                                            <?php
                                                                $strQuery = "SELECT perusahaan_id, perusahaan_nama FROM perusahaan";
                                                                $query = mysqli_query($connection, $strQuery);
                                                                while($result = mysqli_fetch_assoc($query)){
                                                                    echo "<option value=$result[perusahaan_id]>$result[perusahaan_nama]</option>";
                                                                }
                                                            ?>
                                                        </select>
                                                   
                                                </div>
                                                  <div class="form-group">
                                                        <label>Judul Lowongan</label>
                                                        <input type="text" class="form-control border-input" name="judul" placeholder="Judul Lowongan" required />
                                                    </div>
                                                
                                                    <div class="form-group">
                                                        <label>Kategori</label>
                                                        <select class="form-control border-input" name="kategori_id">
                                                            <?php
                                                                $strQuery = "SELECT kategori_id, kategori_nama FROM kategori";
                                                                $query = mysqli_query($connection, $strQuery);
                                                                while($result = mysqli_fetch_assoc($query)){
                                                                    echo "<option value=$result[kategori_id]>$result[kategori_nama]</option>";
                                                                }
                                                            ?>
                                                        </select>
                                           
                                                </div>
                                              <div class="form-group">
                                                        <label>Alamat Perusahaan</label>
                                                        <input type="text" class="form-control border-input" name="alamat" placeholder="Alamat Perusahaan" required />
                                                    </div>  
                                                     <div class="form-group">
                                                        <label>Posisi</label>
                                                        <input type="text" class="form-control border-input" name="posisi" placeholder="Posisi" required />
                                                    </div>  
                                                    <div class="form-inline">
                                                        <label>Gaji</label><br>
                                                        <input type="text" class="form-control border-input" name="idr" placeholder="IDR" id="inputku" onkeydown="return numbersonly(this, event);" onkeyup="javascript:tandaPemisahTitik(this);"
                                                            required />
                                                            <label>Sampai Dengan</label>
                                                         <input type="text" class="form-control border-input" name="idr2" placeholder="IDR" id="inputku" onkeydown="return numbersonly(this, event);" onkeyup="javascript:tandaPemisahTitik(this);"
                                                            required />

                                                    </div><br>
                                                    <div class="form-group">
                                                        <label>Tanggal Buka Lowongan</label>
                                                        <input type="date" class="form-control border-input" name="tgl_buka" placeholder="Tanggal Buka" value="<?php echo date('Y-m-d');?>" required />
                                                    </div>
                                          
                                                    <div class="form-group">
                                                        <label>Tanggal Tutup Lowongan</label>
                                                        <input type="date" class="form-control border-input" name="tgl_tutup" placeholder="tgl_tutup" value="<?php echo date('Y-m-d');?>" required />
                                              
                                                </div>
                                                   
                                                     <div class="form-group">
                                                        <label>Tamatan</label>
                                                        <select class="form-control border-input" name="tamatan_id">
                                                            <?php
                                                                $strQuery = "SELECT tamatan_id, tamatan_nama FROM tamatan";
                                                                $query = mysqli_query($connection, $strQuery);
                                                                while($result = mysqli_fetch_assoc($query)){
                                                                    echo "<option value=$result[tamatan_id]>$result[tamatan_nama]</option>";
                                                                }
                                                            ?>
                                                        </select>
                                           
                                                </div>
                                                
                                                    <div class="form-group">
                                                        <label>Jurusan</label>
                                                        <input type="text" class="form-control border-input" name="jurusan" placeholder="Jurusan" required />
                                                    </div>  
                                              
                                                    <div class="form-group">
                                                        <label>Deskripsi</label>
                                                        <textarea class="form-control border-input" name="deskripsi" placeholder="Deskripsi"required></textarea>
                                                
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
         <script>
            function tandaPemisahTitik(b){
        var _minus = false;
        if (b<0) _minus = true;
        b = b.toString();
        b=b.replace(".","");
        b=b.replace("-","");
        c = "";
        panjang = b.length;
        j = 0;
        for (i = panjang; i > 0; i--){
        j = j + 1;
        if (((j % 3) == 1) && (j != 1)){
        c = b.substr(i-1,1) + "." + c;
        } else {
        c = b.substr(i-1,1) + c;
        }
        }
        if (_minus) c = "-" + c ;
        return c;
        }

        function numbersonly(ini, e){
        if (e.keyCode>=49){
        if(e.keyCode<=57){
        a = ini.value.toString().replace(".","");
        b = a.replace(/[^\d]/g,"");
        b = (b=="0")?String.fromCharCode(e.keyCode):b + String.fromCharCode(e.keyCode);
        ini.value = tandaPemisahTitik(b);
        return false;
        }
        else if(e.keyCode<=105){
        if(e.keyCode>=96){
        //e.keycode = e.keycode - 47;
        a = ini.value.toString().replace(".","");
        b = a.replace(/[^\d]/g,"");
        b = (b=="0")?String.fromCharCode(e.keyCode-48):b + String.fromCharCode(e.keyCode-48);
        ini.value = tandaPemisahTitik(b);
        //alert(e.keycode);
        return false;
        }
        else {return false;}
        }
        else {
        return false; }
        }else if (e.keyCode==48){
        a = ini.value.replace(".","") + String.fromCharCode(e.keyCode);
        b = a.replace(/[^\d]/g,"");
        if (parseFloat(b)!=0){
        ini.value = tandaPemisahTitik(b);
        return false;
        } else {
        return false;
        }
        }else if (e.keyCode==95){
        a = ini.value.replace(".","") + String.fromCharCode(e.keyCode-48);
        b = a.replace(/[^\d]/g,"");
        if (parseFloat(b)!=0){
        ini.value = tandaPemisahTitik(b);
        return false;
        } else {
        return false;
        }
        }else if (e.keyCode==8 || e.keycode==46){
        a = ini.value.replace(".","");
        b = a.replace(/[^\d]/g,"");
        b = b.substr(0,b.length -1);
        if (tandaPemisahTitik(b)!=""){
        ini.value = tandaPemisahTitik(b);
        } else {
        ini.value = "";
        }

        return false;
        } else if (e.keyCode==9){
        return true;
        } else if (e.keyCode==17){
        return true;
        } else {
        //alert (e.keyCode);
        return false;
        }

}

        </script>
    </body>

    </html>