<?php //ob_start();
	    
    include('connect.php');
	$matg = $_POST['MaTG'];
	$tentg = $_POST['TenTG'];
	
	$sl = "insert into tacgia (MaTG,TenTG) "
                . "Value('$matg','$tentg')";

	if(mysqli_query($connect,$sl))
	{
		echo "<script language='javascript'>alert('Thêm vào danh sách thành công!');";
		echo "location.href='ql_tg.php';</script>";
	}
	else
	{
		echo 'Lỗi: ',mysqli_error();
	}

?>
