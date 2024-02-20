<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Tính Hình Chữ Nhật</title>
    <style>
        td{
           font-size: 20px;
           width: 140px;
           padding: 10px;
           box-sizing: border-box;         
           height: 50px;
        }
        .nut{
            height: 40px;
            width: 100px;
            

        }

    </style>
   
</head>
<body>
    <?php
      $cd=""; $cr="";
      if (isset($_POST["t"]))
      {
      	 $cd = $_POST["dai"];
      	 $cr = $_POST["rong"];
      	 $cv = $cd*2 + $cr*2;
      	 $dt = $cd * $cr;

      }
      
    ?>
   <center>
    <form action="" method="post">
    <caption><h1>Hình Chữ Nhật</h1></caption>
    
        <table style="border-spacing: 0; border-color: blue; background-color: bisque;" border="3px">
        <tr >
            <td style="background-color: aquamarine;">Chiều Dài</td>
            <td><input type="number" name="dai" value="<?php echo $cd; ?>"></td>
        </tr>
        <tr>
            <td style="background-color: aquamarine;">Chiều Rộng</td>
            <td><input type="number" name="rong" value="<?php echo $cr; ?>"></td>
        </tr>
        <tr align="center" style="background-color: rgb(255, 245, 187);">
            <td colspan="2"><input class="nut" type="submit" name="t" value="Tính"></td>            
        </tr>
        <tr>
            <td colspan="2" style="background-color: rgb(192, 255, 190);">
                <?php
                    echo "Chu Vi:";
                    if(isset($cv))
                    {
                    echo " ".$cv;
                    }
                    echo "<br>". "Diện Tích:";
                    if(isset($dt)){
                    echo " ".$dt;
                    }
                   

                ?>

            </td>
        </tr>
     
    </table>
    
   </form>




   </center>


   
</body>
</html>