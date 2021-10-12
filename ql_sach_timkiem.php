<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<title>Tim kiem Sach</title>
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
   padding-top: 10px;
    margin-left: 30px;
      font-weight: bold;
    color: white;
    font-size: 25px;
        }
        
        .tb {
          border-color: #00CCFF;
            color: #001100;
                 
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
        
       
        
          *{
            margin: 0;
            padding: 0;
            transition: all 0.3s;
        }
        #main-menu{
            padding: 10px;
           margin: 10px;
           padding-left: 0px;
        }
        #main-menu ul{
            background: #3B5998;
            list-style: none;
            padding: 0px;
           width: 0;
            text-align: left;
        }
        #main-menu ul li{
            position: relative;
            width: 150px;
            height: 40px;
            line-height: 40px;
            border-bottom: 1px solid #fff;
        }
        #main-menu ul .thefirst{
            background: #3399FF;
            width: 50px;
            height: 40px;
        }
        #main-menu ul li a{
            text-decoration: none;
            color: #fff;
            font-weight: bold;
            padding: 0 16px;
            display: block;
        }
        #main-menu li:hover{
            background: #17306E;
        }
        #main-menu .sub-menu{
            position: absolute;
            left: 50px;
            top: 0px;
            width: 150px;
            display: none;
            text-align: left;
            border-left: 1px solid #fff;
            font-size: 90%;
            border-radius: 0px 10px 10px 0px;
        }
        #main-menu li:hover .sub-menu{
            display: block;
            background: #3B5998;
            color: red;
         
        }
       #main-menu i{
            margin-top: 12px;
             margin-left: 3px;
        }
        .clear{
            float: left;
           margin-left: 30%;
           
            
        }
        .textboxid{
            width: 350px;
            
        }
         .tb {
          float: right;
          border-color: #00CCFF;
            color: #001100;
            margin-right:  80px;
            margin-top: 15px;
     
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
</style>
<body>
    <div class ="wrapper">
            <div class = "header">
                <h1>TRANG QUẢN TRỊ</h1>
            </div>
        </div>
   
              <div id="main-menu">
            <ul>
                <li class="thefirst"><a href="#"><i class="fa fa-bars" aria-hidden="true"></i></a>
                    <ul class="sub-menu">
                        
                        <li><a href="admin.php">Trang chủ</a></li>
                        <li><a href="login.php">Đăng xuất</a></li>         
                    </ul>
                </li>   
            </ul>
               
              </div>
       <div>     
           <form method="post" action="" class="clear" enctype="multipart/form-data" >
               <input type="text" class="textboxid" name="ma" placeholder="--MaSach">
                   <input type="submit" value="Search"name="search">
                </form>
                  </div>
  <?php  include('connect.php');  
    if(isset($_POST['search'])){
    $ma=filter_input(INPUT_POST, 'ma');
   $sql= "select * from sach WHERE MaSach='$ma'";
		$results = mysqli_query($connect,$sql);
		while( ($rows = mysqli_fetch_assoc($results))== NULL )
		{
                         echo "<script language='javascript'>alert('Không tìm thấy Sách');";
		echo "location.href='ql_sach_timkiem.php';</script>";
                }
                
        ?>
    <table class="tb" align="center" border="1" width="1000" >
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
            <td class="title" colspan="2">---</td>
        </tr>
<?php 

		$sql= "select * from sach WHERE MaSach='$ma'";
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
    <?php
    }
    ?>
</body>
</html>