<?php
	include "koneksi.php";
	
	$nosetoran= $_POST['nosetoran'];	
	$tglsetoran= $_POST['tglsetoran'];
	$jumlah= $_POST['jumlah'];
	$nik= $_POST['nik'];
	$kodepemilik= $_POST['kodepemilik'];
	
	$qpenyetoran=mysql_query(" insert into setoran values('$nosetoran','$tglsetoran', '$jumlah', '$nik', '$kodepemilik');");
	
	header("location:setor.php");
?>