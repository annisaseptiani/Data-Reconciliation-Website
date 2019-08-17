<?php

	include_once('koneksibiller.php');	
	$id_biller = $_GET['id_biller'];
	$nama = $_GET['nama'];
	$alamat = $_GET['alamat'];
	$cp = $_GET['cp'];
	$rek = $_GET['rek'];	
	$query = "INSERT INTO `biller` (`id_biller`, `nama`, `alamat`, `cp`, `rek`) VALUES ('$id_biller', '$nama', '$alamat', '$cp', '$rek')";
	$hasil = mysqli_query($koneksi, $query);	
	if (! $hasil)
		die ("Penyimpanan gagal!");
	
	header("Location:../dashboard.php?module=tampil");
?>