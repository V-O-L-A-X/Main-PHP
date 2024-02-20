<section class="blog_post">
    <div class="container text-center">


        <?php 
            if(isset($_GET['id']))
            {echo'
          <div class="entry-detail">
            <div class="page-title">';
            $id=$_GET['id'];
            
            $sql="SELECT * FROM bosuutap WHERE id='$id'";
            $kq = mysqli_query($conn, $sql);
            while($row=mysqli_fetch_array($kq)){
                
            
            

          echo '
              <h1>'.$row['ten'].'</h1>
            </div>
            <div class="entry-photo">
              <figure><img src="../hinh/bosuutap/'.$row['hinh'].'" alt="Blog"></figure>
              
            </div>
            <div class="content-text clearfix">
              <p>Bộ sưu tập '.$row['ten'].' bao gồm:</p>
              <p><div class="product-grid-area">
              <ul class="products-grid">';
              $spbst = $row['id'];
              $sqlsp="SELECT * FROM sanpham WHERE bst='$id'";
            $kqsp = mysqli_query($conn, $sqlsp);
            while($rowsp=mysqli_fetch_array($kqsp)){
                echo '<li class="item col-lg-3 col-sm-6 col-xs-6 ">
                <div class="product-item">
                  <div class="item-inner">
                    <div class="product-thumb">
                    <figure>
                      <a href="index.php?t=sanpham/chitietsanpham&id='.$rowsp['id'].'"><img src="../hinh/sanpham/'.$rowsp['hinh'].'" alt="'.$rowsp['hinh'].'"></a></figure>
                      <div class="pr-info-area animated animate4"><a href="#" class="quick-view"><i class="fa fa-search"><span>Quick view</span></i></a> <a href="wishlist.html" class="wishlist"><i class="fa fa-heart"><span>Wishlist</span></i></a> <a href="compare.html" class="compare"><i class="fa fa-exchange"><span>Compare</span></i></a> </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"> <a href="index.php?t=sanpham/chitietsanpham&id='.$rowsp['id'].'">'.$rowsp['ten'].' </a> </div>
                        <div class="item-content">
                          <div class="item-price">';
                          if($rowsp['giakhuyenmai']==0)
                          {
                            echo '<div class="price-box" style="margin-bottom:29px;"> <span class="regular-price"> <span class="price">'.number_format($rowsp['gia']).' đồng</span> </span> </div>';
                          }
                          else
                          {
                            echo '<p class="special-price"> <span class="price-label">Giá đặc biệt</span> <span class="price">'.number_format($rowsp['giakhuyenmai']).' đồng </span> </p><br>
                              <p class="old-price"> <span class="price-label">Giá Gốc</span> <span class="price"> '.number_format($rowsp['gia']).' đồng </span> </p>';
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
                        }

              
              echo ' </ul></div></p>
            </div>
          </div>';}}?>

          <!-- Related Posts -->
          <div class="single-box">
            <h2>Các bộ sưu bạn có thể thích</h2>
            <div class="slider-items-products">
              <div id="related-posts" class="product-flexslider hidden-buttons">
              <div class="slider-items slider-width-col4 fadeInUp">
                <?php
                $sqlbst="SELECT * FROM bosuutap order by RAND()";
                $kqbst = mysqli_query($conn, $sqlbst);
                while($rowbst=mysqli_fetch_array($kqbst)){
                    echo'
            
                <div class="product-item">
                <div class="jtv-single-blog">
                 <div class="blog-image"> <a href="index.php?t=sanpham/chitietbst&id='.$rowbst['id'].'"> <img src="../hinh/bosuutap/'.$rowbst['hinh'].'" alt="Blog"> </a></div>
                 <div class="blog-content">
                   <div class="title-desc"> <a href="index.php?t=sanpham/chitietbst&id='.$rowbst['id'].'">
                     <h4>'.$rowbst['ten'].'</h4>
                     </a>
                     
                   </div>
                   
                 </div>
               </div>
                   </div>
                  ';}?>
              </div></div>
            </div>
          </div>


  </section>