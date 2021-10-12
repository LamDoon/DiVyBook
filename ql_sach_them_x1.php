<?php //ob_start();
	    
    include('connect.php');
		// upload hinh anh	
	$icon=$_FILES['image']['name'];
    $anhminhhoa_tmp=$_FILES['image']['tmp_name'];
    move_uploaded_file($anhminhhoa_tmp,"image/".basename($icon));

	$masach = $_POST['MaSach'];
	$tensach = $_POST['TenSach'];
	$soluong = $_POST['SLuong'];
        $dongia = $_POST['DonGia'];
	$mota = $_POST['MoTa'];
	$maloai = $_POST['MaLoai'];
        $manxb = $_POST['MaNXB'];
	$matg = $_POST['MaTG'];
		
	$sl = "insert into sach (MaSach,TenSach,SLuong,DonGia,MoTa,MaLoai,MaNXB,MaTG,HinhAnh) "
                . "Value('$masach','$tensach','$soluong','$dongia','$mota','$maloai','$manxb','$matg','$icon')";

	if(mysqli_query($connect,$sl))
	{
		echo "<script language='javascript'>alert('Thêm vào danh sách thành công!');";
		echo "location.href='ql_sach.php';</script>";
	}
	else
	{
		echo 'Lỗi: ',mysqli_error();
	}
        
        
        
        
//mysqli_close($link);

?>
