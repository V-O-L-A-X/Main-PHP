<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Chào Theo Cờ</title>
    <style>

    .tieude {
        background-color: #99CFFC; 
        color: #080CD6; 
        font-family:Arial, Helvetica, sans-serif; 
        font-size: 25px; 
        font-weight: bold; 
        padding: 5px;

      }
     
    </style>
   
</head>
<body>
    <?php
    $gio=""; $kq=""; $buoi="";
    if (isset($_POST["chao"]))
      {
        $gio = $_POST["gio"];
        if (is_numeric($gio)){

            if($gio >= 0 && $gio <13)
            {
                $buoi = "Chào Buổi Sáng";
            }
            else if ($gio >= 13 && $gio <=18 )
            {
                $buoi = "Chào Buổi Chiều";
            }
            else if ($gio > 18 && $gio < 24)
            {
                $buoi = "Chào Buổi Tối";
            }
            else if ($gio <= 24 )
            {
                $buoi = "Chào Buổi Sáng";
            }
            else{
                $buoi = "Bạn phải nhập giờ từ 0 đến 24";
            }

        }
        else 
    {
        $kq ="Bạn cần nhập số";
    }
    }
    

      

    ?>
<center>   
 <form action="" method="post">
    
    <table bgcolor="#C8EEEC" cellpadding="10px" cellspacing="0" width="300px">
        <caption class="tieude">CHÀO THEO CỜ</caption>
        
        <tr>
            <td>Nhập giờ:</td>
            <td><input type="number" name="gio" value="<?php echo $gio ?>"></td>
        </tr>
        <tr>
            <td colspan="2" style="padding-left: 0;">
                &nbsp;
               <?php
               if (isset($buoi))
               {
                echo $buoi;
               }
               if(isset($kq)){
                echo "<div style='color:red'>". $kq . "</div>";
               }
               ?>
        
            </td>
           
        </tr>
        <tr style="background-color: #99CDFC;">
            <td align="center" colspan="2"><input  class="nut" type="submit" name="chao" value="Chào"></td>
            
        </tr>
    </table>
 </form>
</center> 
</body>
</html>