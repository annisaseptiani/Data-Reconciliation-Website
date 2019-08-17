<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- title -->
    <title>TableExport Plugin</title>

    <!--stylesheets-->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/tableexport.css" rel="stylesheet">

    <!-- prettify -->
    <script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js?lang=css&skin=desert"></script>

    <!-- shortcut icon -->
    <link rel="shortcut icon" href="favicon.ico">

</head>
<body>

<main>
    <div class="container">
              
                <div class="row">
                    <div class="col-md-12">
                        <br>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                                           
                            </table>
                        </div>
                    </div>
                </div>
           
                <div class="row">
                    <div class="col-md-12">
                        <br>
<?php
// Range.php
if(isset($_POST["From"], $_POST["to"]))
{
	$conn = mysqli_connect("localhost", "root", "", "pos");
	$result = '';
	$query = "SELECT * FROM pbb_jb WHERE UPD BETWEEN '".$_POST["From"]."' AND '".$_POST["to"]."'";
	$sql = mysqli_query($conn, $query);
	$result .='
	<table class="table table-bordered" id="pbb_jb">
	<tr>
<th>IDREQUEST</th>
<th>IDPEL</th>
<th>PERIODE</th>
<th>REC</th>
<th>IDUSER_DIRECTH2H</th>
<th>IDREFF_KTR</th>
<th>IDREFF_NMKTR</th>
<th>IDREFF_PTGS</th>
<th>DE1</th>
<th>DE2</th>
<th>DE4</th>
<th>DE7</th>
<th>DE11</th>
<th>DE12</th>
<th>DE13</th>
<th>DE37</th>
<th>DE39</th>
<th>DE48</th>
<th>TGLBAYAR</th>
<th>UPD</th>
	</tr>';
	if(mysqli_num_rows($sql) > 0)
	{
		while($row = mysqli_fetch_array($sql))
		{
			$result .='
			<tr>
			<td>'.$row["IDREQUEST"].'</td>
			<td>'.$row["IDPEL"].'</td>
			<td>'.$row["PERIODE"].'</td>
			<td>'.$row["REC"].'</td>
			<td>'.$row["IDUSER_DIRECTH2H"].'</td>
			<td>'.$row["IDREFF_KTR"].'</td>
			<td>'.$row["IDREFF_NMKTR"].'</td>
			<td>'.$row["IDREFF_PTGS"].'</td>
			<td>'.$row["DE1"].'</td>
			<td>'.$row["DE3"].'</td>
			<td>'.$row["DE4"].'</td>
			<td>'.$row["DE7"].'</td>
			<td>'.$row["DE11"].'</td>
			<td>'.$row["DE12"].'</td>
			<td>'.$row["DE13"].'</td>
			<td>'.$row["DE37"].'</td>
			<td>'.$row["DE39"].'</td>
			<td>'.$row["DE48"].'</td>
			<td>'.$row["TGLBAYAR"].'</td>
			<td>'.$row["UPD"].'</td>
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


                    </div>
                </div>
            </div>
          
        </div>
    </div>
</main>
<br>
<br>

 <script src="jquery.min.js"></script>
 
<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="js/Bootstrap/bootstrap.js"></script>
<script type="text/javascript" src="js/bootstrap-autohidingnavbar/jquery.bootstrap-autohidingnavbar.js"></script>
<script type="text/javascript" src="js/ZeroClipboard/ZeroClipboard.js"></script>
<script type="text/javascript" src="js/js-xlsx/xlsx.core.min.js"></script>
<script type="text/javascript" src="js/Blob.js/Blob.js"></script>
<script type="text/javascript" src="js/FileSaver.js/FileSaver.js"></script>
<script type="text/javascript" src="js/Export2Excel.js"></script>
<!--<script type="text/javascript" src="js/TableExport.js/jquery.tableexport.js"></script>-->
<script type="text/javascript" src="js/TableExport.js/jquery.tableexport.v2.js"></script>
<script type="text/javascript" src="js/main.js"></script>


</body>
</html>