<?php
$_SESSION['trang_chi_tiet_gio_hang']="co";
?>
<div class="main-container col1-layout">
    <div class="container">
      <div class="row">
        <div class="col-main">
        <?php 
            if(isset($_GET['id']))
            {
                echo' <div class="product-view-area">
                <div class="product-big-image col-xs-12 col-sm-5 col-lg-5 col-md-5">';
            
                $id=$_GET['id'];
                $sql="SELECT * FROM sanpham WHERE id='$id'";
                $kq = mysqli_query($conn, $sql);
                
                while($row=mysqli_fetch_array($kq)){
                
                 

              echo '<div class="large-image"> <a href="../hinh/sanpham/'.$row['hinh'].'" class="cloud-zoom" id="magni_img" data-big="../hinh/sanpham/'.$row['hinh'].'"  rel="useWrapper: false, adjustY:0, adjustX:20"> <img  src="../hinh/sanpham/'.$row['hinh'].'" alt="pr img"/></a> </div>
           
              
              <!-- end: more-images --> 
              
            </div>
            <div class="col-xs-12 col-sm-7 col-lg-7 col-md-7 product-details-area">
              <div class="product-name">
                <h1>'.$row['ten'].'</h1>';
                
                $lsp = $row['loai'];              

              $sqll="SELECT * FROM loai WHERE id='$lsp'";
              
              $kql = mysqli_query($conn, $sqll);
              
              while ($rowl = $kql->fetch_assoc())
                {
                    if ($rowl["id"]==$row["loai"]){
                        $motloaiid =$row['loai'];
                        echo "<div class='product-name'><h1 style='color:green;'>Loại: ".$rowl['ten']."</h1>" ;
                    }
                }
              

              echo '</div></div>
              
              ';
              if($row['giakhuyenmai']==0)
              {
                echo '<p> <span class="regular-price"> <span class="price">'.number_format($row['gia']).' đồng</span> </span> </p>';
              }
              else
              {
                echo '<p class="special-price"> <span class="price-label">Giá đặc biệt</span> <span class="price">'.number_format($row['giakhuyenmai']).' đồng </span> </p>
                  <p class="old-price"> <span class="price-label">Giá Gốc</span> <span class="price"> '.number_format($row['gia']).' đồng </span> </p>';
              }
                  
               

             echo'
              
              
              <div class="short-description">
                <h2>Mô tả</h2>
                <p>'.$row['noidung'].'</p>
              </div>


              <div class="product-variation">
                <form>
                <input type="hidden" name="t" value="giohang/giohang" >
                <input type="hidden" name="id" value="'.$_GET['id'].'" > 
            
                  <div class="cart-plus-minus">
                    <label >Quantity:</label>';?>

            <div class="numbers-row">
              <div onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 ) result.value--;return false;" class="dec qtybutton"><i class="fa fa-minus">&nbsp;</i></div>
              <input type="text" class="qty" title="Qty" value="1" maxlength="12" id="qty" name="so_luong">
              <div onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="inc qtybutton"><i class="fa fa-plus">&nbsp;</i></div>
            </div>
          </div>

                  <?php
                  echo'
                  <button class="button pro-add-to-cart" type="submit"><span><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</span></button>
                </form>
              </div>
              <div class="product-cart-option">
                <ul>
                  <li><a href="#"><i class="fa fa-heart"></i><span>Thêm vào yêu thích</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>';}}
?>
        </div>
      </div>
    </div>
  </div>


  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="related-product-area">
          <div class="page-header">
            <h2>Các sản phẩm cùng loại</h2>
          </div>
          <div class="related-products-pro">
            <div class="slider-items-products">
              <div id="related-product-slider" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col4">
                  <?php
                    $sqlsp="SELECT * FROM sanpham WHERE loai='$motloaiid'";
                    $kqsp = mysqli_query($conn, $sqlsp);
                    while($rowsp=mysqli_fetch_array($kqsp)){
                     
                        echo'
                        <div class="product-item">
                          <div class="item-inner">
                            <div class="product-thumb">
                            <figure>
                              <a href="index.php?t=sanpham/chitietsanpham&id='.$rowsp['id'].'"><img src="../hinh/sanpham/'.$rowsp['hinh'].'" alt="'.$rowsp['hinh'].'"></a></figure>
                              <div class="pr-info-area animated animate4"><a href="#" class="quick-view"><i class="fa fa-search"><span>Quick view</span></i></a> <a href="wishlist.html" class="wishlist"><i class="fa fa-heart"><span>Wishlist</span></i></a> <a href="compare.html" class="compare"><i class="fa fa-exchange"><span>Compare</span></i></a> </div>
                            </div>
                            <div class="item-info">
                              <div class="info-inner">
                                <div class="item-title"> <a title="Ipsums Dolors Untra" href="index.php?t=sanpham/chitietsanpham&id='.$rowsp['id'].'">'.$rowsp['ten'].' </a> </div>
                                <div class="item-content">
                                  <div class="item-price">';
                                  if($rowsp['giakhuyenmai']==0)
                                  {
                                    echo '<div class="price-box"> <span class="regular-price"> <span class="price">'.number_format($rowsp['gia']).' đồng</span> </span> </div>';
                                  }
                                  else
                                  {
                                    echo '<p class="special-price"> <span class="price-label">Giá đặc biệt</span> <span class="price">'.number_format($rowsp['giakhuyenmai']).' đồng </span> </p>
                                      <p class="old-price"> <span class="price-label">Giá Gốc</span> <span class="price"> '.number_format($rowsp['gia']).' đồng </span> </p>';
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