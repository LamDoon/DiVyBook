<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel ="stylesheet" href ="css_qli.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                <title>Danh sach Tac Gia</title>
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
                        margin-left:  250px;
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
                    #themtg{
                       margin-left: 10px;
                        height: 40px;
                        margin-top: 25px;
                    }
                    .bt{
                        width: 90px;
                        height: 40px;
                        background: #6699FF;
                        font-size: 20px;
                        color: #0000CC;
                        text-align: center;
                        margin: 15px ;
                        border-bottom-left-radius: 2px solid #336633;
                        cursor: pointer;
                    }
                    .tbthem{
                        position: absolute;
                        transform: translate(-50%,-50%);
                        top: 60%;
                        left: 80%;        
                    }        
                    .titlethem {
                        font-weight: bold;
                        padding-right: 30px;
                        padding-bottom: 20px;
                    }        
                    .txtthem{
                        padding-bottom: 20px;
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
                    <div>     
                        <form method="post" action="" class="clear" enctype="multipart/form-data" >
                            <input type="submit" value="Thêm TG" name="them" id="themtg">
                        </form>
                    </div>                        
                    <?php include('connect.php'); ?>
                    <table class="tb" align="center" border="1" width="500" >
                        <tr align="center"  class="truong" >
                            <td class="title">Mã Tác Giả</td>
                            <td class="title">Tên Tác Giả</td>
                        </tr>
                        <?php
                        $sql = "select * from tacgia";
                        $results = mysqli_query($connect, $sql);
                        while (($rows = mysqli_fetch_assoc($results)) != NULL) {
                            ?>
                            <tr align="center">
                                <td><?php echo $rows['MaTG']; ?></td>
                                <td><?php echo $rows['TenTG']; ?></td>
                            </tr>
                            <?php
                        }
                        mysqli_close($connect);
                        ?>
                    </table>         

                    <?php
                    include('connect.php');
                    if (isset($_POST['them'])) {
                        ?> 
                        <form action="ql_tg_them.php" method="post" enctype="multipart/form-data" name="form1">
                            <table class="tbthem" align="left"  width="1000">
                                <tr >
                                    <td class="titlethem" align="right">Mã Tác Giả</td>
                                    <td class="txtthem"><input type="text" name="MaTG" value="" /></td>
                                </tr>
                                <tr >
                                    <td class="titlethem" align="right">Tên Tác Giả</td>
                                    <td class="txtthem"><input type="text" name="TenTG" value="" /></td>
                                </tr>            
                                <td  align="right">
                                    <input type="submit" class="bt" name="Luu" value="Lưu" />
                                </td>
                            </table>
                        </form>
<?php } ?>           
                </body>
                </html>