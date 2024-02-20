<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Bảng cửu chương</title>
    <style>
       .tieude{
        background-color: #009F9F;
        color: white;
        text-align: center;
        font-weight: bold;
        font-family: Arial, Helvetica, sans-serif;
       }
       .so input[type=number]{
        width: 70px;
        text-align: center;
      }
      .onhap{
        background-color: #C8EEEC;
      }
      .okq{
        background-color: #E1F0FF;
      }
      table .okq td{
        border: 3px #009F9F solid;
      }
       
    </style>   
</head>
<body>
    <?php
    $s="";$kq="";$bl="";
    if(isset($_POST["th"]))
    {
        $s = $_POST["so"];
        if(is_numeric($s)){
            for($i = 1; $i <=10 ; $i++)
            {
               $kq .= $s . " x " . $i . " = " . ($s*$i) . "<br>";
            }
        }
        else{ 

            $bl = "Phải nhập số.";
        }
    }

    ?>
<center>
    <form action="" method="post">
        <table cellspacing="0" cellpadding="7" width="400">
            <tr class="tieude" >
                <th colspan="3">BẢNG CỬU CHƯƠNG</th>
            </tr>
            <tr class="onhap">
                <td>Cửu chương:</td>
                <td class="so">
                    <input type="number" name="so" value="<?php echo $s ?>" >
                    <input type="submit" name="th" value="Thực Hiện" >
                </td>
                <td>&nbsp;</td>
                
                
            </tr>
            <tr class="onhap">
                <td colspan="3">&nbsp;</td>
            </tr>
            <tr class="tieude">
                <th colspan="3">KẾT QUẢ</th>
            </tr>
            <tr class="okq">
                <td colspan="3" align="center">
                <?php
                if(isset($kq)) 
                {
                    echo $kq;
                }     
                
                
                ?>
                 
                </td>
                
            </tr>
        </table>
    </form>

</center>   
</body>
</html>