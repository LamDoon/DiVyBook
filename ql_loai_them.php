<?php //ob_start();
	    
    include('connect.php');
	$maloai = $_POST['MaLoai'];
	$tenloai = $_POST['TenLoai'];
	
	$sl = "insert into loaisach (MaLoai,TenLoai) "
                . "Value('$maloai','$tenloai')";

	if(mysqli_query($connect,$sl))
	{
		echo "<script language='javascript'>alert('Thêm vào danh sách thành công!');";
		echo "location.href='ql_loai.php';</script>";
	}
	else
	{
		echo 'Lỗi: ',mysqli_error();
	}

?>
