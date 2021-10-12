<?php
// Start the session
session_start();
?>
<?php
include('connect.php');
if(isset($_GET["MaSach"]))
{
	$key=$_GET["MaSach"];

}
	$sl="delete from chitietdonhang where MaSach='".$_GET["MaSach"]."' and MaND = '".$_SESSION['MaND']."'";
        

if(mysqli_query($connect,$sl))
{
	echo "<script language='javascript'>alert('Đã xóa sản phẩm');";
		echo "location.href='gio-hang.php';</script>";
}
else 
    echo 'fail';


?>
