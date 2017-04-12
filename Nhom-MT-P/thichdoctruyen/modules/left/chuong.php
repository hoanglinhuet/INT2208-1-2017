<?php
	$idtheloai = $_GET["idtheloai"];
	$idtruyen = $_GET["idtruyen"];
	$idchuong = $_GET["idchuong"];
	$sql = "SELECT * FROM theloai, truyen, chuong WHERE chuong.idtruyen = truyen.idtruyen AND truyen.idtheloai= theloai.idtheloai AND idchuong='$idchuong'";
	$chuong = mysql_query($sql);
	$dong = mysql_fetch_array($chuong);
	
?>
<div class="row">
    <ol class="breadcrumb">
        <li><a href="index.php">Trang Chủ</a></li>
        <li><a href="index.php?xem=theloai&idtheloai=<?php echo $dong["idtheloai"]?>">
				<?php echo $dong["tentheloai"]?>
            </a>
        </li>
        <li><a href="index.php?xem=truyen&idtruyen=<?php echo $dong["idtruyen"]?>">
			<?php echo $dong["tentruyen"]?></a>
        </li>
        <li><a href="#"><?php echo $dong["tenchuong"]?></a></li>
    </ol>
</div>
<div class="row">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title text-center"><?php echo $dong["tenchuong"]?></h3>
        </div>
        <div class="panel-body">
            <?php echo $dong["noidung"]?>
        </div>
    </div>
</div>
<!--
<div class="row">
    <nav aria-label="...">
      	<ul class="pager">
      	<?php
			$idtruyen = $dong["idtruyen"];
			$idtheloai = $dong["idtheloai"];
	  		$thutu = $dong["thutu"];
			
	  		$chuongtiep = $thutu + 1;
			$sql2 = "SELECT * FROM theloai, truyen, chuong WHERE chuong.idtruyen = truyen.idtruyen AND truyen.idtheloai= theloai.idtheloai AND chuong.thutu ='1'";
			$tiep = mysql_fetch_array(mysql_query($sql2));

			$chuongtruoc = $thutu - 1;
			$sql3 = "SELECT * FROM theloai, truyen, chuong WHERE chuong.idtruyen = truyen.idtruyen AND truyen.idtheloai= theloai.idtheloai AND chuong.thutu='$chuongtruoc'";
			$truoc = mysql_fetch_array(mysql_query($sql3));
	  	?>
        	<li><a href="index.php?xem=chuong&idtheloai=<?php echo $truoc["idtheloai"]?>&idtruyen=<?php echo $truoc["idtruyen"]?>&idchuong=<?php echo $truoc["idchuong"]?>">Trước</a></li>
        	<li><a href="index.php?xem=chuong&idtheloai=<?php echo $tiep["idtheloai"]?>&idtruyen=<?php echo $tiep["idtruyen"]?>&idchuong=<?php echo $tiep["idchuong"]?>">Tiếp</a></li>
      	</ul>
    </nav>
</div> -->		