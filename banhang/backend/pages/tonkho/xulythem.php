<?php


if(isset($_POST["them"]))
{
   $nhx=$_POST['n'];
   $t=$_POST['ten'];
   
   $nn=$_POST['nn'];
 
   $nx=$_POST['nx'];
   if(empty($_POST['sln']))
   {
      $sln =0;
   }
   else{
      $sln = $_POST['sln'];
   }
   if(empty($_POST['slx']))
   {
      $slx =0;
   }
   else{
      $slx = $_POST['slx'];
   }

   if(empty($_POST['nn']))
   {
      $nn = $_POST['nx'];
   }
   if(empty($_POST['nx']))
   {
      $nx = $_POST['nn'];
   }

 



   

   require_once('../../../connect/connectDB.php');
   if($nhx==1)
   {
      $sqlthem = "INSERT INTO tonkho (nhx, tensp, slnhap, ngaynhap, slxuat, ngayxuat) VALUES ('$nhx','$t','$sln','$nn','$slx','$nn')";
   }
   else
   {
      $sqlthem = "INSERT INTO tonkho (nhx, tensp, slnhap, ngaynhap, slxuat, ngayxuat) VALUES ('$nhx','$t','$sln','$nx','$slx','$nx')";
   }


   
 


   $thuchien=mysqli_query($conn, $sqlthem);


   
   if($thuchien)
   {
      

      header('Location: ../../trangchinh.php?p=tonkho');
   }
   
}



?>