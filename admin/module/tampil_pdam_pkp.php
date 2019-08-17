<style type="text/css">

input[type=text],th,td{width:400px;margin:10px 0 10px 0;padding:10px;resize:none}
textarea{height:200px;}

</style>

<table border="">
	<thead>
		<th>IDREQUEST</th><th>IDPEL</th><th>PERIODE</th><th>REC</th><th>IDUSER_DIRECTH2H</th><th>IDREFF_KTR</th><th>IDREFF_NMKTR</th><th>IDREFF_PTGS</th><th>DE1</th><th>DE2</th><th>DE3</th><th>DE7</th><th>DE11</th><th>DE12</th><th>DE13</th><th>DE15</th><th>DE18</th><th>DE32</th><th>DE37</th><th>DE39</th><th>DE41</th><th>DE42</th><th>DE48</th><th>DE49</th><th>DE61</th><th>ADD_BEAMITRA</th><th>TGLBAYAR</th><th>UPD</th>


	</thead>
	<tbody>
<?php	
		include_once( "koneksibiller.php ");
		
		$query = "SELECT * FROM pdam_pkp";
		$hasil = mysqli_query($koneksi, $query );
		
		if ( !$hasil )
			die( "Permintaan gagal!!!" );
			
		while ($tbl_pdam_pkp=mysqli_fetch_array($hasil))
		{
		?>
		<tr>
			<td><?php echo $tbl_pdam_pkp['IDREQUEST']; ?> </a></td>
			<td><?php echo  $tbl_pdam_pkp['IDPEL']; ?> </td>
			<td><?php echo  $tbl_pdam_pkp['PERIODE']; ?> </td>
			<td><?php echo  $tbl_pdam_pkp['REC']; ?> </td>
			<td><?php echo  $tbl_pdam_pkp['IDUSER_DIRECTH2H']; ?> </td>
			<td><?php echo  $tbl_pdam_pkp['IDREFF_KTR']; ?> </td>
			<td><?php echo  $tbl_pdam_pkp['IDREFF_NMKTR']; ?> </td>
			<td><?php echo  $tbl_pdam_pkp['IDREFF_PTGS']; ?> </td>
			<td><?php echo  $tbl_pdam_pkp['DE1']; ?> </td>
			<td><?php echo  $tbl_pdam_pkp['DE2']; ?> </td>
			<td><?php echo  $tbl_pdam_pkp['DE3']; ?> </td>
			<td><?php echo  $tbl_pdam_pkp['DE7']; ?> </td>
			<td><?php echo  $tbl_pdam_pkp['DE11']; ?> </td>
			<td><?php echo  $tbl_pdam_pkp['DE12']; ?> </td>
			<td><?php echo  $tbl_pdam_pkp['DE13']; ?> </td>
			<td><?php echo  $tbl_pdam_pkp['DE15']; ?> </td>
			<td><?php echo  $tbl_pdam_pkp['DE18']; ?> </td>
			<td><?php echo  $tbl_pdam_pkp['DE32']; ?> </td>
			<td><?php echo  $tbl_pdam_pkp['DE37']; ?> </td>
			<td><?php echo  $tbl_pdam_pkp['DE39']; ?> </td>
			<td><?php echo  $tbl_pdam_pkp['DE41']; ?> </td>
			<td><?php echo  $tbl_pdam_pkp['DE42']; ?> </td>
			<td><?php echo  $tbl_pdam_pkp['DE48']; ?> </td>
			<td><?php echo  $tbl_pdam_pkp['DE49']; ?> </td>
			<td><?php echo  $tbl_pdam_pkp['DE61']; ?> </td>
			<td><?php echo  $tbl_pdam_pkp['ADD_BEAMITRA']; ?> </td>
			<td><?php echo  $tbl_pdam_pkp['TGLBAYAR']; ?>
			 </td>
			 <td><?php echo  $tbl_pdam_pkp['UPD']; ?> </td>
		</tr>

		<?php
		}
	?>
	</tbody>
</table>