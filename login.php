<?php
include"koneksi.php";

$un=$_POST['username'];
$pw=$_POST['password'];

	$q=mysql_query("select typeuser from login where username='$un' and password='$pw';",$c)or die(mysql_error());
	while($r=mysql_fetch_array($q)){
	$tu= $r['typeuser'];
	if ($tu=='karyawan'){
		header("location:karyawan.php");
	}
	else{header("location:index.php");}
	}
?>