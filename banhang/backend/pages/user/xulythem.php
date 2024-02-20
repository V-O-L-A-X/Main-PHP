<?php


if(isset($_POST["them"]))
{
   $e=$_POST['email'];
   $t=$_POST['ten'];
   $p=$_POST['mk']; 
   $q=$_POST['quyen']; 
   $nkh=$_POST['nkh'];

   $p= password_hash($p, PASSWORD_DEFAULT);


   $target_dir = "../../../hinh/user/";
   $h = basename($_FILES["hinh"]["name"]);
   $target_file = $target_dir . $h;
   $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


   

   require_once('../../../connect/connectDB.php');
   if($q==1)
   {
      $sqlthem = "INSERT INTO users (email, ten, pass, nhom, hinh, quyen) VALUES ('$e', '$t', '$p', 0, '$h','$q')";
   }
   else
   {
      $sqlthem = "INSERT INTO users (email, ten, pass, nhom, hinh, quyen) VALUES ('$e', '$t', '$p', '$nkh', '$h','$q')";
   }


   
 


   $thuchien=mysqli_query($conn, $sqlthem);


   
   if($thuchien)
   {
      
      move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file);
      header('Location: ../../trangchinh.php?p=user');
   }
   
}



?>