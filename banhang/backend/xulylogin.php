<?php
session_start();

$e=$_POST['email'];
$p=$_POST['password'];



//echo($u.$p);

//2.ket noi csdl
require_once('../connect/connectDB.php');
//3. so sanh thong tin lay duoc voi table user
$sqldn="SELECT * FROM users WHERE email='$e'";
//echo $sql;
//die();
$result = mysqli_query($conn, $sqldn);

if (mysqli_num_rows($result) > 0) { 
   // echo "Ban da dang nhap thanh cong";


   while($row = mysqli_fetch_array($result))
   {
    if(password_verify($p, $row["pass"]) && $row['quyen']==1)
    {
        $_SESSION['email']=$e;
        $_SESSION['ten']=$row['ten'];
        $_SESSION['hinh']= $row['hinh'];
        header('Location: trangchinh.php?p=user');
    }

   }

}
else
{
    header('Location: login.php');

}


?>