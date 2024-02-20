<?php
if(isset($_POST["sua"]))
{

   $id=$_POST['row_id'];
    $dc=$_POST['dc'];
    $dt=$_POST['dt'];
    $email=$_POST['email'];
    $mxh=$_POST['mxh'];

    require_once('../../../connect/connectDB.php');
    

 
      $sqlsua="UPDATE lienhe SET diachi='$dc', dienthoai='$dt', email='$email', mangxahoi='$mxh' WHERE id='$id'";



mysqli_query($conn, $sqlsua);



      header('Location: ../../trangchinh.php?p=thongtin');


}
?>