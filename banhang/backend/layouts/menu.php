            <nav id="sidebar">
               <div class="sidebar_blog_1">
                  <div class="sidebar-header">
                     <div class="logo_section">
                        <a href="../admin_html/pluto-1.0.0/index.html"><img class="logo_icon img-responsive" src="../hinh/user/<?php echo $_SESSION['hinh'];?>" alt="<?php echo $_SESSION['hinh'];?>" alt="#" /></a>
                     </div>
                  </div>
                  <div class="sidebar_user_info">
                     <div class="icon_setting"></div>
                     <div class="user_profle_side">
                        <div class="user_img"><img class="img-responsive" src="../hinh/user/<?php echo $_SESSION['hinh'];?>" alt="#" /></div>
                        <div class="user_info">
                           <h6><?php
                                 echo $_SESSION['ten'];
                                    ?>
                           </h6>
                           <p><span class="online_animation"></span> Online</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="sidebar_blog_2">
                  <h4>Bảng các mục kiểm soát</h4>
                  <ul class="list-unstyled components">
                     <li><a href="trangchinh.php?p=user"><i class="fa-solid fa-users-gear" style="color: #4dff29;"></i>Các tài khoản</a></li>                  
                     <li><a href="trangchinh.php?p=sanpham"><i class="fa-solid fa-couch" style="color: #f00000;"></i>Sản Phẩm</a></li>
                     <li><a href="trangchinh.php?p=bosuutap"><i class="fa-solid fa-people-roof" style="color: #757eff;"></i>Bộ sưu tập</a></li>
                     <li><a href="trangchinh.php?p=loai"><i class="fa-solid fa-filter" style="color: #9900ff;"></i>Loại</a></li>
                     <li><a href="trangchinh.php?p=tonkho"><i class="fa-solid fa-warehouse" style="color: #ff00ea;"></i>Kho</a></li>
                     <li><a href="trangchinh.php?p=hoadon"><i class="fa-solid fa-file-invoice-dollar" style="color: #ffea00;"></i>Hoá đơn</a></li>
                     <li><a href="trangchinh.php?p=slide"><i class="fa-regular fa-image" style="color: #ffffff;"></i>Slides</a></li>
                     <li><a href="trangchinh.php?p=quangcao"><i class="fa-brands fa-adversal" style="color: #00fffb;"></i>Quảng Cáo</a></li>
                     <li><a href="trangchinh.php?p=thongtin"><i class="fa-solid fa-phone-volume" style="color: #9e7aff;"></i>Thông Tin</a></li>
                     <li><a href="trangchinh.php?p=phanhoi"><i class="fa-solid fa-envelope-open-text" style="color: #ff8800;"></i>Các phản hồi</a></li>
                     <li style="border-top: 1px red solid;"><a href="xulydangxuat.php"><i class="fa fa-cog yellow_color"></i> <span>Đăng Xuất</span></a></li>
                  </ul>

                  
               </div>
            </nav>