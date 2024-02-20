<?php
$id = $_GET['x'];

require_once('../../../connect/connectDB.php');

$sql="DELETE FROM slides WHERE id='$id'";


mysqli_query($conn, $sql);


header('Location: ../../trangchinh.php?p=slide');

?>