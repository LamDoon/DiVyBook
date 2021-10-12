<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel ="stylesheet" href ="css_qli.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                <title>Danh sach Khach Hang thanh vien</title>
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
                          
                    <?php include('connect.php'); ?>
                    <table class="tb" align="center" border="1" width="900" >
                        <tr align="center"  class="truong" >
                            <td class="title">Mã KH </td>
                            <td class="title">Tên TK</td>
                            <td class="title">SDT</td>
                            <td class="title">Địa Chỉ</td>
                            <td class="title">---</td>
                        </tr>
                        <?php
                        $sql = "select * from nguoidung";
                        $results = mysqli_query($connect, $sql);
                        while (($rows = mysqli_fetch_assoc($results)) != NULL) {
                            ?>
                            <tr align="center">
                                <td><?php echo $rows['MaND']; ?></td>
                                <td><?php echo $rows['TenND']; ?></td>
                                <td><?php echo $rows['Sdt']; ?></td>
                                <td><?php echo $rows['DiaChi']; ?></td>
                                 <td>
                <a href="ql_nguoidung_huy.php?MaND=<?php echo $rows['MaND'];?>" onclick="return confirm('Ban co chac chan muon huy tai khoan?');">Hủy TK</a>
            </td>
                            </tr>
                            <?php
                        }
                        mysqli_close($connect);
                        ?>
                    </table>         

                   
                </body>
                </html>