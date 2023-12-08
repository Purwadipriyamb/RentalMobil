<?php
	include "koneksi.php";
	
	$noktp= $_GET['noktp'];
	
	$tglkembalirealisasi= $_POST['tglkembalirealisasi'];
	$jamkembalireal= $_POST['jamkembalireal'];
	$denda= $_POST['denda'];
	$kilometerpinjam= $_POST['kilometerpinjam'];
	$kilometerkembali= $_POST['kilometerkembali'];
	$bbmpinjam= $_POST['bbmpinjam'];
	$bbmkembali= $_POST['bbmkembali'];
	$kondisimobilpinjam= $_POST['kondisimobilpinjam'];
	$kondisimobilkembali= $_POST['kondisimobilkembali'];
	$kerusakan= $_POST['kerusakan'];
	$biayakerusakan= $_POST['biayakerusakan'];
	$biayabbm= $_POST['biayabbm'];
	
	$qubahkelola=mysql_query("update transaksisewa set tglkembalirealisasi='$tglkembalirealisasi', jamkembalireal='$jamkembalireal', denda='$denda', kilometerpinjam='$kilometerpinjam', kilometerkembali='$kilometerkembali', bbmpinjam='$bbmpinjam', bbmkembali='$bbmkembali', kondisimobilpinjam='$kondisimobilpinjam', kondisimobilkembali='$kondisimobilkembali', kerusakan='$kerusakan', biayakerusakan='$biayakerusakan', biayabbm='$biayabbm' where noktp like '$noktp';");
	
	header("location:setoran.php");
?>