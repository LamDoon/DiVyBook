<!DOCTYPE html >
<html >
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>DiVy Books</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <script scr="http://example.com/foobar/fonts/glyphicons-halflings-regular.woff"></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <style>
            .ft-tong{
                margin-left:0px;
                margin-right:0px;
                width: 100%;
                height: 300px;
                float: left;

                margin-top: 20px;
                background: gray;

                padding-top:20px;
                color: black;
            }
            .f3 {
                width: 30%;
                height: 220px;
                float: right;
                padding-left: 22px;
            }.f1{
                text-align: justify;
                width: 35%;
                padding-left: 6%;
                float: left;
            }
            .f2 {
                /* padding-left: 29px; */
                width: 27%;
                float: left;
                height: 220px;
                padding-left: 9%;
            }
            .title .link{

                position: absolute;

                right: 8px;

                top: 50%;

                transform: translateY(-50%);
            }
            .f3 #connect .link ul{
                list-style-type: none;
            }

            .f3 #connect .link ul li{
                display: inline;
            }
            .f3 #connect .link{
                float:left;
                margin-top:8px;
                margin-left:20px;
            }
            .f3 .content h3{
                float:left;
            }

            .quick {
                float: left;
                padding: 0;
                margin: 0px 20px 0px 0px;
            }

            .quick li {
                list-style: none;
            }

            .link i{
                color: white;
                margin-top: 11px;
                margin-left: 6PX;
            }
            .clear {
                float: left;
                width: 100%;}
            .footer-btm-bar {
                margin-top: 30px;
                margin-bottom: 30px;
                text-align: center;
            }
            .author{
                height: 30px;
                width: 100%;
                text-align: center;
                background-color: darkred;
                color: white;
                float: left;
            }
            .cs{
                color: black;
            }
            .f1 p{
                overflow: hidden;
            }
        </style>

    </head>
    <body>
        <?php
        include 'ketnoi.php';
        ?>
        <div class="ft-tong">
            <div class="f1">
                <h2>About Us</h2>
                <p>DiVyBooks.vn là nhà sách Trực tuyến, nhà phát hành sách hàng đầu Việt Nam: 
                    NXB Trẻ, NXB Kim Đồng, Nhã Nam,... cùng với nhiều tác giả nổi tiếng
                    như: Willam David, Nguyễn Nhật Ánh, Tố Hữu...
                    với số lượng đầu sách đồ sộ được cập nhật liên tục hàng ngày. 
                    Bằng việc mua sách online tại DiVyBooks, bạn sẽ được nhận những ưu đãi tốt.</p>
            </div>
            <div class="f2">
                <h2>Quick Menu</h2>
                <ul class="quick">
                    <li><a class="cs" href="#">Hướng dẫn đặt hàng</a></li>
                    <li><a class="cs" href="#">Chính sách đổi trả</a> </li>
                    <li><a class="cs" href="#">Chương trình khuyến mãi</a></li>
                    <li><a class="cs" href="#">Giải đáp</a></li>
                </ul>

            </div>
            <div class="f3">
                <div id="subscribe">
                    <h2>Subscribe</h2>
                    <form class="clear" action="https://www.google.com/search" method="GET" target="_blank">
                        <input type="text" name="q" placeholder="">
                        <input type="submit" value="Subscribe">
                    </form>
                </div>
                <div id="connect">
                    <h3>Connect with us:</h3>
                    <div class="link">
                        <i class="fa fa-twitter-square"></i>
                        <i class="fa fa-facebook-square"></i>
                        <i class="fa fa-youtube-square yt"></i>
                        <i class="fa fa-instagram in"></i>
                    </div>
                </div>
            </div>

        </div>
        <div class="author">
            <h6>Ngô Lâm Đoon - Huỳnh Thị Thảo Vy</h6>
        </div>

    </body>
</html>



