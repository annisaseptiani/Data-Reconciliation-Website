<?php
		
		include( 'koneksi.php');
		
		$id = $_GET['id'];
		$id_biller = $_GET['id_biller'];
		$nama = $_GET['nama'];
		$alamat = $_GET['alamat'];
		$cp = $_GET['cp'];
		$rek = $_GET['rek'];	
		
		$query = "UPDATE `biller` SET `id_biller`='$id_biller', `nama`='$nama',
		`alamat`='$alamat' `cp`='$cp' `rek`='$rek' where `id`='$id'";
		$hasil = mysqli_query( $koneksi,$query );
		
		if ( !$hasil )
			die( "Pengubahan gagal!!!" );
			
		include( 'tampil.php');
			
?>