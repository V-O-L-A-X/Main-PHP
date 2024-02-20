
<h1>Túi vải</h1>
<p>
&#9851; Hiện nay có nhiều loại túi vải thân thiện với môi trường như túi vải không dệt, 
túi vải bố, túi sợi đay, túi lohas,... nhưng được ưa chuộng sử dụng nhiều nhất là túi vải không dệt 
và túi vải bố. <br>

&#9851; <b>Túi vải không dệt</b> được làm từ vải không dệt được cấu tạo từ các hạt nhựa tổng hợp (polypropylene) 
được liên kết với nhau bằng các chất kết dính, có tuổi thọ từ 3-5 năm. <br>

&#9851; Với rất nhiều ưu như bền chắc, chịu lực tốt, thiết kế mẫu mã đa dạng, sang trọng, 
thân thiện với môi trường,... túi vải không dệt được các công ty, doanh nghiệp, 
cửa hàng sử dụng làm túi đựng sản phẩm, túi quà tặng cho khách hàng để quảng bá thương hiệu hiệu quả.  
Túi vải bố là loại túi được các bạn trẻ rất ưa chuộng. 
Túi vải bố có độ bền cao, chịu tải tốt, thiết kế mẫu mã đa dạng, 
chất liệu vải thân thiện với môi trường và người tiêu dùng. <br>

&#9851; <b>Túi vải bố</b> vừa mang tính hữu dụng cao, vừa giúp chủ nhân thể hiện cá tính với những nét riêng của mình, 
và đây còn là một công cụ giúp các doanh nghiệp, 
chủ shop quảng bá thương hiệu của mình rộng rãi hơn, hiệu quả hơn.  
</p>
	

	<?php
	   $n = count($tui);
	   for($i=1; $i<=$n; $i++)
	   {
	?>
			<div class="hinh">
				<img src="data/hinh/<?=$tui[$i]?>" width="300" style="border-radius:30px">
				
			</div>
	<?php 
	        if ($i % 3 == 0)
	        	echo "<div class='ngatfloat'></div>";
        } 
    ?>
