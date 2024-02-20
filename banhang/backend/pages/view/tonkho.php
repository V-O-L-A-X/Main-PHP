<div class="row">
                        <!-- table section -->
                        <div class="col-md-12">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h1>Danh sách kiểm tra kho <button type="button" class="btn btn-success " data-bs-toggle="modal" data-bs-target="#exampleModal1">Thêm báo cáo</button>
                                    </h1>
                                    
                                 </div>
                              </div>
                              
                              <div class="table_section padding_infor_info">
                              
                              <div class="row">
                                    <div class="col-md-12">
                                       <div class="tab_style2">
                                          <div class="tabbar padding_infor_info">
                                             <nav>
                                                <div class="nav nav-tabs" id="nav-tab1" role="tablist">
                                                   <a class="nav-item nav-link active" id="nav-home-tab2" data-toggle="tab" href="#nav-home_s2" role="tab" aria-controls="nav-home_s2" aria-selected="true">Nhập kho</a>
                                                   <a class="nav-item nav-link" id="nav-profile-tab2" data-toggle="tab" href="#nav-profile_s2" role="tab" aria-controls="nav-profile_s2" aria-selected="false">Xuất kho</a>
                                                   
                                                </div>
                                             </nav>
                                             <div class="tab-content" id="nav-tabContent_2">
                                                <div class="tab-pane fade show active" id="nav-home_s2" role="tabpanel" aria-labelledby="nav-home-tab">
                                                <div class="table-responsive-sm">
                                                
                                    <table class="table table-hover table-bordered border-danger " id="myTable2">
                                       <thead>
                                          <tr>
                                                <th>ID</th>
                                             <th>Tên sản phẩm</th>
                                        
                                             <th>Số lượng nhập</th>
                                             <th>Ngày nhập</th>
                                             <th>Thao tác</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                        <?php
                                            //1.ket noi csdl
                                            require_once('../connect/connectDB.php');
                                            $sql="SELECT * FROM tonkho WHERE nhx=1";
                                            $kq = mysqli_query($conn, $sql);
                                            while($row=mysqli_fetch_array($kq)){
                                                echo'<tr><td>'.$row['id'].'</td>';
                                                echo '<td>';


                                                $sqlten="SELECT * FROM sanpham";
                                                $kqten = mysqli_query($conn, $sqlten);
                                                while ($rowten= $kqten->fetch_assoc())
                                                   {
                                                      if ($rowten["id"]==$row["tensp"])
                                                      {
                                                         echo $rowten["ten"];

                                                      }

                                                   }

                                                 echo ' </td>';
                                                echo '<td>'.$row['slnhap'].'</td><td>'.$row['ngaynhap'].'</td>';   

                                                echo '<td class="text-center">
                                                
                                                <a href="trangchinh.php?p=../tonkho/sua&id='.$row['id'].'"><i class="fa-solid fa-pencil fa-2xl" style="color: #2bff00;"></i></a>
                                                &nbsp&nbsp
                                                <a href="pages/tonkho/xulyxoa.php?x='.$row['id'].'"><i class="fa-regular fa-circle-xmark fa-2xl" style="color: #ff0000;"></i></a>
                                                
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
                                               
                                                <table class="table table-hover table-bordered border-danger " id="myTable">
                                       <thead>
                                          <tr>
                                                <th>ID</th>
                                             <th>Tên sản phẩm</th>
                                        
                                             <th>Số lượng xuất</th>
                                             <th>Ngày xuất</th>
                                             <th>Thao tác</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                        <?php
                                            //1.ket noi csdl
                                            
                                            $sql="SELECT * FROM tonkho WHERE nhx=2";
                                            $kq = mysqli_query($conn, $sql);
                                            while($row=mysqli_fetch_array($kq)){
                                                echo'<tr><td>'.$row['id'].'</td><td>';


                                                $sqlten="SELECT * FROM sanpham";
                                                $kqten = mysqli_query($conn, $sqlten);
                                                while ($rowten= $kqten->fetch_assoc())
                                                   {
                                                      if ($rowten["id"]==$row["tensp"])
                                                      {
                                                         echo $rowten["ten"];

                                                      }

                                                   }
                                                echo '</td><td>'.$row['slxuat'].'</td><td>'.$row['ngayxuat'].'</td>';   

                                                echo '<td class="text-center">
                                                
                                                <a href="trangchinh.php?p=../tonkho/sua&id='.$row['id'].'"><i class="fa-solid fa-pencil fa-2xl" style="color: #2bff00;"></i></a>
                                                &nbsp&nbsp
                                                <a href="pages/tonkho/xulyxoa.php?x='.$row['id'].'"><i class="fa-regular fa-circle-xmark fa-2xl" style="color: #ff0000;"></i></a>
                                                
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
<div class="modal fade" id="exampleModal1" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Thêm báo cáo</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <form method="POST" action="pages/tonkho/xulythem.php" enctype="multipart/form-data">
         <div class="mb-3 form-group">
               <label for="n" class="col-form-label">Nhập hay Xuất</label>
               <select class="form-control" name="n">
                  <option value="1">Nhập kho</option> 
                  <option value="2">Xuất kho</option>
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
                           echo "<option value='".$rowl["id"] ."'>".$rowl["ten"]."</option>";
                        }
                     ?>
               </select>
            </div>
            <div class="mb-3 form-group">
               <label for="slnhap" class="col-form-label">Số lượng nhập</label>
               <input type="number" class="form-control" id="slnhap" name="sln" >
            </div>
            <div class="mb-3 form-group">
               <label for="ngaynhap" class="col-form-label">Ngày nhập</label>
               <input type="date" class="form-control" id="ngaynhap" name="nn">
            </div>
            <div class="mb-3 form-group">
               <label for="slxuat" class="col-form-label">Số lượng xuất</label>
               <input type="number" class="form-control" id="slxuat" name="slx">
            </div>
            <div class="mb-3 form-group">
               <label for="ngayxuat" class="col-form-label">Ngày xuất</label>
               <input type="date" class="form-control" id="ngayxuat" name="nx">
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





