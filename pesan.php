<?php
	include "koneksi.php";
	$NoPlat=$_GET['NoPlat'];
	$query=mysql_query('select * from transaksisewa') or die(mysql_error());
	echo"
<html>
<head><title>Pesan</title><link rel='stylesheet' href='style.css' type='text/css'/>
</head>
<body>
	<div id='bg'>
		<div id='head'>
		<center><img src='img/head.jpg'></center>
		</div>
		<div id='menu'>
		<center>
		<ul>
			<li><a href='index.php'>Home</a></li>
		
			<li><a href='beranda.php'>Beranda</a></li>
			
			<li>
			<a href='tentang.php'>Tentang Rental</a>
			<ul><li><a href='tentang1.php'>Tentang Saya</a></li>
			</ul>
			
			</li>
			
		</ul>
		</center>
		</div>
		<div id='isi'>
			<div id='kiri'>
			
			<input type='text' name='cari' placeholder='cari'/><a href='google.com'><input type='submit' value='cari'/></a>
			
			</div>
			<div id='konten' style='overflow:auto; width:100%px; height:449px;'>
				<form action='pesan1.php?NoPlat=$NoPlat' method='POST'>
						<h3>pemesanan</h3>
							<hr>
							<div>
							<h3>Data pelanggan</h3><hr>
							<tr>
							<td>No KTP</td>
							<td>:</td>
							<td><input type='text' name='NoKTP' size='5'></td>
							</tr>
							<br />
							<tr>
							<td>Nama Pelanggan</td>
							<td>:</td>
							<input type='text'  name='NamaPel' size='50'>
							</tr>
							<br />
							<tr>
							<td>Alamat Pelanggan</td>
							<td>:</td>
							<input type='text' name='AlamatPel' size='50'>
							</tr>
							<br />
							<tr>
							<td>Telepon</td>
							<td>:</td>
							<input type='text'  name='TelpPel' size='20'>
							</tr>
							<h3>Data peminjaman</h3><hr>
							<tr>
							<td>No Transaksi</td>
							<td>:</td>
							<td><input type='text' name='NoTransaksi' ></td>
							</tr>
							<br />
							<tr>
							<td>Tanggal Pesan</td>
							<td>:</td>
							<td><input type='date'  name='TglPesan'></td></tr><br />
							<tr>
							<td>Tanggal Pinjam</td>
							<td>:</td>
							<td><input type='date' name='TglPinjam'></td></tr><br />
							<tr>
							<td>Jam Pinjam</td>
							<td>:</td>
							<td><input type='time' name='JamPinjam'></td></tr><br />
							<tr>
							<td>Tanggal Kembali Rental</td>
							<td>:</td>
							<td><input type='date' name='TglKembaliRencana'></td></tr><br />
							<tr>
							<td>Jam Kembali Rental</td>
							<td>:</td>
							<input type='text' name='JamKembaliRencana'></td></tr><br />
							<br/>
							<br/>
							<center><tr><td><a href='index.php'><input type='button' value='Batal'/></a></td>
							<td><button onclick='myFunction()'>Simpan</button></td></tr><br></center>
								<script>
								function myFunction() {
									alert('Data Anda Berhasil Di Simpan');
								}
								</script>
							
				</form>	
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