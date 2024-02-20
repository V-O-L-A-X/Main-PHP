<div class="top-banner">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <div class="jtv-banner1" style="height:200px;"><a href="#">

          <?php
                
                $sqlsp="SELECT * FROM sanpham WHERE giakhuyenmai>0 order by RAND() LIMIT 1";
                $kqsp = mysqli_query($conn, $sqlsp);
                while($rowsp=mysqli_fetch_array($kqsp)){

                    $hinh = '<img src="../hinh/sanpham/'.$rowsp['hinh'].'" alt="'.$rowsp['hinh'].'">';
                echo $hinh;
                  
                
              
                }
              ?>
          
          </a>
            <div class="hover_content">
              <div class="hover_data">
                <div class="desc-text" style="line-height: 30px;margin-top:0;"> Các sản phẩm giảm giá </div>
                <div class="shop-now" style="margin-top:0;float:right;"><a href="index.php?t=sanpham/giamgia">Mua ngay!</a></div>
              </div>
            </div>
          </div>
          <div class="jtv-banner2"><a href=""><img src="../template/Version2/images/banner2.jpg" alt=""></a>
            <div class="hover_content">
              <div class="hover_data">
                <div class="title"> Đăng kí VIP</div>
                <div class="desc-text"> Để Được Hưởng các phúc lợi khác </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="jtv-banner3">
            <div class="jtv-banner3-inner"><a href="index.php?t=sanpham/toanbobst">
            <?php
                $sql="SELECT * FROM bosuutap order by RAND() LIMIT 1";
                $kq = mysqli_query($conn, $sql);
                while($row=mysqli_fetch_array($kq)){
                  
                $hinh = '<img src="../hinh/bosuutap/'.$row['hinh'].'" alt="'.$row['hinh'].'" style="width: 100%;
                height: 100%;object-fit: fill;">';
                echo $hinh;
              
                }
              ?>
            </a>
              <div class="hover_content">
                <div class="hover_data">
                  <div class="title">Bộ Sưu Tập </div>
                  <div class="desc-text"> Nhấn để xem thêm</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>