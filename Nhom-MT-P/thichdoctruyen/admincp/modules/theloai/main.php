<?php
	$ac = $_GET['ac'];
	if($ac == "them"){
		include("modules/theloai/them.php");	
	}else{
		include("modules/theloai/sua.php");	
	}
	include("modules/theloai/lietke.php");
?>