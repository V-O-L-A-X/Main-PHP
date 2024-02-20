<?php
include_once("data/cacfile/dulieu.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Trang Chủ</title>
    <link rel="stylesheet" type="text/css" href="data/cacfile/thisisthestyle.css">
   
	
</head>
<body>
	<div class="toanbo">
		<div class="tieude">
		Các Sản Phẩm Thân Thiện Môi Trường
		</div>
		<div class="danhsach">
			<ul>
				<li><a href="?trang=lmd">&#9901; Giới Thiệu &#9901;</a></li>
				<li><a href="?trang=onghut">&#9886; Ống hút inox tre, cỏ bàng &#9887; </a></li>
				<li><a href="?trang=tui">&#9886; Túi vải &#9887;</a></li>
				<li><a href="?trang=xaphong"> &#9886;Xà phòng tự nhiên &#9887;</a></li>
				<li><a href="?trang=hop">&#9886; Hộp đựng thực phẩm bã mía &#9887;</a></li>
                <li><a href="?trang=binh">&#9886; Bình đựng nước cá nhân bằng kim loại &#9887;</a></li>
			</ul>
		</div>
		
        <div class="noidung">  
		<?php
		   include_once("data/cacfile/dieuhuong.php");
		?>

        </div>
		<div class="ngatfloat"></div>
	    <div class="footer">
		    Thiết Kế bởi Trần Vũ Xuân
	    </div>
	
    </div>
</body>
</html>
