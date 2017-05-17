<?php
	$tenmaychu = "mysql.hostinger.vn";
	$taikhoan = "u458045748_mtp";
	$matkhau = "123456";
	$csdl = "u458045748_mtp";
	error_reporting(E_ALL ^ E_DEPRECATED);
	$con = mysql_connect($tenmaychu, $taikhoan, $matkhau);
	mysql_select_db($csdl, $con);
	
?>