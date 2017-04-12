<form action="modules/truyen/xuli.php" method="post" enctype="multipart/form-data">
<div class="left">
<table width="395" height="245" border="0">
  <tr>
    <td colspan="3"><div align="center"><strong>THÊM MỚI TRUYỆN</strong></div></td>
  </tr>
  <tr>
    <td width="89">Tên truyện:</td>
    <td colspan="2"><input type="text" name="tentruyen" id="tentruyen"></td>
  </tr>
  <tr>
    <td>Ảnh minh họa:</td>
    <td colspan="2">
    	<input type="file" name="anhminhhoa" />
    </td>
  </tr>
  <tr>
    <td>Tác giả: </td>
    <td colspan="2"><input type="text" name="tacgia" id="tacgia" /></td>
  </tr>
  <tr>
    <td>Tóm tắt:</td>
    <td colspan="2">
    	<textarea cols="40" rows="10" name="tomtat">
        
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
			while($dong = mysql_fetch_array($theloai)){
		?>
        	<option value="<?php echo $dong["idtheloai"]?>"><?php echo $dong["tentheloai"]?></option>
        <?php
			}
		?>
        </select>
    </td>
  </tr>
  <tr>
    <td>Trạng thái:</td>
    <td colspan="2">
    	<select name="trangthai">
        	<option value="Chưa hoàn thành" selected="selected">Chưa hoàn thành</option>
            <option value="Đã hoàn thành">Đã hoàn thành</option>
        </select>
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td width="67"><input type="submit" name="them" id="them" value="Thêm"></td>
    <td width="163"><input type="reset" name="huy" id="huy" value="  Hủy  "></td>
  </tr>
</table>
</div>
</form>