<?php
	include"koneksi.php";session_start();
	$query=mysql_query("select * from transaksisewa join pelanggan using (NoKTP);",$c) or die(mysql_error());
	echo"
<html>
<head><title>Transaksi Sewa</title><link rel='stylesheet' href='style.css' type='text/css'/>
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
<div id='konten' style='overflow:auto; width:998px; height:100%px;'>
	<div class='Table' style='width:600px;height:150px;'>				
<table>
							<tr>
									<td>NoKTP</td>
									<td>NamaPel</td>
									<td>AlamatPel</td>
									<td>TelpPel</td>
									<td>NoTransaksi</td>
									<td>TglPesan</td>
									<td>TglPinjam</td>
									<td>JamPinjam</td>
									<td>TglKembaliRencana</td>
									<td>JamKembaliRencana</td>
									<td>Option</td>
									</tr>
								";
								while ($r=mysql_fetch_array($query)){
								echo"
								<tr>

									<td>".$r['NoKTP']."</td>
									<td>".$r['NamaPel']."</td>
									<td>".$r['AlamatPel']."</td>
									<td>".$r['TelpPel']."</td>
									<td>".$r['NoTransaksi']."</td>
									<td>".$r['TglPesan']."</td>
									<td>".$r['TglPinjam']."</td>
									<td>".$r['JamPinjam']."</td>
									<td>".$r['TglKembaliRencana']."</td>
									<td>".$r['JamKembaliRencana']."</td>
									<td>
									<a href='hapus2.php?NoKTP=".$r['NoKTP']."'>Hapus</a> |
									<a href='lihat.php?NoTransaksi=".$r['NoTransaksi']."'>Lihat</a> |
									</td>
									</tr>
								";
								}
								echo"
						</td>
					<tr>
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