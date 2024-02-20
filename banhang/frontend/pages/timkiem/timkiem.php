
<?php
 require_once('../../../connect/connectDB.php');
if(isset($_GET['search']) && !empty($_GET['search']))
{
    $key = $_GET['search'];
    $sql ="SELECT * FROM sanpham WHERE ten LIKE '%$key%' OR noidung LIKE '%$key%' ";

}
else {
    $sql = "SELECT * FROM sanpham";
      }
      include_once("ketqua.php")
?>  