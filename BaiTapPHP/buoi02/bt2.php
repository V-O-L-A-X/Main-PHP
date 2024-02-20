<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Thanh Toán Tiền Điện</title>
   <style>
    .thanhtoanhd input[type=text]{
      background-color: #FECCCD;
    }
      .tieude {
        background-color: #FBCC68; 
        color: #8B3E00; 
        font-family:Lucida Handwriting; 
        font-size: 25px; 
        font-weight: bold; 
        padding: 5px;

      }
    
   </style>
</head>
<body>
  <?php
      $ch=""; $sc=""; $sm=""; $dg=""; $tt="";


      if (isset($_POST["tinh"]))
      {
         
         $sc=$_POST["chisocu"];
         $sm=$_POST["chisomoi"];
         $dg=$_POST["dongia"];
         if(is_numeric($sc) && is_numeric($sm) && is_numeric($dg))
         {
          $tt = $sm * $dg - $sc * $dg ;

         }
         else{
          if (!is_numeric($sc))
          {
            $baoloi1 = "Phải nhập số.";
          }
          
          if (!is_numeric($sm))
          {
            $baoloi2 = "Phải nhập số.";
          }
          
          if (!is_numeric($dg))
          {
            $baoloi3 = "Phải nhập số.";
          }
        

         }

         
      }
       
  ?>
  <form action="" method="post">
  	<table border="0" width="410" align="center" cellspacing="0" cellpadding="10" bgcolor="#FEEBCA">
  		  <caption class="tieude">THANH TOÁN TIỀN ĐIỆN</caption>
	  	  <tr>
	  	  	<td>Tên Chủ Hộ:</td>
	  	  	<td> 
               <input type="text" name="tenchuho" value="<?php echo $ch; ?>">
                
          </td>
	  	  </tr>
        <tr>
          <td>Chỉ Số Cũ:</td>
          <td> 
               <input type="text" name="chisocu" value="<?php echo $sc; ?>"> (kw)
                <?php
                  if (isset($baoloi1))
                  {
                      echo "<div style='color:red'>".$baoloi1."</div>";
                  }
                ?>
          </td>
        </tr>
        <tr>
          <td>Chỉ Số Mới:</td>
          <td> 
               <input type="text" name="chisomoi" value="<?php echo $sm; ?>"> (kw)
               <?php
                  if (isset($baoloi2))
                  {
                      echo "<div style='color:red'>".$baoloi2."</div>";
                  }
                ?>
          </td>
        </tr>

        <tr>
          <td>Đơn Giá:</td>
          <td> 
               <input type="text" name="dongia" value="2000"> (VNĐ)
               <?php
                  if (isset($baoloi3))
                  {
                      echo "<div style='color:red'>".$baoloi3."</div>";
                  }
                ?>
          </td>
        </tr>

        <tr>
          <td>Số Tiền Thanh Toán:</td>
          <td class="thanhtoanhd"> 
               <input type="text" name="thanhtoan" value="<?php echo $tt; ?>" readonly> (VNĐ)
                
          </td>
        </tr>
	  	  


	  	  <tr align="center">
	  	   	  <td colspan="2"><input type="submit" name="tinh" value="Tính"></td>
	  	  </tr>
  	</table>
   
  </form>
</body>
</html>