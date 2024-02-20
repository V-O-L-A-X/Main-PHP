<section class="main-container col1-layout">
    <div class="main container">
      <div class="col-main">
        <div class="compare-list">
            <?php
            if(isset($_GET['id']))
            {
            $id=$_GET['id'];
            $sql="SELECT * FROM loai WHERE id='$id'";
            $kq = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($kq);
             
              echo'
          <div class="page-title">
            <h2>'.$row['ten'].'</h2>
          </div>
          <div class="table-responsive">
   
              <table class="table table-bordered">
                <tr>
                  <th><strong>Tên sản phẩm</strong><th>
                  <th><strong>Giá</strong><th>
                  <th><strong>Miêu tả</strong><th>
                  <th><strong>Hình ảnh</strong><th>
                </tr>
                
                ';
                $sp = $row['id'];
                $sqlsp="SELECT * FROM sanpham WHERE loai='$sp'";
                $kqsp = mysqli_query($conn, $sqlsp);
                while($rowsp=mysqli_fetch_array($kqsp)){
             
              echo'<tr><td><a href="index.php?t=sanpham/chitietsanpham&id='.$rowsp['id'].'">'. $rowsp['ten'].' </a><td>
              <td>'.$rowsp['gia'].' đ<td>
              <td>'.$rowsp['noidung'].'<td>
              <td><img src="../hinh/sanpham/'.$rowsp['hinh'].'" alt="'.$rowsp['hinh'].'" height="70"><td>';}


                
                  
                  
                echo '</tr>
                
              </table>
    
          </div>';}?>
        </div>
      </div>
    </div>
  </section>