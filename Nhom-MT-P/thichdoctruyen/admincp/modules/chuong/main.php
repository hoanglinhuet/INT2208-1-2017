<?php
	$ac = $_GET['ac'];
	if($ac == "them"){
		include("modules/chuong/them.php");	
	}else if($ac == "sua"){
		include("modules/chuong/sua.php");	
	}
	include("modules/chuong/lietke.php");
?>