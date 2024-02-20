<?php
$id = $_GET['x'];

require_once('../../../connect/connectDB.php');

$sql="DELETE FROM loai WHERE id='$id'";


mysqli_query($conn, $sql);


header('Location: ../../trangchinh.php?p=loai');

?>