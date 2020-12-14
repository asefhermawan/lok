<?php
error_reporting(0); 
	require "../../php/connection.php";
	$id = $_POST['id'];
			
		$single = "SELECT * FROM berita WHERE berita_id = '$id'";
	$q = mysqli_query($connection, $single);
	
	$result = mysqli_fetch_array($q, MYSQLI_ASSOC);
	if($result['gambar']) {
		  $lokasi = $result['gambar'];
		    // alamat tempat foto
		    $hapus_gambar="../berita/$lokasi";
		    // script untuk menghapus gambar dari folder
		    unlink($hapus_gambar);
	}	
	
	$strQuery = "DELETE FROM berita WHERE berita_id = $id";
	$query = mysqli_query($connection, $strQuery);
	if(!$query){
		echo "<script language=javascript>alert('Terjadi Kesalahan Saat Menghapus Data Berita');</script>";	
	}
	
	echo "<script language=javascript>document.location.href='../berita.php'</script>";
	mysqli_close($connection);
?>