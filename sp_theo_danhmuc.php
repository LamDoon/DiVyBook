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

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <style>
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
            /*----*/


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
    <body style=" background-color: #EEEEE0">
  <div class="dieu-huong">
    <?php
                    include ('connect.php');
                    $madanhmuc = $_GET['MaLoai'];
                    $sql_getMaLoai = "SELECT * FROM sach WHERE MaLoai = '" . $madanhmuc . "'";
                    $rs_getMaLoai = mysqli_query($connect, $sql_getMaLoai);
                    $row_getMaLoai = mysqli_fetch_array($rs_getMaLoai);
                    $sql_tenloai = "select * from loaisach where MaLoai = '".$row_getMaLoai['MaLoai']."'"; 
                    $rs_tenloai = mysqli_query($connect, $sql_tenloai);
                    $row_tenloai = mysqli_fetch_array($rs_tenloai);        
                            ?>
            <a href="trangchu.php">Trang chủ >></a>
            <a href="sp_theo_danhmuc.php?MaLoai=<?php echo $madanhmuc ?>">Sách <?php echo $row_tenloai['TenLoai']?></a>
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
            <div class="itm">
                <?php
                include ('connect.php');
                $sql1 = "SELECT * FROM quangcao order by iD";
                $rs1 = mysqli_query($connect, $sql1);
                while ($row1 = mysqli_fetch_array($rs1)) {
                    ?>
                    <div class="qcao">
                        <a href="qc.php">  <img class="qc" src="image/<?php echo $row1['Anhqc'] ?>" ></a>
                    </div>

                <?php } ?>
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
                    // đặt ngày để bắt đầu đếm ngược, ở đây là 28-12-2016
                    var target_date = new Date("Sep 5, 2020").getTime();

                    // thêm biến cho các đơn vị thời gian
                    var days, hours, minutes, seconds;

                    //đặt id là countd
                    var countd = document.getElementById("countd");

                    // cập nhật id "countd" mỗi 1 giây
                    setInterval(function () {

                        // thiết lập cho ngày giờ hiện tại và ngày kết thúc
                        var current_date = new Date().getTime();
                        var seconds_left = (target_date - current_date) / 1000;

                        // tính ngày, giờ, phút và giây
                        days = parseInt(seconds_left / 86400);
                        seconds_left = seconds_left % 86400;

                        hours = parseInt(seconds_left / 3600);
                        seconds_left = seconds_left % 3600;

                        minutes = parseInt(seconds_left / 60);
                        seconds = parseInt(seconds_left % 60);

                        // thiết lập cho biến countd hiển thị ra ngoài
                        countd.innerHTML = days + " <span class=\'times\'>:</span> " + hours + " <span class=\'times\'>:</span> "
                                + minutes + " <span class=\'times\'>:</span> " + seconds + " <span class=\'times\'></span>";
                    }, 1000);
                </script>

            </div>
            <div class="products">
                <!--hien thi sp tong quan-->

                <!--hien thi sach theo loai-->
                <div class="sp">
                    <?php
                    include ('connect.php');
                    $madanhmuc = $_GET['MaLoai'];
                    $sql = "SELECT * FROM sach WHERE MaLoai = '" . $madanhmuc . "'";
                   
                    $rs = mysqli_query($connect, $sql);
                    if ($rs) {
                        while ($row = mysqli_fetch_array($rs)) {
                            ?>
                            <div class="item-s"  >
                                <a href="chi-tiet-sach.php?MaSach=<?php echo $row["MaSach"]; ?>" rel="chi-tiet-sach.php?TenND=<?php echo $_SESSION['name']; ?>">
                                    <img src="image/<?php echo $row['HinhAnh'] ?>"class="anh-sp"/><br>
                                </a>
                                <a href="chi-tiet-sach.php?MaSach=<?php echo $row["MaSach"]; ?>"> 
                                    <h5 class="name-s"><?php echo $row["TenSach"]; ?></h5></a><br>
                                <h5 class="gia"><?php echo number_format($row["DonGia"]) . " VNĐ"; ?></h5>
                                <h4 class="daban">Đã bán: <?php echo $row["DaBan"]; ?></h4>
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
       <script src="assets/js/pace.js"></script>
        <script src="assets/bootstrap/js/bootstrap.js"></script>
        <script src="assets/js/ajax.js"></script>
        <script src="assets/js/responsive.js"></script>
        <script src="assets/jquery/jRating.jquery.js"></script>
        <script src="assets/js/icon-mess.js"></script>
    </body>
</html>
<?php include('footer.php'); ?>

