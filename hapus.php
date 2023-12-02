<?php
	include "koneksi.php";
	
	$NoPlat= $_GET['NoPlat'];
	
	$q=mysql_query("delete from kendaraan where NoPlat like '$NoPlat'",
	$c) or die(mysql_error());
	
	if($q){
		header("location:kendaraan.php");
		}
	else{
		echo"gagal menyimpan</br> <a href='penambahan.php'>Kembali Ke Halaman Awal</a> </br> <a href='penambahan.php'>Ulangi Menyimpan</a>";
		}
?>