<?php
include 'connect.php';
include 'header.php';
?>
<html style="background-color: #EEEEE0;">
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
        width: 23%;   
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
           
</style>

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
                        <img src="imagebanner/bn2.jpg"  width="1100" height="500">
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
    <div class="products">
        <div  class="sp">
            <?php
            $input = $_SESSION['input'];
            /* ====== phân trang cho tìm kiếm====== */
            if (isset($_GET['page'])) {
                $page = $_GET['page'];
            } else {
                $page = 1;
            }

            $limit = 6;
            $start = ($page - 1) * $limit;
            $total_title = mysqli_num_rows(mysqli_query($connect, "SELECT * FROM sach WHERE TenSach like '%" . $input . "%'"));
            $total_page = $total_title / $limit;
            /* ========== */

            $sql = "select * from sach WHERE TenSach like '%" . $input . "%' LIMIT " . $start . ", " . $limit;

            $rs = mysqli_query($connect, $sql);
            if ($row = mysqli_fetch_array($rs) > 0) {
                while ($row = mysqli_fetch_array($rs)) {
                    ?>
                    <div class="item-s"  >
                        <a href="chi-tiet-sach.php?MaSach=<?php echo $row["MaSach"]; ?>" rel="chi-tiet-sach.php?TenND=<?php echo $_SESSION['name']; ?>">
                            <img src="image/<?php echo $row['HinhAnh'] ?>"class="anh-sp"/><br>
                        </a>
                        <a href="chi-tiet-sach.php?MaSach=<?php echo $row["MaSach"]; ?>"> 
                            <h5 class="name-s"><?php echo $row["TenSach"]; ?></h5>
                        </a><br>

                        <h5 class="gia"><?php echo number_format($row["DonGia"]) . " VNĐ"; ?></h5>
                        <h4 class="daban">Đã bán: <?php echo $row["DaBan"]; ?></h4>
                    </div>

                    <?php
                }
            } else
                echo 'Không tìm thấy sách! Vui lòng nhập từ khóa khác.';
        echo '<div class="pht">';

   
   
            for ($i = 1; $i <= $total_page; $i++) {
                echo '<a href="search.php?page=' . $i . '">' . $i . '</a> ';
            }
            echo '</div>';
            ?>
        </div>
    </div>
    
    <div class="top1">
        <a href="#" class="top">Top</a>
    </div>
    <?php mysqli_close($connect); ?>
</div>
</html>

    <?php include('footer.php'); ?>