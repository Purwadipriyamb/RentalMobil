<?php
	$host = "localhost";
	$username = "root";
	$password = "";
	$databasename = "jaka";
	mysql_connect($host, $username, $password) or die("kesalahan pada koneksinya");
	mysql_select_db($databasename) or die("databasenya error...");
?>