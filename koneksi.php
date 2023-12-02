<?php
$h="localhost";
$u="root";
$p="";
$d="purwadi_p";
$c=mysql_connect($h,$u,$p) or die ("gagal mengkoneksikan");
mysql_select_db ($d,$c) or die ("gagal memanggil database");
?>