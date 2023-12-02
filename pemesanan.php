<?php
include"koneksi.php";

$plat= $_GET['noplat'];
$notrans= $_GET['notransaksi'];

$ktp= $_POST['noktp'];
$nama =$_POST['namapel'];
$alamat = $_POST['alamatpel'];
$telp =$_POST['telppel'];

$tglp =$_POST['tglp'];
$blnp =$_POST['blnp'];
$thp =$_POST['thp'];
$jamp =$_POST['jamp'];
$mntp=$_POST['mntp'];

$tglk =$_POST['tglk'];
$blnk =$_POST['blnk'];
$thk =$_POST['thk'];
$jamk =$_POST['jamk'];
$mntk=$_POST['mntk'];

$qp=mysql_query("insert into Pelanggan values('$ktp','$nama','$alamat','$telp');",$c) or die (mysql_error());
$qt=mysql_query("insert into TransaksiSewa (notransaksi,)",$c) 
	or die (mysql_error());

header("location:index.php");
?>