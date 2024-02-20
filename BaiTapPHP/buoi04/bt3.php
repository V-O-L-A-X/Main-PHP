<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Nhiều Bảng cửu chương</title>
    <style>
        .tieude {
            background-color: #005EB8;
            color: white;
            font-weight: bold;
            font-family: Arial, Helvetica, sans-serif;
        }
        table .tieude{
            padding: 4px;
        }
        table tr td {
            background-color: #CEE7FF;
        }
    </style>
      
</head>
<body>
    <?php
    $bd=""; $kt="";$kq="";$bl="";
    if (isset($_POST["in"]))
    {
        $bd = $_POST["sobatdau"];
        $kt = $_POST["soketthuc"];
        if(is_numeric(!$bd) || is_numeric(!$kt)){
            echo "Phải nhập số";
        }
        
    }
    ?>
<center>
<form action="" method="post">
    <table width="300" cellpadding="5" cellspacing="0">
        <tr>
            <th class="tieude" colspan="2">IN BẢNG CỬU CHƯƠNG</th>
        </tr>
        <tr>
            <td>
                Bắt đầu từ:
                
            </td>
            <td><input type="number" name="sobatdau" value="<?php echo $bd ?>"></td>
        </tr>
        <tr>
            <td>
                Kết Thúc Tại:
                
            </td>
            <td><input type="number" name="soketthuc" value="<?php echo $kt ?>"></td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="submit" name="in" value="In Bảng Cửu Chương">
            </td>
        </tr>

    </table>

</form>
<?php
    if(is_numeric($bd) && is_numeric($kt)){
        echo "<table border='1' cellspacing='3'  cellpadding='7'>";
        echo "<tr>";
        for($i=$bd; $i<=$kt; $i++){
            echo "<td>";
            for($j =1 ; $j <=10; $j++){
                echo  $i . " x " . $j . " = ". ($i*$j).  "<br>"; 
            }
            echo "</td>";
        }
        echo "</tr>";
        echo "</table>"; 
    }
   
    ?>
</center>

  
    
     
  
</body>
</html>