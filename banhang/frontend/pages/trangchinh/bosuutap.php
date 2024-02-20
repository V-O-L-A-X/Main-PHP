
<div class="col-md-12" > 
<br><br><p>
        <!-- Testimonials Box -->
        <div class="special-products">
      <div class="page-header">
        <h2>Các bộ sưu tập</h2>
      </div>
        <div class="testimonials">
          <div class="slider-items-products">
            <div id="testimonials-slider" class="product-flexslider home-testimonials">
            <div class="slider-items slider-width-col4 ">

              
                

                <?php
                              $sql="SELECT * FROM bosuutap";
                              $kq = mysqli_query($conn, $sql);
                              while($row=mysqli_fetch_array($kq)){
                               
                                echo'<a href="index.php?t=sanpham/chitietbst&id='.$row['id'].'"><div class="holder">
                               
                                <div class="row">
                                <div class="col-md-3"><p style="margin-top:20px;font-size:100px;line-height: 100px; font-family:"Montserrat",Georgia, serif;">'.$row['ten'].'</p></div>
                                <div class="col-md-6">
                                <img src="../hinh/bosuutap/'.$row['hinh'].'" alt="'.$row['ten'].'">
                                </div>
                                <div class="col-md-3">';
                                $id = $row['id'];

                                $sqlsp="SELECT * FROM sanpham WHERE bst='$id'";
                                $kqsp = mysqli_query($conn, $sqlsp);
                                

                                while($rowsp=mysqli_fetch_array($kqsp)){
                                  echo '<p style="text-align:left;"><img src="../hinh/logo/star.png" ><strong>'.$rowsp['ten'].'</strong></p>';
                                }
                                

                                echo '</div>
                                </div> </div></a>
                                
                                
              ';}?></div>
             
            </div></div>
          </div>
        </div>
      </div></p>
      