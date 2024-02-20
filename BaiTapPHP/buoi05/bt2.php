<?php
    function doc_1_so($n)
    {
    	switch ($n)
    	{
    		case 1: $kq = "Một"; break;
    		case 2: $kq = "Hai"; break;
    		case 3: $kq = "Ba"; break;
    		case 4: $kq = "Bốn"; break;
    		case 5: $kq = "Năm"; break;
    		case 6: $kq = "Sáu"; break;
    		case 7: $kq = "Bảy"; break;
    		case 8: $kq = "Tám"; break;
    		case 9: $kq = "Chín"; break;
    	}
    	return $kq;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Bài Tập 01</title>
    <style>
        table tr th {
            font-family: italianno;
            background-color: #055DBA;
            color: white;
        }
        table tr td{
            background-color: #B0E7FF;
        }
        table tr input[type=submit]{
            background-color: #B0E7FF;
            border: 1px gray solid;
            
        }
        table tr input[type=text]{
            background-color: #FFFECE;
            color: red;
            font-weight: bold;
            border: 1px gray solid;

        }
        
    </style>
   
</head>
<body>
<?php
	$so=""; $kq="";$bl="";
	if (isset($_POST["docso"]))
	{
		$so = $_POST["so"];
		if(is_numeric($so))
		{
			$tr = floor($so / 100);
			$ch = floor(($so - $tr*100) / 10);
			$dv = $so % 10;

			if ($tr==0 && $ch==0 && $dv==0)
            {$kq = "Không";}
            if ($tr==0 && $ch==1 && $dv ==0)
            {
                $kq = "Mười";
            }
            else if ($tr==0 && $ch==0 && $dv !=0)
            {
                $kq = doc_1_so($dv);
            }
            else if ($tr==0 && $ch==1 && $dv !=0)
            {
                $kq = " Mười " . doc_1_so($dv);
            }
            else if($tr==0 && $ch >=2 && $dv ==0)
            {
                $kq = doc_1_so($ch) . " Mươi ";
            }
            else if ($tr==0 && $ch >=2 && $dv ==1)
            {
                $kq = doc_1_so($ch) . " Mươi Mốt ";          
            }
            else if ($tr==0 && $ch >=2 && $dv ==5)
            {
                $kq = doc_1_so($ch) . " Mươi Lăm "; 

            }
            else if ($tr==0 && $ch >=2 && $dv >=2)
            {
                $kq = doc_1_so($ch) . " Mươi " . doc_1_so($dv);
            }
            else if ($tr !=0 && $ch ==0 && $dv ==0)
            {
                $kq = doc_1_so($tr) . " Trăm ";
            }
            else if ($tr !=0 && $ch ==0 && $dv !=0)
            {
                $kq = doc_1_so($tr) . " Trăm Lẻ ". doc_1_so($dv);
            }
            else if ($tr !=0 && $ch ==1 && $dv ==0)
            {
                $kq = doc_1_so($tr). " Trăm Mười";
            }
            else if($tr !=0 && $ch ==1 && $dv !=0)
            {
                $kq = doc_1_so($tr). " Trăm Mười " . doc_1_so($dv);
            }
            else if ($tr !=0 && $ch >=2 && $dv ==0)
            {
                $kq = doc_1_so($tr). " Trăm " .doc_1_so($ch) . " Mươi ";

            }
            else if($tr !=0 && $ch >=2 && $dv ==1)
            {
                $kq = doc_1_so($tr). " Trăm " . doc_1_so($ch) . " Mươi Mốt ";
            }
            else if($tr !=0 && $ch >=2 && $dv ==5)
            {
                $kq = doc_1_so($tr). " Trăm " . doc_1_so($ch) . " Mươi Lăm ";
            }
            else if ($tr !=0 && $ch >=2 && $dv >=2)
            {
                $kq = doc_1_so($tr). " Trăm " . doc_1_so($ch) . " Mươi " . doc_1_so($dv);

            }
            
			   
			
			

		}
        if (empty($so)){
            $bl= "<br>" ."Mời nhập số";
        }
	}
?>
<form action="" method="post">
	<table width="500" align="center" cellspacing="0" cellpadding="5" border="0">
		<tr align="center">
			<th colspan="2"> ĐỌC SỐ </th>
		</tr>
		<tr>
			<td>Nhập số (0->999):</td>
			<td>
				<input type="number" name="so" value="<?=$so;?>" size="10">
				<input type="submit" name="docso" value=" Đọc Số " style="float:right; margin-right: 30px;">
                <?php
                echo "<span style='color:red;'>" .$bl . "</span>";
                ?>
                </td>
			</td>
		</tr>
		<tr>
			<td>Bằng Chữ</td>
			<td><input type="text" name="kq" value="<?=$kq;?>" size="40" readonly></td>
		</tr>
	</table>
</form>
</body>
</html>