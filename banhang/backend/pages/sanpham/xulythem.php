<?php


if(isset($_POST["them"]))
{
   $t=$_POST['ten'];
   $g=$_POST['gia'];
   $gkm=$_POST['giakm'];
   $nd=$_POST['nd']; 
   $l=$_POST['l']; 
   $bst=$_POST['bst']; 

   if($_POST['nb']=="1") 
   {
      $nb=1;
   }
   else
   {
      $nb=0;
   }

   $target_dir = "../../../hinh/sanpham/";
   $h = basename($_FILES["hinh"]["name"]);
   $target_file = $target_dir . $h;
   $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


   

   require_once('../../../connect/connectDB.php');

   $sqlthem = "INSERT INTO sanpham (ten, gia, giakhuyenmai, noidung, loai, bst, hinh, noibat) VALUES ('$t', '$g', '$gkm','$nd','$l','$bst','$h','$nb')";


   $thuchien=mysqli_query($conn, $sqlthem);
   
   if($thuchien)
   {
      move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file);
      header('Location: ../../trangchinh.php?p=sanpham');
   }
   
}



?>