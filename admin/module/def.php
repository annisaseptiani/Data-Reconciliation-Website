<div class="container">
<h2 align="center">PENCARIAN DATA TRANSAKSI PBB BY ID</h2>
<br/>
<br/>


<?php
// Range.php
if(isset($_POST["id"]))
{
	$conn = mysqli_connect("localhost", "root", "", "pos");
	$result = '';
	$query = "SELECT COUNT(noref) as 'jumlah', noid, SUM(totalbyr) as 'totalbyr', SUM(denda) as denda, SUM(totalbyr+denda) as 'total' FROM trx_pdam WHERE noref ='".$_POST["id"]."' GROUP BY noid";
	
	$sql = mysqli_query($conn, $query);
	$result .='
	
	<table class="table table-bordered">
	<tr>
	<th>jumlah</th>
	<th>noref</th>
<th>total byr</th>
<th>denda</th>
<th>total seluruh</th>

	</tr>';
	if(mysqli_num_rows($sql) > 0)
	{
		while($row = mysqli_fetch_array($sql))
		{
			$result .='
			<tr>
				<td>'.$row["jumlah"].'</td>
				<td>'.$row["noid"].'</td>
			<td>'.$row["totalbyr"].'</td>
			<td>'.$row["denda"].'</td>
			<td>'.$row["total"].'</td>
		
			</tr>';
		}
	}
	else
	{
		$result .='
		<tr>
		<td colspan="5">No Purchased Item Found</td>
		</tr>';
	}
	$result .='</table>';
	echo $result;
}
?>

