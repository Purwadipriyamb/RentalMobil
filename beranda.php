<?php
include"koneksi.php";session_start();
echo"
<html>
<head><title>PROFIL</title>
<link rel='stylesheet' href='style.css' type='text/css'/>
</head>
<body>
	<div id='bg'>
		<div id='head'>
		<center><img src='img/head.jpg'></center>
		</div>
		<div id='menu'>
		<center>
		<ul>
			<li><a href='index.php'>HOME</a></li>
		
			<li><a href='beranda.php'>PROFIL</a></li>
			
			<li>
			<a href='tentang.php'>Tentang Rental</a>
			<ul><li><a href='tentang1.php'>Contact</a></li>
			</ul>
			
			</li>
			
		</ul>
		</center>
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
			</center>
			</div>
			<div id='konten'>
				<center><h3>PROFIL
				mobil-mobil rental:</h3></center>
				<div class='Table' style='width:600px;height:150px;'>				
					<table>
					<tr>
					<td><img src='img/0001.jpg' width='210px' height='150px'/></td>
					
					<td><img src='img/0002.jpg' width='210px' height='150px'/></td>
					
					<td><img src='img/0003.jpg' width='210px' height='150px'/></td>
					
					<td><img src='img/0004.jpg' width='210px' height='150px'/></td>
					</tr>
					<tr>
					<td>S63 Coupe Brabus USA 850</td>
					<td>Rhino GX</td>
					<td>Hiace 4</td>
					<td>Bus 28 penumpang</td>
					</tr>
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