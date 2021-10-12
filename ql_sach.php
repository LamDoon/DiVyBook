<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel ="stylesheet" href ="css_qli.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Danh sach Sach</title>
</head>
    <style>
        body{
            font-family: arial;
            background-image: url("image/biacapnhat.jpg");
            background-size: cover; /*tu chia kich thuoc*/

        }
        .wrapper{
            width: 100% ;
            margin: 0px ;
            height: auto;
                   
        }
      
        .header{
           margin: -15px;
            padding : 0px;
            width: auto;
            background-color: #3399FF;           
            font-weight: bold;
            height: 100px;
           
              }
        .header h1{
           float: left;
    height: 0px;
   padding-top: 20px;
    margin-left: 30px;
      font-weight: bold;
    color: white;
     font-size: 25px;
        }
        
        .tb {
    margin-left: 100px;
    float: left;
    border-color: #00CCFF;
    color: #001100;
    margin-right: 40px;
    margin-top: 50px;
     
        }
        .tb a{
            text-decoration: none;
            color: #330000	;
            
        }
        .tb a:hover{
            color: #996666;
        }
        .title {
            color: #FFFFCC;
        }
        .truong {
         
            color: #EEEEEE;
            background-color: #3B5998;
           
        }
        .header a{
                        color: white;
                        text-decoration: none;
                    }
        .header a:hover{
                        color: #FFCCCC;
                    }
      
       

</style>
<body>
    <div class ="wrapper">
            <div class = "header">
                <h1><a href="admin.php">TRANG QUẢN TRỊ</a></h1>
            </div>
        
<?php  include('connect.php');  ?>
    <table class="tb" align="center" border="1" width="1100" >
        <tr align="center"  class="truong" >
            <td class="title">Mã Sách</td>
            <td class="title">Tên Sách</td>
            <td class="title">Số Lượng Còn</td>
            <td class="title">Đơn Giá</td>
            <td class="title">Mô Tả</td>
            <td class="title">Mã Loại</td>
            <td class="title">Mã NXB</td>
            <td class="title">Mã TG</td>
            <td class="title">Hình Ảnh</td>
            <td colspan="2"><a class="them" href="ql_sach_them.php">Thêm Sách</a></td>
        </tr>
<?php 
		$sql= "select * from sach order by MaSach desc ";
		$results = mysqli_query($connect,$sql);
		while( ($rows = mysqli_fetch_assoc($results))!= NULL )
		{
	?>
        <tr align="center">
            <td><?php echo $rows['MaSach']; ?></td>
            <td><?php echo $rows['TenSach']; ?></td>
            <td><?php echo $rows['SLuong']; ?></td>
            <td><?php echo $rows['DonGia']; ?></td>
            <td><?php echo $rows['MoTa']; ?></td>
            <td><?php echo $rows['MaLoai']; ?></td>
            <td><?php echo $rows['MaNXB']; ?></td>
            <td><?php echo $rows['MaTG']; ?></td>
            <td><img src="image/<?php echo $rows['HinhAnh'] ?>" width="80" height="100" /></td>
            <td>
                <a href="ql_sach_sua.php?MaSach=<?php echo $rows['MaSach'];?>">Sửa</a>
            </td>
            <td>
                <a href="ql_sach_xoa.php?MaSach=<?php echo $rows['MaSach'];?>" onclick="return confirm('Ban co chac chan muon xoa khong?');">Xóa</a>
            </td>
        </tr>
<?php } 
mysqli_close($connect);
?>
</table>

</body>
</html>