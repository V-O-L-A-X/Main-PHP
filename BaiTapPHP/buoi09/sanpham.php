<?php
   $ketnoi = new mysqli("localhost", "root", "", "qlsp");
   if ($ketnoi->connect_error)
   {
   	   die("Kết nối thất bại !!!");
   }

   $sql = "Select * from sanpham";

   $dulieu  = $ketnoi->query($sql);

   $ketnoi->close();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width= , initial-scale=1.0">
	<title>Nước Giải Khát</title>
    <style>
        h1{
            color:darkred;
            font-size: 50px;
        }
        table{
            border: 5px rgb(0, 149, 255) solid;
        }
        th{
            padding:10px ;
            font-size: 30px;
            background-color: aquamarine;
            border: 2px rgb(0, 149, 255) solid;   
            color:rgb(0, 79, 81);   
            
        }
        th:nth-child(1){
            width: 50px;
            
           
                        
        }

        th:nth-child(2){
            width: 200px;
        }
        
        td{
            padding: 10px;
            text-align: center;
            font-size: 30px;
            background-color: rgb(235, 255, 248);
            border: 1px rgb(0, 149, 255) solid;
            color: darkblue;
        }
        img{
            border-radius: 20px;
        }

    </style>
</head>
<body>
    <h1 align="center">Các Loại Nước Giải Khát</h1>
    <table cellspacing="0" align="center">
        <tr>
            <th>MSP</th>
            <th>Tên Sản Phẩm</th>
            <th>Hình</th>
        </tr>
        <?php
        while ($dong = $dulieu->fetch_assoc())
        {
            echo "<tr>";
            echo "<td>" . $dong["masp"] . "</td>";
            echo "<td>" . $dong["tensp"] . "</td>";
            echo "<td><img src='hinh/" . $dong["hinh"] . "' width='100'></td>";
            echo "</tr>";
            
        }
        ?>
    </table>

</body>
</html>