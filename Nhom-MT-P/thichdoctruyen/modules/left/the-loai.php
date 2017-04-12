<?php
	$sobai = 5;   // số bài viết trên 1 trang
	if(isset($_GET["trang"])){
		$trang = $_GET["trang"];
	}else{
		$trang = 1;
	}
	$batdau = ($trang - 1) * $sobai;
	$sql = "SELECT * FROM truyen WHERE idtheloai = '$_GET[idtheloai]' LIMIT $batdau, $sobai";
	$truyen = mysql_query($sql);
	$sql1 = "SELECT * FROM theloai WHERE idtheloai = '$_GET[idtheloai]'";
	$theloai = mysql_query($sql1);
	$dong1 = mysql_fetch_array($theloai);
?>

<div class="row">
    <ol class="breadcrumb">
        <li><a href="index.php">Trang Chủ</a></li>
        <li><a href="index.php?xem=theloai&idtheloai=<?php echo $dong1["idtheloai"] ?>">
				<?php echo $dong1["tentheloai"]?>
             </a>
        </li>
    </ol>
</div>
<div class="row">
    <div class="panel panel-default">
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
                                        <a href="index.php?xem=truyen&idtheloai=<?php echo $dong["idtheloai"]?>&idtruyen=<?php echo $dong["idtruyen"]?>">
                                        	<p><strong><?php echo $dong["tentruyen"] ?></strong></p>
                                        </a>
                                        <p><?php echo $dong1["tentheloai"]?></p>
                                    </div>
                                </div>
                            </td>
                            <td><?php echo $dong["tacgia"] ?></td>
                            <td>Chương 10</td>
                        </tr>
                    <?php
						}
					?>
                    </tbody>
                </table>
            </div>
            
        </div> <!-- body -->
       
        <nav aria-label="Page navigation">
                <ul class="pagination pagination-sm">
                    <li>
                        <a href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                     <?php
					 $sql = "SELECT idtruyen FROM truyen WHERE idtheloai = '$_GET[idtheloai]'";
					 $sotruyen = mysql_num_rows(mysql_query($sql));
					 $sotrang = ceil($sotruyen/$sobai);
						$i = 1;
						while($i<=$sotrang){
					?>
                    <li>
                    	<a href="index.php?xem=theloai&id=<?php echo $_GET["idtheloai"] ?>&trang=<?php echo $i ?>">
                        	<?php echo $i ?>                     
                        </a>
                    
                    </li>
                    <?php
					$i++;
					}
					?>
                    <li>
                        <a href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
    </div> <!-- panel -->
    <div class="row" id="phantrang">
    	

    </div>
</div>