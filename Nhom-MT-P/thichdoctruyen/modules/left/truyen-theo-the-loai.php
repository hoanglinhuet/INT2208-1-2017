<?php
	$sql = "SELECT * FROM truyen, theloai WHERE truyen.idtheloai = theloai.idtheloai AND theloai.tentheloai = 'Ngôn tình' ORDER BY idtruyen DESC LIMIT 5";
	$truyen = mysql_query($sql);
?>
<link href="../../css/style.css" rel="stylesheet" type="text/css" />

<div class="row">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Ngôn tình</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Tên truyện</th>
                            <th>Tác giả</th>
                            <th>Số chương</th>
                        </tr>
                    </thead>
                    <tbody>
                    	<?php
							while($dong = mysql_fetch_array($truyen)){
						?>
                        <tr>
                            <td width="50%">
                                <div class="media">
                                    <div class="media-left media-middle">
                                        <img class="media-object" src="<?php echo $dong["anhminhhoa"] ?>" alt="...">
                                    </div>
                                    <div class="media-body">
                                        <a href="index.php?xem=truyen&id=<?php echo $dong["idtruyen"] ?>">
                                        	<p><strong><?php echo $dong["tentruyen"]?></strong></p>
                                        </a>
                                        <p>Ngôn tình</p>
                                    </div>
                                </div>
                            </td>
                            <td><?php echo $dong["tacgia"] ?> </td>
                            <td>Chương 10</td>
                        </tr>
                        <?php
							}
						?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>