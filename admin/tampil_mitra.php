<style type="text/css">

input[type=text],th,td{width:400px;margin:10px 0 10px 0;padding:10px;resize:none}
textarea{height:200px;}

</style>

<table border="">
	<thead>
		<th>ID MITRA</th><th>NAMA MITRA</th><th>NO REFERENSI</th><th>KET</th><th>AKSI</th>


	</thead>
	<tbody>
<?php	
		include_once( "koneksibiller.php ");
		
		$query = "SELECT * FROM mitra";
		$hasil = mysqli_query($koneksi, $query );
		
		if ( !$hasil )
			die( "Permintaan gagal!!!" );
			
		while ($tbl_mitra=mysqli_fetch_array($hasil))
		{
		?>
		<tr>
			<td><?php echo $tbl_mitra['id_mitra']; ?> </a></td>
			<td><?php echo  $tbl_mitra['nama_mitra']; ?> </td>
			<td><?php echo  $tbl_mitra['noref']; ?> </td>
			
			<td><?php 
				echo(is_array(json_decode($tbl_mitra['ket'])))?
				implode(',',json_decode($tbl_mitra['ket'])) : $tbl_mitra['ket'];
			?></td>
		
		<td><a href="module/hapus_mitra.php?id_mit=<?php echo $tbl_mitra['id_mit']; ?>">
			<img src=module/hapus.png border=0></a> <a href="?module=ubah_form_mitra&id_mit=<?php echo $tbl_mitra['id_mit']; ?>">
			<img src=module/update.png border=0></a></td>
		</tr>

		<?php
		}
	?>
	</tbody>
</table>