<style type="text/css">

input[type=text],th,td{width:400px;margin:10px 0 10px 0;padding:10px;resize:none}
textarea{height:200px;}

</style>

<table border="">
	<thead>
		<th>ID BILLER</th><th>NAMA BILLER</th><th>ALAMAT BILLER</th><th>CONTACT PERSON</th><th>NO REKENING</th><th>AKSI</th>


	</thead>
	<tbody>
<?php	
		include_once( "koneksibiller.php ");
		
		$query = "SELECT * FROM biller";
		$hasil = mysqli_query($koneksi, $query );
		
		if ( !$hasil )
			die( "Permintaan gagal!!!" );
			
		while ($tbl_biller=mysqli_fetch_array($hasil))
		{
		?>
		<tr>
			<td><?php echo $tbl_biller['id_biller']; ?> </a></td>
			<td><?php echo  $tbl_biller['nama']; ?> </td>
			<td><?php echo  $tbl_biller['alamat']; ?> </td>
			<td><?php echo  $tbl_biller['cp']; ?> </td>
			<td><?php echo  $tbl_biller['rek']; ?> </td>
		<td><a href="module/hapus.php?id=<?php echo $tbl_biller['id']; ?>">
			Hapus</a> <a href="?module=ubah_form&id=<?php echo $tbl_biller['id']; ?>">
			Ubah</a></td>
		</tr>

		<?php
		}
	?>
	</tbody>
</table>