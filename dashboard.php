<?php
  if (!isset($_GET['module']) || $_GET['module'] == '') 
    $_GET['module'] = 'home';
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
          <a class="navbar-brand" href="#"> <span style="color:white"> <b>PT. POS Indonesia</span></a></b>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-left">
          <li><a href="?module=report"> <span style="color:white">Home</a></li></span>
        

                   <li><a href="?module=report"> <span style="color:white">Report</a></li></span>
                    <li><a href="index.php"> <span style="color:white">TRX_PBB</a></li></span>
                    <li><a href="index2.php"> <span style="color:white">TRX_PDAM</a></li></span>
                    <li><a href="index3.php"> <span style="color:white">PBB_JB</a></li></span>
                    <li><a href="index4.php"> <span style="color:white">PDAM_PKP</a></li></span>
                    <li><a href="?module=input_mitra"> <span style="color:white">Mitra</a></li></span>
                    
                   
                   <li class="dropdown" >
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span style="color:white">My Account<b class="caret"></b></a></span>
                  <ul class="dropdown-menu"> 
                                      <li ?<?php if ($_GET['module'] == 'bukutamu') {?>
                    <?php } ?>><a href="?module=input_admin">Add Account</a></li>
                    </ul>
                    </li>
   </ul>

<form class="navbar-form navbar-right" action="logout.php" onclick="return confirm('Anda yakin logout dari sistem?') method="POST">
<button type="submit" class="btn btn-success">LOG OUT </button>
</form>
          
        </div>
      </div>
    </div>


        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">PT.POS Indonesia</h1>

		  <?php require_once('module/'.$_GET['module'].'.php'); ?>
		  
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
  </body>
</html>
