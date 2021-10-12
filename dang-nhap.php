<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset= "UTF-8">
        <title>login</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            body{
                margin: 0; /*khoang cach le giua cac html*/
                padding: 0; /*khoang cach html va noi dung*/
                background-image: url("image/bgLogin.png");
                background-size: cover; /*tu chia kich thuoc*/
                background-color: lightblue;
            }
            .loginbox{
                position: absolute; /*dinh vi tri theo cua so trinh duyet*/
                top: 50%;
                left: 50%;
                width: 320px;
                height: 400px;
                transform: translate(-50%,-50%); /*dich chuyen theo toa do*/

            }

            .loginbox h1{
                font-size: 40px;
                color: #333300;
                border-bottom: 3px solid #003300;
                padding: 10px 0;
                margin-bottom: 50px;
                text-align: center;
                float: left;
                margin-left: 86px;
            }

            .clearfix{
                clear: both; /*ben phai va trai khong duoc float*/
            }
            .textbox{
                width: 100%;
                border-bottom: 1px solid #336633;
                margin: 10px 0;
                padding: 10px 0;
                font-size: 20px; 
            }
            .textbox i{
                color: #333300;
                font-size: 17px;
            }
            .textbox input{
                background: none;
                margin-left: 10px;
                border: none ;
                outline: none; /*duong vien*/
                color: #333300;
                font-size: 15px;
            }
            .btlogin,.cre{
                width: 320px;
                background: none;
                font-size: 20px;
                color: #666633;
                text-align: center;
                margin: 15px 0;
                padding: 12px 0;
                border-bottom-left-radius: 2px solid #336633;
                cursor: pointer; /*hien thi con tro chuot khi di chuyen vao tphan*/
            }
            .btlogin:hover{ /*do mau khi re chuot vao tphan*/
                background: #333300;}

            .cre:hover{ /*do mau khi re chuot vao tphan*/
                background: #333300;
            }
            .loginbox a{
                color: #333300;
                font-size: 15px;
                text-decoration: none; /*gạch chân*/
                line-height: 20px;
            }
            .loginbox a:hover{
                color: #993333;
            }
            .a1{
               float: right;
               text-decoration: none; 
               font-weight: bold;
            }
            .a1:hover{
                color: #008800;
        </style>
    </head>
    <body>
        <a class="a1" href="login.php">Admin Login</a>
        <form id="form1" name="form1" method="post" action="dang-nhap.php">
            <div class="loginbox">

                <h1>  LOGIN </h1>
                <div class ="textbox clearfix" method="post">
                    <i class="fa fa-user"></i>
                    <input type="text" placeholder="Username" name="username">
                </div>
                <div class="textbox">
                    <i class="fa fa-lock" ></i>
                    <input type ="Password" placeholder="Password" name="password">
                </div>

                <input type="submit" class="btlogin" value ="Sigin" name="sigin"></br>

               
                <input type="submit" class="cre" value ="Create Account!" name="create"></br>
                <?php  $_SESSION['name'] = 'NoUser' ;?>
                 <a href="lost_pass.php">Lost your password.</a>
            </div>
        </form>

        <?php
       
        include('connect.php');
        if (isset($_POST['sigin'])) {
            $_SESSION['name'] = filter_input(INPUT_POST, 'username');
            $username  = filter_input(INPUT_POST, 'username');
            $password = filter_input(INPUT_POST, 'password');
            $sl = "SELECT * FROM nguoidung WHERE TenND='$username' and MatKhau='$password'";
            $kq = mysqli_query($connect, $sl);
           

            if (mysqli_num_rows($kq) > 0) { 
             echo "<script language='javascript'>alert('Dang nhap thanh cong');";
			echo "location.href='trangchu.php';</script>";
   
            } else {
                echo "<script language='javascript'>alert('Dang nhap that bai');";
                echo "location.href='dang-nhap.php';</script>";
            }
        }
        if (isset($_POST['create'])) {
            echo "<script language='javascript'>location.href='dang-ki.php';</script>";
        }
        ?>
        <?php
        mysqli_close($connect);
        ?>
    </body>
</html>



