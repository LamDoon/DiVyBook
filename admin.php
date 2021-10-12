<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>ADMIN</title>
    </head>
    <style >
        body{
            font-family: arial;
            font-size: 13px;
            background-image: url("image/biaadmin.jpg");
            background-size: cover; /*tu chia kich thuoc*/
            color: while;
        }

        .logo{
            float: left;
        }
        .dxuat{
            float: right;
            font-family: serif;
            font-size: 15px;
            background-color:#0099CC;
            border: 2px solid #FF9999;
            padding: 15px;
            display: inline-block;
            line-height: 20px;
            list-style: none;
            margin-top: 80px;

        }
        .wrapper{
            width: 100% ;
            margin: 0px ;
            height: auto;

        }

        .main_menu  li{
            float: left;
            text-decoration: none;
            color: #FFCCCC;
            list-style: none;
            font-size: 18px;
            font-family: arial;
            display: inline-block;
            line-height: 40px;
            width: 190px;
            height: 40px;
            border-left:  1px solid #fff;
        }
        .wrapper a{
            text-decoration: none;
            display: block;
            color: #fff;
        }
        .wrapper ul{
            border-style: outset;
            text-align: center;

        }
        .main_menu{
            padding: 85px;
            display: block;
            
        }
        .header{
            margin: -15px;

            padding : 0px;
            width: auto;
            height: auto;
            background-color: #FFFFFF;
            font-family: arial;
            font-weight: bold;
            }
        .wrapper a:hover {
            background: #17306E;
            color: #FFFFFF;
        }
        /*==Dropdown Menu==*/
        .sub_menu {
            display: none;
            /* sub_menu nam trong vung main_menu duoc chon */
            position: absolute ;
            background-color: #FFCCCC;
            text-align: right;
            width: auto;
          }
        .main_menu li {
            position: relative;
            background-color: #3B5998;

        }
        /*khi re chuot vao menu me thi menu con hien ra*/
        .main_menu li:hover .sub_menu {
           display: block;
        }
        .sub_menu li {

            border-style: none;
            margin-left: 0 !important;
            text-align: center;
            border-bottom: 1px solid #fff;
        }
        *{
            margin: 0;
            padding: 0;
            transition: all 0.3s;
        }
        #mainnav{
            padding: 10px;
            margin: 10px;
        }
        #mainnav ul{
            background: #3B5998;
            list-style: none;
            padding: 0px;
            width: 200px;
            text-align: left;
        }
        #mainnav ul li{
            position: relative;
            width: 200px;
            height: 40px;
            line-height: 40px;
            border-bottom: 1px solid #fff;
        }
        #mainnav ul .thefirst{
            background: #1D1F20;
        }
        #mainnav ul li a{
            text-decoration: none;
            color: #fff;
            font-weight: bold;
            padding: 0 16px;
            display: block;
        }
        #mainnav li:hover{
            background: #17306E;
        }
        #mainnav .sub-menu{
            position: absolute;
            left: 200px;
            top: 0px;
            width: 200px;
            display: none;
            text-align: left;
            border-left: 1px solid #fff;
            font-size: 90%;
            border-radius: 0px 10px 10px 0px;
        }
        #mainnav li:hover .sub-menu{
            display: block;
            background: #3B5998;
            color: red;
        }
       

    </style>
    <body>
        <div class ="wrapper">
            <div class = "header">
                <a href="" class="logo">
                   <img src="image/logo.png" width="200px" height="170px">
                </a>
                <div    class="dxuat">
                    <li><a href="dang-nhap.php">Đăng Xuất</a></li>
                </div>
                
                <ul class = "main_menu">
                    <li><a href="admin.php">Trang chủ</a></li>
                    <li><a href="ql_sach.php">Sách</a></li>
                    <li><a href="ql_loai.php">Loại</a></li>
                    <li><a href="ql_nxb.php">Nhà XB</a></li>
                    <li><a href="ql_tg.php">Tác giả</a></li>
                </ul>
            </div>
        </div>
        <div id="mainnav">
            <ul>
                <li class="thefirst"><a href="#">Quản Lý</a>
                    <ul class="sub-menu">
                        
                        <li><a href="ql_slideshow.php">SlideShow</a></li>
                          <li><a href="ql_quangcao.php">Quảng Cáo</a></li>
         
            </ul>
        </li>
        <li><a href="ql_donhang.php">Đơn hàng</a>
           
        </li>
        <li><a href="ql_nguoidung.php">Khách hàng thành viên</a></li>

    </ul>
          
</div>
</body>
</html>