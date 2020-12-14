<?php
error_reporting(0); 
	require "../../php/connection.php";
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$npwp = $_POST['npwp'];
	$bidang = $_POST['bidang'];
	$provinsi = $_POST['provinsi'];
	$kota_id = $_POST['kota_id'];
	$email = $_POST['email'];
	$telepon = $_POST['telepon'];

	$login_id = $_POST['login_id'];
	$username = $_POST['username'];
	$password = $_POST['password'];
			
	$date = date('dmYHis');
	$gambar = $_FILES['gambar']['tmp_name'];
	$gambar_nama = $_FILES['gambar']['name'];
	$hapus_spasi = str_replace(' ', '', $gambar_nama);
	$simpan_gambar_nama = $date.'_'.$hapus_spasi;
	$tujuan_foto = '../perusahaan/gambar/'.$date.'_'.$hapus_spasi;

	mysqli_begin_transaction($connection, MYSQLI_TRANS_START_READ_WRITE);
	mysqli_autocommit($connection, FALSE);

	if(!$hapus_spasi) {
		$strQuery = "UPDATE perusahaan SET 
		perusahaan_nama = '$nama', 
		perusahaan_alamat = '$alamat', 
		provinsi = '$provinsi',
		kota_id = '$kota_id', 
		perusahaan_email = '$email',  
		perusahaan_telepon = '$telepon',
		bidang = '$bidang',
		npwp = '$npwp'
		WHERE perusahaan_id = $id";
		$query = mysqli_query($connection, $strQuery);
		if($query){
			if(!empty($password)){
				$encPassword = md5($password);
				$strQuery = "UPDATE login SET login_username = '$username', login_password = '$encPassword' WHERE login_id = $login_id";
			}else {
				$strQuery = "UPDATE login SET login_username = '$username' WHERE login_id = $login_id";
			}	

			$query = mysqli_query($connection, $strQuery);
			if($query) {			
				$_SESSION['admin_nama'] = $nama;
				echo "<script language=javascript>alert('Profil Berhasil Diupdate');</script>";
				mysqli_commit($connection);
			}else {
				mysqli_rollback($connection);
				echo "<script language=javascript>alert('Terjadi Kesalahan Saat Mengupdate Data Login Perusahaan');</script>";
			}
		}else{
			mysqli_rollback($connection);
			echo "<script language=javascript>alert('Terjadi Kesalahan Saat Mengupdate Data Perusahaan');</script>";
		}
	} else {
		// menghapus gambar yang lama
		// nama field gambar
		$lokasi =  $result['gambar'];
		// alamat tempat foto
		$hapus_gambar="../perusahaan/gambar/$lokasi";
		// script untuk menghapus gambar dari folder
		if($lokasi){
			unlink($hapus_gambar);
		}
		move_uploaded_file($gambar, '../perusahaan/gambar/'.$simpan_gambar_nama);

		$strQuery = "UPDATE perusahaan SET 
		perusahaan_nama = '$nama', 
		perusahaan_alamat = '$alamat', 
		provinsi = '$provinsi',
		kota_id = '$kota_id', 
		perusahaan_email = '$email',  
		perusahaan_telepon = '$telepon',
		bidang = '$bidang',
		npwp = '$npwp',
		gambar = '$simpan_gambar_nama'
		WHERE perusahaan_id = $id";
		$query = mysqli_query($connection, $strQuery);
		if($query){
			if(!empty($password)){
				$encPassword = md5($password);
				$strQuery = "UPDATE login SET login_username = '$username', login_password = '$encPassword' WHERE login_id = $login_id";
			}else {
				$strQuery = "UPDATE login SET login_username = '$username' WHERE login_id = $login_id";
			}	

			$query = mysqli_query($connection, $strQuery);
			if($query) {			
				$_SESSION['admin_nama'] = $nama;
				echo "<script language=javascript>alert('Profil Berhasil Diupdate');</script>";
				mysqli_commit($connection);
			}else {
				mysqli_rollback($connection);
				echo "<script language=javascript>alert('Terjadi Kesalahan Saat Mengupdate Data Login Perusahaan');</script>";
			}
		}else{
			mysqli_rollback($connection);
			echo "<script language=javascript>alert('Terjadi Kesalahan Saat Mengupdate Data Perusahaan');</script>";
		}
	}
	
	mysqli_autocommit($connection, TRUE);
	echo "<script language=javascript>document.location.href='../perusahaan.php'</script>";
	mysqli_close($connection);
?>