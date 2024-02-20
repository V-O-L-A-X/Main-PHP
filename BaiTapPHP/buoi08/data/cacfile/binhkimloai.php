
<h1>Bình đựng nước cá nhân bằng kim loại</h1>
<p>
&#9851; Hãy tập dần thói quen mang bình nước cá nhân thay vì mua các chai nước suối nhựa. 
Trong đó, bình đựng nước kim loại là cách để các bạn trẻ vừa đổi mới phong cách 
vừa bảo vệ môi trường rất tốt.<br>

&#9851; Hiện nay, bình nước kim loại có đủ mọi hình dáng,
 mẫu mã với giá khoảng 100.000 đến 200.000 đồng mỗi bình.<br>

 &#9851; Một lưu ý nhỏ là bạn nên tìm mua loại bình này ở những cửa hàng uy tín, 
 đã được công bố chất lượng sản phẩm hoặc nhập khẩu theo đường chính ngạch, 
 tránh mua phải bình làm từ các thành phần kim loại gây ảnh hưởng đến sức khoẻ.
</p>	

	<?php
	   $n = count($binh);
	   for($i=1; $i<=$n; $i++)
	   {
	?>
			<div class="hinh">
				<img src="data/hinh/<?=$binh[$i]?>" width="300" style="border-radius:30px">
				
			</div>
	<?php 
	        if ($i % 3 == 0)
	        	echo "<div class='ngatfloat'></div>";
        } 
    ?>
