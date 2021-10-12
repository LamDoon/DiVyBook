<?php include ('connect.php'); ?>
<?php include ('header.php'); ?>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        #form-tt{
            padding: 1%;
            width: 74%;
            margin-top: 2%;
            margin-left: 13%;
            background-color: white;
        }
        .loginbox{
            margin-left: 20%;
            width: 60%;
            height: 500px;
        }
        .textbox{
            width: 100%;
            border-bottom: 1px solid #336633;
            padding: 10px 0;
            font-size: 20px;
        }
        .textbox i{
            color: #333300;
            font-size: 17px;
        }
        .textbox input{
            background: none;
            border: none ;
            outline: none;
            color: #333300;
            font-size: 15px;
            width: 100%;
        }
        .bt_buy{
            float: right;
            width: 35%;
            background: white;
            font-size: 20px;
            color: tomato;
            text-align: center;
            margin: 15px 0;
            padding: 12px 0;
            border: 1.5px solid tomato;
            border-radius: 10px;
            cursor: pointer; /*hien thi con tro chuot khi di chuyen vao tphan*/
        }
        .bt_buy:hover{ /*do mau khi re chuot vao tphan*/
            background: tomato;
            color: white;
        }
        .loginbox h1{
            text-align: center;
        }
    </style>
</head>
<body style="background-color: #eeeee0;">
     <div class="dieu-huong">
            <a href="trangchu.php">Trang chủ >></a>
                      <a href="gio-hang.php">Giỏ hàng>></a>
            <a href="gio-hang-thanhtoan.php">Thanh toán</a>
        </div>
    <form id="form-tt" name="form-tt" method="post" action="gio-hang-thanhtoan.php">
        <div class="loginbox">
            <h1>Thông tin giao / nhận hàng</h1>
            <div class ="textbox clearfix" method="post">
                <i class="fa fa-user"></i>
                <input type="text" value="<?php echo $_SESSION['name']; ?>" name="username">
            </div>
            <div class="textbox">
                <i class="fa fa-phone" ></i>
                <input type ="text" placeholder="SDT" name="sdt">
            </div>
            <div class="textbox">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <input type ="text" placeholder="Address" name="address">
            </div>
            <div class="textbox">
                <i class="fa fa-usd" aria-hidden="true"></i>
                <input type ="text" value="Tổng Thanh Toán:    <?php echo number_format($_SESSION['tg'], 0, ",", ".") . " VNĐ"; ?>" readonly name="">
            </div>
            <input type="submit" class="bt_buy" value ="Đặt Hàng" name="send"></br>
        </div>
    </form>
    <?php
    include 'connect.php';
    if (isset($_POST['send'])) {
        $sdt = filter_input(INPUT_POST, 'sdt');
        $address = filter_input(INPUT_POST, 'address');
        /* lấy ngày hiện tại và tạo một đơn hàng */
        $_SESSION['date'] = date("Y/m/d");

        /* tạo một đơn hàng */
        $sql_creatDH = "insert into donhang(MaND,NgayLap,Sdt,DiaChi,TongTien) value('" . $_SESSION['MaND'] . "','" . $_SESSION['date'] . "','" . $sdt . "','" . $address . "','" . $_SESSION['tg'] . "')";
        if (mysqli_query($connect, $sql_creatDH)) {
            /* lấy MaDH */
            $sql_getMaDH = "select * from donhang where MaND ='" . $_SESSION['MaND'] . "' and NgayLap ='" . $_SESSION['date'] . "' order by MaDH DESC";
            $results2 = mysqli_query($connect, $sql_getMaDH);
            $row = mysqli_fetch_array($results2);
            $_SESSION['MaDH'] = $row['MaDH'];

            /* update MaDH cho chitietdonhang */
            $sql_update_chitiet = " update chitietdonhang set MaDH ='" . $_SESSION['MaDH'] . "', TinhTrang='GIAO' where MaND='" . $_SESSION['MaND'] . "' and MaDH= '0'";
            $results3 = mysqli_query($connect, $sql_update_chitiet);

            /* lấy mã sách */
            $sql_getMaSach = "select * from chitietdonhang where MaDH='" . $_SESSION['MaDH'] . "'";
            $results3 = mysqli_query($connect, $sql_getMaSach);
            $row_ms = mysqli_fetch_array($results3);
            $masach = $row_ms['MaSach'];

            /* cập nhật số lượng đã bán của sách */
            $sql_getSLC = "select *from sach where MaSach= '" . $masach . "'";
            $results4 = mysqli_query($connect, $sql_getSLC);
            $row4 = mysqli_fetch_array($results4);
            $row4['SLuong'] = $row4['SLuong'] - $row_ms['SoLuong'];
            $row4['DaBan'] = $row4['DaBan'] + $row_ms['SoLuong'];
            $sql_update_slgBan = "update sach set SLuong='" . $row4['SLuong'] . "',DaBan= '" . $row4['DaBan'] . "' where MaSach ='" . $masach . "'";
            $results5 = mysqli_query($connect, $sql_update_slgBan);
            echo "<script language='javascript'>alert('Đặt hàng thành công');";
            echo "location.href='gio-hang.php';</script>";
            unset($_SESSION['MaDH']);
        }
    }
    ?>
</body>
<?php include('footer.php'); ?>