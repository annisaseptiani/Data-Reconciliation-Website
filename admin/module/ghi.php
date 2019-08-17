   

<div class="container">
<Center><h1 class="page-header">PT.POS Indonesia</h1></Center>
<h2 align="center">PENCARIAN DATA TRANSAKSI PBB BY ID KABUPATEN</h2>
<br/>
<br/>

<?php
// Range.php
if(isset($_POST["id"]))
{
	$conn = mysqli_connect("localhost", "root", "", "pos");
	$result = '';
	$query = "SELECT noid, noref, idlay, totalbyr, denda, FROM trx_pbb WHERE idkab ='".$_POST["id"]."'";
	
	$sql = mysqli_query($conn, $query);
	$result .='
	
	<table class="table table-bordered">
	<tr>
  <th>No ID</th>
    <th>No Ref</th>
      <th>ID Layanan</th>
<th>Total Bayar</th>
<th>Denda</th>

	</tr>';
	if(mysqli_num_rows($sql) > 0)
	{
		while($row = mysqli_fetch_array($sql))
		{
			$result .='
			<tr>
				<td>'.$row["noid"].'</td>
				<td>'.$row["noref"].'</td>
        <td>'.$row["idlay"].'</td>
			  <td>'.$row["totalbyr"].'</td>
			  <td>'.$row["denda"].'</td>
		
		
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


<?php
// Range.php
if(isset($_POST["id"]))
{
  $connn = mysqli_connect("localhost", "root", "", "pos");
  $resultt = '';
  $queryy = "SELECT COUNT(idkab) as idkab, SUM(totalbyr) as 'totalbyr', SUM(denda) as 'denda', SUM (totalbyr+denda) as 'total' FROM trx_pbb WHERE idkab ='".$_POST["id"]."'";
  
  $sqll = mysqli_query($connn, $queryy);
  $resultt .='
  
  <table class="table table-bordered">
  <tr>
  <th>No ID</th>
    <th>No Ref</th>
      <th>ID Layanan</th>
<th>Total Bayar</th>
<th>Denda</th>

  </tr>';
  if(mysqli_num_rows($sqll) > 0)
  {
    while($roww = mysqli_fetch_array($sqll))
    {
      $resultt .='
      <tr>
        <td>'.$roww["noid"].'</td>
        <td>'.$roww["noref"].'</td>
        <td>'.$roww["idlay"].'</td>
        <td>'.$roww["totalbyr"].'</td>
        <td>'.$roww["denda"].'</td>
    
    
      </tr>';
    }
  }
  else
  {
    $resultt .='
    <tr>
    <td colspan="5">No Purchased Item Found</td>
    </tr>';
  }
  $resultt .='</table>';
  echo $resultt;
}
?>