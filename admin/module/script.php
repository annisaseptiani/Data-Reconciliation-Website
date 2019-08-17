<?php
$conn = mysqli_connect("localhost", "root", "", "kp");
$query = "SELECT * FROM orders ORDER BY order_number desc";
$sql = mysqli_query($conn, $query);
?>

<html>
<head>
<meta charset="UTF-8">
<Title> Date Range with jQuery Datepicker usin Ajax, PHP & MySQL </Title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery.ui.css"/>
</head>
<body>
<br/>
<div class="container">
<h2 align="center"> Date Range Search with jQuery DatePicker </h2>
<br/>
<br/>
<div class="col-md-2">
<input type="text" name="from" id="from" class="form-control" placeholder="From Date"/>
</div>
<div class="col-md-2">
<input type="text" name="to" id="to" class="form-control" placeholder="To Date"/>
</div>
<div class="col-md-8">
<input type="button" name="range" id="range" value="Range" class="btn btn-success"/>
</div>
<div class="clearfix"></div>
<br/>
<div id="purchase_order">
<table class="table table-bordered">
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
<?php 
while ($row= mysqli_fetch_array($sql));
{
	?>
	<tr>
	<td><?php echo $row["noref"]; ?> </td>
	<td><?php echo $row["idlay"]; ?> </td>
	<td><?php echo $row["idkab"]; ?> </td>
	<td><?php echo $row["noid"]; ?> </td>
	<td><?php echo $row["periode"]; ?> </td>
	<td><?php echo $row["denda"]; ?> </td>
	<td><?php echo $row["totalbyr"]; ?> </td>
	<td><?php echo $row["data"]; ?> </td>
	<td><?php echo $row["timetmp"]; ?> </td>
	</tr>
	<?php
}
?>
</table>
</div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"> </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery.ui.js"> </script>
<script>
$(document).ready(function(){
	$.datepicker.setDefaults({
		dateformat 'yy-mm-dd'
		});

	$(function(){
		$("#From").datepicker();
		$("#to").datepicker();
	});
	$('#range').click(function(){
		var From = $['#from'].val();
		var to =$['#to'].val();
		if(From != '' && tp != '')
		{
			$.ajax ({
				url:"range.php",
				method : "POST",
				data:(From:From, to:to),
				success:function(data)
				{
					$('$purchase_order').html(data);
				}
		});
	}
	else
	{
		alert ("Please select the data");
	}
});
});
</body>