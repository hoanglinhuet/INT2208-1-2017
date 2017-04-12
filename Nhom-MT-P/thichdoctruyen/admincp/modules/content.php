<div id="content">
	<?php
		if(isset($_GET['quanli'])){
			$tam = $_GET['quanli'];
		}else{
			$tam = "";
		}
		if($tam == "theloai"){
			include("modules/theloai/main.php");	
		}else if($tam == "truyen"){
			include("modules/truyen/main.php");	
		}else if($tam == "chuong"){
			include("modules/chuong/main.php");
		}
	?>
</div>