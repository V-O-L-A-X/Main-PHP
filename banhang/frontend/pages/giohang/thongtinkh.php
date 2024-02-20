
<?php
echo '<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<h5>Điền thông tin để đặt hàng</h5>
<p>(Tất cả các mục không được để trống)</p>
<form method="POST" action="" >
<input type="hidden" name="thongtinkh" value="co" >
<label style="margin-top:10px;">Tên người mua</label>
<input type="text" class="form-control" name="ten_nguoi_mua">
<label style="margin-top:10px;">Email</label>
<input type="text" class="form-control"  name="email">
<label style="margin-top:10px;">Điện thoai</label>
<input type="text" class="form-control"  name="dien_thoai">
<label style="margin-top:10px;">Địa chỉ</label>
<input type="text" class="form-control"  name="dia_chi">
<label style="margin-top:10px;">Lời nhắc</label>
<input type="text" class="form-control"  name="loi_nhac">
<label style="margin-top:10px;">Tổng tiền sẽ thanh toán</label>
<input type="text" class="form-control" name="tong_cong" value="'.$tong_cong.'" readonly>
<p style="margin-top:20px;">
<button class="button" type="submit"><i class="icon-login"></i>&nbsp; Đặt hàng<span></span></button></p>


</form>
</div>
<div class="col-md-3"></div>
</div>';
?>