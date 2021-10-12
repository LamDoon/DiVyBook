<?php 

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
<style>
    body{
        margin: 0; /*khoang cach le giua cac html*/
padding: 0; /*khoang cach html va noi dung*/

background-image: url("image/bialogin.jpg");
background-size: cover; /*tu chia kich thuoc*/
color: white;
    }
    .title{
position: absolute; /*dinh vi tri theo cua so trinh duyet*/
top: 50%;
left: 50%;
width: 500px;
height: 400px;
transform: translate(-50%,-50%); /*dich chuyen theo toa do*/

}
    .title h1{
        font-size: 40px;
color: #333300;
border-bottom: 3px solid #003300;
padding: 10px 0;
margin-bottom: 50px;
float: left; 
    }
    
    .btlogin1{
        width: 400px;
     background: none;
     font-size: 20px;
     color: #666633;
     text-align: center;
     margin: 15px 0;
     padding: 12px 0;
     border-bottom-left-radius: 2px solid #336633;
     cursor: pointer;
    }
    .clearfix{
    clear: both; /*ben phai va trai khong duoc float*/
}
  
 .title :hover{
     color: #993333;
 }
    
</style>    
</head>

<body>
    <div class="title">
        <h1>Đăng nhập thành công</h1>
        <div class="login">
             <form action="admin.php">   
                <input type ="submit" class="btlogin1" value ="Tiếp tục"/>
             </form>
            </div>   
              <form action="editpass.php">
    <input type="submit" class="btlogin1" value="Đổi mật khẩu" />
</form>  
        <form action="dang-nhap.php">
    <input type="submit" class="btlogin1" value="Đăng xuất" />
   
</form>
    </div>


</body>
</html>
