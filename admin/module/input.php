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
	<form action="module/simpan.php" method="GET">
	<table>
		<tr>
			<td>ID Biller</td>
			<td><input type="text" name="id_biller"></td>
		</tr>
		<tr>
			<td>Nama Biller</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>Alamat Biller</td>
			<td><textarea name="alamat" cole="55" rows="3"></textarea></td>
		</tr>
		<tr>
			<td>Contact Person</td>
			<td><input type="text" name="cp"></td>
		</tr>
		<tr>
		<tr>
			<td>No Rekening</td>
			<td><input type="text" name="rek"></td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<input type="submit" value="SUBMIT">
				<input type="reset" value="CANCEL">
			</td>
		</tr></table></form></body></html>