<?php 
	$sql = "select * from theloai where idtheloai = '$_GET[id]'";
	$theloai = mysql_query($sql);
	$dong = mysql_fetch_array($theloai);
?>
<form action="modules/theloai/xuli.php?id=<?php echo $dong["idtheloai"]?>" method="post">
    <div class="left">
    <table width="315" height="119" border="0">
      <tr>
        <td colspan="3"><div align="center"><strong>SỬA THỂ LOẠI</strong></div></td>
      </tr>
      <tr>
        <td width="90">Thể loại</td>
        <td colspan="2"><input type="text" name="tentheloai" id="tentheloai" value="<?php echo $dong["tentheloai"] ?>"></td>
      </tr>
      <tr>
        <td>Thứ tự</td>
        <td colspan="2"><input type="text" name="thutu" id="thutu" value="<?php echo $dong["thutu"] ?>"></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td width="72"><input type="submit" name="sua" id="sua" value="Cập nhật"></td>
        <td width="131"><input type="reset" name="huy" id="huy" value="  Hủy  "></td>
      </tr>
    </table>
    </div>
</form>