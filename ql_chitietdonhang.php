<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Chi Tiet Don Hang</title>
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

                    }

                    .header{
                        margin: -15px;
                        padding : 0px;
                        width: auto;
                        background-color: #3399FF;           
                        font-weight: bold;
                        height: 100px;

                    }
                    .header h1{
                        float: left;
                        height: 0px;
                        padding-top: 20px;
                        margin-left: 30px;
                        font-weight: bold;
                        color: white;
                        font-size: 25px;
                    }

                    .tb {
                        float: left;
                        border-color: #00CCFF;
                        color: #001100;
                        margin-left:  200px;
                        margin-top: 50px;
                    }
                    .tb a{
                        text-decoration: none;
                        color: #330000	;

                    }
                    .tb a:hover{
                        color: #996666;
                    }
                    .title {
                        color: #FFFFCC;
                    }
                    .truong {
                      
                        color: #EEEEEE;
                        background-color: #3B5998;

                    }                   
                    
                    .header a{
                        color: white;
                        text-decoration: none;
                    }
                    .header a:hover{
                        color: #FFCCCC;
                    }
        </style>
    <body>
        <div class ="wrapper">
            <div class = "header">
                <h1><a href="admin.php">TRANG QUẢN TRỊ</a></h1>
            </div>
    </div>
        
        <table class="tb" align="center" border="1" width="900" >
                        <tr align="center"  class="truong" >
                              <td class="title">Hình Ảnh</td>
                             <td class="title">Mã Sách</td>  
                             <td class="title">Tên Sách</td>
                            <td class="title">Đơn Giá</td>
                            <td class="title">Số Lượng</td>
                            <td class="title">Thành Tiền</td>
                           
                        </tr>
        <?php
        include('connect.php');

        if (isset($_GET['MaDH'])) {
            $sl = "select * from chitietdonhang where MaDH='" . $_GET['MaDH'] . "'";
           
             $results = mysqli_query($connect, $sl);
             while (($rows = mysqli_fetch_assoc($results)) != NULL) {
        ?>
            <?php
                                $sql2= "select * from sach WHERE MaSach='".$rows['MaSach']."'";
                                $results2 = mysqli_query($connect,$sql2); 
                                $rows2 = mysqli_fetch_array($results2);
             ?>
                            <tr align="center">
                                <td><img src="image/<?php echo $rows2['HinhAnh'] ?>" width="80" height="100" /></td>
                               <td><?php echo  $rows['MaSach']?></td>
                               <td><?php echo  $rows2['TenSach']?></td>
                                <td><?php echo $rows['DonGia']; ?></td>
                                <td><?php echo $rows['SoLuong']; ?></td>
                                <td><?php echo $rows['ThanhTien'] ?></td>                                
                            </tr> 
    <?php
                        }
        }
                        mysqli_close($connect);
    ?>
                    </table>
    </body>
</html>