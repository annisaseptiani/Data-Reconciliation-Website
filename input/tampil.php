<table border="1">
	<thead>
		<th>ID BILLER</th><th>NAMA BILLER</th><th>ALAMAT BILLER</th><th>CONTACT PERSON</th><th>NO REKENING</th><th>AKSI</th>


	</thead>
	<tbody>
<?php	
		include_once( "koneksi.php ");
		
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
		<td><a href="hapus.php?id=<?php echo $tbl_biller['id']; ?>">
			Hapus</a> <a href="ubah_form.php?id=<?php echo $tbl_biller['id']; ?>">
			Ubah</a></td>
		</tr>

		<?php
		}
	?>
	</tbody>
</table>