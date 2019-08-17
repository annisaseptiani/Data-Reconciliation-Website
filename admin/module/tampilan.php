<?php

	include( 'koneksibiller.php');
				
			if(isset($_POST['pencarian'])){
				$tanggal_awal=$_POST['tanggal_awal'];
				$tanggal_akhir=$_POST['tanggal_akhir'];
				if(empty($tanggal_awal) || empty($tanggal_akhir)){
					?>
					<script language="Javascript">
						alert("Tanggal Awal dan Tanggal Akhir Harap Diisi!");
						document.location="module/coba.php"
					</script>
					<?php
				}else{
					?><i><b>Informasi:</b>Hasil pencarian data berdasarkan periode tanggal <b> <?php echo $_POST['tanggal_awal']?></b>s/d<b><?php echo $_POST['tanggal_akhir']?></b></i>
					<?php
					$query="select *from trx_pbb where timetmp between $tanggal_awal and $tanggal_akhir";
					$hasil= mysqli_query($koneksi, $query);
				}
			}
			?>

			</p>
			<table width="1100" border="0" align="center" cellpadding="0" cellspasing="0">
				<tr>
					<td> noref </td>
					<td> idlay </td>
					<td> idkab </td>
					<td> noid </td>
					<td> periode </td>
					<td> denda </td>
					<td> totalbyr </td>
					<td> data </td>
					<td> timetmp </td>
					</tr>
					<?php

					while($row=mysqli_fetch_array($hasil)){
						?>
						<tr>
							<td> <?php echo $row['noref']; ?></td>
							<td> <?php echo $row['idlay']; ?></td>
							<td> <?php echo $row['idkab']; ?></td>
							<td> <?php echo $row['noid']; ?></td>
							<td> <?php echo $row['periode']; ?></td>
							<td> <?php echo $row['denda']; ?></td>
							<td> <?php echo $row['totalbyr']; ?></td>
							<td> <?php echo $row['data']; ?></td>
							<td> <?php echo $row['timetmp']; ?></td>
							</tr>
							<?php
						}
						?>
						<tr>
							<td colspan="4" align="center">
							<?php
								if(mysqli_num_rows($hasil)==0){
									echo "pencarian tidak ditemukan";
								}
								?>
								</td>
							</tr>
						</table>
						
						<iframe width="174" height="189" name="gToday:normal:calendar/normal.js" id="gToday:normal:calendar/normal.js" src="calendar/ipopeng.htm" scrolling="no" frameborder="0" style="visibility:visible; z-index:999; position:absolute; top:-500px; left:-500px;"> </iframe>
