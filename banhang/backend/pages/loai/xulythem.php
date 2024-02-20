<?php


if(isset($_POST["them"]))
{

   $t=$_POST['ten'];


   require_once('../../../connect/connectDB.php');

   $sqlthem = "INSERT INTO loai (ten) VALUES ('$t')";


mysqli_query($conn, $sqlthem);
   

      header('Location: ../../trangchinh.php?p=loai');

   
}



?>