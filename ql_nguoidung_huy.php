<?php
include('connect.php');
if(isset($_GET["MaND"]))
{
	$key=$_GET["MaND"];

}
	$sl="delete from nguoidung where MaND='".$_GET["MaND"]."'";
//if(mysql_query($sl))
if(mysqli_query($connect,$sl))
{
	echo "<script language='javascript'>alert('Huy tai khoan thanh cong');";
		echo "location.href='ql_nguoidung.php';</script>";
}
else 
    echo 'fail';


?>
