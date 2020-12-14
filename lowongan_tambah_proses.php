<?php
error_reporting(0); 
	require "../../php/connection.php";
	session_start();
	$perusahaan_id = $_SESSION['perusahaan_id'];
	$judul = $_POST['judul'];
	$kategori_id = $_POST['kategori_id'];
	$alamat = $_POST['alamat'];
	$posisi = $_POST['posisi'];
	$idr = $_POST['idr'];
	$idr2 = $_POST['idr2'];
	$tgl_buka = $_POST['tgl_buka'];
	$tgl_tutup = $_POST['tgl_tutup'];
	$tamatan_id = $_POST['tamatan_id'];
	$jurusan = $_POST['jurusan'];
	$deskripsi = $_POST['deskripsi'];

	$fileName = $_FILES['gambar']['name'];
	$tmp = $_FILES['gambar']['tmp_name'];
	$path = "../gambar/".$fileName;
	if(move_uploaded_file($tmp, $path)){
		$strQuery ="INSERT INTO lowongan VALUES(null,'$perusahaan_id', '$kategori_id', '$judul', '$alamat', ' $posisi', '$idr', '$idr2', '$tamatan_id', '$jurusan', '$deskripsi', '$tgl_buka', '$tgl_tutup', '$fileName')";
	} else {
	//$nama_file = $_FILES['gambar']['name'];
	//$source = $_FILES['gambar']['tmp_name'];
	//$folder = '../uploads/';
	//move_uploaded_file($source, $folder.$nama_file);

	$strQuery ="INSERT INTO lowongan VALUES(null,'$perusahaan_id', '$kategori_id', '$judul', '$alamat', '$posisi', '$idr', '$idr2', '$tamatan_id', '$jurusan', '$deskripsi', '$tgl_buka', '$tgl_tutup', '$fileName')";
	echo "<script>alert('Gambar tidak disimpan');</script>";
	}
	$query = mysqli_query($connection, $strQuery);
	if($query){
		$id = mysqli_insert_id($connection);
		echo "<script language=javascript>document.location.href='../lowongan_tambah_syarat.php?id=$id'</script>";
	}else{
		echo "<script language=javascript>document.location.href='../lowongan_tambah_syarat.php'</script>";
	}
	
	mysqli_close($connection);
?>