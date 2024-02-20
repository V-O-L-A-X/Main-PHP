

               <div class="topbar">
                  <nav class="navbar navbar-expand-lg navbar-light">
                     <div class="full">
                        <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
                        <div class="logo_section">
                           <a href="trangchinh.php?p=user"><img class="img-responsive" src="../hinh/logo/adminheader.png" alt="#" /></a>
                        </div>
                        <div class="right_topbar">
                           <div class="icon_info">
                              <ul>
                                 <li><a href="#"><i class="fa fa-bell-o"></i><span class="badge"></span></a></li>
                                 <li><a href="#"><i class="fa fa-question-circle"></i></a></li>
                                 <li><a href="#"><i class="fa fa-envelope-o"></i><span class="badge"></span></a></li>
                              </ul>
                              <ul class="user_profile_dd">
                                 <li>
                                    <a class="dropdown-toggle btn-lg" data-toggle="dropdown"><img class="img-responsive rounded-circle" src="../hinh/user/<?php echo $_SESSION['hinh'];?>" alt="<?php echo $_SESSION['hinh'];?>" /><span class="name_user">
                                       <?php
                                          echo $_SESSION['ten'];
                                       ?></span></a>
                                    <div class="dropdown-menu">
                                       <a class="dropdown-item" href="../admin_html/pluto-1.0.0/profile.html">Trang cá nhân</a>
                                       <a class="dropdown-item" href="../admin_html/pluto-1.0.0/settings.html">Điều chỉnh</a>
                                       <a class="dropdown-item" href="../admin_html/pluto-1.0.0/help.html">Trợ giúp</a>
                                       <a class="dropdown-item" href="xulydangxuat.php"><span>Đăng Xuất</span> <i class="fa fa-sign-out"></i></a>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </nav>
</div>
               