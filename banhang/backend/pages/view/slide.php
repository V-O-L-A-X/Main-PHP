<div class="row">
                        <!-- table section -->
                        <div class="col-md-12">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Danh sách Slides</h2>
                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
Thêm slide
</button>

                                 </div>
                              </div>
                              <div class="table_section padding_infor_info">
                                 <div class="table-responsive-sm ">
                                    <table class="table table-hover table-bordered border-warning " id="myTable">
                                       <thead>
                                          <tr>
                                             <th>ID</th>
                                             <th>Slide</th>
                                             <th>Thao tác</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                        <?php
                                            //1.ket noi csdl
                                            require_once('../connect/connectDB.php');
                                            $sql="SELECT * FROM slides";
                                            $kq = mysqli_query($conn, $sql);
                                            while($row=mysqli_fetch_array($kq)){
                                                echo '<tr><td>'.$row['id'].'</td><td class="text-center"><img src="../hinh/slide/'.$row['ten'].'" height="70" alt="'.$row['ten'].'"></td>

                                                <td class="text-center">
                                                
                                                <a href="trangchinh.php?p=../slide/sua&id='.$row['id'].'"><i class="fa-solid fa-pencil fa-2xl" style="color: #2bff00;"></i></a>
                                                &nbsp&nbsp
                                                <a href="pages/slide/xulyxoa.php?x='.$row['id'].'"><i class="fa-regular fa-circle-xmark fa-2xl" style="color: #ff0000;"></i></a>
                                                
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
        <h1 class="modal-title fs-5" id="exampleModalLabel">Thêm slide</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <form method="POST" action="pages/slide/xulythem.php" enctype="multipart/form-data">
         <div class="mb-3 form-group">
               <label for="hinh" class="col-form-label">Thêm slide</label>
               <input type="file" class="form-control" id="hinh" name="hinh">
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



