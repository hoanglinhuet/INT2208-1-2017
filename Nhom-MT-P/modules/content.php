<div class="container-fluid">
	<div class="container main" stype>
		<div class="col-sm-8 main-left">
			<?php
				if(isset($_GET["xem"])){
					$tam = $_GET["xem"];
				}else{
					$tam = "";	
				}
				if($tam == "theloai"){
					include("modules/left/the-loai.php");
				}else if($tam == "truyen"){
					include("modules/left/chi-tiet-truyen.php");
				}else if($tam == "chuong"){
					include("modules/left/chuong.php");
				}else if($tam == "search"){
					include("modules/left/search.php");
					include("modules/left/truyen-cap-nhat.php");
				}else{
					include("modules/left/truyen-cap-nhat.php");
					include("modules/left/truyen-theo-the-loai.php");
				}
			?>
		</div> <!-- main-left -->
		<div class="col-sm-4 main-right">
			<?php
				//include("modules/right/hot-tuan.php");
				//include("modules/right/da-hoan-thanh.php");
			?>
		</div> <!-- main-right -->
	</div>
</div>
