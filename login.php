<!DOCTYPE html>
<html>
    <head>
        <meta charset= "UTF-8">
        <title>login</title>
        <link rel ="stylesheet" href ="css_login.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <form id="form1" name="form1" method="post" action="login.php">
        <div class="loginbox">

            <h1>  LOGIN </h1>
            <div class ="textbox clearfix" method="post">
                <i class="fa fa-user"></i>
                <input type="text" placeholder="Adminname" name="adminname">
                
            </div>
            <div class="textbox">
                <i class="fa fa-lock" ></i>
                <input type ="Password" placeholder="Password" name="password">
            </div>
           
            <input type="submit" class="btlogin" value ="Sigin" name="sigin"></br>
            
            <a href="lost_pass.php">Lost your password?</a>
        </div>
        </form>
    
<?php 
session_start();
ob_start();
include('connect.php');
if(isset($_POST['sigin'])){
$username=filter_input(INPUT_POST, 'adminname');
$password=filter_input(INPUT_POST, 'password');
$sl="SELECT * FROM admin WHERE name='$username' and pass='$password'";
$kq=mysqli_query($connect,$sl);

if(mysqli_num_rows($kq)>0)
{ 
echo "<script language='javascript'>alert('Dang nhap thanh cong');";
			echo "location.href='login1.php';</script>";
}
else
{
echo "<script language='javascript'>alert('Dang nhap that bai');";
			echo "location.href='login.php';</script>";
}
}
?>
<?php 
mysqli_close($connect);
?>
</body>
</html>