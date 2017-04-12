<?php
	$sql = "SELECT * FROM truyen ORDER BY idtruyen DESC LIMIT 4";
	$truyen =  mysql_query($sql);
?>
<div class="row">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Truyện mới nhất</h3>
        </div>
        <div class="panel-body">
            <div class="row">
            <?php
				while($dong = mysql_fetch_array($truyen)){
			?>
                <div class="col-md-3">
                    <div class="thumbnail">
                    	<a href="index.php?xem=truyen&idtheloai=<?php echo $dong["idtheloai"]?>&idtruyen=<?php echo $dong["idtruyen"]?>">
                            <img src="<?php echo $dong["anhminhhoa"] ?>" alt="...">
                            <div class="caption">
                                <p><?php echo $dong["tentruyen"] ?> </p>
                            </div>
                        </a>
                    </div>
                </div>
            <?php
				}
			?>
            </div>
            
        </div>
    </div>
</div>