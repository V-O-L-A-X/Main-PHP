<?php
if(isset($_POST["sua"]))
{

   $id=$_POST['row_id'];
    $h = $_FILES["hinh"]["name"]; 

    $target_dir = "../../../hinh/slide/";
    $h = basename($_FILES["hinh"]["name"]);
    $target_file = $target_dir . $h;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    require_once('../../../connect/connectDB.php');
    

   
    if (!empty($h))
   {
    $sqlsua="UPDATE slides SET ten='$h' WHERE id='$id'";   
   }
   else
   {
      $sqlsua="SELECT * FROM slides  WHERE id='$id' AND ten='$target_file'";
   }






$thuchien = mysqli_query($conn, $sqlsua);



if ($thuchien)
	{
      if (!empty($h))
      {
      move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file);
      
      }
      
	}
      header('Location: ../../trangchinh.php?p=slide');
}
?>