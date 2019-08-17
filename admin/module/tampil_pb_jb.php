<style type="text/css">

input[type=text],th,td{width:400px;margin:10px 0 10px 0;padding:10px;resize:none}
textarea{height:200px;}

</style>

<table border="">
	<thead>
		<th>IDREQUEST</th><th>IDPEL</th><th>PERIODE</th><th>REC</th><th>IDUSER_DIRECTH2H</th><th>IDREFF_KTR</th><th>IDREFF_NMKTR</th><th>IDREFF_PTGS</th><th>DE1</th><th>DE3</th><th>DE4</th><th>DE7</th><th>DE11</th><th>DE12</th><th>DE13</th><th>DE37</th><th>DE39</th><th>DE48</th><th>TGLBAYAR</th><th>UPD</th>


	</thead>
	<tbody>
<?php	
		include_once( "koneksibiller.php ");
		
		$query = "SELECT * FROM pbb_jb";
		$hasil = mysqli_query($koneksi, $query );
		
		if ( !$hasil )
			die( "Permintaan gagal!!!" );
			
		while ($tbl_pbb_jb=mysqli_fetch_array($hasil))
		{
		?>
		<tr>
			<td><?php echo $tbl_pbb_jb['IDREQUEST']; ?> </a></td>
			<td><?php echo  $tbl_pbb_jb['IDPEL']; ?> </td>
			<td><?php echo  $tbl_pbb_jb['PERIODE']; ?> </td>
			<td><?php echo  $tbl_pbb_jb['REC']; ?> </td>
			<td><?php echo  $tbl_pbb_jb['IDUSER_DIRECTH2H']; ?> </td>
			<td><?php echo  $tbl_pbb_jb['IDREFF_KTR']; ?> </td>
			<td><?php echo  $tbl_pbb_jb['IDREFF_NMKTR']; ?> </td>
			<td><?php echo  $tbl_pbb_jb['IDREFF_PTGS']; ?> </td>
			<td><?php echo  $tbl_pbb_jb['DE1']; ?> </td>
			<td><?php echo  $tbl_pbb_jb['DE3']; ?> </td>
			<td><?php echo  $tbl_pbb_jb['DE4']; ?> </td>
			<td><?php echo  $tbl_pbb_jb['DE7']; ?> </td>
			<td><?php echo  $tbl_pbb_jb['DE11']; ?> </td>
			<td><?php echo  $tbl_pbb_jb['DE12']; ?> </td>
			<td><?php echo  $tbl_pbb_jb['DE13']; ?> </td>
			<td><?php echo  $tbl_pbb_jb['DE37']; ?> </td>
			<td><?php echo  $tbl_pbb_jb['DE39']; ?> </td>
			<td><?php echo  $tbl_pbb_jb['DE48']; ?> </td>
			<td><?php echo  $tbl_pbb_jb['TGLBAYAR']; ?>
			 </td>
			 <td><?php echo  $tbl_pbb_jb['UPD']; ?> </td>
		</tr>

		<?php
		}
	?>
	</tbody>
</table>