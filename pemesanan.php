<?php
	include"koneksi.php";
	
	$noplat= $_GET['noplat'];
	
	$noktp= $_POST['noktp'];
	$namapel=$_POST['namapel'];
	$alamatpel=$_POST['alamatpel'];
	$telppel=$_POST['telppel'];
	
	$notransaksi=$_POST['notransaksi'];
	$tglpesan=$_POST['tglpesan'];
	$tglpinjam= $_POST['tglpinjam'];
	$jampinjam= $_POST['jampinjam'];
	$tglkembalirencana= $_POST['tglkembalirencana'];
	$jamkembalirencana= $_POST['jamkembalirencana'];
	
	$qpelanggan=mysql_query("insert into pelanggan values('$noktp', '$namapel', '$alamatpel', '$telppel');");
	$qtransaksi=mysql_query("insert into transaksisewa(notransaksi,tglpesan,tglpinjam,jampinjam,tglkembalirencana,
	jamkembalirencana,noktp,noplat)values( '$notransaksi', now(), '$tglpinjam', '$jampinjam', '$tglkembalirencana', 
	'$jamkembalirencana', '$noktp', '$noplat');");
	
	header("location:index.php");
?>