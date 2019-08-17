<?php

	include_once('koneksibiller.php');	
	$id_mitra = $_GET['id_mitra'];
	$nama_mitra = $_GET['nama_mitra'];
	$noref = $_GET['noref'];
	$ket = $_GET['ket'];	
	$ket = json_encode($_GET['ket']);
	$query = "INSERT INTO `mitra` (`id_mitra`, `nama_mitra`, `noref`, `ket`) VALUES ('$id_mitra', '$nama_mitra', '$noref', '$ket')";
	$hasil = mysqli_query($koneksi, $query);	
	if (! $hasil)
		die ("Penyimpanan gagal!");
	
	header("Location:../dashboard.php?module=tampil_mitra");
?>