<?php
error_reporting(0);
	require "../../php/connection.php";
	$id = $_POST['id'];
	
	$single = "SELECT * FROM berita WHERE berita_id = '$id'";
	$q = mysqli_query($connection, $single);
	
	$result = mysqli_fetch_array($q, MYSQLI_ASSOC);
	
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$judul = $_POST['judul'];
	$tgl_upload = $_POST['tgl_upload'];
	$deskripsi = $_POST['deskripsi'];	

	$date = date('dmYHis');
	$gambar = $_FILES['gambar']['tmp_name'];
	$gambar_nama = $_FILES['gambar']['name'];
	$hapus_spasi = str_replace(' ', '', $gambar_nama);
	$simpan_gambar_nama = $date.'_'.$hapus_spasi;
	$tujuan_foto = 'berita/'.$date.'_'.$hapus_spasi;
	
	$deskripsi = mysqli_real_escape_string($connection, $deskripsi);

if (empty($gambar_nama)){
$strQuery = "UPDATE berita SET nama = '$nama', judul = '$judul', tgl_upload = '$tgl_upload', deskripsi = '$deskripsi' WHERE berita_id = $id";
	$query = mysqli_query($connection, $strQuery);
	
	if(!$query){
		echo "<script language=javascript>alert('Terjadi Kesalahan Saat Mengupdate Data Berita1');</script>";
		}
}else{

	// menghapus gambar yang lama
	// nama field gambar
	$lokasi =  $result['gambar'];
	// alamat tempat foto
	$hapus_gambar="../berita/$lokasi";
	// script untuk menghapus gambar dari folder
	if($lokasi){
		unlink($hapus_gambar);
	}
	move_uploaded_file($gambar, '../berita/'.$simpan_gambar_nama);

	$strQuery = "UPDATE berita SET nama = '$nama', judul = '$judul', deskripsi = '$deskripsi', gambar = '$simpan_gambar_nama' WHERE berita_id = $id";
	$query = mysqli_query($connection, $strQuery);
	
	if(!$query){
		echo "<script language=javascript>alert('Terjadi Kesalahan Saat Mengupdate Data Berita');</script>";	
	}
}
	echo "<script language=javascript>document.location.href='../berita.php'</script>";
	mysqli_close($connection);
?>