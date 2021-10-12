<?php
// Start the session
session_start();
?>
<!DOCTYPE html >
<html >
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>DiVy Books</title>
        <link rel="stylesheet" href="css/header.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <script scr="http://example.com/foobar/fonts/glyphicons-halflings-regular.woff"></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <style>
            .header-full{
                width: 100%; height: 270px;
                background-color: white;

            }
            .banner{
                width: 100%; height:70px;
            }
            .banner img{
                height: 70px;width: 100%;
            }
            .header-top{
                height: 124px;
            }
            .logo{
                width: 26%;float: left;
            }
            .logo img{
                width: 93%;
                margin-left: 15px;
                height: 122px;
            }
            .form-search{
                float: left;width: 46%;
            }
            .search{
                float: left;
                width: 100%;
                padding: 10px 1px 1px 25px;
                margin-top: 32px;
                margin-bottom: 39px;
            }
            .search input{
                width: 90%;
                padding: 7px;
                border: 2px solid lightslategrey;
                float: left;
                border-radius: 1px;
                margin: 0;
                font-family: inherit;
                font-size: inherit;
                border-radius: 12px;
                line-height: inherit;
                position: relative;
                overflow: visible;
            }
            .search button{
                padding: 0px;
                border-radius: 0px 12px 12px 0px;
                position: absolute;
                border-color: lightslategrey;
                margin-left: -17px;
            }

            .search i{
                float: left;
                padding: 3px;
                font-size: 28px;
                border: 2px solid lightslategrey;
                font-family: 'Material Icons';
                font-weight: normal;
                font-style: normal;
                border-radius: 0px 12px 12px 0px;
                line-height: 1;
                letter-spacing: normal;
                background: lightslategrey;
                text-transform: none;
                /* display: inline-block; */
                white-space: nowrap;
                color: white;
            }

            .right-top{
                width: 27%;
                float: right;
                margin-right: 1%;
                margin-top: 42px;

            }
            .cart{

                width: 84px;
                float: left;
            }
            .btton{
                padding: 7px;
                background-color: lightslategrey;
                color: white;
                width: 100%;
                border: 1px solid black;
                border-radius: 8px;
            }
            .btton:hover {
                background-color: lightsalmon;
            }
            .btton a{
                color: white;
                text-decoration: none;
            }
            .lg-lo{
                float: right;
                padding: 7px;
                width: 28%;
                background-color: lightsalmon;
                text-align: center;
                border: 1px solid black;
                height: 40px;
                width: 100px;
                text-align: center;
            }
            .login{
                width: 96%;
                font-size: 14px;
                font-weight: 500;
                font-size: 15px;
            }

            .login a{
                color: #CCFFCC;
                text-decoration: none;
            }
            .login a:hover{
                color: black;
            }
            .menu{
               background-color: deepskyblue;
    position: relative;
    margin-top: 20px;
    width: 100%;
}
            
            .topnav {
            background-color: deepskyblue;
    overflow: hidden;
    margin-left: 28%;
    position: relative;
            }

            /* Style the links inside the navigation bar */
            .topnav a {
                float: left;
                display: block;
                color: #f2f2f2;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
                font-size: 17px;
            }

            /* Change the color of links on hover */
            .topnav a:hover {
                background-color: #ddd;
                color: black;
            }

            /* Hide the link that should open and close the topnav on small screens */
            .topnav .icon {
                display: none;
            }

            @media screen and (max-width: 1200px) {
                .topnav a:not(:first-child) {display: none;}
                .topnav a.icon {
                    float: right;
                    display: block;
                }
            }

            @media screen and (max-width: 1200px) {
                .topnav.responsive {position: relative; margin-left: 20%;
                }
                .topnav.responsive a.icon {
                    position: absolute;
                    right: 0;
                    top: 0;
                }
                .topnav.responsive a {
                    float: none;
                    display: block;
                    text-align: left;
                }


            }

            </style>
        </head>
        <body>
            <?php
            include 'connect.php';
            ?>
            <div class="header-full" >
                <div class="banner" >
                    <img style="" src="image/banner.png">
                </div>
                <div class="header-top">
                    <div class="logo" >
                        <a href="trangchu.php">
                            <img  class="lg"src="image/slogan.png"><br>    
                        </a>
                    </div>

                    <form method="post" action="" class="form-search" enctype="multipart/form-data">
                        <div class="search" >
                            <input  type="text" name="input"  style="" placeholder="Nhập từ khóa..."  class="input-search" >

                            <button name="search" type="submit" ><i class="material-icons" >search</i>

                                <?php
                                if (isset($_POST['search'])) {

                                    $_SESSION['input'] = filter_input(INPUT_POST, 'input');
                                    echo $input;
                                    ?>
                                    <?php
                                    echo "<script language='javascript'>;";
                                    echo "location.href='search.php?input=" . $_SESSION['input'] . "';</script>";
                                }
                                ?>
                            </button>
                        </div>
                    </form>
                    <div class="right-top">
                        <div class="cart">
                            <button type="submit" class="btton"><a href="gio-hang.php">Giỏ Hàng </a></button>
                        </div>
                        <?php
                        if (isset($_SESSION['name'])) {
                            $_SESSION['name'] = $_SESSION['name'];
                        } else {
                            $_SESSION['name'] = 'NoUser';
                        }
                        ?>
                        <?php
                        /* lấy MaND từ TenND */
                        $sql_maND = "select * from nguoidung where TenND= '" . $_SESSION['name'] . "'";
                        $results = mysqli_query($connect, $sql_maND);
                        $rowMaND = mysqli_fetch_array($results);
                        $_SESSION['MaND'] = $rowMaND['MaND'];
                        if ($_SESSION['name'] <> "NoUser") {
                            ?>
                            <div class="lg-lo">
                                <div class="login">
                                    <a id="login" href="dang-nhap.php">Đăng Xuất</a>
                                </div>
                            </div>
                            <div class="lg-lo" >
                                <div class="login">
                                    <a id="login" href="cap-nhat-user.php"><?php echo $_SESSION['name'] ?></a>
                                </div>
                            </div>
                            <?php
                        } else
                        if ($_SESSION['name'] = "NoUser") {
                            ?>
                            <div class="lg-lo" >
                                <div class="login">
                                    <a id="login" href="dang-ki.php">Đăng Ký</a>
                                </div>
                            </div>
                            <div class="lg-lo">
                                <div class="login">
                                    <a id="login" href="dang-nhap.php">Đăng Nhập</a>
                                </div>
                            </div>
                        <?php } ?>           
                    </div>
                </div>
                <div class="menu">
                    <div class="topnav" id="myTopnav">
                        <a class="go" href="trangchu.php">TRANG CHỦ</a>
                        <a class="go" href="gioi-thieu.php">GIỚI THIỆU</a>
                        <a  class="go" href="mua-nhieu.php">MUA NHIỀU</a>
                        <a class="go" href="lien-he.php">LIÊN HỆ</a>
                        <a class="go" href="tro-giup.php">TRỢ GIÚP</a>
                        <a  href="javascript:void(0);" class="icon" onclick="myFunction()">☰</a>
                        <script>
                            function myFunction() {
                                var x = document.getElementById("myTopnav");
                                if (x.className === "topnav") {
                                    x.className += " responsive";
                                } else {
                                    x.className = "topnav";
                                }
                            }
                        </script>
                    </div>
                </div>
                <br>
            </div>
        </body>
    </html>