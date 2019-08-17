<?php
		
		include( 'koneksibiller.php');
		
		$id = $_POST['id'];
		$id_biller = $_POST['id_biller'];
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$cp = $_POST['cp'];
		$rek = $_POST['rek'];	
		
		$query = "UPDATE `biller` SET `id_biller`='$id_biller', `nama`='$nama',
		`alamat`='$alamat', `cp`='$cp', `rek`='$rek' where `id`=$id";
		$hasil = mysqli_query( $koneksi,$query );
		
		if ( !$hasil )
			die( "Pengubahan gagal!!!" );
			
		Header("Location:../dashboard.php?module=tampil")
			
?>