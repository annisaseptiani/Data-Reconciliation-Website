<html>
<head>
<title>
</title>
<style type="text/css">

input[type=text],select,textarea{width:400px;margin:10px 0 10px 0;padding:10px;resize:none}
textarea{height:200px;}

</style>
</head>
<body>
<center>
	<form action="module/simpan_mitra.php" method="GET">
	<table>
		<tr>
			<td>ID Mitra</td>
			<td><input type="text" name="id_mitra"></td>
		</tr>
		<tr>
			<td>Nama Mitra</td>
			<td><input type="text" name="nama_mitra"></td>
		</tr>
		<tr>
			<td>No Referensi</td>
			<td><input type="text" name="noref"></td>
		</tr>
		<tr>
			<td>Keterangan</td>
			<td>
			<input type="checkbox" name="ket[]" value="AKTIF"/>AKTIF
			<input type="checkbox" name="ket[]" value="TIDAK AKTIF"/>TIDAK AKTIF
			</td>
		</tr>
		
		<tr>
			<td colspan="2" align="center">
				<input type="submit" value="SUBMIT">
				<input type="reset" value="CANCEL">
			</td>
		</tr></table></form></center></body></html>