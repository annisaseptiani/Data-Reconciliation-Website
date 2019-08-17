
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
<style type="text/css">

input[type=text],select,textarea{width:400px;margin:10px 0 10px 0;padding:10px;resize:none}
textarea{height:200px;}

</style>
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
                          <li><a href="new2.php">Rekap Data Transaksi PDAM</a></li>
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

              <li class="dropdown" >
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <span style="color:white">Rekap Data<b class="caret"></b></span></a>
                    <ul class="dropdown-menu"> 
                          <li ><a href="?module=form">Rekap Data Transaksi PBB</a></li>
                          <li><a href="?module=form2">Rekap Data Transaksi PDAM</a></li>
                    </ul>
                    </li>
          </ul>
              </ul>
        </div>
      </div>
    </div>


    <center>
    <br><br>
    <h1>ADD NEW MITRA</h1>
	<form action="simpan_mitra.php" method="GET">
	<table>
		<tr>
			<td>ID Mitra</td>
			<td><input type="text" name="id_mitra"></td>
		</tr>
		<tr>
			<td>Nama Mitra</td>
			<td><input type="text" name="nama_mitra"></td>
		</tr>
		<tr>
			<td>No Referensi</td>
			<td><input type="text" name="noref"></td>
		</tr>
		<tr>
			<td>Keterangan</td>
			<td>
			<input type="checkbox" name="ket[]" value="AKTIF"/>AKTIF
			<input type="checkbox" name="ket[]" value="TIDAK AKTIF"/>TIDAK AKTIF
			</td>
		</tr>
		
		<tr>
			<td colspan="2" align="center">
				<input type="submit" value="SUBMIT">
				<input type="reset" value="CANCEL">
			</td>
		</tr></table></form></center>

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






</body>
</html>
