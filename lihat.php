<?php
	include"koneksi.php";session_start();
	$NoTransaksi=$_GET['NoTransaksi'];
	$query=mysql_query("select *,date_format(JamPinjam,'%h')'jp' from transaksisewa join pelanggan using (NoKTP) where NoTransaksi='$NoTransaksi';",$c) or die(mysql_error());
	echo"
<html>
<head><title>Lihat</title><link rel='stylesheet' href='style.css' type='text/css'/>
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
			<div id='kiri'><center>
				<div class='cari'>
					<form action='index.php' method='get'>
						<input name='sitesearch' style='display:none;' value='Jack Car Rental' />
						<input id='search-box' name='key' onblur='if(this.value==&apos;&apos;)
						this.value=this.defaultValue;' onfocus='if(this.value==this.defaultValue)this.value=&apos;&apos;;'
						 style='width:170px;border: 2px solid blue; border-radius: 2px;;padding:2px 10px; font:12px Comic Sans MS;color:#666;no-repeat;'
						  type='text' placeholder='Cari mobil...'/><input align='top' id='search-btn' src='img/c10.png' height='25px' type='image' value='Search'/>
					</form>
				</div>
			<br>
	<a href='index.php'><input type='button' value='LogOut'/></a>
	</center>
			</div>
<div id='konten'>
			
	";
	while ($rq=mysql_fetch_array($query)) {
echo "
	<form method='POST' action='pinjam.php?NoTransaksi=".$NoTransaksi."'>
		No Transaksi ___= ".$rq['NoTransaksi']."<br>
		Tgl Pesan ______= ".$rq['TglPesan']."<br>
		Nama Pelanggan = ".$rq['NamaPel']."<br>
		No Telphone____= ".$rq['TelpPel']."<br>
		Tgl Pinjam _____= ".$rq['TglPinjam']."<br>
		Denda_________= ".$rq['Denda']."<br>
		Jam Pinjam_____= <input type='text' name='JamPinjam'value='".$rq['jp']."'><br>
		Tgl Rencana Kembali = ".$rq['TglKembaliRencana']."<br>
		Jam Rencana Kembali = ".$rq['JamKembaliRencana']."<br>
		<hr>
		
			BBM Pinjam____= <input type='text' name='BBMPinjam' value='".$rq['BBMPinjam']."'> Liter<br>
			Km Pinjam _____= <input type='text' name='KilometerPinjam' value='".$rq['KilometerPinjam']."'><br>
			Kondisi Pinjam__= <input type='text' name='KondisiMobilPinjam' value='".$rq['KondisiMobilPinjam']."'><br>
			
		<hr>
			Tgl Kembali ____= <input type='text' name='TglKembaliRealisasi' value='".$rq['TglKembaliRealisasi']."'><br>
			Jam Kembali____= <input type='text' name='JamKembaliReal' value='".$rq['JamKembaliReal']."'><br>
			Km Kembali____= <input type='text' name='KilometerKembali' value='".$rq['KilometerKembali']."'><br>
			BBMKembali___= <input type='text' name='BBMKembali' value='".$rq['BBMKembali']."'> Liter<br>
			Kondisi Kembali = <input type='text' name='KondisiMobilKembali' value='".$rq['KondisiMobilKembali']."'><br>
			BiayaBBM_____= <input type='text' name='BiayaBBM' value='".$rq['BiayaBBM']."'> Per liter<br>
			<a href='karyawan.php'><input type='button' value='Kembali'/></a>			<button type='submit'>Simpan</button>
		
		</form>
";
	}
echo"
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