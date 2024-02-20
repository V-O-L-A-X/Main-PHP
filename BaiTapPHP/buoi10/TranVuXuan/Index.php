<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Trang Chủ</title>
	<link rel="stylesheet" type="text/css" href="CSS/trangtri.css">
	
</head>
<body>
	<div class="banner"><img src="Hinh/banner.jpg"></div>
	<div class="phanconlai">
		<div class="danhmuc">
			<h2>DANH MỤC LIÊN KẾT</h2>
			<ul>
				<li><a href="?trang=gt">&#10017;Thông Tin Tác Giả</a></li>
				<li><a href="?trang=dstv">&#10017;Danh Sách Thành Viên</a></li>
				<li><a href="?trang=#">&#10017;Đăng Ký Tour Du Lịch</a></li>
			</ul>
		</div>
		<div class="noidung">
		
		<?php
    	if (isset($_GET["trang"]))
   		{
      		$chon = $_GET["trang"];
   		}
   		else
   		{
   	  		$chon = "";
   		}

	   	switch($chon)
   		{
   	  		case "gt"   : include("Gioithieu.php"); break;
	  		case "dstv" : include("DSThanhVien.php"); break;

   	  		default : include("Gioithieu.php");
   		}	   
		?>
		</div>
	</div>
	
</body>
</html>