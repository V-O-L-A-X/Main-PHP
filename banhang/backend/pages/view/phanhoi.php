<div class="row">
                        <!-- table section -->
                        <div class="col-md-12">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Các phản hồi</h2>
                                    

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
                                             <th>Lời nhắn</th>

                                    
                                          </tr>
                                       </thead>
                                       <tbody>
                                        <?php
                                            //1.ket noi csdl
                                            require_once('../connect/connectDB.php');
                                            $sql="SELECT * FROM phanhoi";
                                            $kq = mysqli_query($conn, $sql);
                                            while($row=mysqli_fetch_array($kq)){
                                                echo'<tr><td>'.$row['id'].'</td><td>'.$row['ten'].'</td><td>'.$row['email'].'</td><td>'.$row['dienthoai'].'</td><td>'.$row['loinhan'].'</td>

                                                
                                                
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









