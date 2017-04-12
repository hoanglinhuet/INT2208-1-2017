<?php
	$tenmaychu = "localhost";
	$taikhoan = "root";
	$matkhau = "";
	$csdl = "thichdoctruyen";
	$con = mysql_connect($tenmaychu, $taikhoan, $matkhau);
	mysql_select_db($csdl, $con);
?>