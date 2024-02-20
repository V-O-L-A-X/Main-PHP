<?php


if(isset($_POST["them"]))
{

   $t=$_POST['ten'];
   $e=$_POST['email'];
   $dt=$_POST['dt'];
   $ln=$_POST['ln'];


   require_once('../../../connect/connectDB.php');

   $sqlthem = "INSERT INTO phanhoi (ten,email,dienthoai,loinhan) VALUES ('$t','$e', '$dt','$ln')";


mysqli_query($conn, $sqlthem);
   

      header('Location: ../../index.php?t=thongtin/lienhe');

   
}



?>