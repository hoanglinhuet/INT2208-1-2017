<?php
	include("modules/config.php");
	session_start();
	if(isset($_POST["dangnhap"])){
		$tendangnhap = $_POST["tendangnhap"];
		$matkhau = $_POST["matkhau"];
		$sql = "SELECT * FROM users WHERE tendangnhap = '$tendangnhap' AND matkhau='$matkhau'";
		$ketqua = mysql_query($sql);
		if(mysql_num_rows($ketqua)>0){
			//session_register("tendangnhap");
			$_SESSION["tendangnhap"] = $tendangnhap;
			header("location: index.php");
		}
	}else if(isset($_POST["thoat"])){
		session_destroy();
		header("location: ../index.php");
	}else if(isset($_GET['ac'])&&$_GET['ac'] == "thoat"){
		session_destroy();
		header("location: login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Đăng nhập hệ thống</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
	
<body>
<form class="login" action="login.php" method="post">
  <table width="407" height="172">
    <tr>
      <td colspan="3"><div align="center">ĐĂNG NHẬP</div></td>
    </tr>
    <tr>
      <td width="115">Tên đăng nhập:</td>
      <td colspan="2">
          <input name="tendangnhap" type="text" size="30" />
      </td>
    </tr>
    <tr>
      <td>Mật khẩu</td>
      <td colspan="2">
          <input name="matkhau" type="password" size="30"/>
      </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td width="95">
            <input name="dangnhap" type="submit" value="Đăng nhập" />
      </td>
      <td width="99"><input name="thoat" type="submit" value="  Thoát  " /></td>
    </tr>
  </table>
</form>

</body>
</html>