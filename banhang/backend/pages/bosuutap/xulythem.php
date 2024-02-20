<?php


if(isset($_POST["them"]))
{

   $t=$_POST['ten'];
   $target_dir = "../../../hinh/bosuutap/";
   $h = basename($_FILES["hinh"]["name"]);
   $target_file = $target_dir . $h;
   $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


   require_once('../../../connect/connectDB.php');

   $sqlthem = "INSERT INTO bosuutap (ten, hinh) VALUES ('$t','$h')";


   $thuchien=mysqli_query($conn, $sqlthem);
   
   if($thuchien)
   {
      move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file);
      header('Location: ../../trangchinh.php?p=bosuutap');
   }


   
}



?>