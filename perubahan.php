<?php
	include "koneksi.php";
	
	$NoPlat=$_GET['NoPlat'];
	$Tahun=$_POST['Tahun'];
	$TarifPerJam=$_POST['TarifPerJam'];
	$StatusRental=$_POST['StatusRental'];
	$IDType=$_POST['IDType'];
	$KodePemilik=$_POST['KodePemilik'];
	
	$query=mysql_query("update kendaraan set Tahun='$Tahun', TarifPerJam='$TarifPerJam', StatusRental='$StatusRental', IDType='$IDType', KodePemilik='$KodePemilik'
	where NoPlat like '$NoPlat';",
	$c)or die(mysql_error());
	
	if($query){
?>
	<script language="JavaScript">
		document.location='kendaraan.php';
	</script>
<?php
	}
?>