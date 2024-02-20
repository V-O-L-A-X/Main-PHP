<?php
   $conn = mysqli_connect("localhost", "root", "", "kiemtra");
   if (! $conn)
   {
   	  die("Kết nối thất bại");
   	  //  echo "Kết nối thất bại";
   	  //  exit();
   }
   
   $caulenh = "Select * from khachhang";

   $dulieu = mysqli_query($conn, $caulenh);

   

   echo "<div class='row'>";
		while($row = mysqli_fetch_assoc($dulieu))
		{
            
            echo "<div class='col-md-4'>";
			echo '<div class="card">';
            echo '<img src="hinh/' . $row['hinh'] . '" class="card-img-top">';
            echo '<div class="card-body">';
            echo '<p class="card-text">' . $row['ten'] . '</p>';
            echo '<p class="card-text">' . $row['sdt'] . '</p>';
            echo "</div>";
            echo "</div>";
            echo "</div>";
            
		}
        echo "</div>";
        mysqli_close($conn);

?>


  
  
    
    
    
    
  
