<?php
include('connect.php');
if(isset($_GET["MaND"]))
{
	$key=$_GET["MaND"];

}
	$sl="delete from chitietdonhang where MaND='".$_GET["MaND"]."'";
        ECHO $sl;
//if(mysql_query($sl))
if(mysqli_query($connect,$sl))
{
	echo "<script language='javascript'>alert('Đã xóa giỏ hàng của bạn');";
		echo "location.href='gio-hang.php';</script>";
}
else 
    echo 'fail';


?>
