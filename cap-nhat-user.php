<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .loginbox{
           margin-left: 22%;
    /* margin-top: 30px; */
    width: 56%;
        }
        .textbox{
            width: 100%;
            border-bottom: 1px solid #336633;
            margin: 10px 0;
            padding: 10px 0;
            font-size: 30px;
        }
        .textbox i{
            color: #333300;
            font-size: 17px;
        }
        .textbox input{
            background: none;
            margin-left: 10px;
            border: none ;
            outline: none; /*duong vien*/
            color: tomato;
            font-size: 15px;
            width: 100%;
        }
        .bt_update{
            float: right;
            width: 35%;
            background: none;
            font-size: 20px;
            color: #666633;
            text-align: center;
            margin: 15px 0;
            padding: 12px 0;
            border: 2px solid tomato;
            cursor: pointer; /*hien thi con tro chuot khi di chuyen vao tphan*/
        }
        .bt_update:hover{ /*do mau khi re chuot vao tphan*/
            background: lightsalmon;
        }
        .loginbox h1{
            text-align: center;
        }
        #form-tt{
            width: 70%;
    margin-left: 15%;
    background-color: white;
    height: 470px;
        }

    </style>
</head>

<?php include ('connect.php'); ?>
<?php include ('header.php'); ?>
<?php
$sql_show = "select *from nguoidung where MaND='" . $_SESSION['MaND'] . "'";
$result = mysqli_query($connect, $sql_show);
while (($row = mysqli_fetch_assoc($result)) != NULL) {
    ?>
<body style="background-color: #EEEEE0;">
    <div class="dieu-huong">
        <a href="trangchu.php">Trang chủ >></a>
        <a href="cap-nhat-user.php">Cập nhật tài khoản</a>
    </div>
    <form id="form-tt" name="form-tt" method="post" action="cap-nhat-user.php">
        <div class="loginbox">
            <h1>Thông tin cá nhân</h1>
            <div class ="textbox clearfix" method="post">
                <i class="fa fa-user"></i>
                <input type="text" value="<?php echo $_SESSION['name']; ?>" name="username">
            </div>
            <div class="textbox">
                <i class="fa fa-phone" ></i>
                <input type ="text" placeholder="SDT" name="sdt" value="<?php echo $row['Sdt']; ?>">
            </div>
            <div class="textbox">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <input type ="text" placeholder="Address" name="address" value="<?php echo $row['DiaChi']; ?>">
            </div>
            <div class="textbox">
                <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                <input type ="password" placeholder="Password" value="<?php echo $row['MatKhau']; ?>"  name="pass">
            </div>
            <input type="submit" class="bt_update" value ="Cập Nhật" name="update"></br>
        </div>
    </form>
    <?php
    include 'connect.php';
    if (isset($_POST['update'])) {
        $name = filter_input(INPUT_POST, 'username');

        $sdt = filter_input(INPUT_POST, 'sdt');
        $address = filter_input(INPUT_POST, 'address');
        $pass = filter_input(INPUT_POST, 'pass');
        $sql = "update nguoidung set TenND='" . $name . "',Sdt='" . $sdt . "',DiaChi='" . $address . "',MatKhau='" . $pass . "' where MaND='" . $_SESSION['MaND'] . "'";
        $rs = mysqli_query($connect, $sql);
        echo "<script language='javascript'>alert('Cập nhật thành công! Vui lòng Đăng nhập để tiếp tục');";
        echo "location.href='dang-nhap.php';</script>";
    }
}
?>
</body>
<?php include('footer.php'); ?>