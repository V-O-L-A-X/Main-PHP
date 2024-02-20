<?php
if(isset($_POST["sua"]))
{

   $id=$_POST['row_id'];
   $vt=$_POST['vt'];
    $h = $_FILES["hinh"]["name"]; 

    $target_dir = "../../../hinh/quangcao/";
    $h = basename($_FILES["hinh"]["name"]);
    $target_file = $target_dir . $h;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    require_once('../../../connect/connectDB.php');
    

   
    if (!empty($h))
   {
    $sqlsua="UPDATE quangcao SET hinh='$h', vitri='$vt' WHERE id='$id'";   
   }
   else
   {
      $sqlsua="UPDATE quangcao SET vitri='$vt' WHERE id='$id'";
   }






$thuchien = mysqli_query($conn, $sqlsua);



if ($thuchien)
	{
      if (!empty($h))
      {
      move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file);
      
      }
      
	}
      header('Location: ../../trangchinh.php?p=quangcao');
}
?>