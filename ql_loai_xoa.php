<?php
include('connect.php');
if(isset($_GET["MaLoai"]))
{
	$key=$_GET["MaLoai"];

}
	$sl="delete from loaisach where MaLoai='".$_GET["MaLoai"]."'";
//if(mysql_query($sl))
if(mysqli_query($connect,$sl))
{
	echo "<script language='javascript'>alert('Xoa thanh cong');";
		echo "location.href='ql_loai.php';</script>";
}
else 
    echo 'fail';


?>
