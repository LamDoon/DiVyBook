<?php include('ketnoi.php'); ?>
<?php include ('header.php'); ?>

<!DOCTYPE html>
<html>
    <head>
        <title>demo</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>

            .tong{
                width: 70%;
                margin-left: 15%;
                background-color: white;
                padding: 1%;
                margin-top: 1%;
            }
            .tite{
                text-align: center;
                background-color: red;
                font-size: 25px;
                height: 44px;

                margin-bottom: 1%;
                width: 100%;
            }
            .tbcn{
                text-align: center;
                width: 100%;
            }
            .title{
                font-weight: 500;
            }
            .minus{
                border: 1.5px solid tomato;
                width: 26px;
                border-radius: 6px;
                background-color: white;
                font-weight: 800;
            }
            .minus:hover{
                background-color: tomato;
            }
            .plus{
                border: 1.5px solid tomato;
                width: 26px;
                border-radius: 6px;
                background-color: white;
                font-weight: 800;
            }
            .plus:hover{
                background-color: tomato;
            }
            .number{
                width: 71px;
                margin-top: 2px;
                border: 1.5px solid tomato;
                border-radius: 5px;
            }
            .bt{
                border: 1.5px solid tomato;
                border-radius: 9px;
                background-color: white;
            }
        </style>   
    </head>
    <body style=" background-color: #eeeee0;" >
        <div class="tong">
            <div class="tite">CẬP NHẬT SẢN PHẨM</div>
            <?php
            include('connect.php');
            ?>
            <table class="tbcn" border="1">
                <tr align="center"  class="truong" >
                    <td class="title">Hình Ảnh</td>
                    <td class="title">Tên Sản Phẩm</td>
                    <td class="title">Đơn Giá</td>
                    <td class="title">Số Lượng</td>
                    <td class="title">Thành Tiền</td>
                    <td colspan="2" class="title">Thao Tác</td>
                </tr>
                <?php
                include('connect.php');
                if (isset($_GET['MaSach'])) {
                    $sql_show = "SELECT * FROM chitietdonhang WHERE MaSach = '" . $_GET['MaSach'] . "'";
                    $exec = mysqli_query($connect, $sql_show);
                    if ($row3 = mysqli_fetch_array($exec)) {
                        $s2 = "SELECT * FROM sach WHERE MaSach = '" . $row3['MaSach'] . "'";
                        $exec2 = mysqli_query($connect, $s2);
                        $row4 = mysqli_fetch_array($exec2);
                        ?>
                        <tr align="center">          
                            <td><img src="image/<?php echo $row4['HinhAnh'] ?>" width="80" height="100" style="    padding: 5px;" /></td>
                            <td>
                                <?php echo $row4['TenSach']; ?>
                            </td>
                            <td>
                                <?php echo number_format($row4['DonGia'], 0, ",", ".") . " VNĐ"; ?>
                            </td>            
                        <div class="form-order">
                            <script>
                                function minus() {
                                    var soluong = document.getElementById("soluong");
                                    var gia = document.getElementById("gia").value;
                                    var thanhtien = document.getElementById("thanhtien");
                                    if (soluong.value > 1)
                                        soluong.value--;
                                    thanhtien.value = (soluong.value * gia).toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1') + " VNĐ";
                                }
                                function plus() {
                                    var soluong = document.getElementById("soluong");
                                    var gia = document.getElementById("gia").value;
                                    var thanhtien = document.getElementById("thanhtien");
                                    soluong.value++;
                                    thanhtien.value = (soluong.value * gia).toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1') + " VNĐ";
                                }
                            </script> 
                            <td>	                   
                                <button class="minus" onclick="minus();">-</button> 
                                <button onclick="plus();" class="plus">+</button>  
                                <form action="" method="POST">
                                    <div>
                                        <input required="" type="text" class="number"  readonly="" id="soluong" name="soluong" value="<?php echo $row3['SoLuong']; ?>" min="1" max="" step="1"> 
                                    </div>
                            </td>
                            <div>
                                <td><input type="text" value="<?php echo number_format($row3['ThanhTien'], 0, ",", ".") . " VNĐ"; ?>" id="thanhtien" readonly="" name="thanhtien"> </td>
                                <input type="hidden" value="<?php echo $row4['DonGia']; ?>" name="gia" id="gia">
                            </div>
                        </div>
                        <td>
                            <input type="submit" class="bt" name="Sua" value="Lưu" />
                        </td>
                        <td>
                            <a href="gio-hang-delete.php?MaSach=<?php echo $row3['MaSach']; ?>" onclick="return confirm('Ban co chac chan muon xoa khong?');">Xóa</a>
                        </td>
                        </tr>
                        </form>  
                        <tr align="right" style="height: 50px;">
                            <td colspan="7">
                                <a href="gio-hang.php"style="color: red;">Quay lại giỏ hàng</a>
                            </td>
                        </tr>	
                    </table>
                    <?php
                }
                ?>
                <?php
                include 'connect.php';
                if (isset($_POST['Sua'])) {
                    $_SESSION['sluong'] = $_POST['soluong'];
                     if ($_SESSION['sluong'] > $row4["SLuong"])
                          {
                              echo "<script language='javascript'>alert('Không đủ số lượng trong kho! Vui lòng chọn lại.');";
                              echo "location.href='';</script>";
                           }else {
                    $thanhtien = filter_input(INPUT_POST, 'thanhtien');
                    $sql_updateSl = "update chitietdonhang set SoLuong ='" . $_SESSION['sluong'] . "',ThanhTien = '" . $thanhtien . "' where MaND = '" . $_SESSION['MaND'] . "' and MaDH = '0' and MaSach = '" . $_GET['MaSach'] . "'";

                    if (mysqli_query($connect, $sql_updateSl)) {
                        //  echo $sql_updateSl;
                        echo "<script language='javascript'>alert('Cập nhật thành công');";
                        echo "location.href='gio-hang.php';</script>";
                    }
                } }
                ?>

            <?php }
            ?>
        </div>
    </body>
</html>
<?php include ('footer.php'); ?>