<?php
	include"koneksi.php";
		session_start();
		
		$username = $_POST['username'];
		$pass = $_POST['pass'];
		$query=mysql_query("select nik, typeuser from login where username='$username' and password='$pass' ");
		while($row=mysql_fetch_array($query)){
			$typeuser = $row['typeuser'];
		}
		if($typeuser=='karyawan'){
			$_SESSION['id']=$username;
			header("location:homekar.php");
		}else{
			header("location:index.php");
		}
?>