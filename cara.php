<html>
<link rel='stylesheet' type='text/css' href='style.css' />
	<head>
		<title>UKK Rental Mobil</title>
	</head>
	<body>
		<div id='container'>
			<div id='logo'>
					<div class='logoweb'>
						<a href=''><img src='foto/logo JCR.png' height='50px' width='145px'></a>
					</div>
				<div class='logo1'>
					<a href=''><img src='foto/fb.png' height='25px' width='25px'></a> <a href=''><img src='foto/rss.png' height='25px' width='25px'></a> <a href=''><img src='foto/twt.png' height='25px' width='25px'></a>
				</div>
				<div class='formheader'>
				<center><h2><b style='color:white;'>Selamat Datang di <b style='color:#00fff0;'>Jack Car Rental</b></b></h2></center>
				</div>
			</div>
			<div id='header'>
				<img src='foto/header1.png' width='1000px'>
			</div>
			<div id='menu'>
				<ul>
					<li><a href='index.php'>Beranda</a></li>
					<li><a href='#'>Cari Mobil</a>
						<ul>
							<li><a href='avanza.php'>Avanza</a></li>
							<li><a href='jazz.php'>Jazz</a></li>
							<li><a href='xenia.php'>Xenia</a></li>
						</ul>
					</li>
					<li><a href='cara.php'>Cara Pesan</a></li>
					<li><a href='tentang.php'>Tentang Kami</a></li>
					<li><a  href='#'>Kontak Kami</a>
						<ul>
							<li><a href='www.facebook.com'>Facebook</a></li>
							<li><a href='www.twitter.com'>Twitter</a></li>
						</ul>
					</li>
					<div class='cari'>
						<form action='index.php' method='get'>
							<input name='sitesearch' style='display:none;' value='Jack Car Rental' />
							<input id='search-box' name='key' onblur='if(this.value==&apos;&apos;)
							this.value=this.defaultValue;' onfocus='if(this.value==this.defaultValue)this.value=&apos;&apos;;'
							 style='width:170px;border: 2px solid #00fff0; border-radius: 2px;;padding:2px 10px; font:12px Comic Sans MS;color:#666;no-repeat;'
							  type='text' placeholder='Cari mobil...'/><input align='top' id='search-btn' src='foto/c10.png' height="25px" type='image' value='Search'/>
						</form>
					</div>
					
				</ul>
			</div>
			<div id='content'>
				<div id='nav'>
					<div class='formlogin'>
					<center>
					<h2><b style='color:black;'>Sign In Karyawan</b></h2>
					<form name='fform' action='sign.php' method='POST'>
								<input type='text' name='username' placeholder='username'/>
								<br />
								<br />
								<input type='password' name='pass' placeholder='kata sandi'/>
								<br />
								<input type='submit' value='Masuk' name='button'/>
						 </form>
					</center>
					</div>
					<br />
					<img src='foto/iklan.gif' width='260px' height='90px' />
						<div class='kontak'>
							<h2>Car Warehouse:</h2>
									<h3><b style='color:blue;'>Jl.Soekarno-Hatta no.24 JCR</b>
									</h3>
						</div>
						<div class='kontak'>
							<h2>Personal Contact:</h2>
									<h3><b style='color:blue;'>Jaka Setiawan S.Kom</b>
									<p>tlpn: 0877-0063-1225</p>
									</h3>
						</div>
						<div class='kontak'>
							<h2>Main Office:</h2>
									<h3><b style='color:blue;'>Jl. Kartini no.10</b>
									<p>tlpn: 54 687 9</p>
									<p>fax: 37 090 41758</p>
									</h3>
						</div>
				</div>
				<div id='main'>
					<center><h2>Cara Pemesanan</h2></center>
					<br />
					<table style='margin-left:50px;'>
						<tr>
							<td> 1. Cari dan pilih mobil yang akan dipesan, lalu klik <b style='color:blue;'>Pesan Sekarang>></b></td>
						</tr>
						<tr>
							<td> 2. Isikan biodata anda, lalu klik <b style='color:blue;'>Pesan</b></td>
						</tr>
						<tr>
							<td> 3. Selamat, anda telah berhasil memesan mobil.</td>
						</tr>
					</table>
				</div>
			</div>
			<div id='footer'>
				<h3>&copy; Copyright 2016 <a style='cursor:pointer; color:#00fff0;'>UKK</a> | Oleh: <a style='cursor:pointer; color:#00fff0;'>Jaka Setiawan</a></h3>
			</div>
		</div>
		
	</body>
</html>