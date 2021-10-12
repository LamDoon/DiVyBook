<?php
include('connect.php');
if(isset($_GET["iD"]))
{
	$key=$_GET["iD"];

}
	$sl="delete from quangcao where iD='".$_GET["iD"]."'";
//if(mysql_query($sl))
if(mysqli_query($connect,$sl))
{
	echo "<script language='javascript'>alert('Xoa thanh cong');";
		echo "location.href='ql_quangcao.php';</script>";
}
else 
    echo 'fail';


?>
