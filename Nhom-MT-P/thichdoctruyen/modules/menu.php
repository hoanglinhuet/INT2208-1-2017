<?php
	$sql = "SELECT * FROM theloai";
	$theloai = mysql_query($sql);
?>

<div class="container-fluid" id="menu">
	<div class="container">
		<nav class="navbar navbar-default">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php">Trang chủ <span class="sr-only">(current)</span></a>
				</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
                <?php
					while($dong = mysql_fetch_array($theloai)){
				?>
					<li>
                    	<a href="index.php?xem=theloai&idtheloai=<?php echo $dong["idtheloai"] ?>">
							<?php echo $dong["tentheloai"] ?>
                    	</a>
                    </li>
                <?php
					}
				?>
				</ul>
			</div><!-- /.navbar-collapse -->
		</nav>
	</div>
</div>