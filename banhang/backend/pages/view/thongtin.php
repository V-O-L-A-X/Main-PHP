<div class="row">
                        <!-- table section -->
                        <div class="col-md-12">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Liên Hệ</h2>
                                    

                                 </div>
                              </div>
                              <div class="table_section padding_infor_info">
                                 <div class="table-responsive-sm ">
                                    <table class="table table-hover table-bordered border-warning ">
                                       <thead>
                                          <tr>
                                             <th>Địa chỉ</th>
                                             <th>Điện thoại</th>
                                             <th>Email</th>
                                             <th>Mạng xã hội</th>
                                             <th>Sửa</th>
                                             
                                          </tr>
                                       </thead>
                                       <tbody>
                                        <?php
                                            //1.ket noi csdl
                                            require_once('../connect/connectDB.php');
                                            $sql="SELECT * FROM lienhe";
                                            $kq = mysqli_query($conn, $sql);
                                            while($row=mysqli_fetch_array($kq)){

                                                echo '<tr><td>'.$row['diachi'].'</td><td>'.$row['dienthoai'].'</td><td>'.$row['email'].'</td><td>'.$row['mangxahoi'].'</td>
                                                
                                               



                                       

                                    
                                                <td class="text-center">
                                                

                                               <a href="trangchinh.php?p=../thongtin/sualh&id='.$row['id'].'"><i class="fa-solid fa-pencil fa-2xl" style="color: #2bff00;"></i></a>
                                               
                                                
                                                
                                                </td>
                                                
                                            </tr>';}
                                            
                                        ?>
                                        
                                    </tbody>
                                    </table>
                                 </div>
                              </div>
                           </div>
                        </div>
                        
                        
                     </div>








