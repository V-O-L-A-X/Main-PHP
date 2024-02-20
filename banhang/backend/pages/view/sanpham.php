<div class="row">
                        <!-- table section -->
                        <div class="col-md-12">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Danh sách sản phẩm</h2>
                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
Thêm sản phẩm
</button>

                                 </div>
                              </div>
                              <div class="table_section padding_infor_info">
                                 <div class="table-responsive-sm ">
                                    <table class="table table-hover table-bordered border-warning " id="myTable2">
                                       <thead>
                                          <tr>
                                             <th>ID</th>
                                             <th>Tên</th>
                                             <th>Giá</th>
                                             <th>Giá Khuyến Mãi</th>
                                             <th>Nội Dung</th>
                                             <th>Loại</th>
                                             <th>Thuộc BST</th>
                                             <th>Hình</th>
                                             <th>Số lượng</th>
                                             <th>Nổi bật</th>
                                             <th>Thao tác</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                        <?php
                                            //1.ket noi csdl
                                            require_once('../connect/connectDB.php');
                                            $sql="SELECT * FROM sanpham";
                                            $kq = mysqli_query($conn, $sql);
                                            while($row=mysqli_fetch_array($kq)){
                                                echo'<tr><td>'.$row['id'].'</td><td>'.$row['ten'].'</td><td>'.$row['gia'].'</td><td>'.$row['giakhuyenmai'].'</td><td>'.$row['noidung'].'</td>';

                                                echo '<td>';
                                                $sqlchoncl="SELECT * FROM loai";
                                                $kqchoncl = mysqli_query($conn, $sqlchoncl);
                                                while ($rowcl = $kqchoncl->fetch_assoc())
                                                   {
                                                      if ($rowcl["id"]==$row["loai"])
                                                      {
                                                         echo $rowcl["ten"];

                                                      }

                                                   }
                                                echo'</td>';
                                                echo '<td>';
                                                $sqlbst="SELECT * FROM bosuutap";
                                                $kqcbst = mysqli_query($conn, $sqlbst);
                                                while ($rowbst = $kqcbst->fetch_assoc())
                                                   {
                                                      if ($rowbst["id"]==$row["bst"])
                                                      {
                                                         echo $rowbst["ten"];

                                                      }

                                                   }
                                                echo'</td>';

                                                echo "<td class='text-center'><img src='../hinh/sanpham/".$row['hinh']."' height='70' alt='".$row['hinh']."'></td><td>".$row['soluong']."</td>";

                                                echo '<td>';
                                                if ($row['noibat']==1) {

                                                   echo "Có";
                                                }
                                                else 
                                                {
                                                   echo "Không";
                                                }
                                                echo'</td>
                                                <td class="text-center">
                                                
                                                <a href="trangchinh.php?p=../sanpham/sua&id='.$row['id'].'"><i class="fa-solid fa-pencil fa-2xl" style="color: #2bff00;"></i></a>
                                                &nbsp&nbsp
                                                <a href="pages/sanpham/xulyxoa.php?x='.$row['id'].'"><i class="fa-regular fa-circle-xmark fa-2xl" style="color: #ff0000;"></i></a>
                                                
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
        <h1 class="modal-title fs-5" id="exampleModalLabel">Thêm sản phẩm</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <form method="POST" action="pages/sanpham/xulythem.php" enctype="multipart/form-data">
         <div class="mb-3 form-group">
               <label for="ten" class="col-form-label">Tên</label>
               <input type="text" class="form-control" id="ten" name="ten" required>
            </div>
            <div class="mb-3 form-group">
               <label for="gia" class="col-form-label">Giá</label>
               <input type="text" class="form-control" id="gia" name="gia" required>
            </div>
            <div class="mb-3 form-group">
               <label for="giakm" class="col-form-label">Giá Khuyến Mãi</label>
               <input type="text" class="form-control" id="giakm" name="giakm" required>
            </div>
            <div class="mb-3 form-group">
               <label for="nd" class="col-form-label">Nội dung</label>
               <input type="text" class="form-control" id="nd" name="nd" required>
            </div>
            <div class="mb-3 form-group">
               <label for="l" class="col-form-label">Loại</label>
               <select class="form-control" name="l">
                     <?php
                     $sqll="SELECT * FROM loai";
                     $kql = mysqli_query($conn, $sqll);
                        while ($rowl = $kql->fetch_assoc())
                        {
                           echo "<option value='".$rowl["id"] ."'>".$rowl["ten"]."</option>";
                        }
                     ?>
               </select>
            </div>
            <div class="mb-3 form-group">
               <label for="bst" class="col-form-label">Thuộc BST</label>
               <select class="form-control" name="bst">
                     <?php
                     $sqltbst="SELECT * FROM bosuutap";
                     $kqtbst = mysqli_query($conn, $sqltbst);
                        while ($rowtbst = $kqtbst->fetch_assoc())
                        {
                           echo "<option value='".$rowtbst["id"] ."'>".$rowtbst["ten"]."</option>";
                        }
                     ?>
               </select>
            </div>
            <div class="mb-3 form-group">
               <label for="hinh" class="col-form-label">Hình</label>
               <input type="file" class="form-control" id="hinh" name="hinh">
            </div>
            <div class="mb-3 form-group">
               <label for="nb" class="col-form-label">Nổi bật</label>
               <select class="form-control" name="nb">
                  <option value="1">Có</option>
                  <option value="2">Không</option> 
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



