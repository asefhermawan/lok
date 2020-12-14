<?php
error_reporting(0); 
	require "../../php/connection.php";
	session_start();
	$berita_id = $_SESSION['berita_id'];
	$nama = $_POST['nama'];
	$judul = $_POST['judul'];
	$tgl_upload = $_POST['tgl_upload'];
	$deskripsi = $_POST['deskripsi']; 

	$fileName = $_FILES['gambar']['name'];
	$tmp = $_FILES['gambar']['tmp_name'];
	$path = "../berita/".$fileName;

	if(move_uploaded_file($tmp, $path)){
		$strQuery ="INSERT INTO berita VALUES(null,'$berita_id', '$nama', '$judul', '$tgl_upload', '$deskripsi', '$fileName')";
		echo "<script>alert('Data Berhasil tersimpan');</script>";
	} else {
	//$nama_file = $_FILES['gambar']['name'];
	//$source = $_FILES['gambar']['tmp_name'];
	//$folder = '../uploads/';
	//move_uploaded_file($source, $folder.$nama_file);

	$strQuery ="INSERT INTO berita VALUES(null,'$berita_id', '$nama', '$judul', '$tgl_upload', '$deskripsi', '$fileName')";
	echo "<script>alert('Gambar tidak disimpan');</script>";
	}
	$query = mysqli_query($connection, $strQuery);
	if($query){
		$id = mysqli_insert_id($connection);
		echo "<script language=javascript>document.location.href='../berita.php'</script>";
	}else{
		echo "<script language=javascript>document.location.href='../berita.php'</script>";
	}
	
	mysqli_close($connection);
?>