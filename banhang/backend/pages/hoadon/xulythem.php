<?php


if(isset($_POST["them"]))
{

   $t=$_POST['ten'];
   $e=$_POST['email'];
   $dt=$_POST['dt'];
   $dc=$_POST['dc'];
   $hdm=$_POST['hdm'];
   $ln=$_POST['ln'];
   $tgt=$_POST['tgt'];
   $gg=$_POST['gg'];
   $tt = $tgt - ($tgt*$gg/100);

   require_once('../../../connect/connectDB.php');

   $sqluser="SELECT * FROM users WHERE email='$e'";
   
   $kquser = mysqli_query($conn, $sqluser);
   if ($kquser) { 
      if (mysqli_num_rows($kquser) > 0) {
  
         $sqlthem ="INSERT INTO hoadon(ten, email, dienthoai, diachi, trangthai, hangduocmua, loinhac, tonggiatri, giamgia,thanhtien) VALUES ('$t','$e','$dt','$dc',1,'$hdm','$ln','$tgt','$gg', '$tt')";
        
        
      } else {
  
         $sqlthem ="INSERT INTO hoadon(ten, email, dienthoai, diachi, trangthai, hangduocmua, loinhac,tonggiatri, giamgia,thanhtien) VALUES ('$t','$e','$dt','$dc', 0,'$hdm','$ln','$tgt','$gg', '$tt')";
         
        
      }
    }
  

mysqli_query($conn, $sqlthem);

   header('Location: ../../trangchinh.php?p=hoadon');
   
}



?>