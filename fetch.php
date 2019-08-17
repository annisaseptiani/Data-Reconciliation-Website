<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "kp");
$columns = array('noref', 'idlay', 'idkab', 'noid', 'periode', 'denda', 'totalbyr', 'data', 'timetmp');

$query = "SELECT * FROM trx_pbb WHERE ";

if($_POST["is_date_search"] == "yes")
{
 $query .= 'order_date BETWEEN "'.$_POST["start_date"].'" AND "'.$_POST["end_date"].'" AND ';
}

if(isset($_POST["search"]["value"]))
{
 $query .= '
 (noref LIKE "%' .$_POST ["search"]["value"].'%"
  OR idlay LIKE "%'.$_POST["search"]["value"].'%" 
  OR idkab LIKE "%' ._POST["search"]["value"].'%"
  OR noid LIKE "%' .$_POST["search"]["value"].'%"
  OR periode LIKE "%'.$_POST["search"]["value"].'%"
  OR denda LIKE "%'.$_POST["search"]["value"].'%" 
  OR totalbyr LIKE "%'.$_POST["search"]["value"].'%" 
  OR data LIKE "%'.$_POST["search"]["value"].'%")
  ';
}

if(isset($_POST["order"]))
{
 $query .= 'ORDER BY '.$columns[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' 
 ';
}
else
{
 $query .= 'ORDER BY order_id DESC ';
}

$query1 = '';

if($_POST["length"] != -1)
{
 $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$number_filter_row = mysqli_num_rows(mysqli_query($connect, $query));

$result = mysqli_query($connect, $query . $query1);

$data = array();

while($row = mysqli_fetch_array($result))
{
 $sub_array = array();
	$sub_array[] = $row["noref"];
	$sub_array[] = $row["idlay"];
	$sub_array[] = $row["idkab"];
	$sub_array[] = $row["noid"];
	$sub_array[] = $row["periode"];
	$sub_array[] = $row["denda"];
	$sub_array[] = $row["totalbyr"];
	$sub_array[] = $row["data"];
	$sub_array[] = $row["timetmp"];
 $data[] = $sub_array;
}

function get_all_data($connect)
{
 $query = "SELECT * FROM tbl_order";
 $result = mysqli_query($connect, $query);
 return mysqli_num_rows($result);
}

$output = array(
 "draw"    => intval($_POST["draw"]),
 "recordsTotal"  =>  get_all_data($connect),
 "recordsFiltered" => $number_filter_row,
 "data"    => $data
);

echo json_encode($output);

?>
