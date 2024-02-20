<?php
$id = $_GET["id"];
require_once('../connect/connectDB.php');
$sql="SELECT * FROM lienhe WHERE id='$id'";
$kq = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($kq);
?>

<div class="container">
   <h1 class="text-center p-3 m-2 bg-warning-subtle text-emphasis-warning">Chỉnh Sửa Thông Tin Liên Hệ</h1>
   <div class="row">
      <div class="col-3"><button type="button" class="btn btn-outline-info btn-lg" onclick="history.back()">Quay về danh sách</button></div>
      <div class="col-6">

<form method="POST" action="pages/thongtin/xulysualh.php">
<input type="hidden" name="row_id" value="<?php echo $row['id']; ?>"/>
            <div class="mb-3 form-group">
               <label for="ten" class="col-form-label">Địa chỉ</label>
               <input type="text" class="form-control" id="ten" name="dc" value="<?=$row['diachi']?>">
            </div>
            <div class="mb-3 form-group">
               <label for="dt" class="col-form-label">Điện thoại</label>
               <input type="text" class="form-control" id="dt" name="dt" value="<?=$row['dienthoai']?>">
            </div>
            <div class="mb-3 form-group">
               <label for="email" class="col-form-label">Email</label>
               <input type="text" class="form-control" id="email" name="email" value="<?=$row['email']?>">
            </div>
            <div class="mb-3 form-group">
               <label for="mxh" class="col-form-label">Mạng xã hội (dùng thẻ " &lt;br&gt; " để xuống dòng) (có thể dùng các thẻ html khác nhau cho phần này)</label>
               <textarea class="form-control" id="mxh" name="mxh"><?=$row['mangxahoi']?></textarea>
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
