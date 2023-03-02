<?php
    $all=$News->count(['sh'=>1]);
    $div=3;
    $pages=ceil($all/$div);
    $now=$_GET['p']??1;
    $start=($now-1)*$div;

    $rows=$News->all(" limit $start,$div");
?>
<form action="./api/edit.php" method='post'>
    <table>
        <tr>
            <td>編號</td>
            <td>標題</td>
            <td>顯示</td>
            <td>刪除</td>
        </tr>
        <?php
        foreach($rows as $key=>$row){
            ?>
            <tr>
                <td><?=$key+1;?></td>
                <td><?=$row['title'];?></td>
                <td>
                    <input type="checkbox" name="sh[]" id="" value='<?=$row['id'];?>' <?=($row['sh']==1)?'checked':'';?>>
                </td>
                <td>
                    <input type="checkbox" name="del[]" id="" value='<?=$row['id'];?>'>
                    <input type="hidden" name="id[]" value='<?=$row['id'];?>'>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
</form>