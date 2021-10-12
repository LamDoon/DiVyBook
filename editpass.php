<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>EditPassword</title>
        <style>
            body{
                margin: 0; /*khoang cach le giua cac html*/
                padding: 0; /*khoang cach html va noi dung*/
                background-image: url("image/biacapnhat.jpg");
                background-size: cover; /*tu chia kich thuoc*/
                color: while;
            }
            .Title{
                position: absolute; /*dinh vi tri theo cua so trinh duyet*/
                top: 30%;
                left: 50%;
                width: 350px;
                height: 400px;
                transform: translate(-50%,-50%); /*dich chuyen theo toa do*/

            }
            .Title h1{
                font-size: 40px;
                color: #333300;
                border-bottom: 3px solid #003300;
                padding: 10px 0;
                margin-bottom: 50px;
                float: left; 
            }

            .clearfix{
                clear: both; /*ben phai va trai khong duoc float*/
            }
            .label{
                width: 100%;
                font-size: 20px; 
                color: #666633;
            }
            .bottom{
                width: 350px;
                background: none;
                font-size: 20px;
                color: #666633;
                text-align: center;
                margin: 15px 0;
                padding: 12px 0;
                border-bottom-left-radius: 2px solid #336633;
                cursor: pointer;
            }
            .matkhau input{
                background:none ;
                margin-left: 10px;
                border: none ;
                border-bottom: 1px solid #336633;
                outline: none; /*duong vien*/
                color: #333300;
                font-size: 15px;
                width: 330px;
            }
            .bottom :hover{
                background:   #993333;
            }
        </style>    
    </head>

    <body>
        <form  method="post" action="editpass.php">
            <div class="Title">
                <h1>ĐỔI MẬT KHẨU</h1>
                <div class="label clearfix" method="post">
                    <p>Adminname:</p>
                </div>
                <div class="matkhau">
                    <input type ="Text" placeholder="---" name="username"/>
                </div>
                <div class="label ">
                    <p>Mật khẩu cũ:</p>
                </div>
                <div class="matkhau">
                    <input type ="Password" placeholder="********" name="old"/>
                </div>
                <div class="label">
                    <p>Mật khẩu mới:</p>
                </div>
                <div class="matkhau">
                    <input type ="Password" placeholder="********" name="new"/>
                </div>

                <input type ="submit" class="bottom" value ="Lưu thay đổi" name="luu"/>
        </form>

        <form action="login1.php">     
            <input type ="submit" class="bottom"  value ="Thoát" name="thoat" />
        </form> 

        </div>



        <?php
        session_start();
        ob_start();
        include('connect.php');
        if (isset($_POST['luu'])) {
            $admin = filter_input(INPUT_POST, 'username');
            $passcu = filter_input(INPUT_POST, 'old');
            $passmoi = filter_input(INPUT_POST, 'new');
            $sl = "SELECT * FROM admin WHERE name='$admin' and pass='$passcu'";
            $kq = mysqli_query($connect, $sl);
//$row=mysql_fetch_array($kq);
            if (mysqli_num_rows($kq) > 0) {
                $sl = "update admin set pass='$passmoi' where pass='$passcu'";

                if (mysqli_query($connect, $sl)) {

                    echo "<script language='javascript'>alert('Sua thanh cong');";
                    echo "location.href='admin.php';</script>";
                }
            } else {
                echo "<script language='javascript'>alert('Nhap mat khau hoac Adminname sai');";
                echo "location.href='editpass.php';</script>";
            }
        }
        ?>
        <?php
        mysqli_close($connect);
        ?>
    </body>
</html>