<?php
	session_start();
	if($_SESSION["tendangnhap"]==""){
		header("location: login.php");
		exit();
	}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Trang quản trị</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
  	<?php
		include("modules/config.php");
      	include("modules/banner.php");
      	include("modules/menu.php");
      	include("modules/content.php");
      	include("modules/footer.php");
  	?>
	
</body>
</html>