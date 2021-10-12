<?php //ob_start();
	    
    include('connect.php');
	$manxb = $_POST['MaNXB'];
	$tennxb = $_POST['TenNXB'];
	
	$sl = "insert into nhaxuatban (MaNXB,TenNXB) "
                . "Value('$manxb','$tennxb')";

	if(mysqli_query($connect,$sl))
	{
		echo "<script language='javascript'>alert('Thêm vào danh sách thành công!');";
		echo "location.href='ql_nxb.php';</script>";
	}
	else
	{
		echo 'Lỗi: ',mysqli_error();
	}

?>
