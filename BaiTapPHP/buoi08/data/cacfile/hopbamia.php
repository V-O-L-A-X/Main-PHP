
<h1>Hộp bã mía</h1>
<p>
&#9851; Hộp làm từ bã mía được làm 100% từ sợi tự nhiên (thành phần chính từ bã mía), 
có thể dùng hâm nóng thức ăn trực tiếp trong lò vi sóng hoặc cấp đông với sản phẩm đến âm 40 độ C 
mà vẫn rất an toàn.<br>

&#9851; Ngoài ra, sản phẩm còn có khả năng đựng được nước nóng hoặc dầu ăn nóng trên 100 độ C 
mà không bị biến dạng hay thấm từ trong ra ngoài.<br>

&#9851;Sản phẩm rất thân thiện với môi trường với khả năng tự phân hủy sinh học 
khi chôn dưới đất trong vòng 6 tuần.
</p>
	

	<?php
	   $n = count($hop);
	   for($i=1; $i<=$n; $i++)
	   {
	?>
			<div class="hinh">
				<img src="data/hinh/<?=$hop[$i]?>" width="300" style="border-radius:30px">
				
			</div>
	<?php 
	        if ($i % 3 == 0)
	        	echo "<div class='ngatfloat'></div>";
        } 
    ?>
