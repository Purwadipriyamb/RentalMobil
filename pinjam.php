<?php
	include "koneksi.php";
	$NoTransaksi=$_GET['NoTransaksi'];
	$JamPinjam= $_POST['JamPinjam'];
	$BBMPinjam = $_POST['BBMPinjam'];
	$KilometerPinjam = $_POST['KilometerPinjam'];
	$KondisiMobilPinjam = $_POST['KondisiMobilPinjam'];
	$TglKembaliRealisasi = $_POST['TglKembaliRealisasi'];
	$JamKembaliReal = $_POST['JamKembaliReal'];
	$KilometerKembali = $_POST['KilometerKembali'];
	$BBMKembali=$_POST['BBMKembali'];
	$KondisiMobilKembali = $_POST['KondisiMobilKembali'];

	$waktu=$JamKembaliReal-$JamPinjam;
	$Denda=$waktu*20000;
	$BiayaBBM=($BBMPinjam-$BBMKembali)*8000;

	$qupdate=mysql_query("update transaksisewa set 
		BBMPinjam='$BBMPinjam' , KilometerPinjam='$KilometerPinjam'
		,KondisiMobilPinjam='$KondisiMobilPinjam', TglKembaliRealisasi='$TglKembaliRealisasi',
		JamKembaliReal='$JamKembaliReal:00:00' , KilometerKembali='$KilometerKembali'
		,BBMKembali='$BBMKembali' , KondisiMobilKembali='$KondisiMobilKembali'
		,BiayaBBM='$BiayaBBM' , Denda='$Denda' where NoTransaksi='$NoTransaksi';
		",$c) or die(mysql_error());
	header("location:lihat.php?NoTransaksi=$NoTransaksi");
 ?>