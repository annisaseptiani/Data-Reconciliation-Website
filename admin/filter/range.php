<?php
// Range.php
if(isset($_POST["From"], $_POST["to"]))
{
	$conn = mysqli_connect("localhost", "root", "", "tut");
	$result = '';
	$query = "SELECT * FROM trx_pbb WHERE timetmp BETWEEN '".$_POST["From"]."' AND '".$_POST["to"]."'";
	$sql = mysqli_query($conn, $query);
	$result .='
	<table class="table table-bordered">
	<tr>
	<th>noref</th>
<th>idlay</th>
<th>idkab</th>
<th>noid</th>
<th>periode</th>
<th>denda</th>
<th>totalbyr</th>
<th>data</th>
<th>timetmp</th>
	</tr>';
	if(mysqli_num_rows($sql) > 0)
	{
		while($row = mysqli_fetch_array($sql))
		{
			$result .='
			<tr>
				<td>'.$row["noref"].'</td>
			<td>'.$row["idlay"].'</td>
			<td>'.$row["idkab"].'</td>
			<td>'.$row["noid"].'</td>
			<td>'.$row["periode"].'</td>
			<td>'.$row["denda"].'</td>
			<td>'.$row["totalbyr"].'</td>
			<td>'.$row["data"].'</td>
			<td>'.$row["timetmp"].'</td>
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