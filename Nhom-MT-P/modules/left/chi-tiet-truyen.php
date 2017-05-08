<?php
	$sql = "SELECT * FROM truyen, theloai WHERE truyen.idtheloai = theloai.idtheloai AND idtruyen = '$_GET[idtruyen]'";
	$truyen = mysql_query($sql);
	$dong = mysql_fetch_array($truyen);
	$idtruyen = $dong["idtruyen"];
	$idtheloai = $dong["idtheloai"];
?>

<div class="row">
    <ol class="breadcrumb">
        <li><a href="index.php">Trang Chủ</a></li>
        <li>
        	<a href="index.php?xem=theloai&idtheloai=<?php echo $dong["idtheloai"]?>">					
				<?php echo $dong["tentheloai"] ?>
            </a>
        </li>
        <li><a href="#"><?php echo $dong["tentruyen"]?></a></li>
    </ol>
</div>
<div class="row">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><?php echo $dong["tentruyen"]?></h3>
        </div>
        <div class="panel-body">
            <div class="media">
                <div class="media-left">
                    <a href="#">
                        <img class="media-object" src="<?php echo $dong["anhminhhoa"]?>" alt="...">
                    </a>
                </div>
                <div class="media-body">
                    <h3 class="media-heading"><?php echo $dong["tentruyen"]?></h3>
                    <hr>
                    <p>Tác giả: <?php echo $dong["tacgia"]?> </p>
                    <p>Thể loại: <?php echo $dong["tentheloai"]?></p>
                    <p>Trạng Thái: Còn tiếp</p>
                    <button class="btn btn-default" type="submit">
                    	<?php
							$sql3 = "SELECT * FROM chuong WHERE idtruyen = '$idtruyen' AND thutu = '1'";
							$chuongdau = mysql_fetch_array(mysql_query($sql3));
						?>
                    	<a href="index.php?xem=chuong&idtheloai=<?php echo $idtheloai?>&idtruyen=<?php echo $idtruyen?>&idchuong=<?php echo $chuongdau["idchuong"]?>">
                   			Đọc truyện
                    	</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>	<!-- row -->
<div class="row">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Danh sách chương</h3>
        </div>
        <div class="panel-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>Chương</th>
                        <th>Tên chương</th>
                    </tr>
                </thead>
                <tbody>
					<?php
                        $sql2 = "SELECT * FROM chuong WHERE idtruyen = '$idtruyen' ORDER BY idchuong ASC";
                        $chuong2 = mysql_query($sql2);
                        while($dong2 = mysql_fetch_array($chuong2)){
                    ?>
                    <tr>
                        <td width="20%">
                            Chương <?php echo $dong2["thutu"] ?>
                        </td>
                        <td width="60%">
                            <a href="index.php?xem=chuong&idtheloai=<?php echo $dong["idtheloai"]?>&idtruyen=<?php echo $dong2["idtruyen"]?>&idchuong=<?php echo $dong2["idchuong"]?>">
								<?php echo $dong2["tenchuong"] ?>
                            </a>
                        </td>
                    </tr>
                    <?php
						}
					?>
                </tbody>
            </table>
            <!-- <nav aria-label="Page navigation">
                <ul class="pagination">
                    <li>
                        <a href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li>
                        <a href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav> -->
        </div>

    </div>
</div> <!-- row -->
</div> <!-- main-left -->