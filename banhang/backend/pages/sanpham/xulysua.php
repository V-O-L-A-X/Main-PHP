<?php
if(isset($_POST["sua"]))
{
      $id=$_POST['row_id'];
      $t=$_POST['ten'];
      $g=$_POST['gia'];
      $gkm=$_POST['giakm'];
      $nd=$_POST['nd']; 
      $l=$_POST['l']; 
      $bst=$_POST['bst'];
      $h = $_FILES["hinh"]["name"]; 
      $nb =$_POST['nb'];
   




    $target_dir = "../../../hinh/sanpham/";
    $h = basename($_FILES["hinh"]["name"]);
    $target_file = $target_dir . $h;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    require_once('../../../connect/connectDB.php');
    

   
    if (!empty($h))
   {
    $sqlsua="UPDATE sanpham SET ten='$t', gia='$g', giakhuyenmai='$gkm',noidung='$nd', loai='$l',bst='$bst', hinh='$h', noibat='$nb' WHERE id='$id'";   

   }
   else
   {
      $sqlsua="UPDATE sanpham SET ten='$t', gia='$g', giakhuyenmai='$gkm', noidung='$nd', loai='$l',bst='$bst', noibat='$nb' WHERE id='$id'";
   }


$thuchien = mysqli_query($conn, $sqlsua);



if ($thuchien)
	{
      if (!empty($h))
      {
      move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file);
      }
      header('Location: ../../trangchinh.php?p=sanpham');
	}




}
?>