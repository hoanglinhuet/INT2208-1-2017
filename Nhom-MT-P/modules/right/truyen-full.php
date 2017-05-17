<?php
    $sql = "SELECT * FROM truyen WHERE trangthai = 'Đã hoàn thành' LIMIT 5";
		$truyen = mysql_query($sql);
?>

<div class="row">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Truyện đã hoàn thành</h3>
        </div>
        <div class="panel-body">
            <table class="table">
                <tbody>
                    <?php
                        while($dong = mysql_fetch_array($truyen)){
                    ?>
                    <tr>
                        <td width="70%">
                            <div class="media">
                                <div class="media-left media-middle">
                                    <img class="media-object" src="<?php echo $dong["anhminhhoa"] ?>" alt="...">
                                </div>
                                <div class="media-body">
                                    <a href="index.php?xem=truyen&idtruyen=<?php echo $dong["idtruyen"] ?>">
                                        <p><strong> <?php echo $dong["tentruyen"]?> </strong>
                                        </p>
                                    </a>
                                </div>
                            </div>
                        </td>
                        <td><?php echo $dong["tacgia"]?></td>
                    </tr>
                    <?
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div> <!-- row -->