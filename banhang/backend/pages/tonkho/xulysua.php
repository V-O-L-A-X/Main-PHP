<?php
if(isset($_POST["sua"]))
{

   $id=$_POST['row_id'];
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
      $sqlsua= "UPDATE tonkho SET nhx='$nhx',`tensp`='$t',slnhap='$sln',ngaynhap='$nn',slxuat='$slx',ngayxuat='$nn' WHERE id='$id'";
   }
   else
   {
      $sqlsua= "UPDATE tonkho SET nhx='$nhx',`tensp`='$t',slnhap='$sln',ngaynhap='$nx',slxuat='$slx',ngayxuat='$nn' WHERE id='$id'";
   }


   
 


   $thuchien=mysqli_query($conn, $sqlsua);


   
   if($thuchien)
   {
      

      header('Location: ../../trangchinh.php?p=tonkho');
   }
}
?>