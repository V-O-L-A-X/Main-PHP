<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Tính Hình Tròn</title>
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
      	 $bk = $_POST["bankinh"];
      	 
      	 $cv = $bk*2*3.14;
      	 $dt = $bk*$bk*3.14;

      }
      
    ?>
   <center>
    <form action="" method="post">
    <caption><h1>Hình Tròn</h1></caption>
    
        <table style="border-spacing: 0; border-color: blue; background-color: azure; " border="3px">
        <tr >
            <td style="background-color: aquamarine;">Bán Kính</td>
            <td><input type="number" name="bankinh" value="<?php echo $bk; ?>"></td>
        </tr>
        <tr>
            <td style="background-color: aquamarine;">Chu Vi</td>
            <td><input type="number" name="chuvi" value="<?php echo $cv; ?>" readonly></td>
        </tr>
         <tr>
            <td style="background-color: aquamarine;">Diện Tích</td>
            <td><input type="number" name="dientich" value="<?php echo $dt; ?>" readonly></td>
        </tr>
        <tr align="center" style="background-color: rgb(255, 229, 158);">
            <td colspan="2"><input class="nut" type="submit" name="t" value="Tính"></td>            
        </tr>
       
        
     
    </table>
    
   </form>



   
   </center>


   
</body>
</html>