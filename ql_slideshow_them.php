<?php //ob_start();
	    
    include('connect.php');
		// upload hinh anh	
	$anh=$_FILES['imagebanner']['name'];
    $anhminhhoa_tmp=$_FILES['imagebanner']['tmp_name'];
    move_uploaded_file($anhminhhoa_tmp,"imagebanner/".basename($anh));

	$id = $_POST['Id'];
	
		
	$sl = "insert into slideshow (Id,Anh) "
                . "Value('$id','$anh')";

	if(mysqli_query($connect,$sl))
	{
		echo "<script language='javascript'>alert('Thêm vào danh sách thành công!');";
		echo "location.href='ql_slideshow.php';</script>";
	}
	else
	{
		echo 'Lỗi: ',mysqli_error();
	}
        
        
        
        
//mysqli_close($link);

?>
