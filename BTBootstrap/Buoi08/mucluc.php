<?php
$loai = $_GET["loai"];
   $ketnoi = mysqli_connect("localhost", "root", "", "kiemtra");
   if (! $conn)
   {
      die("Kết nối thất bại");
      //  echo "Kết nối thất bại";
      //  exit();
   }
   
   $lenh = "Select * from sanpham where loai=$loai";

   $data = mysqli_query($ketnoi, $lenh);

   if (mysqli_num_rows($data)==0)
    {
        echo "<div class='h2'>Chưa có thông tin của loại bánh này</div>";
        exit;
    }



echo "<div class='row'>";
			
		while($row = mysqli_fetch_assoc($data))
		{
			echo "<div class='col-md-4'>";
			echo '<div class="card">';
            
            echo '<img src="hinh/'. $row['hinh'] . '" class="card-img-top img-fluid" alt="...">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">' . $row['ten'] . '</h5>';
            echo '<p class="card-text">Giá Gốc: ' . $row['gg'] . 'VNĐ<br>Giá KM: ' . $row['gkm'] . 'VNĐ</p>';
            echo '<a href="#" class="btn btn-primary">Thêm Vào Giỏ Hàng</a>';
            echo '</div>';
            echo '</div>';
            echo "</div>";

		}
        echo "</div>";
   mysqli_close($ketnoi);

?>




  
  
    
    
    
  

