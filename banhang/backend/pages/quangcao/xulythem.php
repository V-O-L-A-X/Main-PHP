<?php


if(isset($_POST["them"]))
{

      $vt=$_POST['vt'];
      $target_dir = "../../../hinh/quangcao/";
      $t = basename($_FILES["hinh"]["name"]);
      $target_file = $target_dir . $t;
      $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


   require_once('../../../connect/connectDB.php');

   $sqlthem = "INSERT INTO quangcao (hinh,vitri) VALUES ('$t','$vt')";


   $thuchien=mysqli_query($conn, $sqlthem);
   
   if($thuchien)
   {
      move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file);
      header('Location: ../../trangchinh.php?p=quangcao');
   }

   
}



?>