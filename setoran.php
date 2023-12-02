<?php
	include"koneksi.php";session_start();
	$qsetoran= mysql_query("SELECT NmPemilik, TelpPemilik, Noplat, TarifPerjam, (datediff( TglKembaliRealisasi, TglPinjam ) *24) * TarifPerjam 'setoran' FROM pemilik JOIN kendaraan USING ( KodePemilik ) JOIN transaksisewa USING ( NoPlat ) ",$c)or die(mysql_error());
	
	$query=mysql_query("select * from transaksisewa join pelanggan using (NoKTP);",$c) or die(mysql_error());
	echo"
<html>
<head><title>Setoran</title><link rel='stylesheet' href='style.css' type='text/css'/>
</head>
<body>
<div id='bg'>
		<div id='head'>
		<center><img src='img/head.jpg'></center>
		</div>
<div id='menu'><center>
<ul>
	<li><a href='karyawan.php'>Transaksi Sewa</a></li>
	<li><a href='kendaraan.php'>Kendaraan</a></li>
	<li><a href='setoran.php'>Setoran</a></li>
</ul></center>
</div>
<div id='isi'>
			<div id='kiri'>
			<center>
				<div class='cari'>
					<form action='index.php' method='get'>
						<input name='sitesearch' style='display:none;' value='Jack Car Rental' />
						<input id='search-box' name='key' onblur='if(this.value==&apos;&apos;)
						this.value=this.defaultValue;' onfocus='if(this.value==this.defaultValue)this.value=&apos;&apos;;'
						 style='width:170px;border: 2px solid blue; border-radius: 2px;;padding:2px 10px; font:12px Comic Sans MS;color:#666;no-repeat;'
						  type='text' placeholder='Cari mobil...'/><input align='top' id='search-btn' src='img/c10.png' height='25px' type='image' value='Search'/>
					</form>
				</div>
			<a href='index.php'><input type='button' value='LogOut'/></a>			
			</center>
			</div>
<div id='konten'>
<div class='Table' style='width:600px;height:150px;'>				
	<table>
		<tr>
			<td>Pemilik</td><td>Telpon</td><td>No Plat</td><td>Setoran</td>
		</tr>
";
		while ($rsetoran=mysql_fetch_array($qsetoran)) {
		echo "
		<tr>
			<td>".$rsetoran['NmPemilik']."</td>
			<td>".$rsetoran['TelpPemilik']."</td>
			<td>".$rsetoran['Noplat']."</td>
			<td>Rp ".$rsetoran['setoran'].",-</td>
		</tr>
		";
		}
echo "
	</table>
	</div>

</div>
</div>
		<div id='foot'>
		<center>&copy; Purwadi Priyambodo</center>
		</div>
	</div>
</body>
</html>
";
?>