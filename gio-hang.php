<?php include('ketnoi.php'); ?>
<?php include ('header.php'); ?>
<!DOCTYPE html>
<html >
    <head>
        <title>demo</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <style>
        .big{
            width: 72%;
            margin-left: 14%;
            background-color: white;
            padding: 1%;
            margin-top: 2%;

        }
        .tb{
            text-align: center;
            width: 100%;
        }
        .tieudegh{
            text-align: center;
            font-size: 25px;
            height: 44px;

            font-weight: 800;
            margin-bottom: 1%;
            margin-left: 2.5%
        }
        .thongbao{
            height: 85px;
        }
        .thongbao p{
            text-align: center;color: red;
        }
        .title{
            font-weight: 600;
        }
        .del{
            color: red;
        }
        .anh{
            width:80px;
            height:100px;
            padding: 5px;
        }
        .number{
            width: 40px;
        }
        .text-tong{
            padding: .75rem;
            vertical-align: top;
            width: 504px;
            text-align: right;
            border-top: 1px solid #dee2e6;
            font-weight: bold;
        }
    </style>
    <body style="background-color: #EEEEE0">
        <div class="dieu-huong">
            <a href="trangchu.php">Trang chủ >></a>
            <a href="gio-hang.php">Giỏ hàng</a>
        </div>
        <div class="big">
            <div class="tieudegh">GIỎ HÀNG</div>
            <?php
            include('connect.php');
            $sql_show = "SELECT * FROM chitietdonhang WHERE MaND = '" . $_SESSION['MaND'] . "' and TinhTrang = 'CHUA'";

            $exec = mysqli_query($connect, $sql_show);
            if (mysqli_fetch_array($exec) == NULL) {
                ?>
                <div class="thongbao">
                    <p>Giỏ hàng bạn trống. Bấm <a href="trangchu.php">QUAY LẠI</a> để xem thêm</p>
                </div>
            <?php } else {
                ?>
                <table class="tb"  border="1"  >
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
                    $sql_show = "SELECT * FROM chitietdonhang WHERE MaND = '" . $_SESSION['MaND'] . "' and TinhTrang = 'CHUA'";
                    $exec = mysqli_query($connect, $sql_show);
                    while ($row3 = mysqli_fetch_array($exec)) {
                        $s2 = "SELECT * FROM sach WHERE MaSach = '" . $row3['MaSach'] . "'";
                        $exec2 = mysqli_query($connect, $s2);
                        $row4 = mysqli_fetch_array($exec2);
                        ?>
                        <tr align="center">
                            <td><img src="image/<?php echo $row4['HinhAnh'] ?>"class="anh" /></td>
                            <td>
                                <?php echo $row4['TenSach']; ?>
                            </td>
                            <td>
                                <?php echo number_format($row4['DonGia'], 0, ",", ".") . " VNĐ"; ?>
                            </td>
                            <td>	
                                <input required="" type="text" class="number"   readonly="" id="soluong" name="soluong" value="<?php echo $row3['SoLuong']; ?>" min="1" max="" step="1"> 
                            </td>
                            <td><?php echo number_format($row3['ThanhTien'], 0, ",", ".") . " VNĐ"; ?> </td>
                            <td>
                                <a href="gio-hang-update.php?MaSach=<?php echo $row3['MaSach']; ?>" >Cập nhật</a>
                            </td>
                            <td>
                                <a class="del" href="gio-hang-delete.php?MaSach=<?php echo $row3['MaSach']; ?>" onclick="return confirm('Bạn có muốn xóa sản phẩm khỏi giỏ hàng?');">Xóa</a>
                            </td>
                        </tr>
                        <?php
                    }
                    mysqli_close($connect);
                    ?>
                    <tr align="right" style="height: 50px;">
                        <td colspan="7">
                            <a class="del" href="gio-hang-delete-all.php?MaND=<?php echo $_SESSION['MaND']; ?>" onclick="return confirm('Bạn chắc chắn muốn xóa giỏ hàng?');">Xóa tất cả giỏ hàng</a>
                        </td>
                    </tr>	
                </table>
                <?php
                include('connect.php');
                $sql_tongtien = "select sum(ThanhTien) as tt from chitietdonhang where MaND = '" . $_SESSION['MaND'] . "' and MaDH='0'";
                $rs = mysqli_query($connect, $sql_tongtien);
                $rows = mysqli_fetch_assoc($rs);
                $_SESSION['tg'] = $rows['tt'];
                ?>
                <table class="table">
                    <tr>
                        <td class="text-tong" align="right">Tổng giỏ hàng là: <?php echo number_format($_SESSION['tg'], 0, ",", ".") . " VNĐ"; ?></td>
                    </tr>
                    <tr>
                        <td colspan="5" align="right">
                            <form action="?menu=ThanhToan" method="post">
                                <a href="gio-hang-thanhtoan.php">
                                    <input type="button" class="btn btn-danger" name="ThanhToan" value="Thanh toán"></a>
                            </form>
                        </td>
                    </tr>
                </table>
                <?php
            }
            ?>
        </div>
    </body>
</html>
<?php include ('footer.php'); ?>