<?php
	require_once( 'koneksibiller.php');

if(isset($_POST['pencarian'])){
$datefrom = $_POST['datefrom'];
$dateto = $_POST['dateto'];
	$query="SELECT *FROM trx_pbb where timetmp between $tanggal_awal and $tanggal_akhir";
	$hasil= mysqli_query($koneksi, $query);
}
while ($row= mysqli_fetch_array ($hasil)){
$noref=$row['noref'];
$idlay=$row['idlay'];
$idkab=$row['idkab'];
$noid=$row['noid'];
$periode=$row['periode'];
$denda=$row['denda'];
$totalbyr=$row['totalbyr'];
$data=$row['data'];
$timetmp=$row['timetmp'];
}
?>
