<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Đọc Số</title>
    <style>

    .tieude {
        background-color: #080CD6; 
        color: white; 
        font-family:Arial, Helvetica, sans-serif; 
        font-size: 25px; 
        font-weight: bold; 
        padding: 5px;

      }
      .so input[type=number]{
        width: 70px;
        text-align: center;
      }
      .chu input[type=text]{
      background-color: #FFFEC6;
      color: red;
      font-weight: bold;
      width: 70px;
      text-align: center;
      
    }
    </style>
   
</head>
<body>
    <?php
    $s=""; $c="";
    if(isset($_POST["doc"]))
    {
        $s = $_POST["so"];
        switch($s){
            case 0:
            $c = "Không";
            break;
            case 1:
            $c = "Một";
            break;
            case 2:
            $c = "Hai";
            break;
            case 3:
            $c = "Ba";
            break;
            case 4:
            $c = "Bốn";
            break;
            case 5:
            $c = "Năm";
            break;
            case 6:
            $c = "Sáu";
            break;
            case 7:
            $c = "Bảy";
            break;
            case 8:
            $c = "Tám";
            break;
            case 9:
            $c = "Chín";
            break;
            default:
            $c = "Cần số từ 0->9";
            break;


            }

        

    }
    

    ?>
<center>   
 <form action="" method="post">
    
    <table bgcolor="#C8EEEC" cellpadding="10px" cellspacing="0" width="400px">
        <caption class="tieude">ĐỌC SỐ</caption>
        <tr>
                <td align="center">Nhập số (0->9)</td>
                <td>&nbsp;</td>
                <td align="center">Bằng Chữ:</td>
        </tr>
        <tr align="center">
            <td class="so"><input type="number" name="so" value="<?php echo $s ?>" ></td>

            <td align="center"><input  class="nut" type="submit" name="doc" value="=>"></td>

            <td class="chu"><input type="text" name="chu" value="<?php echo $c ?>" readonly ></td>
            
        </tr>
    </table>
 </form>
</center> 
</body>
</html>