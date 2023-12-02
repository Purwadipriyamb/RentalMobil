<?php
include"koneksi.php";
	$NoPlat=$_GET['NoPlat'];
	$NoKTP = $_POST['NoKTP'];
	$NamaPel = $_POST['NamaPel'];
	$AlamatPel = $_POST['AlamatPel'];
	$TelpPel = $_POST['TelpPel'];
	$NoTransaksi = $_POST['NoTransaksi'];
	$TglPesan = $_POST['TglPesan'];
	$TglPinjam = $_POST['TglPinjam'];
	$JamPinjam = $_POST['JamPinjam'];
	$TglKembaliRencana = $_POST['TglKembaliRencana'];
	$JamKembaliRencana = $_POST['JamKembaliRencana'];
	
	$query=mysql_query("insert into pelanggan(NoKTP,NamaPel,AlamatPel,TelpPel) values('$NoKTP', '$NamaPel', '$AlamatPel', '$TelpPel');",$c) or die(mysql_error());
	
	$query=mysql_query("insert into transaksisewa(NoPlat,NoTransaksi,TglPesan,TglPinjam,JamPinjam,TglKembaliRencana,JamKembaliRencana,NoKTP) values('$NoPlat','$NoTransaksi', '$TglPesan', '$TglPinjam', '$JamPinjam:00:00', '$TglKembaliRencana', '$JamKembaliRencana:00:00','$NoKTP');",$c) or die(mysql_error());
	
	header("location:index.php");
?>