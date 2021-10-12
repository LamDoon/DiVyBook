
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
            *{
                margin: 0;
                padding: 0;
                transition: all 0.3s;
            }
            #mainnav{
                width: 16%;
                margin: 1%;
                float: left;      }
            #mainnav ul{
                background: #0099CC;
                list-style: none;
                padding: 0px;
                width: 250px;
                text-align: left;
            }

            #mainnav ul li{
              
                width: 100%;
                height: 40px;
                line-height: 40px;
                border-bottom: 1px solid #fff;
            }
            #mainnav ul .thefirst{
                background: #17306E;
            }
            #mainnav ul li a{
                text-decoration: none;
                color: #fff;
                font-weight: bold;
                padding: 0 16px;
                display: block;
            }
            #mainnav li:hover{
                background: #17306E;
            }
           
            .img{
                margin-top: 1%;
                margin-left: 3%;
                width: 63%;
            }
        </style>


        <?php include('ketnoi.php'); ?>
        <?php include('header.php'); ?>

    <body>
        <div class="dieu-huong">
            <a href="trangchu.php">Trang chủ >></a>
            <a href="tro-giup.php">Trợ giúp</a>
        </div>
        <div id="mainnav">
            <ul>
                <li class="thefirst"><a href="#">Hướng dẫn mua hàng</a></li>
                <li class="thefirst"><a href="#">Phương thức thanh toán</a></li>
                 <li><a href="#">Thanh toán bằng tiền mặt</a></li>
                 <li><a href="#">Thẻ ATM Internet Banking</a></li>
                 <li><a href="#">Chuyển tiền qua ngân hàng</a></li>
                 <li class="thefirst"><a href="#">Phương thức vận chuyển</a></li>
                 <li><a href="#">Gửi bưu điện đi liên tỉnh</a></li>
                 <li><a href="#">Chuyển phát nhanh</a></li>
            </ul>
        </div>
        <img class="img" src="image/help.png" width="1000" height="2000" />


    </body>

    <?php include('footer.php'); ?>




</html>