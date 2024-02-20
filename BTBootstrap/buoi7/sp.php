<?php
   $conn = mysqli_connect("localhost", "root", "", "kiemtra");
   if (! $conn)
   {
   	  die("Kết nối thất bại");
   	  //  echo "Kết nối thất bại";
   	  //  exit();
   }
   
   $caulenh = "Select * from sanpham";

   $dulieu = mysqli_query($conn, $caulenh);

   
  echo '<table class="table table-hover table-bordered">';
  echo '<thead>';
   echo ' <tr align="center">';
    echo   '<th scope="col">Mã Sản Phẩm</th>';
    echo   '    <th scope="col">Tên Sản Phẩm</th>';
    echo   '   <th scope="col">Giá Sản Phẩm</th>';
    echo   '   <th scope="col">Hình Sản Phẩm</th>';
    echo   '  </tr>';
    echo   ' </thead>';
    echo   '<tbody>';

		while($sanpham = mysqli_fetch_assoc($dulieu))
		{
            echo '<tr>'; 
            echo '<td>' . $sanpham['ma'] . '</td>';
            echo '<td>' . $sanpham['ten'] . '</td>';
            echo '<td>' . $sanpham['gia']. '</td>';
            echo '<td><img width="100" src="hinh/' . $sanpham['hinh'] . '"></td>';
          echo '</tr>';
        

		}

        echo '</tbody>';
        echo '</table>';
        
        mysqli_close($conn);

?>


    
    
 


  
  
    
    
    
    
  
