<?php
	include "koneksi.php";
	
	$NoKTP= $_GET['NoKTP'];
	
	$query=mysql_query("delete from transaksisewa where NoKTP like '$NoKTP'",
	$c) or die(mysql_error());
	
	if($query){
		header("location:karyawan.php");
		}
	else{
		echo"gagal menyimpan</br> <a href='pesan.php'>Kembali Ke Halaman Awal</a> </br> <a href='pesan.php'>Ulangi Menyimpan</a>";
		}
?>