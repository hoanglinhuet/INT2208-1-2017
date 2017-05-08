<?php
	$sql = "SELECT * FROM truyen ORDER BY tentruyen ASC";
	$truyen = mysql_query($sql);
?>
<form action="modules/chuong/xuli.php" method="post">
<div class="left">
<table width="395" height="245" border="0">
  <tr>
    <td colspan="3"><div align="center"><strong>THÊM MỚI CHƯƠNG</strong></div></td>
  </tr>
  <tr>
    <td>Thứ tự:</td>
    <td colspan="2"><input type="text" name="thutu" id="thutu"></td>
  </tr>
  <tr>
    <td width="89">Tên chương:</td>
    <td colspan="2"><input type="text" name="tenchuong" id="tentruyen"></td>
  </tr>
  <tr>
    <td>Nội dung:</td>
    <td colspan="2">
      <textarea cols="80" rows="20" name="noidung">
        
        </textarea>
      </td>
  </tr>
  <tr>
    <td>Truyện: </td>
    <td colspan="2">
    	<select name="truyen">
        <?php
			while($dong = mysql_fetch_array($truyen)){
		?>
        	<option value="<?php echo $dong["idtruyen"]?>">
            	<?php echo $dong["tentruyen"]?>
            </option>
            <?php
			}
			?>
        </select>
    </td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="them" id="them" value="Thêm" style="text-align: right;"></td>
  </tr>
</table>
</div>
</form>