<?php
	$sql = "SELECT * FROM truyen ORDER BY tentruyen ASC";
    $truyen = mysql_query($sql);
	if(isset($_POST["truyen"])){
		$idtruyen = $_POST["truyen"];
	}else if(isset($_GET["idtruyen"])){
		$idtruyen = $_GET["idtruyen"];
	}
	else{
		$idtruyen = "";
	}
	
?>
<div class="right">
	<form action="" method="post">
        <select name="truyen" onchange="this.form.submit();">
        <option value=""> Chọn tên truyện </option>
            <?php
            while($dong = mysql_fetch_array($truyen)){
            ?>
            <option <?php if($idtruyen == $dong["idtruyen"]) echo "selected=\"selected\""?>value="<?php echo $dong["idtruyen"] ?>" >
            	
                	<?php echo $dong["tentruyen"]?>
                
            </option>
            <?php
            }
            ?>
        </select>
   	</form>
	<table border="1px" id="table">
    	<tr>
        	<td width="40"> STT </td>
            <td width="140"> Tên chương </td>
            <td colspan="2" width="100"> Quản lí </td>	
        </tr>
        <?php 
			$sql1 = "SELECT * FROM chuong WHERE idtruyen = '$idtruyen'";
			$chuong = mysql_query($sql1);
			while($dong_chuong = mysql_fetch_array($chuong)){
		?>
        <tr>
        	<td> <?php echo $dong_chuong["thutu"] ?> </td>
            <td> <?php echo $dong_chuong["tenchuong"] ?> </td>
            <td width="50">
            	<a href="index.php?quanli=chuong&ac=sua&idchuong=<?php echo $dong_chuong["idchuong"]?>&idtruyen= <?php echo $dong_chuong["idtruyen"] ?>">
                	Sửa
                </a>
            </td>
            <td width="50">
            	<a href="modules/chuong/xuli.php?xoa=chuong&idchuong=<?php echo $dong_chuong["idchuong"]?>&idtruyen=<?php echo $dong_chuong["idtruyen"]?>">
                	Xóa
                </a>
            </td>
        </tr>
        <?php
			}
		?>
        
    </table>
</div>