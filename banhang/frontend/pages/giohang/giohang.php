<?php
 if(isset($_GET['id']) and $_SESSION['trang_chi_tiet_gio_hang']=="co")
 {
 	$_SESSION['trang_chi_tiet_gio_hang']="huy_bo";
 	if(isset($_SESSION['id_them_vao_gio']))
 {
 $so=count($_SESSION['id_them_vao_gio']);
 $trung_lap="khong";
 for($i=0;$i<count($_SESSION['id_them_vao_gio']);$i++)
 {
 if($_SESSION['id_them_vao_gio'][$i]==$_GET['id'])
 {
 $trung_lap="co";
 $vi_tri_trung_lap=$i;
 break;
 }
 }
 if($trung_lap=="khong")
 {
 $_SESSION['id_them_vao_gio'][$so]=$_GET['id'];

 $_SESSION['sl_them_vao_gio'][$so]=$_GET['so_luong'];
 }
 if($trung_lap=="co")
 {
$_SESSION['sl_them_vao_gio'][$vi_tri_trung_lap]=$_SESSION['sl_them_vao_gio'][$vi_tri_trung_lap]+$_GET['so_luong'];
 }
 }
else
 {
 $_SESSION['id_them_vao_gio'][0]=$_GET['id'];

 $_SESSION['sl_them_vao_gio'][0]=$_GET['so_luong'];
 }
 }

 $gio_hang="khong";
if(isset($_SESSION['id_them_vao_gio'])) {
 $so_luong=0;
 for($i=0;$i<count($_SESSION['id_them_vao_gio']);$i++) {
 $so_luong=$so_luong+$_SESSION['sl_them_vao_gio'][$i];
 }
 if($so_luong!=0) {
 $gio_hang="co";
 }
}
echo '<section class="main-container col1-layout">
        <div class="main container">
          <div class="col-main">
            <div class="cart">
            <div class="page-content page-order"><div class="page-title">
            <h2>Giỏ hàng</h2>
          </div>';
if($gio_hang=="khong"){
 echo "Không có sản phẩm trong giỏ hàng";
}
else {

echo "<form action='' method='POST' >";
echo "<input type='hidden' name='capnhat' value='co' > ";
echo '<div class="order-detail-content">
              <div class="table-responsive">
                <table class="table table-bordered cart_summary">
                  <thead>
                    <tr>
                      <th class="cart_product">Hình</th>
                      <th>Tên</th>
                     
                      <th>Giá</th>
                      <th>Số lượng</th>
                      <th>Thành tiền</th>
                      
                    </tr>

                  </thead><tbody>';
                  $tong_cong=0;
                  for($i=0;$i<count($_SESSION['id_them_vao_gio']);$i++) {
                  $tv="SELECT id,ten,gia, giakhuyenmai, hinh FROM sanpham WHERE id='".$_SESSION['id_them_vao_gio'][$i]."'";
                  $tv_1=$conn->query($tv);
                  $tv_2=$tv_1->fetch_assoc();
                  if($tv_2['giakhuyenmai']>0)
                  {
                    $tien=$tv_2['giakhuyenmai']*$_SESSION['sl_them_vao_gio'][$i];
                  }
                  else
                  {
                    $tien=$tv_2['gia']*$_SESSION['sl_them_vao_gio'][$i];
                  }
                  
                  $tong_cong=$tong_cong+$tien;
                  if($_SESSION['sl_them_vao_gio'][$i]!=0)
                  {
                  $name_id="id_".$i;
                  $name_sl="sl_".$i;

               echo '
               <tr>
                      <td class="cart_product"><a href="#"><img src="../hinh/sanpham/'.$tv_2['hinh'].'" alt="'.$tv_2['hinh'].'"></a></td>
                      <td class="cart_description"><p class="product-name"><a href="#">'.$tv_2['ten'].'</a></p></td>
                      ';
                      echo "<input type='hidden' name='".$name_id."' value='".$_SESSION['id_them_vao_gio'][$i]."'>";
                      if ($tv_2['giakhuyenmai']>0)
                      {
                        echo'<td class="price"><span>'.$tv_2['giakhuyenmai'].'</span></td>';
                      }
                      else
                      {
                        echo '<td class="price"><span>'.$tv_2['gia'].'</span></td>';
                      }
                     echo'
                      
                      <td class="qty"><input class="form-control input-sm" type="text" value="'.
                      $_SESSION['sl_them_vao_gio'][$i].'" name="'.$name_sl.'"></td>

                      <td class="price"><span>'.$tien.'</span></td>
                      
                    </tr>
                    
                    ';

 }
 }

 echo '</tbody><input hidden type="submit" value="cập nhật">
 <tfoot>
   <tr>
      <td colspan="2"></td>
     <td colspan="2"><strong>Tổng cộng</strong></td>
     </form>
   
     
     <td ><strong>'.$tong_cong.'</strong></td>';
     $_SESSION['tong_cong'] = $tong_cong;
     echo '

   
    
   </tr>
 </tfoot>
</table></div>

<div class="cart_navigation"> <a class="continue-btn" href="index.php?t=sanpham/toanbosp"><i class="fa fa-arrow-left"> </i>&nbsp; Tiếp tục mua sắm</a>  </div>';



include("pages/giohang/thongtinkh.php");
}
echo '</div>
</div>
</div>
</div>
</div>
</section>';

?>