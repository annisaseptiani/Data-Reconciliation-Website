<?php
$conn = mysqli_connect("localhost", "root", "", "pos");
$query = "SELECT * FROM trx_pdam ORDER BY noref desc";
$sql = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<div class="container">
<h2 align="center">REKAP DATA TRANSAKSI MITRA</h2>
<br/>
<br/>
<form name="form" action="?module=def" method="POST">
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