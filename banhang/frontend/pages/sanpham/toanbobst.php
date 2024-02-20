<div class="main-container col1-layout">
    <div class="container">
          <div class="shop-inner">
            <div class="page-title">
               
              <h2>Toàn bộ loại</h2>
            </div>
            <div class="product-grid-area">
            <ul class="products-grid">

        
            <?php
                              $sql="SELECT * FROM bosuutap";
                              $kq = mysqli_query($conn, $sql);
                              while($row=mysqli_fetch_array($kq)){
                               
                                echo'
                                <li class="item col-md-4 col-sm-6 col-xs-6 ">
                                <div class="product-item">
                                <div class="item-inner">
                                  <div class="product-thumb">
                                  <figure>
                                    <a href="index.php?t=sanpham/chitietbst&id='.$row['id'].'"><img src="../hinh/bosuutap/'.$row['hinh'].'" alt="'.$row['hinh'].'"></a></figure>
                                    
                                  </div>
                                  <div class="item-info">
                                    <div class="info-inner">
                                      <div class="item-title" > <a href="index.php?t=sanpham/chitietbst&id='.$row['id'].'">'.$row['ten'].' </a> </div>
                                      
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