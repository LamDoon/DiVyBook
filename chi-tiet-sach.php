<?php
include('ketnoi.php');

include('header.php');
?>
<html >
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>DiVy Books</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/footer.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            body{
                background-color: #EEEEE0;
            }
            /* Make the image fully responsive */
            .carousel-inner img {
                width: 100%;
                height:330px;
            }
            .itemdetail{
                float: right;
                width: 55%;
            }
            .title{
                margin: 20px 20%;
            }
            .gia {
                color: red;
                margin-top: 0;
            }
            .stt{
                color: darkblue;
                margin-top: 0;
            }
            .tenSach{
                font-size: 40px;
                color: #FF6666;
                margin-bottom: 0; 
               
                width: 100%; 
                pointer-events: none;
                clear: both;

                font-weight: 900;
                text-transform: uppercase; 
                text-align: center;
                animation: colorText 10s infinite;

            }
            @keyframes colorText{
                0%{color:darkblue}
                25%{color:blue}
                50%{color:darkgreen}
                75%{color:green}

            }
            @-moz-keyframes colorText{
                0%{color:darkblue}
                25%{color:blue}
                50%{color:darkgreen}
                75%{color:green}

            }


            .tgia {
                font-size: 30px;
            }
            .group-input{
                display: flex;
                -webkit-box-align: center;
                align-items: center;
                box-sizing: border-box;
            }
            .group-input button{
                border-right: none;
                border-radius: 4px 0px 0px 4px;
                border-width: 1px;
                border-style: solid;
                border-color: rgb(236,236,236);
                border-image: initial;
                text-align: center;
                font-size: 14px;
                outline:none;
                width: 40px;
                height: 30px;
            }
            .group-input input{
                width: 50px;
                border: 1px solid rgb(236,236,236);
                border-image: initial;
                height: 30px;
                font-size: 25px;
            }
            .tenSach:hover{
                color: #006666;
                cursor: pointer;
            }
            .gallery{
                float: left;
                width: 45%;
                margin-top: 3%;
            }
            .ani{
                width: 70%;
                margin-left: 15%;
                animation: colorBackground 1s infinite;
                -webkit-animation: colorBackground 1s infinite;
                -moz-animation: colorBackground 1s infinite;
                -o-animation: colorBackground 1s infinite
            }
            @keyframes colorBackground {
                0% {background-color: #FFFF66;}
                25% {background-color: #66FFFF;}
                50% {background-color: #FFCCCC;}
                75% {background-color: #9AFF9A;}

            }

            @-moz-keyframes colorBackground {
                0% {background-color: #FFFF66;}
                25% {background-color: #66FFFF;}
                50% {background-color: #FFCCCC;}
                75% {background-color: #9AFF9A;}

            }

            .bt{
              
                float: left;
                border: 1.5px solid tomato;
                color: tomato;
                background-color: white;
                border-radius: 21px;
                margin-right:2%;
                margin-top: 3%;
                width: 160px;
                padding: 6px;

            }
            .bt:hover{
                background-color: tomato;
                color: white;
            }
            .gallery img{
                height: 465px;
                width: 97%;
                margin: 5px;
                object-fit: fill;
            }

            .gallery img:hover{
                transform:scale(1.1);
            }
            .detail{
                width: 78%;
                float: left;
                margin-left: 11%;
                margin-top: 1%;
                border: 1px solid white;
                background-color: white;
                height: auto;
                padding-bottom: 1%;
            }
            .label{
                float: left;
                margin-right: 8px;
                font-size: 20px;
            }
        </style>
    </head>
    <body style="background-color: #EEEEE0;">

        <div class="detail" >
            <?php if (isset($_GET['MaSach'])) { ?>
                <div class="dieu-huong">
                    <?php
                    include('connect.php');
                    $masach = $_GET['MaSach'];
                    $sql = "select * from sach where MaSach = '$masach'";
                    $rs = mysqli_query($connect, $sql);
                    $row = mysqli_fetch_assoc($rs);
                    $sql_tenloai = "select * from loaisach where MaLoai = '" . $row['MaLoai'] . "'";
                    $rs_tenloai = mysqli_query($connect, $sql_tenloai);
                    $row_tenloai = mysqli_fetch_array($rs_tenloai);
                    ?>
                    <a href="trangchu.php">Trang chủ >></a>
                    <a href="sp_theo_danhmuc.php?MaLoai=<?php echo $row["MaLoai"]; ?>">Sách <?php echo $row_tenloai["TenLoai"] ?>>></a>
                    <a href="#">Chi tiết sách.</a>
                </div>
                <?php ?>       
                <div class="gallery">
                    <div class="ani">
                        <?php
                        if (isset($_GET['MaSach'])) {
                            include('connect.php');
                            $masach = $_GET['MaSach'];
                            $sql = "select * from sach where MaSach = '$masach'";
                            $rs = mysqli_query($connect, $sql);
                            if ($rs) {
                                while (($row = mysqli_fetch_assoc($rs)) != NULL) {
                                    ?>
                                    <img src="image/<?php echo $row['HinhAnh']; ?>"/>
                                </div>
                            </div>
                            <div class="itemdetail" >
                                <div class="title">
                                    <h4 class="tenSach"><?php echo $row['TenSach']; ?></h4><br>
                                    <?php
                                    $sql1 = "select TenTG from tacgia where MaTG='" . $row['MaTG'] . "'";
                                    $rs1 = mysqli_query($connect, $sql1);
                                    $row1 = mysqli_fetch_assoc($rs1);
                                    ?>
                                    <?php
                                    if ($row["SLuong"] > 0) {
                                        $_SESSION['tinhtrang'] = "Còn Hàng";
                                    } else
                                        $_SESSION['tinhtrang'] = "Bán Hết"
                                        ?>
                                    <a href="#" class="tgia"><?php echo $row1['TenTG']; ?></a><br>
                                    <h6 class="mo_ta">Giới thiệu sản phẩm: <?php echo $row['MoTa']; ?></h6>
                                    <h6 class="stt"> Số lượng trong kho: <?php echo $row['SLuong']; ?></h6>
                                    <h6 class="stt"> Tình Trạng: <?php echo $_SESSION['tinhtrang']; ?></h6>
                                    <h5 class="gia" ><?php echo "Giá: ".$row['DonGia'] . " VNĐ"; ?></h5>
                                    <p>Tiết kiệm: 20.000 VND<br>
                                        Gọi đặt hàng: (028) 2365 1027 hoặc 0723159873<br>
                                        Thông tin & Khuyến mãi<br>
                                        Đổi trả hàng trong vòng 7 ngày<br>
                                        Freeship nội thành Đà Nẵng từ 150.000 VND<br>
                                        Freeship toàn quốc từ 270.000 VND</p>

                                    <form name="buy" action=""  method="post" onkeypress="return event.keyCode != 13;">	
                                        <div class="">
                                            <div class="">
                                                <div class="label" >Số lượng:</div>
                                                <div class="group-input">
                                                    <input name="slg" type="number"  value="1"  min="1" step="1">
                                                </div>
                                                <div class="cart-hol-inner">
                                                    <button type="submit" class="bt" name="add-to-cart">Thêm vào giỏ hàng</button>
                                                    <button type="submit" class="bt" name="buy-now">Mua ngay</button>
                                                    <?php
                                                    if (isset($_POST["buy-now"])) {
                                                        if ($_SESSION['name'] <> "NoUser") {
                                                            $_SESSION['sluong'] = filter_input(INPUT_POST, 'slg');
                                                            if ($_SESSION['sluong'] > $row["SLuong"]) {
                                                                echo "<script language='javascript'>alert('Không đủ số lượng trong kho! Vui lòng chọn lại.');";
                                                                echo "location.href='';</script>";
                                                            } else {
                                                                /* thêm sản phẩm vào chitietdonhang */
                                                                $_SESSION['ThanhTien'] = $row['DonGia'] * $_SESSION['sluong'];
                                                                $sql_addsp = "insert into chitietdonhang (HinhAnh,MaDH,MaND,MaSach,DonGia,SoLuong,ThanhTien,TinhTrang) values( '" . $row['HinhAnh'] . "','0','" . $_SESSION['MaND'] . "','" . $masach . "','" . $row['DonGia'] . "','" . $_SESSION['sluong'] . "','" . $_SESSION['ThanhTien'] . "','CHUA')";
                                                                $results3 = mysqli_query($connect, $sql_addsp);
                                                                echo "<script language='javascript'>;";
                                                                echo "location.href='gio-hang.php';</script>";
                                                            }
                                                        } else if ($_SESSION['name'] = "NoUser") {
                                                            echo "<script language='javascript'>alert('Vui lòng đăng nhập để mua hàng');";
                                                            echo "location.href='dang-nhap.php';</script>";
                                                        }
                                                    }
                                                    ?>
                                                    <?php
                                                    if (isset($_POST["add-to-cart"])) {
                                                        if ($_SESSION['name'] <> "NoUser") {
                                                            $_SESSION['sluong'] = filter_input(INPUT_POST, 'slg');
                                                            if ($_SESSION['sluong'] > $row["SLuong"]) {
                                                                echo "<script language='javascript'>alert('Không đủ số lượng trong kho! Vui lòng chọn lại.');";
                                                                echo "location.href='';</script>";
                                                            } else {
                                                                echo "<script language='javascript'>alert('Đã thêm sản phẩm vào giỏ hàng');";
                                                                echo "location.href='trangchu.php';</script>";

                                                                /* thêm sản phẩm vào chitietdonhang */
                                                                $_SESSION['ThanhTien'] = $row['DonGia'] * $_SESSION['sluong'];
                                                                $sql_addsp = "insert into chitietdonhang (HinhAnh,MaDH,MaND,MaSach,DonGia,SoLuong,ThanhTien,TinhTrang) values( '" . $row['HinhAnh'] . "','0','" . $_SESSION['MaND'] . "','" . $masach . "','" . $row['DonGia'] . "','" . $_SESSION['sluong'] . "','" . $_SESSION['ThanhTien'] . "','CHUA')";
                                                                $results3 = mysqli_query($connect, $sql_addsp);
                                                            }
                                                        } else if ($_SESSION['name'] = "NoUser") {
                                                            echo "<script language='javascript'>alert('Vui lòng đăng nhập để mua hàng');";
                                                            echo "location.href='dang-nhap.php';</script>";
                                                        }
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                        </div>      
                                </div>
                                <?php
                            }
                        }
                    }
                }
                ?>
            </div>
        </div>
    </body>
</html> 
<?php include('footer.php'); ?>