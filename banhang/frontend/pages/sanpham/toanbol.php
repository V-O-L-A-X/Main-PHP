<div class="main-container col1-layout">
    <div class="container">
          <div class="shop-inner">
            <div class="page-title">
               
              <h2>Toàn bộ loại</h2>
            </div>
            <div class="product-grid-area">

            <table>
            <?php
                              $sql="SELECT * FROM loai";
                              $kq = mysqli_query($conn, $sql);
                              while($row=mysqli_fetch_array($kq)){
                               
                                echo'<tr>
                                <td><a href="index.php?t=sanpham/chitietloai&id='.$row['id'].'"> '.$row['ten'].' </a></td></tr>';
                                }?>  
                                </table>
                              </div>

      </div>
    </div>
  </div>