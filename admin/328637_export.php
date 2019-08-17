<?php  
//export.php  
$connect = mysqli_connect("localhost", "root", "", "pos");
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM trx_pbb WHERE timetmp BETWEEN '".$_POST["From"]."' AND '".$_POST["to"]."'";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
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
      
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
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
      
                    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download.xls');
  echo $output;
 }
}
?>