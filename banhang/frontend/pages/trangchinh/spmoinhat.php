<div class="jtv-category-area">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-12">
          <div class="jtv-single-cat">
            <div class="page-header">
              <h2>Sản phẩm mới nhất</h2>
            </div>
            <?php

                $sql="SELECT * FROM sanpham ORDER BY id DESC LIMIT 6 ";
                $kq = mysqli_query($conn, $sql);
                while($row=mysqli_fetch_array($kq)){
                
                  echo'
            <div class="jtv-product jtv-cat-margin">
              <div class="product-img"><img src="../hinh/sanpham/'.$row['hinh'].'" alt="'.$row['hinh'].'"></div>
              <div class="jtv-product-content">
                <h3><a href="index.php?t=sanpham/chitietsanpham&id='.$row['id'].'">'.$row['ten'].'</a></h3>
                <div class="item-price">';
                if($row['giakhuyenmai']==0)
                {
                  echo '<div class="price-box"> <span class="regular-price"> <span class="price">'.number_format($row['gia']).' đồng</span> </span> </div>';
                }
                else
                {
                  echo '<p class="special-price"> <span class="price-label">Giá đặc biệt</span> <span class="price">'.number_format($row['giakhuyenmai']).' đồng </span> </p>
                    <p class="old-price"> <span class="price-label">Giá Gốc</span> <span class="price"> '.number_format($row['gia']).' đồng </span> </p>';
                }
                    
                 

               echo' </div>
                <div class="jtv-product-action">
                  <div class="jtv-extra-link">
                    <div class="button-cart">
                      <button><i class="fa fa-shopping-cart"></i></button>
                    </div>
                    <a href="index.php?t=sanpham/chitietloai&id='.$row['loai'].'"><i class="fa fa-search"></i></a> <a href="#"><i class="fa fa-heart"></i></a> </div>
                </div>
              </div>
            </div>';}
            ?>
          </div>
        </div>
        
        <!-- quảng cáo phải -->
        <?php
include_once('pages/trangchinh/quangcaophai.php');
?>
      </div>
    </div>
  </div>