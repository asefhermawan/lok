<?php
error_reporting(0);
	require "../../php/connection.php";
	$id = $_POST['id'];
	
	$single = "SELECT * FROM lowongan WHERE lowongan_id = '$id'";
	$q = mysqli_query($connection, $single);
	
	$result = mysqli_fetch_array($q, MYSQLI_ASSOC);
	
	$id = $_POST['id'];
	$judul = $_POST['judul'];
	$alamat = $_POST['alamat'];
	$posisi = $_POST['posisi'];
	$idr = $_POST['idr'];
	$idr2 = $_POST['idr2'];
	$tamatan_id = $_POST['tamatan_id'];
	$jurusan = $_POST['jurusan'];
	$kategori_id = $_POST['kategori_id'];
	$tgl_buka = $_POST['tgl_buka'];
	$tgl_tutup = $_POST['tgl_tutup'];
	$deskripsi = $_POST['deskripsi'];
	
	$date = date('dmYHis');
	$gambar = $_FILES['gambar']['tmp_name'];
	$gambar_nama = $_FILES['gambar']['name'];
	$hapus_spasi = str_replace(' ', '', $gambar_nama);
	$simpan_gambar_nama = $date.'_'.$hapus_spasi;
	$tujuan_foto = '../perusahaan/gambar/'.$date.'_'.$hapus_spasi;
	
	$deskripsi = mysqli_real_escape_string($connection, $deskripsi);

if (empty($gambar_nama)){
$strQuery = "UPDATE lowongan SET lowongan_judul = '$judul', alamat = '$alamat', posisi = '$posisi', idr = '$idr', idr2 = '$idr2', tamatan_id = '$tamatan_id', jurusan = '$jurusan',
	kategori_id = '$kategori_id', lowongan_tgl_buka = '$tgl_buka', lowongan_tgl_tutup = '$tgl_tutup',
	lowongan_deskripsi = '$deskripsi'
	WHERE lowongan_id = $id";
	$query = mysqli_query($connection, $strQuery);
	
	if(!$query){
		echo "<script language=javascript>alert('Terjadi Kesalahan Saat Mengupdate Data Lowongan');</script>";
		}
}else{

	// menghapus gambar yang lama
	// nama field gambar
	$lokasi =  $result['gambar'];
	// alamat tempat foto
	$hapus_gambar="../gambar/$lokasi";
	// script untuk menghapus gambar dari folder
	if($lokasi){
		unlink($hapus_gambar);
	}
	move_uploaded_file($gambar, '../perusahaan/gambar/'.$simpan_gambar_nama);

	$strQuery = "UPDATE lowongan SET lowongan_judul = '$judul', alamat = '$alamat', posisi = '$posisi', idr = '$idr', idr2 = '$idr2', tamatan_id = '$tamatan_id', jurusan = '$jurusan', kategori_id = '$kategori_id', lowongan_tgl_buka = '$tgl_buka', lowongan_tgl_tutup = '$tgl_tutup',
	lowongan_deskripsi = '$deskripsi', gambar = '$simpan_gambar_nama'
	WHERE lowongan_id = $id";
	$query = mysqli_query($connection, $strQuery);
	
	if(!$query){
		echo "<script language=javascript>alert('Terjadi Kesalahan Saat Mengupdate Data Lowongan');</script>";	
	}
}
	echo "<script language=javascript>document.location.href='../lowongan.php'</script>";
	mysqli_close($connection);
?>