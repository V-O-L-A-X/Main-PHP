<?php
$id = $_GET["id"];
require_once('../connect/connectDB.php');
$sql="SELECT * FROM hoadon WHERE id='$id'";
$kq = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($kq);
?>

<div class="container">
   <h1 class="text-center p-3 m-2 bg-warning-subtle text-emphasis-warning">Chỉnh Sửa Hoá Đơn</h1>
   <div class="row">
      <div class="col-3"><button type="button" class="btn btn-outline-info btn-lg" onclick="history.back()">Quay về danh sách</button></div>
      <div class="col-6">

            <form method="POST" action="pages/hoadon/xulysua.php" enctype="multipart/form-data">
            <input type="hidden" name="row_id" value="<?php echo $row['id']; ?>"/>
            <div class="mb-3 form-group">
               <label for="ten" class="col-form-label">Tên</label>
               <input type="text" class="form-control" id="ten" name="ten" value="<?=$row['ten']?>">
            </div>
            <div class="mb-3 form-group">
               <label for="email" class="col-form-label">Email</label>
               <input type="text" class="form-control" id="email" name="email" value="<?=$row['email']?>">
            </div>
            <div class="mb-3 form-group">
               <label for="dt" class="col-form-label">Điện thoại</label>
               <input type="text" class="form-control" id="dt" name="dt" value="<?=$row['dienthoai']?>">
            </div>
            <div class="mb-3 form-group">
               <label for="dc" class="col-form-label">Địa chỉ</label>
               <input type="text" class="form-control" id="dc" name="dc" value="<?=$row['diachi']?>">
            </div>
            <div class="mb-3 form-group">
               <label for="trth" class="col-form-label">Trạng thái</label>
               <input type="text" class="form-control" id="trth" name="trth" value="
               <?php
               if($row['trangthai']==1)
               {
                  echo "Đã có tài khoản";
               }
               else
               {
                  echo "Chưa có tài khoản";
               }
               ?>
               " readonly>
            </div>
            <div class="mb-3 form-group">
               <label for="hdm" class="col-form-label">Hàng được mua</label>
               <input type="text" class="form-control" id="hdm" name="hdm" value="<?=$row['hangduocmua']?>">
            </div>
            <div class="mb-3 form-group">
               <label for="ln" class="col-form-label">Lời nhắc của khách hàng</label>
               <input type="text" class="form-control" id="ln" name="ln" value="<?=$row['loinhac']?>">
            </div>
            <div class="mb-3 form-group">
               <label for="tgt" class="col-form-label">Tổng giá trị</label>
               <input type="text" class="form-control" id="tgt" name="tgt" value="<?=$row['tonggiatri']?>">
            </div>
            <div class="mb-3 form-group">
               <label for="gg" class="col-form-label">Giảm giá (%)</label>
               <input type="text" class="form-control" id="gg" name="gg" value="<?=$row['giamgia']?>">
            </div>
            <div class="mb-3 form-group">
               <label for="tt" class="col-form-label">Thành tiền</label>
               <input type="text" class="form-control" id="tt" name="tt" value="<?=$row['thanhtien']?>" readonly>
            </div>

            <div class="row">
               <div class="col-2">
                  <button type="reset" class="btn btn-danger btn-lg">Huỷ</button>
               </div>
               <div class="col-8"></div>
               
               <div class="col-2"><button type="submit" class="btn btn-success btn-lg" name="sua">Lưu</button></div>

            
            </div>

</form>
</div>
<div class="col-3"></div>
</div>
</div>
