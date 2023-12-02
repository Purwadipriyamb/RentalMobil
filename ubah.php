<?php
include"koneksi.php";session_start();

	$NoPlat= $_GET['NoPlat'];
	$query=mysql_query("select *from kendaraan where NoPlat='$NoPlat'", $c)
	or die (mysql_error());
	while ($row=mysql_fetch_array($query)){
	$Tahun= $row ['Tahun'];
	$TarifPerJam= $row['TarifPerJam'];
	$StatusRental= $row['StatusRental'];
	$IDType= $row ['IDType'];
	$KodePemilik= $row ['KodePemilik'];
echo"
<html>
<head><title>Kendaraan</title><link rel='stylesheet' href='style.css' type='text/css'/>
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
</ul></center></div>
<div id='isi'>
			<div id='kiri'>
			<center>
				<div class='cari'>
					<form action='index.php' method='get'>
						<input name='sitesearch' style='display:none;' value='Adi Rent Car' />
						<input id='search-box' name='key' onblur='if(this.value==&apos;&apos;)
						this.value=this.defaultValue;' onfocus='if(this.value==this.defaultValue)this.value=&apos;&apos;;'
						style='width:170px;border: 2px solid blue; border-radius: 2px;;padding:2px 10px; font:12px Comic Sans MS;color:#666;no-repeat;'
						type='text' placeholder='Cari mobil...'/><input align='top' id='search-btn' src='img/c10.png' height='25px' type='image' value='Search'/>
					</form>
				</div>
			<a href='index.php'><input type='button' value='LogOut'/></a>
			</center>
			</div>
	<div id='konten' style='overflow'.auto width='998px' height='449px'>
	<div class='Table' style='width:600px;height:150px;'>				
					<form action='perubahan.php?NoPlat=$NoPlat' method='POST'>
				<center>
				
					<table>
						<tr>
							<td colspan='3'>
							<h3>Perubahan Kendaraan</h3>
							</td>
						</tr>
						<tr>
							<td>NoPlat</td>
							<td>:</td>
							<td><input type='text' name='NoPlat' size='20' value='$NoPlat'></td>
						</tr>
						<tr>
							<td>Tahun</td>
							<td>:</td>
							<td><input type='text' name='Tahun' size='4' value='$Tahun'></td>	
						</tr>
						<tr>
							<td>TarifPerJam</td>
							<td>:</td>
							<td><input type='text' name='TarifPerJam' value='$TarifPerJam'></td>
							</td>
						</tr>
						<tr>
							<td>StatusRental</td>
							<td>:</td>
							<td><input type='text' name='StatusRental' size='7' value='$StatusRental'></td>	
						</tr>
						<tr>
							<td>IDType</td>
							<td>:</td>
							<td><input type='text' name='IDType' size='5' value='$IDType'></td>	
						</tr>
						<tr>
							<td>KodePemilik</td>
							<td>:</td>
							<td><input type='text' name='KodePemilik' size='5' value='$KodePemilik'></td>	
						</tr>
						</td>
					<tr>
					<tr>
						<td></td>
						<td></td>
						<td align='center'><a href='kendaraan.php'><input type='button' value='batal'/></a>    <input type='submit' value='Simpan'/></td>
					</tr>
				</table>
			</center>
			</form>
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
	}
?>