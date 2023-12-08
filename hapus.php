<?php
	include "koneksi.php";
	
	$idtype= $_GET['idtype'];
		
	$query=mysql_query("delete from kendaraan where idtype like '$idtype'");
	
	if ($query){
		header("location:homekar.php");
		}
	else{			
		echo"gagal menyimpan </br> <a href='homekar.php'>Kembali Ke Halaman Awal</a> </br> <a href='homekar.php'>Ulangi menyimpan</a>";
	}
?>