<?php
		
		include( 'koneksibiller.php');
		
		$id_mitra = $_POST['id_mitra'];
		$nama_mitra = $_POST['nama_mitra'];
		$noref = $_POST['noref'];
		$ket = json_encode($_POST['ket']);
		
		$query = "UPDATE `mitra` SET `id_mitra`='$id_mitra', `nama_mitra`='$nama_mitra',
		`noref`='$noref', `ket`='$ket' where `id_mitra`='$id_mitra'";
		$hasil = mysqli_query( $koneksi,$query );
		
		if ( !$hasil )
			die( "Pengubahan gagal!!!" );
			
		Header("Location:../dashboard.php?module=tampil_mitra")
			
?>