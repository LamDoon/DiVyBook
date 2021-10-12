<!DOCTYPE html>
<html>
    <head>
        <meta charset= "UTF-8">
        <title>Create Account</title>
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
                font-size: 30px;
                color: #333300;
                border-bottom: 3px solid #003300;
                padding: 10px 0;
                margin-bottom: 50px;
                text-align: center;
                float: left;
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
            .btlogin{
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
        </style>
    </head>
    <body>
        <form id="form1" name="form1" method="post" action="dang-ki.php">
            <div class="loginbox">
                <h1>ĐĂNG KÍ TÀI KHOẢN</h1>
                <div class ="textbox clearfix" method="post">
                    <i class="fa fa-user"></i>
                    <input type="text" placeholder="Username" name="username">
                </div>
                <div class="textbox">
                    <i class="fa fa-lock" ></i>
                    <input type ="Password" placeholder="Password" name="password">
                </div>
                <div class="textbox">
                    <i class="fa fa-phone" ></i>
                    <input type ="text" placeholder="SDT" name="sdt">
                </div>
                <div class="textbox">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <input type ="text" placeholder="Address" name="address">
                </div>
                <input type="submit" class="btlogin" value ="Đăng Kí" name="sigin"></br>
            </div>
        </form>

        <?php
        session_start();
        ob_start();
        include('ketnoi.php');
        if (isset($_POST['sigin'])) {
            $username = filter_input(INPUT_POST, 'username');
            $password = filter_input(INPUT_POST, 'password');
            $sdt = filter_input(INPUT_POST, 'sdt');
            $address = filter_input(INPUT_POST, 'address');
            $sl = "INSERT INTO nguoidung(TenND,MatKhau,Sdt,DiaChi) Value('$username','$password','$sdt','$address')";
            $kq = mysqli_query($connect, $sl);
              echo "<script language='javascript'>alert('Dang ki thanh cong');";
                echo "location.href='dang-nhap.php';</script>";
           
        }
        ?>
        <?php
        mysqli_close($connect);
        ?>
    </body>
</html>


<!--         <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
        <html xmlns="http://www.w3.org/1999/xhtml">
            <head>
                <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                <title>Untitled Document</title>
            </head>

            <body>
<?php
include("connect.php");

//if(isset($_GET['idTL'])){
//$sl="select * from theloai where idTL=".$_GET['idTL'];}
//$kq=mysql_query($sl);
//$d=mysql_fetch_array($kq);
//mysqli
//$results = mysqli_query($connect,$sl);
//$d = mysqli_fetch_array($results);
?>
                <form action="" method="post" enctype="multipart/form-data" name="form1">
                    <table align="center" width="400">
                        <tr>
                            <td align="right">
                                Ten The Loai
                            </td>
                            <td>
                                <input type="text" name="TenTL" value="<?php echo $d['TenTL']; ?>" />
                            </td>
                        </tr>
                        <tr>
                            <td align="right">
                                Thu Tu
                            </td>
                            <td>
                                <input type="text" name="ThuTu" value="<?php echo $d['ThuTu']; ?>" />
                            </td>
                        </tr>
                        <tr>
                            <td align="right">
                                An Hien
                            </td>
                            <td>
                                <select name="AnHien">
                                    <option value="0" <?php if ($d['AnHien'] == 0) echo "selected"; ?>>An</option>
                                    <option value="1" <?php if ($d['AnHien'] == 1) echo "selected"; ?>>Hien</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td align="right">icon</td>
                            <td> <img src="image/<?php echo $d['icon'] ?>" width="40" height="40" /></td>

                        </tr>
                        <tr>
                            <td align="right">&nbsp;</td>
                            <td>  <input type="file" name="image" id="image"  /> </td>
                        </tr>
                        <tr>
                            <td align="right">
                                <input type="hidden" name="idTL" value="<?php echo $_GET['idTL']; ?>" />
                                <input type="submit" name="Sua" value="Sua" />
                            </td>
                            <td>
                                <input type="reset" name="Huy" value="Huy" />
                            </td>
                        </tr>
                    </table>
                </form>
<?php
include("connect.php");


// upload hinh anh
if (isset($_FILES["image"]["name"]))
    $icon = $_FILES["image"]["name"];
if (isset($_FILES['image']['tmp_name'])) {
    $anhminhhoa_tmp = $_FILES['image']['tmp_name'];
    // náº¿u thay doi file anh khac thi xoa file da cu di
    if (isset($_GET['idTL'])) {
        $sl = "select icon from theloai where idTL=" . $_GET['idTL'];
    }

    $results = mysqli_query($connect, $sl);
    $d = mysqli_fetch_array($results);
    if ($d['icon'] != $icon) {
        move_uploaded_file($anhminhhoa_tmp, "image/" . $icon);

        unlink('image/' . $d['icon']);
    }
}

//lay gia tri cho tham so
$tam = "";
if (isset($_POST["TenTL"]))
    $theloai = $_POST['TenTL'];
if (isset($_POST["ThuTu"]))
    $thutu = $_POST['ThuTu'];
if (isset($_POST["AnHien"]))
    $an = $_POST['AnHien'];
if (isset($_POST['Sua'])) {
    if (isset($_GET["idTL"])) {
        $key = $_GET["idTL"];
    }

    if ($icon == "") {
        $sl = "update theloai set TenTL='$theloai',ThuTu='$thutu',AnHien='$an' where idTL='$key'";
    } else {
        $sl = "update theloai set TenTL='$theloai',ThuTu='$thutu',AnHien='$an',icon='$icon' where idTL ='$key'";
    }
//$uup=mysql_query($sl);


    if (mysqli_query($connect, $sl)) {
        echo "<script language='javascript'>alert('sua thanh cong');";
        echo "location.href='admin.php';</script>";
    }
}
?>

            </body>
        </html> -->