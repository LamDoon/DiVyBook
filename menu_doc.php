<?php include ('ketnoi.php');?>
<style>
    .tentl{
        color: black;
    }
    td:hover{
        background-color: lightsalmon;    }
</style>
<div class="theloai">
    <table>
        <tr class="tl">
            <th>THỂ LOẠI</th>
        </tr>
        <?php
        $sql = 'select * from loaisach';
        $rs = mysqli_query($connect, $sql);
        if ($rs) {
            while ($row = mysqli_fetch_row($rs)) {
                ?>
                <tr>
                    <td><a class="tentl" MaLoai="<?php echo "icondm".$row['0']; ?>"href="sp_theo_danhmuc.php?MaLoai=<?php echo $row[0]; ?>"><?php echo "Sách " . $row[1]; ?></td></a>
                <?php
            }
        }
        ?>
        </tr>



    </table>

</div>
