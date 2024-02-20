<?php
$cacxe = array(  1 => array("ten" => "Mitsubishi Xpander", "hinh" => "mitsubishi.jpg"),
                 2 => array("ten" => "Toyota Vios", "hinh" => "toyota.jpg"),
                 3 => array("ten" => "Vinfast Fadil", "hinh" => "vinfast.jpg"),
                 4 => array("ten" => "Ford Ranger", "hinh" => "ford.jpg"),
                 5 => array("ten" => "KIA Seltos", "hinh" => "kia.jpg"),
                 6 => array("ten" => "Mazda CX-5", "hinh" => "mazda.jpg"),
                 7 => array("ten" => "MG 4 Electric", "hinh" => "mg.jpg"),
                 8 => array("ten" => "XFC Concept", "hinh" => "xfc.png"),
             );
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
	<title>Danh Sách Xe Hơi 2023</title>
	<style>
		
		.toanbo{
			
			width: 1090px;
			margin: 30px auto;
		}
		.toanbo h1{
			color: green;
			
			position: relative;
		}
		.toanbo h1::after{
        background-color: #627afe;
        bottom: -20px;
        content: "";
        display: block;
        left: 45%;
        height: 4px;
        width: 100px;
        position: absolute;

    }
		.noidung{
			margin: 50px;
			
		}
		
		.cacphan{
			float:left;
			border: 5px teal solid;
			margin-left: 10px;
			margin-bottom:10px;
			border-radius: 10px;
			padding: 5px;
			
		}
		
		.chu{
			font-weight: bold;
			padding: 5px;
			text-align: center;
			color:brown;
		}

	</style>
</head>
<body>

<div class="toanbo">
	<h1 align="center">DANH SÁCH XE Ô TÔ 2023</h1>
	<p class="noidung">
	<?php
	    $n = count($cacxe);
	    for($i=1; $i<=$n; $i++)
	    {
			
	    	echo "<div class='cacphan'>";
	    	echo "<img src='hinh/".$cacxe[$i]["hinh"] ."' width='240' height='200'> ";
	    	echo "<div class='chu'>".$cacxe[$i]["ten"]."</div>";
	    	echo "</div>";
		
	    }
	?>
		
	</p>
     </div>
</p>
</body>
</html>
