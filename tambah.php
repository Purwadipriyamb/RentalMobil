<?php
	include "koneksi.php";
	$NoPlat= $_POST['NoPlat'];
	$Tahun= $_POST['Tahun'];
	$TarifPerJam= $_POST['TarifPerJam'];
	$StatusRental= $_POST['StatusRental'];
	$IDType= $_POST['IDType'];
	$KodePemilik= $_POST['KodePemilik'];
	
	$q=mysql_query("insert into kendaraan values('$NoPlat', '$Tahun', '$TarifPerJam', '$StatusRental', '$IDType', '$KodePemilik');",
	$c) or die(mysql_error());
	
	if($q){
?>	
	<script language="Javascript">
		document.location='kendaraan.php';
	</script>
<?php
	}
?>