<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Cạnh Huyền Tam Giác Vuông</title>
    <style>
       .tieude {
        background-color: #FBCC68; 
        color: #8B3E00; 
        font-family:Arial; 
        font-size: 20px; 
        font-weight: bold; 
        padding: 5px;

      }
      .canhhuyen input[type=text]{
      background-color: #FECCCD;
    }
    </style>
   
</head>
<body>
  <?php
      $ca=""; $cb=""; $ch="";


      if (isset($_POST["tinh"]))
      {
         
         $ca=$_POST["canha"];
         $cb=$_POST["canhb"];
         if(is_numeric($ca) && is_numeric($cb) )
         {
          $ch = number_format(sqrt($ca*$ca + $cb*$cb),2);

         }
         else{
          if (!is_numeric($ca))
          {
            $baoloi1 = "Phải nhập số.";
          }
          
          if (!is_numeric($cb))
          {
            $baoloi2 = "Phải nhập số.";
          }
                
          }

         
      }
       
  ?>
  <form action="" method="post">
  	<table border="0" width="410" align="center" cellspacing="0" cellpadding="10" bgcolor="#FEEBCA">
  		  <caption class="tieude">CẠNH HUYỀN TAM GIÁC VUÔNG</caption>
	  	  <tr>
	  	  	<td>Cạnh A:</td>
	  	  	<td> 
               <input type="text" name="canha" value="<?php echo $ca; ?>">
               <?php
               if (isset($baoloi1))
               {
                   echo "<div style='color:red'>".$baoloi1."</div>";
               }
             ?>
          </td>
	  	  </tr>
        <tr>
          <td>Cạnh B:</td>
          <td> 
               <input type="text" name="canhb" value="<?php echo $cb; ?>"> 
                <?php
                  if (isset($baoloi2))
                  {
                      echo "<div style='color:red'>".$baoloi2."</div>";
                  }
                ?>
          </td>
        </tr>

        <tr>
          <td>Cạnh huyền:</td>
          <td class="canhhuyen"> 
               <input type="text" name="canhh" value="<?php echo $ch; ?>" readonly> 
                
          </td>
        </tr>

	  	  <tr align="center">
	  	   	  <td colspan="2"><input type="submit" name="tinh" value="Tính"></td>
	  	  </tr>
  	</table>
   
  </form>
</body>
</html>