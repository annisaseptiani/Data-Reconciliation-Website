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
    $query = "SELECT * FROM trx_pbb WHERE timetmp BETWEEN '".$_POST["From"]."' AND '".$_POST["to"]."'";
    $sql = mysqli_query($conn, $query);
    $result .='
    <table class="table table-bordered" id="pbb">
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
        <td colspan="5">Not Found</td>
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


