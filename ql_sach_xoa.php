<?php
include('connect.php');
if(isset($_GET["MaSach"]))
{
	$key=$_GET["MaSach"];

}
	$sl="delete from sach where MaSach='".$_GET["MaSach"]."'";
//if(mysql_query($sl))
if(mysqli_query($connect,$sl))
{
	echo "<script language='javascript'>alert('Xoa thanh cong');";
		echo "location.href='ql_sach.php';</script>";
}
else 
    echo 'fail';


?>
