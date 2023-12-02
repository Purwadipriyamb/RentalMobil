<?php
include"koneksi.php";session_start();

echo"
<html>
<head><title>Admin</title><link rel='stylesheet' href='style.css' type='text/css'/>
</head>
<body>
<div id='menu'>
<ul>
	<li><a href=''></a>Kendaraan</li>
	<li><a href=''></a>Transaksi Sewa</li>
</ul>
</div>
<div id='konten'>
	<table border='2px'>
	<tr>
		<td>No transaksi</td>
		<td>Tgl pesan</td>
		
	</tr>
	</table>
	<a href='index.php'><input type='button' value='LogOut'/></a>
</div>
</body>
</html>
";
?>