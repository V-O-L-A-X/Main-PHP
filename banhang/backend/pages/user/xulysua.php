<?php
if(isset($_POST["sua"]))
{

   $id=$_POST['row_id'];
    $t=$_POST['ten'];
    $e=$_POST['email'];
    $p=$_POST['mk']; 
    $pmoi = $_POST["mmk"];
    $pnhaplai = $_POST["nmk"];
    $h = $_FILES["hinh"]["name"]; 
    $nkh=$_POST['nkh'];


    $target_dir = "../../../hinh/user/";
    $h = basename($_FILES["hinh"]["name"]);
    $target_file = $target_dir . $h;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    require_once('../../../connect/connectDB.php');
    

   
    if (!empty($h))
   {
      if($q==1)
      {
         $sqlsua="UPDATE users SET ten='$t',email='$e', 0, hinh='$h',quyen='$q' WHERE id='$id'";
      }
      else
      {
         $sqlsua="UPDATE users SET ten='$t',email='$e', nhom='$nkh', hinh='$h',quyen='$q' WHERE id='$id'";
      }
       

   }
   else
   {
      if($q==1)
      {
         $sqlsua="UPDATE users SET ten='$t',email='$e', 0, hinh='$h',quyen='$q' WHERE id='$id'";
      }
      else
      {
         $sqlsua="UPDATE users SET ten='$t',email='$e', nhom='$nkh', hinh='$h',quyen='$q' WHERE id='$id'";
      }
   }


$thuchien = mysqli_query($conn, $sqlsua);



if ($thuchien)
	{
      if (!empty($h))
      {
      move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file);
      }
      header('Location: ../../trangchinh.php?p=user');
	}



$sql = "SELECT * FROM users WHERE id = '$id'";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_object($result);
if (password_verify($p, $row["pass"]))
        {
            // Check if password is same
            if ($pmoi == $pnhaplai)
            {
                // Change password
                $sql = "UPDATE users SET pass = '" . password_hash($pmoi, PASSWORD_DEFAULT) . "' WHERE id = '" . $id . "'";
                mysqli_query($conn, $sql);
 

            }
         }

        




    


}
?>