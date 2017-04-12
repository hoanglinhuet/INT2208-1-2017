<?php
	$ac = $_GET['ac'];
	if($ac == "them"){
		include("modules/truyen/them.php");	
	}else if($ac == "sua"){
		include("modules/truyen/sua.php");	
	}
	include("modules/truyen/lietke.php");
?>