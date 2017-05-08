<?php
	include("../config.php");
	$tentheloai = $_POST["tentheloai"];
	$thutu = $_POST["thutu"];
	$id = $_GET["id"];
	if(isset($_POST["them"])){
		// Them the loai
		$sql = "insert into theloai(tentheloai, thutu) values('$tentheloai','$thutu')";
		mysql_query($sql);
		header("location: ../../index.php?quanli=theloai&ac=them");
	}else if(isset($_POST["sua"])){
		// Sua the loai
		$sql = "update theloai set tentheloai='$tentheloai', thutu='$thutu' where idtheloai = '$id'";
		mysql_query($sql);
		header("location: ../../index.php?quanli=theloai&ac=sua&id=".$id);
	}else{
		// Xoa the loai
		$sql = "delete from theloai where idtheloai = '$id'";
		mysql_query($sql);
		header("location: ../../index.php?quanli=theloai&ac=them");
	}
?>