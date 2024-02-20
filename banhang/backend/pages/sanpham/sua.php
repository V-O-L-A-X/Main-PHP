<?php
$id = $_GET["id"];
require_once('../connect/connectDB.php');
$sql="SELECT * FROM sanpham WHERE id='$id'";
$kq = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($kq);
?>

<div class="container">
   <h1 class="text-center p-3 m-2 bg-warning-subtle text-emphasis-warning">Chỉnh Sửa Thông Tin Sản Phẩm</h1>
   <div class="row">
      <div class="col-3"><button type="button" class="btn btn-outline-info btn-lg" onclick="history.back()">Quay về danh sách</button></div>
      <div class="col-6">

<form method="POST" action="pages/sanpham/xulysua.php" enctype="multipart/form-data">
<input type="hidden" name="row_id" value="<?php echo $row['id']; ?>"/>
            <div class="mb-3 form-group">
               <label for="ten" class="col-form-label">Tên Người Dùng</label>
               <input type="text" class="form-control" id="ten" name="ten" value="<?=$row['ten']?>">
            </div>
            <div class="mb-3 form-group">
               <label for="gia" class="col-form-label">Giá</label>
               <input type="text" class="form-control" id="gia" name="gia" value="<?=$row['gia']?>" required>
            </div>
            <div class="mb-3 form-group">
               <label for="giakm" class="col-form-label">Giá Khuyến Mãi</label>
               <input type="text" class="form-control" id="giakm" name="giakm" value="<?=$row['giakhuyenmai']?>" required>
            </div>
            <div class="mb-3 form-group">
               <label for="nd" class="col-form-label">Nội dung</label>
               <input type="text" class="form-control" id="nd" name="nd" value="<?=$row['noidung']?>" required>
            </div>
            <div class="mb-3 form-group">
               <label for="l" class="col-form-label">Loại</label>
               <select class="form-control" name="l">
                     <?php
                     $sqll="SELECT * FROM loai";
                     $kql = mysqli_query($conn, $sqll);
                        while ($rowl = $kql->fetch_assoc())
                        {
                           if ($rowl["id"]==$row["loai"])
                                 echo "<option value='".$rowl["id"] ."' selected>".$rowl["ten"]."</option>";
                              else
                                 echo "<option value='".$rowl["id"] ."'>".$rowl["ten"]."</option>";
                        }
                     ?>
               </select>
            </div>
            <div class="mb-3 form-group">
               <label for="bst" class="col-form-label">Thuộc BST</label>
               <select class="form-control" name="bst">
                     <?php
                     $sqlbst="SELECT * FROM bosuutap";
                     $kqbst = mysqli_query($conn, $sqlbst);
                        while ($rowbst = $kqbst->fetch_assoc())
                        {
                           if ($rowbst["id"]==$row["bst"])
                                 echo "<option value='".$rowbst["id"] ."' selected>".$rowbst["ten"]."</option>";
                              else
                                 echo "<option value='".$rowbst["id"] ."'>".$rowbst["ten"]."</option>";
                        }
                     ?>
               </select>
            </div>
            <div class="mb-3 form-group">
               <label for="hinh" class="col-form-label">Hình đại diện</label>
               <div><img src="../hinh/sanpham/<?=$row['hinh']?>" alt="<?=$row['hinh']?>" width="70"> </div>
               <input type="file" class="form-control" id="hinh" name="hinh">
            </div>
            <div class="mb-3 form-group">
               <label for="nb" class="col-form-label">Nổi bật</label>

               <select class="form-control" name="nb">
               <option value="1"<?php if($row['noibat'] == '1') { ?> selected="selected"<?php } ?>>Có</option>
               <option value="0"<?php if($row['noibat'] == '0') { ?> selected="selected"<?php } ?>>Không</option>
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
