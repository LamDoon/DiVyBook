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
                <p>DiVyBooks.vn l?? nh?? s??ch Tr???c tuy???n, nh?? ph??t h??nh s??ch h??ng ?????u Vi???t Nam: 
                    NXB Tr???, NXB Kim ?????ng, Nh?? Nam,... c??ng v???i nhi???u t??c gi??? n???i ti???ng
                    nh??: Willam David, Nguy???n Nh???t ??nh, T??? H???u...
                    v???i s??? l?????ng ?????u s??ch ????? s??? ???????c c???p nh???t li??n t???c h??ng ng??y. 
                    B???ng vi???c mua s??ch online t???i DiVyBooks, b???n s??? ???????c nh???n nh???ng ??u ????i t???t.</p>
            </div>
            <div class="f2">
                <h2>Quick Menu</h2>
                <ul class="quick">
                    <li><a class="cs" href="#">H?????ng d???n ?????t h??ng</a></li>
                    <li><a class="cs" href="#">Ch??nh s??ch ?????i tr???</a> </li>
                    <li><a class="cs" href="#">Ch????ng tr??nh khuy???n m??i</a></li>
                    <li><a class="cs" href="#">Gi???i ????p</a></li>
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
            <h6>Ng?? L??m ??oon - Hu???nh Th??? Th???o Vy</h6>
        </div>

    </body>
</html>



