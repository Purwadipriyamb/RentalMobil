<?php
	include"koneksi.php";
	
	$idtype= $_GET['idtype'];
	
	$noplat= $_POST['noplat'];
	$foto=$_POST['foto'];
	$tahun= $_POST['tahun'];
	$tarifperjam= $_POST['tarifperjam'];
	$statusrental= $_POST['statusrental'];
	$kodepemilik= $_POST['kodepemilik'];

	$qkendaraan=mysql_query("UPDATE kendaraan SET noplat='$noplat', foto='$foto', tahun='$tahun', tarifperjam='$tarifperjam', statusrental='$statusrental', idtype='$idtype', kodepemilik='$kodepemilik' where idtype like '$idtype';");
	
	header("location:homekar.php");
?>