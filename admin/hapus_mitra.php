<?php	
		include_once( 'koneksibiller.php' );
		$id_mit= $_GET['id_mit'];		
		$query = "DELETE FROM `mitra` where `id_mit`=$id_mit";
		$hasil = mysqli_query( $koneksi,$query );
		
		if ( !$hasil )
			die( "Penghapusan gagal!!!" );
			
		header("Location:../dashboard.php?module=tampil_mitra");
?>