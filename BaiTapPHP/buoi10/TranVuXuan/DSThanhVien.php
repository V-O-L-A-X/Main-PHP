<?php
   $ketnoi = new mysqli("localhost", "root", "", "tranvuxuan");
   
   if ($ketnoi->connect_error)
   	   die("Kết nối thất bại");

   $sql = "Select Hinh, Hoten, Year(Ngaysinh), Noisinh from thanhvien ";

   $dulieu = $ketnoi->query($sql);
   
   $ketnoi->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Danh sách thành viên</title>
	<link rel="stylesheet" type="text/css" href="CSS/trangtri.css">
	
</head>
<body>
	<div class="toanbotv">
	<h1 class="dstv">DANH SÁCH THÀNH VIÊN</h1>
	<div class="noidungtv">
		
		<?php
	    while ($dong = $dulieu->fetch_assoc())
	    {
    	?>
    	<div class="cacphan">
    		<div class="hinh">
    			<img src="Hinh/<?=$dong['Hinh']?>" width="200">

    		</div>
    	<div class="ten">
    		<?=$dong['Hoten']?>
    
    	</div>
    	<div class="namvanoisinh">
    		<?=$dong['Noisinh']?> - <?=$dong['Year(Ngaysinh)']?>

    	</div>
    	</div>
    	<?php } ?>


	</div>
	</div>
	
</body>
</html>