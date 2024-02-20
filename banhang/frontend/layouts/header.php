<header>
    <div class="header-container">
      <div class="header-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-sm-4 hidden-xs"> 
              <!-- Default Welcome Message -->
              <div class="welcome-msg ">Chào mừng đến với cửa hàng nội thất trực tuyến</div>
            </div>
            
            <!-- top links -->
            <div class="headerlinkmenu col-lg-8 col-md-7 col-sm-8 col-xs-12">
              <div class="links">
                <div class="myaccount"><a title="My Account" href="account_page.html"><i class="fa fa-user"></i><span class="hidden-xs">Trang cá nhân</span></a></div>
                <div class="wishlist"><a title="My Wishlist" href="wishlist.html"><i class="fa fa-heart"></i><span class="hidden-xs">Yêu thích</span></a></div>
                <div class="login"><a href="account_page.html"><i class="fa fa-unlock-alt"></i><span class="hidden-xs">Đăng nhập</span></a></div>
              </div>
              <div class="language-currency-wrapper">
                <div class="inner-cl">
                  <div class="block block-language form-language">
                    <div class="lg-cur"> <span> <img src="../template/Version2/images/flag-default.jpg" alt="French"> <span class="lg-fr">French</span> <i class="fa fa-angle-down"></i> </span> </div>
                    <ul>
                      <li> <a class="selected" href="#"> <img src="../template/Version2/images/flag-english.jpg" alt="flag"> <span>English</span> </a> </li>
                      <li> <a href="#"> <img src="../template/Version2/images/flag-default.jpg" alt="flag"> <span>French</span> </a> </li>
                      <li> <a href="#"> <img src="../template/Version2/images/flag-german.jpg" alt="flag"> <span>German</span> </a> </li>
                      <li> <a href="#"> <img src="../template/Version2/images/flag-brazil.jpg" alt="flag"> <span>Brazil</span> </a> </li>
                      <li> <a href="#"> <img src="../template/Version2/images/flag-chile.jpg" alt="flag"> <span>Chile</span> </a> </li>
                      <li> <a href="#"> <img src="../template/Version2/images/flag-spain.jpg" alt="flag"> <span>Spain</span> </a> </li>
                    </ul>
                  </div>
                  <div class="block block-currency">
                    <div class="item-cur"> <span>USD </span> <i class="fa fa-angle-down"></i></div>
                    <ul>
                      <li> <a href="#"><span class="cur_icon">€</span> EUR</a> </li>
                      <li> <a href="#"><span class="cur_icon">¥</span> JPY</a> </li>
                      <li> <a class="selected" href="#"><span class="cur_icon">$</span> USD</a> </li>
                    </ul>
                  </div>
                </div>
                
                <!-- End Default Welcome Message --> 
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-sm-4 col-md-3 col-xs-12"> 
            <!-- Header Logo -->
            <div class="logo"><a title="e-commerce" href="index.php?t=trangchinh/trangchinh"><img alt="e-commerce" src="../template/Version2/images/logo.png"></a> </div>
            <!-- End Header Logo --> 
          </div>
          <div class="col-md-9 col-sm-8 hidden-xs">
            <div class="mtmegamenu">
              <ul>
                <li class="mt-root demo_custom_link_cms">
                  <div class="mt-root-item"><a href="index.php?t=trangchinh/trangchinh">
                    <div class="title title_font"><span class="title-text">Trang chủ</span></div>
                    </a></div>
                </li>
                <li class="mt-root">
                  <div class="mt-root-item"><a href="#">
                    <div class="title title_font"><span class="title-text">Bạn cần tìm gì?</span></div>
                    </a></div>
                  <ul class="menu-items col-xs-12">
                    <li class="menu-item depth-1 menucol-1-3 ">
                      <div class="title title_font"> <a href="index.php?t=sanpham/toanbosp"> Sản phẩm </a></div>
                      <ul class="submenu">
                      <?php
                              $sqlsp="SELECT * FROM sanpham order by RAND() LIMIT 5";
                              $kqsp = mysqli_query($conn, $sqlsp);
                              while($row=mysqli_fetch_array($kqsp)){
                               
                                echo'

                                <li class="menu-item">
                                  <div class="title"> <a href="index.php?t=sanpham/chitietsanpham&id='.$row['id'].'">'. $row['ten'].' </a></div>
                                </li>' ;
                              }
                        ?>
                      </ul>
                    </li>
                    <li class="menu-item depth-1 menucol-1-3 ">
                      <div class="title title_font"> <a href="index.php?t=sanpham/toanbobst"> Bộ sưu tập </a></div>
                      <ul class="submenu">
                      <?php
                              $sqlbst="SELECT * FROM bosuutap order by RAND() LIMIT 5";
                              $kqbst = mysqli_query($conn, $sqlbst);
                              while($row=mysqli_fetch_array($kqbst)){
                               
                                echo'

                                <li class="menu-item">
                                  <div class="title"> <a href="index.php?t=sanpham/chitietbst&id='.$row['id'].'">'. $row['ten'].' </a></div>
                                </li>' ;
                              }
                        ?>

                      </ul>
                    </li>
                    <li class="menu-item depth-1 menucol-1-3 ">
                      <div class="title title_font"> <a href="index.php?t=sanpham/toanbol"> Loại sản phẩm </a></div>
                      <ul class="submenu">
                      <?php
                              $sqll="SELECT * FROM loai order by RAND() LIMIT 5";
                              $kql = mysqli_query($conn, $sqll);
                              while($row=mysqli_fetch_array($kql)){
                               
                                echo'
                        <li class="menu-item">
                          <div class="title"> <a href="index.php?t=sanpham/chitietloai&id='.$row['id'].'"> '.$row['ten'].' </a></div>
                        </li>' ;
                            }
                      ?>
                      </ul>
                    </li>

                  </ul>
                </li>
                <li class="mt-root">
                  <div class="mt-root-item"><a href="index.php?t=thongtin/lienhe">
                    <div class="title title_font"><span class="title-text">Liên hệ</span> </div>
                    </a></div>
                </li>
                <li class="mt-root">
                  <div class="mt-root-item"><a href="index.php?t=thongtin/tuitui">
                    <div class="title title_font"><span class="title-text">Chúng tôi là...</span></div>
                    </a></div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>