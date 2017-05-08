<?php  
	$key = $_POST['search'];
	$sql = "SELECT * FROM truyen WHERE MATCH(tentruyen) against ('$key' IN boolean mode)";
	// var_dump($sql); die;
	$truyen = mysql_query($sql);
	// var_dump($truyen); die;
?>

<div class="row">
    <ol class="breadcrumb">
        <li><a href="index.php">Trang Chủ</a></li>
        <li>
        	Search
        </li>
    </ol>
</div>

<div class="row">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Kết quả tìm kiếm cho "<?php echo $key ?>"</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Tên truyện</th>
                            <th>Tác giả</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        if($truyen == true){
						  while($dong = mysql_fetch_array($truyen)){
					?>
                        <tr>
                            <td width="70%">
                                <div class="media">
                                    <div class="media-left media-middle">
                                        <img class="media-object" src="<?php echo $dong["anhminhhoa"] ?>" alt="...">
                                    </div>
                                    <div class="media-body">
                                        <a href="index.php?xem=truyen&idtheloai=<?php echo $dong["idtheloai"]?>&idtruyen=<?php echo $dong["idtruyen"]?>">
                                        	<p><strong><?php echo $dong["tentruyen"] ?></strong></p>
                                        </a>
                                        <?php 
                                        	$theloaitruyen = $dong['idtheloai'];
                                        	$sql1 = "SELECT * FROM theloai WHERE idtheloai = '$theloaitruyen'";
                                        	$theloai = mysql_query($sql1);
                                        	while($dongtheloai = mysql_fetch_array($theloai)){
                                        ?>
                                        	<p><?php echo $dongtheloai['tentheloai']?></p>
                                        <?php
                                        	}
                                        ?>
                                    </div>
                                </div>
                            </td>
                            <td><?php echo $dong["tacgia"] ?></td>
                        </tr>
                    <?php
						}
                    }
					?>
                    </tbody>
                </table>
            </div>
            
        </div> <!-- body -->
    </div>
</div>	<!-- row -->