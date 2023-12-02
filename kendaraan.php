<?php
include"koneksi.php";session_start();

$q = mysql_query("select NoPlat,Tahun,TarifPerJam,IDType,StatusRental,KodePemilik
	from kendaraan join type using(idtype)join merk using(kodemerk)")or die (mysql_error());
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
			<a href='index.php'><input type='button' value='LogOut'/></a></center>
			</div>
	<div id='konten' style='overflow'.auto width='100%px' height='100%px'>
		<div class='Table' style='width:600px;height:150px;'>				
				<table>
				<tr>
					
					<td>No Plat</td>
					<td>Tahun</td>
					<td>Tarif per jam</td>
					<td>Status Rental</td>
					<td>ID Type</td>
					<td>Kode Pemilik</td>
					<td colspan='2'>Pilihan</td>
				</tr>
				<form method='POST' action='tambah.php'>
				<tr>
					
					<td><input type='text' name='NoPlat'/></td>
				
					<td><input type='text' name='Tahun'></td>
				
					<td><input type='text' name='TarifPerJam'/></td>
				
					<td><input type='text' name='StatusRental'/></td>
					<td><input type='text' name='IDType'/></td>
					<td><input type='text' name='KodePemilik'/></td>
					<td colspan='2'><input type='submit' value='Tambah'/></td>
					
				</tr>
				</form>
	";
					$no=0;
					while($r= mysql_fetch_array($q)){
					$no= $no+1;
	echo"
				<tr>
					
					<td>".$r['NoPlat']."</td>
				
					<td>".$r['Tahun']."</td>
				
					<td>".$r['TarifPerJam']."/jam</td>
				
					<td>".$r['StatusRental']."</td>
					<td>".$r['IDType'].".jpg/jpeg</td>
					<td>".$r['KodePemilik']."</td>
					<td>
							<a href='ubah.php?NoPlat=".$r['NoPlat']."'><input type='button' value='ubah'></a></td>
					<td>	<a href='hapus.php?NoPlat=".$r['NoPlat']."'><input type='button' value='hapus'></a></td>
				</tr>
				
		";
				}
		echo"
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