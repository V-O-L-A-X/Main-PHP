<?php
$id = $_GET["id"];
require_once('../connect/connectDB.php');
$sql="SELECT * FROM slides WHERE id='$id'";
$kq = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($kq);
?>

<div class="container">
   <h1 class="text-center p-3 m-2 bg-warning-subtle text-emphasis-warning">Thay Thế Slide</h1>
   <div class="row">
      <div class="col-3"><button type="button" class="btn btn-outline-info btn-lg" onclick="history.back()">Quay về danh sách</button></div>
      <div class="col-6">

<form method="POST" action="pages/slide/xulysua.php" enctype="multipart/form-data">
<input type="hidden" name="row_id" value="<?php echo $row['id']; ?>"/>
            <div class="mb-3 form-group">
               <label for="hinh" class="col-form-label">Chọn Slide mới</label>
               <div><img src="../hinh/slide/<?=$row['ten']?>" alt="<?=$row['ten']?>" width="70"> </div>
               <input type="file" class="form-control" id="hinh" name="hinh">
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
