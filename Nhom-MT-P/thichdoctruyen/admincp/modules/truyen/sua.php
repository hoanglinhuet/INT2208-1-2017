<?php
	$sql = "select * from truyen where idtruyen = '$_GET[id]'";
	$truyen = mysql_query($sql);
	$dong = mysql_fetch_array($truyen);
?>

<form action="modules/truyen/xuli.php?id=<?php echo $dong["idtruyen"]?>" method="post" enctype="multipart/form-data">
<div class="left">
<table width="395" height="245" border="0">
  <tr>
    <td colspan="3"><div align="center"><strong>SỬA TRUYỆN</strong></div></td>
  </tr>
  <tr>
    <td width="89">Tên truyện:</td>
    <td colspan="2"><input type="text" name="tentruyen" id="tentruyen" value="<?php echo $dong["tentruyen"]?>" size="40"></td>
  </tr>
  <tr>
    <td>Ảnh minh họa:</td>
    <td colspan="2">
    	<input type="file" name="anhminhhoa" />
    </td>
  </tr>
  <tr>
    <td>Tác giả: </td>
    <td colspan="2"><input type="text" name="tacgia" id="tacgia" value="<?php echo $dong["tacgia"] ?>"/></td>
  </tr>
  <tr>
    <td>Tóm tắt:</td>
    <td colspan="2">
    	<textarea cols="40" rows="10" name="tomtat">
        	<?php
				echo $dong["tomtat"];
			?>
        </textarea>
    </td>
  </tr>
  <tr>
    <td>Thể loại:</td>
    <td colspan="2">
    <?php
		$sql = "select * from theloai";
		$theloai = mysql_query($sql);
	?>
    	<select name="theloai">
        <?php
			while($dong_theloai = mysql_fetch_array($theloai)){
				if($dong_theloai["idtheloai"] == $dong["idtheloai"]){
		?>
        	<option value="<?php echo $dong["idtheloai"]?>" selected="selected"><?php echo $dong_theloai["tentheloai"]?></option>
            <?php
				}else{
			?>
            <option value="<?php echo $dong["idtheloai"]?>"><?php echo $dong_theloai["tentheloai"]?></option>
        <?php
				}
			}
		?>
        </select>
    </td>
  </tr>
  <tr>
    <td>Trạng thái:</td>
    <td colspan="2">
    	<select name="trangthai">
        <?php
			if($dong["trangthai"] == "Chưa hoàn thành"){
		?>
        	<option value="Chưa hoàn thành" selected="selected">Chưa hoàn thành</option>
            <option value="Đã hoàn thành">Đã hoàn thành</option>
        <?php 
			}else{
		?>
        	<option value="Chưa hoàn thành" >Chưa hoàn thành</option>
            <option value="Đã hoàn thành" selected="selected">Đã hoàn thành</option>
            <?php
			}
			?>
        </select>
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td width="67"><input type="submit" name="sua" id="sua" value="Cập nhật"></td>
    <td width="163"><input type="reset" name="huy" id="huy" value="  Hủy  "></td>
  </tr>
</table>
</div>
</form>