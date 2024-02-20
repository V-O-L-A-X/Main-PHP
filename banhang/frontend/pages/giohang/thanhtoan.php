<?php
if(isset($_SESSION['id_them_vao_gio']))
{
$ten_nguoi_mua=trim($_POST['ten_nguoi_mua']);
$email=trim($_POST['email']);
$dien_thoai=trim($_POST['dien_thoai']);
$dia_chi=trim(nl2br($_POST['dia_chi']));
$loi_nhac=nl2br($_POST['loi_nhac']);
$tong_cong=$_POST['tong_cong'];
$gg = 0;
$tt = $tong_cong - ($tong_cong*$gg/100);
if($ten_nguoi_mua!="" and $dien_thoai!="" and $dia_chi!="")
{
$hang_duoc_mua="";
for($i=0;$i<count($_SESSION['id_them_vao_gio']);$i++)
{
$hang_duoc_mua=$hang_duoc_mua."Sản phẩm thuộc id: ".$_SESSION['id_them_vao_gio'][$i]." ,số lượng: ".$_SESSION['sl_them_vao_gio'][
$i].". ";
}
$sqluser="SELECT * FROM users WHERE email='$email'";
   
   $kquser = mysqli_query($conn, $sqluser);
   if ($kquser) {
      if (mysqli_num_rows($kquser) > 0) {

$tv="INSERT INTO hoadon ( id , ten , email , dienthoai ,diachi , trangthai, hangduocmua ,
loinhac, tonggiatri, giamgia, thanhtien)
VALUES ( NULL , '$ten_nguoi_mua', '$email', '$dien_thoai', '$dia_chi', 1, '$hang_duoc_mua',
'$loi_nhac', '$tong_cong', '$gg', '$tt' );";
      }else
      {
        $tv="INSERT INTO hoadon ( id , ten , email , dienthoai ,diachi , trangthai, hangduocmua ,
loinhac, tonggiatri, giamgia, thanhtien)
VALUES ( NULL , '$ten_nguoi_mua', '$email', '$dien_thoai', '$dia_chi', 0, '$hang_duoc_mua',
'$loi_nhac', '$tong_cong', '$gg', '$tt' );";
      }
    }

$conn->query($tv);
unset($_SESSION['id_them_vao_gio']);
unset($_SESSION['sl_them_vao_gio']);
thong_bao_html_roi_chuyen_trang("Cảm ơn bạn đã mua hàng tại web site chúng tôi","index.php?t=giohang/giohang");
}
else
{
thong_bao_html("Không được bỏ trống tên người mua , điện thoại , địa chỉ");
trang_truoc();
exit();
}
}
?>