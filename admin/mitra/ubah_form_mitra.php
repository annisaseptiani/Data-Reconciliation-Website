<?php
		
		include( 'koneksibiller.php');
		$id_mit = $_GET['id_mit'];
				
		$query = "SELECT * FROM mitra where id_mit='$id_mit'";
		$hasil = mysqli_query( $koneksi,$query );
		
		$tbl_mitra=mysqli_fetch_array($hasil);

		$id_mitra = $tbl_mitra['id_mitra'];
		$nama_mitra = $tbl_mitra['nama_mitra'];
		$noref = $tbl_mitra['noref'];
		$ket = (is_array(json_decode($tbl_mitra['ket'])))?
				json_decode($tbl_mitra['ket']) : array();

		$tbl_mitra['ket'];	
?>

<style type="text/css">

input[type=text],select,textarea{width:400px;margin:10px 0 10px 0;padding:10px;resize:none}
textarea{height:200px;}

</style>

<html>
<head>
<title>Form Input HTML</title>
</head>
<body>
	<form Action ="module/ubah_mitra.php" method="POST">
	
	<input type="hidden" name="id_mit" value="<?php echo $id_mit; ?>" />
	<table>
		<tr>
			<td>ID Mitra :</td>
			<td><input type="text" name="id_mitra" value="<?php echo $id_mitra;?>" /> </td>
		</tr>
		<tr>
			<td>Nama Mitra :</td>
			<td><input type="text" name='nama_mitra' value="<?php echo $nama_mitra;?>" /> </td>
		</tr>
		
			<td>No Referensi :</td>
			<td><input type="text" name='noref' value="<?php echo $noref;?>" /> </td>
		</tr>
		<tr>
			<td>Keterangan :</td>
			<td><input type="checkbox" name="ket[]" value="AKTIF"/>AKTIF
			<input type="checkbox" name="ket[]" value="TIDAK AKTIF"/>TIDAK AKTIF </td>
		</tr>
		<tr>
		<td colspan="2" align="center">
		<input type="submit" value="SUBMIT">
		<input type="reset" value="CANCEL"> </td>
		</tr>
	</table>
</form>
</body>
</html>