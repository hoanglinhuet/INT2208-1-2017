<?php
	$sql = "SELECT * FROM chuong, truyen WHERE chuong.idtruyen = truyen.idtruyen AND idchuong= '$_GET[idchuong]'";
	$chuong = mysql_query($sql);
	$dong = mysql_fetch_array($chuong);
?>
<form action="modules/chuong/xuli.php?idchuong=<?php echo $dong["idchuong"]?>" method="post">
<div class="left">
<table width="395" height="245" border="0">
  <tr>
    <td colspan="3"><div align="center"><strong>SỬA CHƯƠNG</strong></div></td>
  </tr>
  <tr>
    <td>Thứ tự:</td>
    <td colspan="2"><input type="text" name="thutu" id="thutu" value="<?php echo $dong["thutu"]?>"></td>
  </tr>
  <tr>
    <td width="89">Tên chương:</td>
    <td colspan="2"><input type="text" name="tenchuong" id="tentruyen" value="<?php echo $dong["tenchuong"]?>"></td>
  </tr>
  <tr>
    <td>Nội dung:</td>
    <td colspan="2">
      <textarea cols="80" rows="20" name="noidung">
        	<?php echo $dong["noidung"]?>
        </textarea>
    </td>
  </tr>
  <tr>
    <td>Truyện: </td>
    <td colspan="2">
    	<select name="truyen">
        	<?php
				$sql1 = "SELECT * FROM truyen ORDER BY tentruyen ASC";
				$truyen = mysql_query($sql1);
				while($dong_truyen = mysql_fetch_array($truyen)){
			?>
        	<option value="<?php echo $dong_truyen["idtruyen"]?>" <?php if($dong_truyen["idtruyen"] == $dong["idtruyen"]) echo "selected=\"selected\""?>>
            	<?php echo $dong_truyen["tentruyen"]?>
            </option>
            <?php
				}
			?>
        </select>
    </td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td width="67"><input type="submit" name="sua" id="them" value="Cập nhật"></td>
    <td width="163"><input type="reset" name="huy" id="huy" value="  Hủy  "></td>
  </tr>
</table>
</div>
</form>