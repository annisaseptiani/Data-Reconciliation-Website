<?php
		
		include( 'koneksi.php');
		$id = $_GET['id'];
				
		$query = "SELECT * FROM biller where id='$id'";
		$hasil = mysqli_query( $koneksi,$query );
		
		$tbl_biller=mysqli_fetch_array($hasil);

		$id_biller = $tbl_biller['id_biller'];
		$nama = $tbl_biller['nama'];
		$alamat = $tbl_biller['alamat'];
		$cp = $tbl_biller['cp'];
		$rek = $tbl_biller['rek'];	
?>

<html>
<head>
<title>Form Input HTML</title>
</head>
<body>
	<form Action ="ubah.php" method="GET">
	<input type="text" name="id" value="<?php echo $id; ?>" />
	<table>
		<tr>
			<td>ID Biller :</td>
			<td><input type="text" name="id_biller" value="<?php echo $id_biller;?>" /> </td>
		</tr>
		<tr>
			<td>Nama Biller :</td>
			<td><input type="text" name='nama' value="<?php echo $nama;?>" /> </td>
		</tr>
		<tr>
			<td>Alamat Biller :</td>
			<td><textarea name="alamat" cole="55" rows="5"><?php echo $alamat;?>
			</textarea></td>
		</tr>
		<tr>
			<td>Contact Person :</td>
			<td><input type="text" name='cp' value="<?php echo $cp;?>" /> </td>
		</tr>
		<tr>
			<td>No Rekening :</td>
			<td><input type="text" name='rek' value="<?php echo $rek;?>" /> </td>
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