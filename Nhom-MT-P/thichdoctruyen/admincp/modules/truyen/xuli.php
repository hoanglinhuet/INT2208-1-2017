<?php
	include("../config.php");
	$tentruyen = $_POST["tentruyen"];
	$tacgia = $_POST["tacgia"];
	$tomtat = $_POST["tomtat"];
	$theloai = $_POST["theloai"];
	$trangthai = $_POST["trangthai"];
	$id = $_GET['id'];
	if(isset($_POST["them"])){
		$tenanh = $_FILES["anhminhhoa"]["name"]; // Lấy tên ảnh đc chọn
		if($tenanh!=""){
			$time = date("Ymdhis"); // 
			$tenanh = $time . $tenanh;
			$dich = "../../../uploads/".$tenanh;
			copy($_FILES["anhminhhoa"]["tmp_name"], $dich);
			$dich = substr($dich,9);
		
		}
		$sql = "INSERT INTO truyen(tentruyen, tacgia, anhminhhoa, tomtat, idtheloai, trangthai) values('$tentruyen','$tacgia','$dich','$tomtat','$theloai','$trangthai')";
			mysql_query($sql);
			header("location: ../../index.php?quanli=truyen&ac=them");
	}
	else if(isset($_POST["sua"])){
		$tenanh = $_FILES["anhminhhoa"]["name"]; // Lấy tên ảnh đc chọn
		if($tenanh!=""){
			$time = date("Ymdhis"); // 
			$tenanh = $time . $tenanh;
			$dich = "../../../uploads/".$tenanh;
			copy($_FILES["anhminhhoa"]["tmp_name"], $dich);
			$dich = substr($dich,9);
			$sql = "UPDATE truyen SET tentruyen='$tentruyen', tacgia = '$tacgia', anhminhhoa='$dich', tomtat='$tomtat', idtheloai='$theloai', trangthai='$trangthai' WHERE idtruyen='$id'";
			// Xóa ảnh cũ
			$sql1 = "SELECT anhminhhoa FROM truyen WHERE idtruyen='$id'";
			$truyen = mysql_query($sql1);
			$dong = mysql_fetch_array($truyen);
			if($dong["anhminhhoa"]!= ""){
				unlink("../../../".$dong["anhminhhoa"]);	
			}
		}else{
			$sql = "UPDATE truyen SET tentruyen='$tentruyen', tacgia = '$tacgia', tomtat='$tomtat', idtheloai='$theloai', trangthai='$trangthai' WHERE idtruyen='$id'";
			
		}
		mysql_query($sql);
		header("location: ../../index.php?quanli=truyen&ac=sua&id=".$id);
	}
	else{
		$sql2 = "SELECT anhminhhoa FROM truyen WHERE idtruyen='$id'";
		$truyen = mysql_query($sql2);
		$dong = mysql_fetch_array($truyen);
		if($dong["anhminhhoa"]!= ""){
			unlink("../../../".$dong["anhminhhoa"]);	
		}
		$sql = "DELETE FROM truyen WHERE idtruyen = '$id'";
		mysql_query($sql);
		header("location: ../../index.php?quanli=truyen&ac=them");
	}
?>