<?php
include('connect.php');
if(isset($_GET["Id"]))
{
	$key=$_GET["Id"];

}
	$sl="delete from slideshow where Id='".$_GET["Id"]."'";
//if(mysql_query($sl))
if(mysqli_query($connect,$sl))
{
	echo "<script language='javascript'>alert('Xoa thanh cong');";
		echo "location.href='ql_slideshow.php';</script>";
}
else 
    echo 'fail';


?>
