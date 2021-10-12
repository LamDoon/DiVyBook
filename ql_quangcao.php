<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel ="stylesheet" href ="css_qli.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                <title>Danh sach quảng cáo</title>
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
                        margin-left:  150px;
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
                    <table class="tb" align="center" border="1" width="1000" >
                        <tr align="center"  class="truong" >
                            <td class="title">ID</td>
                            <td class="title">Hình Ảnh</td>
                            <td class="title" >Link</td>
                             <td class="title">Hãng QC</td>
                             <td class="title">Ngày QC</td>
                            <td class="title">Thời gian (ngày)</td>
                            <td class="title">Thu Lợi</td>
                            <td class="title"><a class="them" href="ql_quangcao_them.php">Thêm QC</a></td>
                        </tr>
                        <?php
                        $sql = "select * from quangcao order by iD desc";
                        $results = mysqli_query($connect, $sql);
                        while (($rows = mysqli_fetch_assoc($results)) != NULL) {
                            ?>
                            <tr align="center">
                                <td><?php echo $rows['iD']; ?></td>
                                <td><img src="image/<?php echo $rows['Anhqc'] ?>" width="200" height="200" /></td>
                                <td width="350" height="100"><?php echo $rows['Link']; ?></td>
                                <td><?php echo $rows['Hang']; ?></td>
                                 <td><?php echo $rows['NgayQC']; ?></td>
                                <td><?php echo $rows['ThoiGian']; ?></td>
                                <td><?php echo $rows['ThuLoi']; ?></td>
                                <td>
                                    <a href="ql_quangcao_xoa.php?iD=<?php echo $rows['iD']; ?>">Xóa</a>
                                </td>
                            </tr>
                            <?php
                        }
                        mysqli_close($connect);
                        ?>
                    </table>         


                </body>
                </html>