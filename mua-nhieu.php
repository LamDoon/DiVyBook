<?php
include('ketnoi.php');
include('header.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>DiVy Books</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/footer.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <style>
            /* Make the image fully responsive */

            .main{ width: 78%;
                   margin-left: auto;
                   margin-right: auto;
                   margin-top: 1%;
            }
            .content{
                width: 100%;
                height: 330px;

                float: left;

            }
            .menu_doc_left{
                float: left;
                width: 29%;
                height: 330px;
                background-color: white;
                overflow:auto;

            }
            .slideshow{
                float: right;
                width: 70%;
            }
            .slideshow .carousel slide{
                width: 68%;
                float: right;
                height: 330px;
            }
            .slideshow .carousel slide .carousel-inner{
                float: right
            }
            .products{
                border: 1px solid grey;
                background-color: white;
                margin-top: 2%;
                float :left;
                width:100%;
                /*                padding-left: 0px;
                                padding-right: opx;
                                display: flex;
                                justify-content: space-around;*/
            }
            .anh-sp{
                object-fit: fill;
                height: 53%;
                width: 80%;
                vertical-align: middle;
                border-style: none;
                margin: 10% 10% 2% 10%;
            }
            .products .sp .item-s .ic {

                float: left;
            }
            .products .sp .item-s .gia {
                float: left;
                width: 100%;
                color: red;

                text-align: center;
            }
            .products .item-s .name-s {
                font-size: 23px;
                margin: 4px 10px;
                color: black;
                height: 58px;
                text-align: center;
            }
            .daban{
                float: left;
                width: 100%;
                text-align: center;
                font-size: 23px;
            }
            /*menudoc*/
            table {
                width: 100%;
            }
            .theloai .tl{background-color: deepskyblue;}
            td, th {
                border: 1px solid gray;
                text-align: left;
                padding: 8px;
            }
            tr:hover { background-color: deepskyblue;}

            .tieude{
                height: 50px;
                float: left;
                width: 100%;
                background-color: darkorange;
                margin-top: 1%;
            }

            .itm{
                margin-top: 20px;
                background-color: lightgrey;
                float: left;
                border: 1px solid lightgrey;
                display: flex;
                flex-wrap: wrap;
                width: 100%;
                justify-content: space-around;
            }
            
            .carousel-inner img {
                width: 100%;
                height:330px;
            }
            .content h5{
                margin-top: 300px;
            }
            .sp {
                display: flex; 
                flex-wrap: wrap; 
                width: 100%; 
                justify-content: space-around;
            }
            .item-s {
                width: 22%;   
                border: 1px solid tomato;
                margin: 30px;
                height: 440px;
            }
            .item-s:hover{
                box-shadow: inset 0 0 10px orange;
            }
            .top {visibility: visible;
                  opacity: 1;
                  border: 1px solid yellow;
                  padding: 7px 18px;
                  background-color: yellow;
                  color: black;
                  border-radius: 8px;
            }
            .top1{
                width: 100%;
                float: left;
                margin-top: 15px;
            }
            /*phan trang*/
            .pht{
                width: 100%;
                text-align: center;
                float: left;
                margin-top: 19px;
                margin-bottom: 19px;

            }
            .pht a{
                border: 1px solid grey;
                padding: 9px;
                margin-right: 4px;
                border-radius: 8px
            }

            .pht a:hover{
                border-color: tomato;
            }
            .qcao{
                width: 24%;
            }
            .qc{
                width: 95%;
                height: 172px;
                margin: 0px 8px;
            }

        </style>
    </head>
    <body style="background-color:#EEEEE0">
        <div class="dieu-huong">
            <a href="trangchu.php">Trang ch??? >></a>
            <a href="mua-nhieu.php">Mua nhi???u</a>
        </div>
        <div class="main">
            <div class="content">
                <div class="menu_doc_left">
                    <?php include('menu_doc.php'); ?>
                </div>
                <div class="slideshow" >
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="image/slides/slide1.png" width="1100" height="500">
                            </div>
                            <div class="carousel-item">
                                <img src="image/slides/slide2.png"  width="1100" height="500">
                            </div>
                            <div class="carousel-item">
                                <img src="image/slides/slide3.png"  width="1100" height="500">
                            </div>
                            <div class="carousel-item">    
                                <?php
                                include ('connect.php');
                                $sql1 = "SELECT * FROM slideshow order by Id";
                                $rs1 = mysqli_query($connect, $sql1);
                                while ($row1 = mysqli_fetch_array($rs1)) {
                                    ?>
                                    <div class="carousel-item active">
                                        <img src="imagebanner/<?php echo $row1['Anh'] ?>" width="1100" height="500">
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                        <!-- Left and right controls -->
                        <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>
                    </div>
                </div>
            </div>
           
            <div class="tieude">
                <div id="times-countd" style=" margin: 4px;">
                    <h4 style="float: left;margin: 7px;color: white;" > Flash Sale: </h4>
                    <div id="demthoigian">
                        <span id="countd" style=" font-size: 27px; margin-top: 20px;font-weight: 600;color: white;" />
                    </div>
                </div>
                <script type='text/javascript'>
                    //<![CDATA[
                    // ?????t ng??y ????? b???t ?????u ?????m ng?????c, ??? ????y l?? 28-12-2016
                    var target_date = new Date("Sep 5, 2020").getTime();

                    // th??m bi???n cho c??c ????n v??? th???i gian
                    var days, hours, minutes, seconds;

                    //?????t id l?? countd
                    var countd = document.getElementById("countd");

                    // c???p nh???t id "countd" m???i 1 gi??y
                    setInterval(function () {

                        // thi???t l???p cho ng??y gi??? hi???n t???i v?? ng??y k???t th??c
                        var current_date = new Date().getTime();
                        var seconds_left = (target_date - current_date) / 1000;

                        // t??nh ng??y, gi???, ph??t v?? gi??y
                        days = parseInt(seconds_left / 86400);
                        seconds_left = seconds_left % 86400;

                        hours = parseInt(seconds_left / 3600);
                        seconds_left = seconds_left % 3600;

                        minutes = parseInt(seconds_left / 60);
                        seconds = parseInt(seconds_left % 60);

                        // thi???t l???p cho bi???n countd hi???n th??? ra ngo??i
                        countd.innerHTML = days + " <span class=\'times\'>:</span> " + hours + " <span class=\'times\'>:</span> "
                                + minutes + " <span class=\'times\'>:</span> " + seconds + " <span class=\'times\'></span>";
                    }, 1000);
                </script>

            </div>


            <div class="products">
                <!--hien thi sp tong quan-->
                <div  class="sp">
                    <?php
                    if (isset($_GET['TenND'])) {
                        $name = $_GET['TenND'];
                        $sl = "select * from nguoidung where TenND='" . $name . "'";
                    }
                    ?>
                    <?php
                    include ('connect.php');
                    $sql = "SELECT * FROM sach order by DaBan DESC limit 9 ";

                    if (isset($_POST['search'])) {
                        $input = filter_input(INPUT_POST, 'input');
                        $sql = "select * from sach WHERE TenSach like '%$input%'";
                    }
                    $rs = mysqli_query($connect, $sql);
                    if ($rs) {
                        while ($row = mysqli_fetch_array($rs)) {
                            ?>
                            <div class="item-s"  >
                                <a href="chi-tiet-sach.php?MaSach=<?php echo $row["MaSach"]; ?>" rel="chi-tiet-sach.php?TenND=<?php echo $_SESSION['name']; ?>">
                                    <img src="image/<?php echo $row['HinhAnh'] ?>"class="anh-sp"/><br>
                                </a>
                                <a href="chi-tiet-sach.php?MaSach=<?php echo $row["MaSach"]; ?>"> 
                                    <h5 class="name-s"><?php echo $row["TenSach"]; ?></h5>
                                </a><br>
                                <h5 class="gia"><?php echo number_format($row["DonGia"]) . " VN??"; ?></h5>
                                <h4 class="daban">???? b??n: <?php echo $row["DaBan"]; ?></h4>
                            </div>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="top1">
                <a href="#" class="top">Top</a>
            </div>
        </div>

        <!--Script-->
        <script src="assets/js/pace.js"></script>
        <script src="assets/bootstrap/js/bootstrap.js"></script>
        <script src="assets/js/ajax.js"></script>
        <script src="assets/js/responsive.js"></script>
        <script src="assets/jquery/jRating.jquery.js"></script>
        <script src="assets/js/icon-mess.js"></script>

    </body>
</html>
<?php include('footer.php'); ?>
           
