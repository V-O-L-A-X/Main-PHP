<?php
if(isset($_POST["sua"]))
{
      $id=$_POST['row_id'];
      $t=$_POST['ten'];
      $e=$_POST['email'];
      $dt=$_POST['dt'];
      $dc=$_POST['dc'];
      $hdm=$_POST['hdm'];
      $ln=$_POST['ln'];
      $tgt=$_POST['tgt'];
      $gg=$_POST['gg'];
      $tt = $tgt - ($tgt*$gg/100);


      $sqlsua = "UPDATE hoadon SET ten='$t',email='$e',dienthoai='$dt',diachi='$dc',hangduocmua='$hdm',loinhac='$ln',tonggiatri='$tgt',giamgia='$gg', thanhtien='$tt' WHERE id='$id'";

    require_once('../../../connect/connectDB.php');
    



mysqli_query($conn, $sqlsua);




      header('Location: ../../trangchinh.php?p=hoadon');





}
?>