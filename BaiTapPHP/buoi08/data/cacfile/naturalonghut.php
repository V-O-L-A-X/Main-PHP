
	<h1>Ống hút inox tre, cỏ bàng</h1>
	<p>
	&#9851; Ống hút inox là một trong các sản phẩm được nhiều bạn trẻ truyền tai nhau sử dụng trong thời gian gần đây. 
	Giá một bộ ống hút kèm cọ rửa vào khoảng 50.000 đồng hoặc cao hơn tuỳ mẫu mã, 
	cho bạn sử dụng rất nhiều lần, chỉ cần làm sạch lòng ống bằng cọ sau mỗi lần sử dụng.
	Để chiều lòng khách hàng trẻ, một số cửa hàng còn có dịch vụ khắc tên chủ nhân lên ống hút.
	<br>&#9851; Ngoài chất liệu inox, còn có loại ống hút làm từ tre, 
	gỗ hoặc cỏ bàng để các bạn trẻ tuỳ sở thích lựa chọn. 
	Các sản phẩm trên thì có giá thành rẻ, được làm hoàn toàn từ thiên nhiên, 
	tuy nhiên tuổi thọ sẽ thấp hơn so với ống inox. 
	</p>
	

	<?php
	   $n = count($onghut);
	   for($i=1; $i<=$n; $i++)
	   {
	?>
			<div class="hinh">
				<img src="data/hinh/<?=$onghut[$i]?>" style="border-radius:0 30px ">
				
			</div>
	<?php 
	        if ($i % 3 == 0)
	        	echo "<div class='ngatfloat'></div>";
        } 
    ?>
