<?php
$id = $_GET["id"];
require_once('../connect/connectDB.php');
$sql="SELECT * FROM users WHERE id='$id'";
$kq = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($kq);
?>

<div class="container">
   <h1 class="text-center p-3 m-2 bg-warning-subtle text-emphasis-warning">Chỉnh Sửa Thông Tin Người Dùng</h1>
   <div class="row">
      <div class="col-3"><button type="button" class="btn btn-outline-info btn-lg" onclick="history.back()">Quay về danh sách</button></div>
      <div class="col-6">

<form method="POST" action="pages/user/xulysua.php" enctype="multipart/form-data">
<input type="hidden" name="row_id" value="<?php echo $row['id']; ?>"/>
            <div class="mb-3 form-group">
               <label for="ten" class="col-form-label">Tên Người Dùng</label>
               <input type="text" class="form-control" id="ten" name="ten" value="<?=$row['ten']?>">
            </div>
            <div class="mb-3 form-group">
               <label for="email" class="col-form-label">Email</label>
               <input type="text" class="form-control" id="email" name="email" value="<?=$row['email']?>">
            </div>
            <div class="mb-3 form-group">
               <label for="hpass" class="col-form-label">Mật khẩu hiện tại</label>
               <input type="text" class="form-control" id="hpass" name="mk" value="<?=$row['pass']?>" readonly>
            </div>
            <div class="mb-3 form-group">
               <label for="mpass" class="col-form-label">Mật khẩu mới</label>
               <input type="text" class="form-control" id="mpass" name="mmk">
            </div>
            <div class="mb-3 form-group">
               <label for="npass" class="col-form-label">Nhập lại mật khẩu</label>
               <input type="text" class="form-control" id="npass" name="nmk">
            </div>
            <div class="mb-3 form-group">
               <label for="nkh" class="col-form-label">Nhóm khách hàng</label>
               <select class="form-control" name="nkh">
                  <option value="1" <?php if($row['nhom'] == '1') { ?> selected="selected"<?php } ?>>Khách thường</option> 
                  <option value="2"<?php if($row['nhom'] == '2') { ?> selected="selected"<?php } ?>>VIP</option>
                  <option value="0"<?php if($row['nhom'] == '0') { ?> selected="selected"<?php } ?>>Nhân viên</option>
               </select>
            </div>
            <div class="mb-3 form-group">
               <label for="hinh" class="col-form-label">Hình đại diện</label>
               <div><img src="../hinh/user/<?=$row['hinh']?>" alt="<?=$row['hinh']?>" width="70"> </div>
               <input type="file" class="form-control" id="hinh" name="hinh">
            </div>
            <div class="mb-3 form-group">
               <label for="quyen" class="col-form-label">Quyền</label>

               <select class="form-control" name="quyen">
               <option value="1"<?php if($row['quyen'] == '1') { ?> selected="selected"<?php } ?>>Admin</option>
               <option value="0"<?php if($row['quyen'] == '0') { ?> selected="selected"<?php } ?>>Người dùng</option>
               </select>
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
