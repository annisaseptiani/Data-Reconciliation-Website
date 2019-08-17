<style type="text/css">

input[type=text],th,td{width:400px;margin:10px 0 10px 0;padding:10px;resize:none}
textarea{height:200px;}

</style>

<table border="">
	<thead>
		<th>NOREF</th><th>IDLAY</th><th>IDKAB</th><th>NOID</th><th>PERIODE</th><th>DENDA</th><th>TOTALBYR</th><th>DATA</th><th>TIMETMP</th>


	</thead>
	<tbody>
<?php	
		include_once( "koneksibiller.php ");
		
		$query = "SELECT * FROM trx_pdam";
		$hasil = mysqli_query($koneksi, $query );
		
		if ( !$hasil )
			die( "Permintaan gagal!!!" );
			
		while ($tbl_trx_pdam=mysqli_fetch_array($hasil))
		{
		?>
		<tr>
			<td><?php echo $tbl_trx_pdam['noref']; ?> </a></td>
			<td><?php echo  $tbl_trx_pdam['idlay']; ?> </td>
			<td><?php echo  $tbl_trx_pdam['idkab']; ?> </td>
			<td><?php echo  $tbl_trx_pdam['noid']; ?> </td>
			<td><?php echo  $tbl_trx_pdam['periode']; ?> </td>
			<td><?php echo  $tbl_trx_pdam['denda']; ?> </td>
			<td><?php echo  $tbl_trx_pdam['totalbyr']; ?> </td>
			<td><?php echo  $tbl_trx_pdam['data']; ?> </td>
			<td><?php echo  $tbl_trx_pdam['timetmp']; ?> </td>
		</tr>

		<?php
		}
	?>
	</tbody>
</table>