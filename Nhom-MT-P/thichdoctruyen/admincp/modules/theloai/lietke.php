<?php
	$sql = "select * from theloai order by thutu asc";
	$theloai = mysql_query($sql);
?>
<div class="right">
<table width="442" border="1" id="table">
  <tr>
    <td width="80"><div align="center"><strong>STT</strong></div></td>
     <td width="167"><div align="center"><strong>Thể loại</strong></div></td>
    <td width="64"><div align="center"><strong>Thứ tự</strong></div></td>
    
    <td colspan="2"><div align="center"><strong>Quản lí</strong></div></td>
  </tr>
  <?php
  	$i = 1;
  	while($dong = mysql_fetch_array($theloai)){
  ?>
  <tr>
    <td><div align="center"><?php echo $i ?></div></td>
    <td><?php echo $dong["tentheloai"] ?></td>
    <td><div align="center"><?php echo $dong["thutu"] ?></div></td>
    <td width="50">
    	<div align="center">
        	<a href="index.php?quanli=theloai&ac=sua&id=<?php echo $dong["idtheloai"] ?>">
     			 Sửa
      		</a>
    	</div>
    </td>
    <td width="47">
    	<div align="center">
    		<a href="modules/theloai/xuli.php?xoa=theloai&id=<?php echo $dong["idtheloai"] ?>">
    			Xóa
            </a>
    	</div>
     </td>
  </tr>
  	<?php
      $i++;
	}
	?>
</table>
</div>
