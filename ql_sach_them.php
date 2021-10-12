<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Them Sach</title>
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
            margin-bottom: 20px;
            
        }
        .logo{
            float: left;
        }
       
         .header{
           margin: -15px;
            padding : 0px;
            width: auto;
            background-color: #3399FF;           
            font-weight: bold;
            height: 100px;
            font-size: 15px;
              }
        .header h1{
           float: left;
    height: 0px;
   
    margin-left: 30px;
    font-weight: bold;
    color: white;
        }
        
        .tb{
            position: absolute;
           transform: translate(-50%,-50%);
           top: 60%;
            left: 50%;
        }
        
        .title {
            font-weight: bold;
            padding-right: 30px;
            padding-bottom: 20px;
            
           
        }
        
        .txt{
            padding-bottom: 20px;
        }
        .bt{
            width: 90px;
            height: 40px;
     background: #6699FF;
     font-size: 20px;
     color: #0000CC;
     text-align: center;
     margin: 15px ;
   
   border-bottom-left-radius: 2px solid #336633;
     cursor: pointer;
        }
/*        .txtMoTa {
            padding-bottom: 20px;
            size:  300px;
        }*/
        </style> 
<body>
    <div class ="wrapper">
            <div class = "header">               
                <h1>TRANG QUẢN TRỊ</h1>
            </div>
    </div>
    <form action="ql_sach_them_x1.php" method="post" enctype="multipart/form-data" name="form1">
        <table class="tb" align="left"  width="1000">
            <tr >
            <td class="title" align="right">Mã Sách</td>
            <td class="txt"><input type="text" name="MaSach" value="" /></td>
        </tr>
        <tr >
            <td class="title" align="right">Tên Sách</td>
            <td class="txt"><input type="text" name="TenSach" value="" /></td>
        </tr>
        <tr >
            <td class="title" align="right">Số lượng còn</td>
            <td class="txt"><input type="text" name="SLuong" value="" /></td>
        </tr>
        <tr >
            <td class="title" align="right">Đơn Giá</td>
            <td class="txt" ><input type="text" name="DonGia" value="" /></td>
        </tr>
        <tr >
            <td class="title" align="right">Mô Tả</td>
            <td class="txt"><input  type="text" name="MoTa" value=""/></td>
        </tr>
        <tr >
            <td class="title" align="right">Mã Loại</td>
            <td class="txt"><input type="text" name="MaLoai" value="" /></td>
        </tr>
        <tr >
            <td class="title" align="right">Mã NXB</td>
            <td class="txt"><input type="text" name="MaNXB" value="" /></td>
        </tr>
        <tr >
            <td class="title" align="right">Mã TG</td>
            <td class="txt"><input type="text" name="MaTG" value="" /></td>
        </tr>
        <tr >
            <td class="title" align="right">Hình Ảnh Mô Tả</td>
            <td class="txt"><input type="file" name="image" id="anh" /></td>
        </tr>
            
            
            <tr >
            <td  align="right">
		<input type="submit" class="bt" name="Luu" value="Lưu" />
            </td>
            <td>
                <input type="reset" class="bt" name="Huy" value="Hủy" />
            </td>
        </tr>
    </table>
</form>

</body>
</html>
