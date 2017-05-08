<?php
	include("../config.php");
	if(isset( $_POST["thutu"])){
		$thutu = $_POST["thutu"];
	}
	if(isset( $_POST["tenchuong"])){
		$tenchuong = $_POST["tenchuong"];
	}
	if(isset( $_POST["noidung"])){
		$noidung = $_POST["noidung"];
	}
	if(isset( $_POST["truyen"])){
		$idtruyen = $_POST["truyen"];
	}
	if(isset( $_GET["idtruyen"])){
		$idtruyen = $_GET["idtruyen"];
	}
	if(isset( $_GET["idchuong"])){
		$idchuong = $_GET["idchuong"];
	}
	if(isset($_GET["xoa"])){
		$xoa = $_GET["xoa"];
	}else{
		$xoa ="";	
	}
	if(isset($_POST["them"])){
		$sql = "INSERT INTO chuong(thutu, tenchuong,noidung, idtruyen) values('$thutu','$tenchuong','$noidung','$idtruyen')";
		mysql_query($sql);
		header("location: ../../index.php?quanli=chuong&ac=them&idtruyen=".$idtruyen);
	}else if(isset($_POST["sua"])){
		$sql = "UPDATE chuong SET thutu= '$thutu', tenchuong='$tenchuong', noidung='$noidung', idtruyen='$idtruyen' WHERE idchuong = '$idchuong'";
		mysql_query($sql);
		header("location: ../../index.php?quanli=chuong&ac=sua&idchuong=".$idchuong."&idtruyen=".$idtruyen);
	}else if($xoa != ""){
		$sql = "DELETE FROM chuong WHERE idchuong = '$idchuong'";
		mysql_query($sql);
		header("location: ../../index.php?quanli=chuong&ac=them&idtruyen=$idtruyen");
	}
?>