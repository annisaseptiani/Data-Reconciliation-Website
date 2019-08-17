<?php	
		include_once( 'koneksibiller.php' );
		$id= $_GET['id'];		
		$query = "DELETE FROM `biller` where `id`=$id";
		$hasil = mysqli_query( $koneksi,$query );
		
		if ( !$hasil )
			die( "Penghapusan gagal!!!" );
			
		header("Location:../dashboard.php?module=tampil");
?>