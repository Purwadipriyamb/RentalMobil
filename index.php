<?php
include"koneksi.php";session_start();
	if (isset($_GET['key'])) {
		$key=$_GET['key'];
	}
	else {
		$key="";
	}
$qkendaraan= mysql_query("select * from kendaraan join type using(IDType) join merk using(KodeMerk)
					where NoPlat like'%$key%' or NmType like'%$key%' or NmMerk like'%$key%' ;",$c)
					or die(mysql_error());
echo"
<html>
<head><title>HOME</title>
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
				<div class='formlogin'>
			<form method='POST' action='login.php'>
			<b>Log in :</b><br><input type='text' placeholder='Username' name='username'/>
			<br><input type='text' placeholder='Password' name='password'/>
			<br><input type='submit' value='Log In'/>
			</form></div></center>
			</div>
			<div id='konten' style='overflow:auto; width:100%px; height:449px;'>
			
				<center><h3>Mobil-mobil rental:</h3></center>
				";
				while($rkendaraan= mysql_fetch_array($qkendaraan)){
				echo"
					<div id='kategori'>
						<img src='img/".$rkendaraan['IDType'].".jpg' width='200px' height='150px'>
						<br>Rp :".$rkendaraan['TarifPerJam']." ,- /jam
						<br>Plat :	".$rkendaraan['NoPlat']."
						<br>Tahun :	".$rkendaraan['Tahun']."
						<br><a href='pesan.php?id=".$rkendaraan['IDType']."&NoPlat=".$rkendaraan['NoPlat']."'>
							<input type='button' value='Pesan'></a>
					</div>
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