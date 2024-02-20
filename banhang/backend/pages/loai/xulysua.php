<?php
if(isset($_POST["sua"]))
{

   $id=$_POST['row_id'];
    $t=$_POST['ten'];

    require_once('../../../connect/connectDB.php');
    

 
      $sqlsua="UPDATE loai SET ten='$t' WHERE id='$id'";



mysqli_query($conn, $sqlsua);



      header('Location: ../../trangchinh.php?p=loai');


}
?>