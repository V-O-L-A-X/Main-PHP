<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>USCLN và BSCNN</title>
    <style>
       
    </style>
      
</head>
<body>
    <?php
    

    ?>
<center>
    <form action="" method="post">
        <table width="300">
            <tr>
                <td colspan="2">ƯỚC SỐ CHUNG LỚN NHẤT</td>
            </tr>
            <tr>
                <td colspan="2">và BỘI SỐ CHUNG NHỎ NHẤT</td>
            </tr>
            <tr>
                <td>Số A:</td>
                <td><input type="number" name="soa" value="<?php echo $sa ?>"></td>
            </tr>
            <tr>
                <td>Số B:</td>
                <td><input type="number" name="sob" value="<?php echo $sb ?>"></td>
            </tr>
            <tr>
                <td>USCLN</td>
                <td><input type="number" name="uscln" value="<?php echo $us ?>" readonly></td>
            </tr>
            <tr>
                <td>BSCNN</td>
                <td><input type="number" name="bscnn" value="<?php echo $bs ?>" readonly></td>
            </tr>
            <tr align="center">
                <td colspan="2"><input type="submit" name="tim" value="Tìm USCLN và BSCNN"></td>
            </tr>
        </table>
    </form>
</center>
</body>
</html>