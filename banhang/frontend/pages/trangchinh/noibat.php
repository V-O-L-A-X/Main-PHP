<div class="col-sm-8 col-md-9 col-xs-12">
          <div class="home-tab">
            <ul class="nav home-nav-tabs home-product-tabs">
              <li class="active"><a href="#featured" data-toggle="tab" aria-expanded="false">Sản phẩm nổi bật</a></li>
            </ul>
            <div id="productTabContent" class="tab-content">
              <div class="tab-pane active in" id="featured">
                <div class="featured-pro">
                  <div class="slider-items-products">
                    <div id="featured-slider" class="product-flexslider hidden-buttons">
                      <div class="slider-items slider-width-col4">
                      <?php
                              $sql="SELECT * FROM sanpham WHERE noibat=1";
                              $kq = mysqli_query($conn, $sql);
                              while($row=mysqli_fetch_array($kq)){
                               
                                echo'
                        <div class="product-item">
                          <div class="item-inner">
                            <div class="product-thumb">
                            <figure>
                              <a href="index.php?t=sanpham/chitietsanpham&id='.$row['id'].'"><img src="../hinh/sanpham/'.$row['hinh'].'" alt="'.$row['hinh'].'"></a></figure>
                              <div class="pr-info-area animated animate4"> <a href="wishlist.html" class="wishlist"><i class="fa fa-heart"><span>Wishlist</span></i></a> <a href="index.php?t=sanpham/chitietloai&id='.$row['loai'].'" class="compare"><i class="fa fa-exchange"><span>Compare</span></i></a> </div>
                            </div>
                            <div class="item-info">
                              <div class="info-inner">
                                <div class="item-title"> <a title="Ipsums Dolors Untra" href="index.php?t=sanpham/chitietsanpham&id='.$row['id'].'">'.$row['ten'].' </a> </div>
                                <div class="item-content">
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
                                  <div class="pro-action">
                                    <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Thêm vào giỏ</span> </button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>';
                                }?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


