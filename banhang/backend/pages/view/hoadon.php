<div class="row">
                        <!-- table section -->
                        <div class="col-md-12">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Danh sách hoá đơn</h2>
                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
Thêm hoá đơn
</button>

                                 </div>
                              </div>
                              <div class="table_section padding_infor_info">
                                 <div class="table-responsive-sm ">
                                    <table class="table table-hover table-bordered border-warning " id="myTable">
                                       <thead>
                                          <tr>
                                             <th>ID</th>
                                             <th>Tên</th>
                                             <th>Email</th>
                                             <th>Điện thoại</th>
                                             <th>Địa chỉ</th>
                                             <th>Trạng thái</th>
                                             <th>Hàng được mua</th>
                                             <th>Lời nhắc của khách hàng</th>
                                             <th>Tổng giá trị</th>
                                             <th>Giảm giá</th>
                                             <th>Thành tiền</th>
                                             <th>Thao tác</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                        <?php
                                            //1.ket noi csdl
                                            require_once('../connect/connectDB.php');
                                            $sql="SELECT * FROM hoadon";
                                            $kq = mysqli_query($conn, $sql);
                                            while($row=mysqli_fetch_array($kq)){
                                                echo'<tr><td>'.$row['id'].'</td><td>'.$row['ten'].'</td><td>'.$row['email'].'</td><td>'.$row['dienthoai'].'</td><td>'.$row['diachi'].'</td>';

                                                echo '<td>';

                                                if($row['trangthai']==1)
                                                {
                                                   echo "Đã có tài khoản";
                                                }
                                                else
                                                {
                                                   echo "Chưa có tài khoản";
                                                }
                                                
                                               

                                                   
                                                echo'</td>';


                                                echo'<td>'.$row['hangduocmua'].'</td><td>'.$row['loinhac'].'</td><td>'.$row['tonggiatri'].'</td><td>'.$row['giamgia'].'%</td><td>'.$row['thanhtien'].'</td>



                                       

                                    
                                                <td class="text-center">
                                                

                                               <a href="trangchinh.php?p=../hoadon/sua&id='.$row['id'].'"><i class="fa-solid fa-pencil fa-2xl" style="color: #2bff00;"></i></a>
                                                <br><br>
                                                <a href="pages/hoadon/xulyxoa.php?x='.$row['id'].'"><i class="fa-regular fa-circle-xmark fa-2xl" style="color: #ff0000;"></i></a>
                                                
                                                
                                                </td>
                                                
                                            </tr>';
                                            }
                                        ?>
                                        
                                    </tbody>
                                    </table>
                                 </div>
                              </div>
                           </div>
                        </div>
                        
                        
                     </div>





<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Thêm hoá đơn</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <form method="POST" action="pages/hoadon/xulythem.php" enctype="multipart/form-data">
         <div class="mb-3 form-group">
               <label for="ten" class="col-form-label">Tên</label>
               <input type="text" class="form-control" id="ten" name="ten" required>
            </div>
            <div class="mb-3 form-group">
               <label for="email" class="col-form-label">Email</label>
               <input type="text" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3 form-group">
               <label for="dt" class="col-form-label">Điện thoại</label>
               <input type="text" class="form-control" id="dt" name="dt" required>
            </div>
            <div class="mb-3 form-group">
               <label for="dc" class="col-form-label">Địa chỉ</label>
               <input type="text" class="form-control" id="dc" name="dc" required>
            </div>
            <div class="mb-3 form-group">
               <label for="hdm" class="col-form-label">Hàng được mua</label>
               <input type="text" class="form-control" id="hdm" name="hdm" required>
            </div>
            <div class="mb-3 form-group">
               <label for="ln" class="col-form-label">Lời nhắc</label>
               <input type="text" class="form-control" id="ln" name="ln" required>
            </div>
            <div class="mb-3 form-group">
               <label for="tgt" class="col-form-label">Tổng giá trị</label>
               <input type="text" class="form-control" id="tgt" name="tgt" required>
            </div>
            <div class="mb-3 form-group">
               <label for="gg" class="col-form-label">Giảm giá (%)</label>
               <input type="text" class="form-control" id="gg" name="gg" required>
            </div>


            <button type="submit" class="btn btn-success" name="them">Thêm</button>

         </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Đóng</button>

      </div>
    </div>
  </div>
</div>



