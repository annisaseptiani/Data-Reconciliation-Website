<?php
	include( 'koneksibiller.php');
				
?>

<form action="module/tampilan.php" method="post" name="postform">
	<p align="center"><font color="orange" size="3"><b>Pencarian</b></font></p>
	<table border="0">
	<tr>
		<td width="125"><b>Dari Tanggal</b></td>
		<td colspan="2" width="190"><input type="text" name="tanggal_awal" size="16">
		<a href="javascript.void(0)" onClick="if(self.gfPop)gfPop.fPopCalendar(document.postform.tanggal_awal);return false;"">
		</a>
		</td>
		<td width="125"><b>Sampai Tanggal</b></td>
		<td colspan="2" width="190"> <input type="text" name="tanggal_akhir" size="16">
		<a href="javascript.void(0)" onClick="if(self.gfPop)gfPop.fPopCalendar(document.postform.tanggal_akhir);return false;">
		</a>
		</td>
		<td colspan="2" width="190"><input type="submit" value="Pencarian Data" name="pencarian"></td>
		<td colspan="2" width="70"><input type="reset" value="Reset"></td>
		</tr>
		</table>
		</form>
		<br>
		<p>