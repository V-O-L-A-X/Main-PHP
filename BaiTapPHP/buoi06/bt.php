<!DOCTYPE html>
<html>
<head>
<title>Ngày Sinh</title>
<meta charset="UTF-8">

</head>
<body>
    <?php
    $n="";$t="";$na="";
    if(isset($_POST["tb"])){
        $n=$_POST["ngay"];
        $t=$_POST["thang"];
        $na=$_POST["nam"];
        
        $nn = date("d");
        $nt = date("m");
        $nan = date("Y");

        echo $n - $nn;
    }
    ?>
<form action="" method="post">
    <table>
        <tr>
            <td><input type="number" name="ngay">/
                <input type="number" name="thang">/
                <input type="number" name="nam">/
            </td>
            <td>
                <input type="submit" name="tb" value="Thông Báo">
            </td>


        </tr>

    </table>

</form>
</body>
</html>