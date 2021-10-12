<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Cap nhat Sach</title>
    </head>
<style>
        body{
            font-family: arial;
            background-image: url("image/biacapnhat.jpg");
            background-size: cover; /*tu chia kich thuoc*/

        }
        .wrapper{
            width: 100% ;
            margin: 0px ;
            height: auto;
            margin-bottom: 20px;
            
        }
        .logo{
            float: left;
        }
       
         .header{
           margin: -15px;
            padding : 0px;
            width: auto;
            background-color: #3399FF;
           
            font-weight: bold;
            height: 100px;
            font-size: 15px;
              }
        .header h1{
           float: left;
    height: 0px;
   
    margin-left: 30px;
    font-weight: bold;
    color: white;
        }
        .tb{
            position: absolute;
           transform: translate(-50%,-50%);
          top: 70%;
            left: 50%;
        
           
        }
         .title {
            font-weight: bold;
            padding-right: 30px;
            padding-bottom: 20px;
            
           
        }
        .txt{
            padding-bottom: 20px;
        }
         .bt{
            width: 95px;
            height: 40px;
     background: #6699FF;
     font-size: 18px;
     color: #0000CC;
     text-align: center;
     margin: 15px ;
   
   border-bottom-left-radius: 2px solid #336633;
     cursor: pointer;
        }
        </style>
    <body>
        <div class ="wrapper">
            <div class = "header">
               <h1>TRANG QUẢN TRỊ</h1>
            </div>
    </div>
        <?php
        include('connect.php');

        if (isset($_GET['MaSach'])) {
            $sl = "select * from sach where MaSach='" . $_GET['MaSach'] . "'";
        }
        $results = mysqli_query($connect, $sl);
        $d = mysqli_fetch_array($results);
        ?>
        <form action="" method="post" enctype="multipart/form-data" name="form1">
            <table class="tb" align="left" width="1000">
                <tr>
                    <td class="title" align="right">Mã Sách</td>
                    <td class="txt">
                        <input type="text" name="MaSach" value="<?php echo $d['MaSach']; ?>" />
                    </td>
                </tr>
                <tr>
                    <td class="title" align="right">Tên Sách</td>
                    <td class="txt">
                        <input type="text" name="TenSach" value="<?php echo $d['TenSach']; ?>" />
                    </td>
                </tr>
                <tr>
                    <td class="title" align="right">SLuongCon</td>
                    <td class="txt">
                        <input type="text" name="SLuong" value="<?php echo $d['SLuong']; ?>" />
                    </td>
                </tr>
                <tr>
                    <td class="title" align="right">Đơn Giá</td>
                    <td class="txt">
                        <input type="text" name="DonGia" value="<?php echo $d['DonGia']; ?>" />
                    </td>
                </tr>
                <tr>
                    <td class="title" align="right">Mô Tả</td>
                    <td class="txt">
                        <input type="text" name="MoTa" value="<?php echo $d['MoTa']; ?>" />
                    </td>
                </tr>
                <tr>
                    <td class="title" align="right">Mã Loại</td>
                    <td class="txt">
                        <input type="text" name="MaLoai" value="<?php echo $d['MaLoai']; ?>" />
                    </td>
                </tr>
                <tr>
                    <td class="title" align="right">Mã NXB</td>
                    <td class="txt">
                        <input type="text" name="MaNXB" value="<?php echo $d['MaNXB']; ?>" />
                    </td>
                </tr>
                <tr>
                    <td class="title" align="right">Mã TG</td>
                    <td class="txt">
                        <input  type="text" name="MaTG" value="<?php echo $d['MaTG']; ?>" />
                    </td>
                </tr>
                <tr>
                    <td class="title" align="right">Hình Ảnh Mô Tả</td>
                    <td> <img src="image/<?php echo $d['HinhAnh'] ?>" width="150" height="200" /></td>

                </tr>
                <tr>
                    <td align="right">&nbsp;</td>
                    <td>  <input type="file" name="image" id="image"  /> </td>
                </tr>
                <tr>
                    <td align="right">
                        <input type="hidden"  name="MaSach" value="<?php echo $_GET['MaSach']; ?>" />
                        <input type="submit" class="bt" name="Sua" value="Cập nhật" />
                    </td>
                    <td>
                        <input type="reset" class="bt"  name="Huy" value="Hủy" />
                    </td>
                </tr>
            </table>
        </form>
        <?php
        include('connect.php');


// upload hinh anh
        if (isset($_FILES["image"]["name"]))
            $icon = $_FILES["image"]["name"];
        if (isset($_FILES['image']['tmp_name'])) {
            $anhminhhoa_tmp = $_FILES['image']['tmp_name'];
            // nếu thay doi file anh khac thi xoa file da cu di
            if (isset($_GET['HinhAnh'])) {
                $sl = "select HinhAnh from sach where MaSach='" . $_GET['MaSach'] . "'";
            }

            $results = mysqli_query($connect, $sl);
            $d = mysqli_fetch_array($results);
            if ($d['HinhAnh'] != $icon) {
                move_uploaded_file($anhminhhoa_tmp, "image/" . $icon);

                unlink('image/' . $d['HinhAnh']);
            }
        }

        //lay gia tri cho tham so
        $tam = "";
        if (isset($_POST["MaSach"]))
            $masach = $_POST['MaSach'];
        if (isset($_POST["TenSach"]))
            $tensach = $_POST['TenSach'];
        if (isset($_POST["SLuong"]))
            $soluong = $_POST['SLuong'];
        if (isset($_POST["DonGia"]))
            $dongia = $_POST['DonGia'];
        if (isset($_POST["MoTa"]))
            $mota = $_POST['MoTa'];
        if (isset($_POST["MaLoai"]))
            $maloai = $_POST['MaLoai'];
        if (isset($_POST["MaNXB"]))
            $manxb = $_POST['MaNXB'];
        if (isset($_POST["MaTG"]))
            $matg = $_POST['MaTG'];

        if (isset($_POST['Sua'])) {
            if (isset($_GET["MaSach"])) {
                $key = $_GET["MaSach"];
            }

            if ($icon == "") {
                $sl = "update sach set MaSach='$masach',TenSach='$tensach',SLuong='$soluong',DonGia='$dongia',MoTa='$mota',MaLoai='$maloai',MaNXB='$manxb',MaTG='$matg'"
                        . " where MaSach='$key'";
            } else {
                $sl = "update sach set MaSach='$masach',TenSach='$tensach',SLuong='$soluong',DonGia='$dongia',MoTa='$mota',MaLoai='$maloai',MaNXB='$manxb',MaTG='$matg',HinhAnh='$icon'"
                        . " where MaSach='$key'";
            }
          if (mysqli_query($connect, $sl)) {
                echo "<script language='javascript'>alert('Cập nhật thành công');";
                echo "location.href='ql_sach.php';</script>";
            }
        }
        ?>

    </body>
</html>