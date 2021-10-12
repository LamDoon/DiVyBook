<?php //ob_start();
	    
    include('connect.php');
		// upload hinh anh	
	$icon=$_FILES['image']['name'];
    $anhminhhoa_tmp=$_FILES['image']['tmp_name'];
    move_uploaded_file($anhminhhoa_tmp,"image/".basename($icon));

	$id = $_POST['iD'];
	$hang = $_POST['Hang'];
	$thoigian = $_POST['ThoiGian'];
        $thuloi = $_POST['ThuLoi'];
	$link = $_POST['Link'];
        $ngay = $_POST['NgayQC'];
	
		
	$sl = "insert into quangcao (iD,Hang,NgayQC,ThoiGian,ThuLoi,Link,Anhqc) "
                . "Value('$id','$hang','$ngay','$thoigian','$thuloi','$link','$icon')";

	if(mysqli_query($connect,$sl))
	{
		echo "<script language='javascript'>alert('Thêm vào danh sách thành công!');";
		echo "location.href='ql_quangcao.php';</script>";
	}
	else
	{
		echo 'Lỗi: ',mysqli_error();
	}
        
        
        
        
//mysqli_close($link);

?>
