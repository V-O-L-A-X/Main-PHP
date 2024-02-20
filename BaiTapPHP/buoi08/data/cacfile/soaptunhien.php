
<h1>Xà phòng tự nhiên</h1>
<p>
&#9851; Xà phòng làm từ các nguyên liệu từ thiên nhiên như bột nghệ, bột cà phê, bột trà xanh, 
hoa oải hương, bồ kết… Mỗi loại có màu sắc, hương thơm và công dụng khác nhau và đặc biệt 
là lành tính với da.<br>

&#9851; Khi thải ra môi trường, các thành phần tự nhiên này sẽ không gây hại 
như những loại xà phòng làm từ hoá học.
</p>
	

	<?php
	   $n = count($xaphong);
	   for($i=1; $i<=$n; $i++)
	   {
	?>
			<div class="hinh">
				<img src="data/hinh/<?=$xaphong[$i]?>" width="300" style="border-radius:30px">
				
			</div>
	<?php 
	        if ($i % 3 == 0)
	        	echo "<div class='ngatfloat'></div>";
        } 
    ?>
