<?php
	$tenmaychu = "localhost";
	$taikhoan = "root";
	$matkhau = "";
	$csdl = "thichdoctruyen";
	error_reporting(E_ALL ^ E_DEPRECATED);
	$con = mysql_connect($tenmaychu, $taikhoan, $matkhau);
	mysql_select_db($csdl, $con);
	
?>