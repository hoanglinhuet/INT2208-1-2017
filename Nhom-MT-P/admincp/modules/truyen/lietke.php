<?php
	$sql = "select idtruyen, tentruyen, tacgia, truyen.idtheloai, anhminhhoa, trangthai, tentheloai from truyen, theloai where truyen.idtheloai = theloai.idtheloai";
	$truyen = mysql_query($sql);
?>
<div class="right">
<table width="548" border="1" id="table">
  	<tr>
    	<td width="31"><div align="center">STT</div></td>
    	<td width="102"><div align="center">Tên truyện</div></td>
    	<td width="61">Thể loại</td>
    	<td width="61">Tác giả</td>
    	<td width="134">Ảnh minh họa</td>
    	<td width="84">Trạng thái</td>
    	<td colspan="2">Quản lí</td>
    </tr>
  	<?php
  		$i = 1;
  		while($dong = mysql_fetch_array($truyen)){
	?>
  	<tr>
   	 	<td><?php echo $i ?></td>
    	<td><?php echo $dong["tentruyen"] ?></td>
    	<td><?php echo $dong["tentheloai"] ?></td>
    	<td><?php echo $dong["tacgia"] ?></td>
    	<td>
        	<img src="../<?php echo $dong["anhminhhoa"] ?> " width="60px" />
        </td>
    	<td><?php echo $dong["trangthai"] ?></td>
    	<td width="43">
        	<a href="index.php?quanli=truyen&ac=sua&id=<?php echo $dong["idtruyen"] ?>">
        		Sửa
            </a>
        </td>
            
    	<td width="47">
       		<a href="modules/truyen/xuli.php?xoa=truyen&id=<?php echo $dong["idtruyen"] ?>">
        		Xóa
        	</a>
        </td>
   	</tr>
    <?php
		$i++;
		}
	?>
</table>
</div>