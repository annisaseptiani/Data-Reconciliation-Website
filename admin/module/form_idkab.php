
<?php
$conn = mysqli_connect("localhost", "root", "", "pos");
$query = "SELECT * FROM trx_pbb ORDER BY noref desc";
$sql = mysqli_query($conn, $query);
?>

 
<!DOCTYPE html>

<div class="container">
 <Center><h1 class="page-header">PT.POS Indonesia</h1></Center>
<h2 align="center">PENCARIAN DATA TRANSAKSI PBB BY ID</h2>
<br/>
<br/>

<form name="form" action="ghi.php" method="POST">
<div class="col-md-2">
<input type="text" name="id" id="id" class="form-control" placeholder="ID"/>
</div>
<div class="col-md-8">
<input name="Submit" type="submit" class="btn btn-success" value="Submit"  />

</div>
</form>
<div class="clearfix"></div>
<br/>
<div id="purchase_order">
</div>
</div>





</body>
</html>