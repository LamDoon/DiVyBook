<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Cap nhat Sach</title>
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
      
    padding: 0px;
    width: 100%;
    background-color: #3399FF;
    font-weight: bold;
    height: 100px;
    /* float: left; */
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
           margin-left: 19%;
    margin-top: 47px;
           
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
            width: 95px;
            height: 40px;
     background: #6699FF;
     font-size: 18px;
     color: #0000CC;
     text-align: center;
     margin: 15px ;
   
   border-bottom-left-radius: 2px solid #336633;
     cursor: pointer;
        }
        </style>
    <body>
        <div class ="wrapper">
            <div class = "header">
               <h1>TRANG QUẢN TRỊ</h1>
            </div>
    </div>
        <?php
        include('connect.php');

        if (isset($_GET['iD'])) {
            $sl = "select * from quangcao where iD='" . $_GET['iD'] . "'";
        }
        $results = mysqli_query($connect, $sl);
        $d = mysqli_fetch_array($results);
        ?>
        <form action="" method="post" enctype="multipart/form-data" name="form1">
            <table class="tb" align="left" width="1000">
                <tr>
                    <td class="title" align="right">Mã ID</td>
                    <td class="txt">
                        <input type="text" name="iD" value="<?php echo $d['iD']; ?>" />
                    </td>
                </tr>
                <tr>
                    <td class="title" align="right">Ảnh</td>
                    <td class="txt">
                     <img src="image/<?php echo $d['Anhqc'] ?>"  />
                    </td>
                </tr>
                
                <tr>
                    <td align="right">&nbsp;</td>
                    <td>  <input type="file" name="image" id="image"  /> </td>
                </tr>
                <tr>
                    <td align="right">
                        <input type="hidden"  name="iD" value="<?php echo $_GET['iD']; ?>" />
                        <input type="submit" class="bt" name="Sua" value="Cập nhật" />
                    </td>
                    <td>
                       <input type="reset" class="bt"  name="Huy" value="Hủy" />
                    </td>
                </tr>
            </table>
        </form>
        <?php
        include('connect.php');


// upload hinh anh
        if (isset($_FILES["image"]["name"]))
            $icon = $_FILES["image"]["name"];
        if (isset($_FILES['image']['tmp_name'])) {
            $anhminhhoa_tmp = $_FILES['image']['tmp_name'];
            // nếu thay doi file anh khac thi xoa file da cu di
            if (isset($_GET['Anhqc'])) {
                $sl = "select Anhqc from quangcao where iD='" . $_GET['iD'] . "'";
            }

            $results = mysqli_query($connect, $sl);
            $d = mysqli_fetch_array($results);
            if ($d['Anhqc'] != $icon) {
                move_uploaded_file($anhminhhoa_tmp, "image/" . $icon);

                unlink('image/' . $d['Anhqc']);
            }
        }

        //lay gia tri cho tham so
        $tam = "";
        if (isset($_POST["iD"]))
            $iD = $_POST['iD'];
        

        if (isset($_POST['Sua'])) {
            if (isset($_GET["iD"])) {
                $key = $_GET["iD"];
            }

            if ($icon == "") {
                $sl = "update quangcao set iD='$iD" . " where iD='$key'";
            } else {
                $sl = "update quangcao set iD='$iD',Anhqc='$icon'"
                        . " where iD='$key'";
            }
          if (mysqli_query($connect, $sl)) {
                echo "<script language='javascript'>alert('Cập nhật thành công');";
                echo "location.href='ql_quangcao.php';</script>";
            }
        }
        ?>

    </body>
</html>