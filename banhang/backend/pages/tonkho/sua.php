<?php
$id = $_GET["id"];
require_once('../connect/connectDB.php');
$sql="SELECT * FROM tonkho WHERE id='$id'";
$kq = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($kq);
?>

<div class="container">
   <h1 class="text-center p-3 m-2 bg-warning-subtle text-emphasis-warning">Chỉnh Sửa Báo cáo</h1>
   <div class="row">
      <div class="col-3"><button type="button" class="btn btn-outline-info btn-lg" onclick="history.back()">Quay về danh sách</button></div>
      <div class="col-6">

      <form method="POST" action="pages/tonkho/xulysua.php" enctype="multipart/form-data">
      <input type="hidden" name="row_id" value="<?php echo $row['id']; ?>"/>
         <div class="mb-3 form-group">
               <label for="n" class="col-form-label">Nhập hay Xuất</label>
               <select class="form-control" name="n">
                  <option value="1" <?php if($row['nhx'] == '1') { ?> selected="selected"<?php } ?>>Nhập kho</option> 
                  <option value="2" <?php if($row['nhx'] == '2') { ?> selected="selected"<?php } ?>>Xuất kho</option>
               </select>
            </div>
            <div class="mb-3 form-group">
               <label for="ten" class="col-form-label">Sản phẩm</label>
               <select class="form-control" name="ten">
                     <?php
                     $sqll="SELECT * FROM sanpham";
                     $kql = mysqli_query($conn, $sqll);
                        while ($rowl = $kql->fetch_assoc())
                        {
                           if ($rowl["id"]==$row["tensp"])
                                 echo "<option value='".$rowl["id"] ."' selected>".$rowl["ten"]."</option>";
                              else
                                 echo "<option value='".$rowl["id"] ."'>".$rowl["ten"]."</option>";
                        }
                     ?>
               </select>
            </div>
            <div class="mb-3 form-group">
               <label for="slnhap" class="col-form-label">Số lượng nhập</label>
               <input type="number" class="form-control" id="slnhap" name="sln" value="<?=$row['slnhap']?>">
            </div>
            <div class="mb-3 form-group">
               <label for="ngaynhap" class="col-form-label">Ngày nhập</label>
               <input type="date" class="form-control" id="ngaynhap" name="nn" value="<?=$row['ngaynhap']?>">
            </div>
            <div class="mb-3 form-group">
               <label for="slxuat" class="col-form-label">Số lượng xuất</label>
               <input type="number" class="form-control" id="slxuat" name="slx" value="<?=$row['slxuat']?>">
            </div>
            <div class="mb-3 form-group">
               <label for="ngayxuat" class="col-form-label">Ngày xuất</label>
               <input type="date" class="form-control" id="ngayxuat" name="nx" value="<?=$row['ngayxuat']?>">
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
