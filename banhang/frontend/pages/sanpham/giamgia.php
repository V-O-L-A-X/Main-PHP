<div class="main-container col1-layout">
    <div class="container">
          <div class="shop-inner">
            <div class="page-title">
               
              <h2>Toàn bộ sản phẩm đang giảm giá</h2>
            </div>
            <div class="product-grid-area">
              <ul class="products-grid">
                
            <?php

                              $sql="SELECT * FROM sanpham WHERE giakhuyenmai>0";
                              $kq = mysqli_query($conn, $sql);
                              while($row=mysqli_fetch_array($kq)){
                                
                               
                                echo'<li class="item col-lg-3 col-md-4 col-sm-6 col-xs-6 ">
                        <div class="product-item">
                          <div class="item-inner">
                            <div class="product-thumb">
                            <figure>
                              <a href="index.php?t=sanpham/chitietsanpham&id='.$row['id'].'"><img src="../hinh/sanpham/'.$row['hinh'].'" alt="'.$row['hinh'].'"></a></figure>
                              <div class="pr-info-area animated animate4"><a href="#" class="quick-view"><i class="fa fa-search"><span>Quick view</span></i></a> <a href="wishlist.html" class="wishlist"><i class="fa fa-heart"><span>Wishlist</span></i></a> <a href="compare.html" class="compare"><i class="fa fa-exchange"><span>Compare</span></i></a> </div>
                            </div>
                            <div class="item-info">
                              <div class="info-inner">
                                <div class="item-title"> <a title="Ipsums Dolors Untra" href="index.php?t=sanpham/chitietsanpham&id='.$row['id'].'">'.$row['ten'].' </a> </div>
                                <div class="item-content">
                                  <div class="item-price">';
                                  if($row['giakhuyenmai']==0)
                                  {
                                    echo '<div class="price-box " style="margin-bottom:29px;"> <span class="regular-price"> <span class="price">'.number_format($row['gia']).' đồng</span> </span></p></div>';
                                  }
                                  else
                                  {
                                    echo '<p class="special-price"> <span class="price-label">Giá đặc biệt</span> <span class="price">'.number_format($row['giakhuyenmai']).' đồng </span> </p><br>
                                      <p class="old-price"> <span class="price-label">Giá Gốc</span> <span class="price"> '.number_format($row['gia']).' đồng </span> </p>';
                                  }
                                      
                                   

                                 echo' </div>
                                  <div class="pro-action">
                                    <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>';
                                }?>  
                                </ul>
                              </div>

      </div>
    </div>
  </div>