                     <div class="row">
                        <!-- table section -->
                        <div class="col-md-12">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h1>Danh sách tài khoản <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">Thêm tài khoản</button></h1>
                                    
                                 </div>
                              </div>
                              
                              <div class="table_section padding_infor_info">
                              
                              <div class="row">
                                    <div class="col-md-12">
                                       <div class="tab_style2">
                                          <div class="tabbar padding_infor_info">
                                             <nav>
                                                <div class="nav nav-tabs" id="nav-tab1" role="tablist">
                                                   <a class="nav-item nav-link active" id="nav-home-tab2" data-toggle="tab" href="#nav-home_s2" role="tab" aria-controls="nav-home_s2" aria-selected="true">Nhân viên</a>
                                                   <a class="nav-item nav-link" id="nav-profile-tab2" data-toggle="tab" href="#nav-profile_s2" role="tab" aria-controls="nav-profile_s2" aria-selected="false">Khách hàng</a>
                                                   
                                                </div>
                                             </nav>
                                             <div class="tab-content" id="nav-tabContent_2">
                                                <div class="tab-pane fade show active" id="nav-home_s2" role="tabpanel" aria-labelledby="nav-home-tab">
                                                <div class="table-responsive-sm">
                                    <table class="table table-hover table-bordered border-danger " id="myTable1">
                                       <thead>
                                          <tr>
                                             <th>ID</th>
                                             <th>Tên</th>
                                             <th>Email</th>
                                             <th>Ảnh đại diện</th>
                                             <th>Thao tác</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                        <?php
                                            //1.ket noi csdl
                                            require_once('../connect/connectDB.php');
                                            $sql="SELECT * FROM users WHERE quyen=1";
                                            $kq = mysqli_query($conn, $sql);
                                            while($row=mysqli_fetch_array($kq)){
                                                echo'<tr><td>'.$row['id'].'</td><td>'.$row['ten'].'</td><td>'.$row['email'].'</td>';

                                                echo "<td class='text-center'><img src='../hinh/user/".$row['hinh']."' height='70' alt='".$row['hinh']."'></td>";

                                                echo '<td class="text-center">
                                                
                                                <a href="trangchinh.php?p=../user/sua&id='.$row['id'].'"><i class="fa-solid fa-pencil fa-2xl" style="color: #2bff00;"></i></a>
                                                &nbsp&nbsp
                                                <a href="pages/user/xulyxoa.php?x='.$row['id'].'"><i class="fa-regular fa-circle-xmark fa-2xl" style="color: #ff0000;"></i></a>
                                                
                                                </td>
                                                
                                            </tr>';
                                            }
                                        ?>
                                        
                                    </tbody>
                                    </table>
                                 </div>
                                                </div>
                                                <div class="tab-pane fade" id="nav-profile_s2" role="tabpanel" aria-labelledby="nav-profile-tab">
                                                <div class="table-responsive-sm ">
                                    <table class="table table-hover table-bordered border-warning " id="myTable">
                                       <thead>
                                          <tr>
                                             <th>ID</th>
                                             <th>Tên</th>
                                             <th>Email</th>
                                             <th>Nhóm khách hàng</th>
                                             <th>Tổng đã mua</th>
                                             <th>Nợ</th>
                                             <th>Ảnh đại diện</th>
                                             <th>Thao tác</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                        <?php
                                            //1.ket noi csdl
                                            require_once('../connect/connectDB.php');
                                            $sql="SELECT * FROM users WHERE quyen=0";
                                            $kq = mysqli_query($conn, $sql);
                                            while($row=mysqli_fetch_array($kq)){
                                                echo'<tr><td>'.$row['id'].'</td><td>'.$row['ten'].'</td><td>'.$row['email'].'</td><td>';

                                                

                                                if($row['nhom']==1)
                                                {
                                                   echo "Khách thường";
                                                }
                                                else
                                                {
                                                   echo "VIP";
                                                }
                                                
                                               

                                                   
                                                
                                                echo'</td><td>'.$row['tongdamua'].'</td><td>'.$row['no'].'</td>';

                                                echo "<td class='text-center'><img src='../hinh/user/".$row['hinh']."' height='70' alt='".$row['hinh']."'></td>";

                                                
                                               echo '<td class="text-center">
                                                
                                                <a href="trangchinh.php?p=../user/sua&id='.$row['id'].'"><i class="fa-solid fa-pencil fa-2xl" style="color: #2bff00;"></i></a>
                                                &nbsp&nbsp
                                                <a href="pages/user/xulyxoa.php?x='.$row['id'].'"><i class="fa-regular fa-circle-xmark fa-2xl" style="color: #ff0000;"></i></a>
                                                
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
                                    </div>
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
        <h1 class="modal-title fs-5" id="exampleModalLabel">Thêm tài khoản</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <form method="POST" action="pages/user/xulythem.php" enctype="multipart/form-data">
         <div class="mb-3 form-group">
               <label for="ten" class="col-form-label">Tên</label>
               <input type="text" class="form-control" id="ten" name="ten" required>
            </div>
            <div class="mb-3 form-group">
               <label for="email" class="col-form-label">Email</label>
               <input type="text" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3 form-group">
               <label for="pass" class="col-form-label">Mật khẩu</label>
               <input type="text" class="form-control" id="pass" name="mk" required>
            </div>
            <div class="mb-3 form-group">
               <label for="nkh" class="col-form-label">Nhóm khách hàng</label>
               <select class="form-control" name="nkh">
                  <option value="1">Khách thường</option> 
                  <option value="2">VIP</option>
               </select>
            </div>
            <div class="mb-3 form-group">
               <label for="hinh" class="col-form-label">Hình đại diện</label>
               <input type="file" class="form-control" id="hinh" name="hinh">
            </div>
            <div class="mb-3 form-group">
               <label for="quyen" class="col-form-label">Quyền</label>
               <select class="form-control" name="quyen">
                  <option value="1">Admin</option>
                  <option value="0">Người Dùng</option> 
               </select>
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



