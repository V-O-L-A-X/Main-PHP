<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bài Tập 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
<?php
$ht="";
if(isset($_POST["dc"])){
    $ht = $_POST["ten"];
    

}
?>
<div class="container">
<div class="row">
<div class="col-md-2"></div>
<div class="col-md-8 mt-2">
    
    
        <form action="" method="post" class="form-group bg-danger-subtle">
        <h1 class="bg-danger text-center text-warning p-2">THÔNG TIN ĐẶT CHỖ</h1>
        <div class="row p-2">
            <label class="col-auto col-form-label mb-2 text-danger fw-bold">Số khách tham dự bữa tiệc của quý khách: </label> 
            <div class="col"> 
                <input type="number" class="form-control" placeholder="số" name="sokhach" value="100">
            </div>
            <label class="col col-form-label text-end">Ngày: </label>
            <div class="col"> 
                <input type="date" class="form-control" placeholder="ngày" name="thoigian" value="04/06/2007">
            </div>


            <div class="col-12">
            <label class="col col-form-label me-3">Loại Tiệc: </label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" value="" id="ts">
                <label class="form-check-label" for="ts">
                  Tiệc Sáng
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" value="" id="tt" checked>
                <label class="form-check-label" for="tt">
                  Tiệc Trưa
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" value="" id="tto">
                <label class="form-check-label" for="tto">
                  Tiệc Tối
                </label>
            </div>            
            </div>

            <div class="col-12">
                <label class="col col-form-label me-3">Địa Điểm: </label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="diadiem" id="trnh">
                    <label class="form-check-label" for="trnh">
                      Trong Nhà
                    </label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="diadiem" id="ngtr" checked>
                    <label class="form-check-label" for="ngtr">
                      Ngoài Trời
                    </label>
                  </div>
            </div>

            <div class="row">    
                            
                <label class="col-auto col-form-label">Tên Quý Khách:</label>
                <div class="col"> 
                    <input type="text" class="form-control" placeholder="nhập tên" name="ten" value="nguyễn thanh">
                </div>
                <label class="col-auto col-form-label">Địa chỉ liên lạc:</label>
                <div class="col"> 
                    <input type="text" class="form-control" placeholder="nhập dc" name="diachi" value="a23 nguyễn oanh p17 q.gv">
                </div>
            </div>

            <div class="row"> 
                <label class="col-auto col-form-label">Độ Tuổi:</label>
                <select class="form-select col">
                   
                    <option value="1">Từ 0 đến 18 tuổi</option>
                    <option value="2" selected>Từ 19 đến 34 tuổi</option>
                    <option value="3">Từ 35 đến 59 tuổi</option>
                    <option value="3">Từ 60 tuổi trở lên</option>

                </select> 
                <div class="col-1">
                </div>
                <div class="col">
                    <label class="col-auto col-form-label">Giới Tính:</label> 
                    <div class="form-check form-check-inline" >
                        <input class="form-check-input" type="radio" name="gioitinh" id="nam" checked>
                        <label class="form-check-label" for="nam">
                          Nam
                        </label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gioitinh" id="nu" >
                        <label class="form-check-label" for="nam">
                          Nữ
                        </label>
                      </div>
                </div>
                <div class="col-2">
                </div>
                
            </div>

            <div class="row">
                <label class="col-auto col-form-label">Quý khách biết đến nhà hàng của chúng tôi qua:</label>
                <select class=" col form-select" multiple size="3">                    
                    <option selected>Báo Chí</option>
                    <option value="2">Đài Phát Thanh</option>
                    <option selected>Tivi</option>
                  </select>
                <div class="col-3"></div>
            </div>


            <div class="row">
                <label class="col-form-label">Các yêu cầu khác của quý khách:</label>
                
                <textarea class="form-control ms-2" placeholder="nhập yêu cầu vào đây" class="form-control">- Khung cảnh đẹp
- Không Gian khoáng Đãng
                </textarea>
            </div>
            <div class="row mt-2">
                <div class="col-4"></div>
                
                <input type="button" name="dc" value=" Đặt Chỗ " class="btn btn-success col-md-4" data-bs-toggle="modal" data-bs-target="#datcho">
                
                <div class="col-4"></div>
            </div>
            
            

        </div>

                <div class="modal fade" id="datcho" tabindex="-1" >
            <div class="modal-dialog">
              <div class="modal-content">
                
                <div class="modal-body">
                    <h1 class="bg-danger text-center text-warning p-2">THÔNG TIN ĐẶT CHỖ</h1>
                    <div class="fw-bold">
                        Thông tin khách hàng
                    </div>
                    Họ tên:
                    <?php echo $ht; ?>
                    <br>
                    Địa chỉ:
                    <div class="fw-bold">Thông tin đặt chỗ</div>
                    <div class="fw-bold">Các yêu cầu kèm theo</div>
                </div>
                
              </div>
            </div>
          </div>

        </form>
    
</div>
<div class="col-md-2"></div>
</div>
</div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>