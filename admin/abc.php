<?php
$conn = mysqli_connect("localhost", "root", "", "pos");
$query = "SELECT * FROM trx_pbb ORDER BY noref desc";
$sql = mysqli_query($conn, $query);
?>

 
<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../bg1.png">

    <title>PT. POS Indonesia</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<link rel="stylesheet" href="jquery-ui.css"/>
  </head>

  <body>
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid"  style="background-color: tomato; color: slategray; padding:10 px;">
        
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"> <span style="color:white"><b>PT. POS Indonesia</b></span></a>
        </div>

        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-left">
              <li><a href="dashboard.php"> <span style="color:white">Home</span></a></li>
              <li><a href="input_mitra.php"> <span style="color:white">Mitra</span></a></li>
                    
              <li class="dropdown" >
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <span style="color:white">Show Data<b class="caret"></b></span></a>
                    <ul class="dropdown-menu"> 
                          <li ><a href="index.php">TRX_PBB</a></li>
                          <li><a href="index2.php">TRX_PDAM</a></li>
                          <li><a href="index3.php">PBB_JB</a></li>
                          <li><a href="index4.php">PDAM_PKP</a></li>
                    </ul>
                    </li>

              <li class="dropdown" >
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <span style="color:white">Rekap Data<b class="caret"></b></span></a>
                    <ul class="dropdown-menu"> 
                          <li ><a href="new.php">Rekap Data Transaksi PBB</a></li>
                          <li><a href="form2.php">Rekap Data Transaksi PDAM</a></li>
                    </ul>
                    </li>
       
          </ul>

              <form class="navbar-form navbar-right" action="logout.php" onclick="return confirm('Anda yakin logout dari sistem?') method="POST">
                  <button type="submit" class="btn btn-success">LOG OUT </button>
              </form>

              <ul class="nav navbar-nav navbar-right">
                  <li class="dropdown" >
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <span style="color:white">My Account<b class="caret"></b></span></a>
                    <ul class="dropdown-menu"> 
                          <li ><a href="index.php">Profile</a></li>
                          <li><a href="index2.php">Create New Account</a></li>
                          <li><a href="index3.php">Change Password</a></li>
                        
                    </ul>
                    </li>
              </ul>
        </div>
      </div>
    </div>

 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
        <script src="js/docs.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>   

<div class="container">
<Center><h1 class="page-header">PT.POS Indonesia</h1></Center>
<h2 align="center">PENCARIAN DATA TRANSAKSI PBB BY ID</h2>
<br/>
<br/>

<?php
// Range.php
if(isset($_POST["id"]))
{
	$conn = mysqli_connect("localhost", "root", "", "pos");
	$result = '';
	$query = "SELECT COUNT(noid) as 'jumlah', noref, noid, SUM(totalbyr) as 'totalbyr', SUM(denda) as denda, SUM(totalbyr+denda) as 'total' FROM trx_pbb WHERE noid ='".$_POST["id"]."' GROUP BY noref";
	
	$sql = mysqli_query($conn, $query);
	$result .='
	
	<table class="table table-bordered">
	<tr>
  <th>jumlah</th>
    <th>noid</th>
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
        <td>'.$row["noref"].'</td>
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


<?php
// Range.php
if(isset($_POST["id"]))
{
  $conn = mysqli_connect("localhost", "root", "", "pos");
  $result = '';
  $query = "SELECT noref, noid, totalbyr, denda FROM trx_pbb WHERE noid ='".$_POST["id"]."'";
  
  $sql = mysqli_query($conn, $query);
  $result .='
  
  <table class="table table-bordered">
  <tr>
      <th>noref</th>
<th>noid</th>
<th>total byr</th>
<th>denda</th>
  </tr>';
  if(mysqli_num_rows($sql) > 0)
  {
    while($row = mysqli_fetch_array($sql))
    {
      $result .='
      <tr>
      <td>'.$row["noref"].'</td>
        <td>'.$row["noid"].'</td>       
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

