<?php
	include"koneksi.php";
	
	$noplat= $_POST['noplat'];
	$foto=$_POST['foto'];
	$tahun= $_POST['tahun'];
	$tarifperjam= $_POST['tarifperjam'];
	$statusrental= $_POST['statusrental'];
	$idtype= $_POST['idtype'];
	$kodepemilik= $_POST['kodepemilik'];
	
	$kodemerk=$_POST['kodemerk'];
	$nmmerk=$_POST['nmmerk'];
	$nmtype=$_POST['nmtype'];
	
	$qkendaraan=mysql_query("insert into kendaraan values( '$noplat', '$foto', '$tahun', '$tarifperjam', '$statusrental', '$idtype', '$kodepemilik');");
	$qmerk=mysql_query("insert into merk values('$kodemerk', '$nmmerk');");
	$qtype=mysql_query("insert into type values('$idtype','$nmtype', '$kodemerk');");
	
header("location:homekar.php");
?>