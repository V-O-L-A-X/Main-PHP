<nav>
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-4 col-xs-3">
          <div class="mm-toggle-wrap">
            <div class="mm-toggle"> <i class="fa fa-align-justify"></i> </div>
            <span class="mm-label hidden-xs"></span> </div>
          <div class="mega-container visible-lg visible-md visible-sm">

          </div>
        </div>
        <div class="col-xs-9 col-sm-6 col-md-6 hidden-xs"> 
          <!-- Search -->
          
          <div class="top-search">
            <div id="search">
            <form method="GET" action="pages/timkiem/timkiem.php">
                <div class="input-group">
                
                  <input type="text" class="form-control" placeholder="Search" name="search" value="<?php if(isset($_GET['search'])) {echo $_GET['search'];} ?>">
                  <button class="btn-search" type="submit"><i class="fa fa-search"></i></button>
                </div>
              </form>
            </div>
          </div>
          
          <!-- End Search --> 
        </div>
        <!-- top cart -->
        <?php
          $so_luong=0;
          
          if(isset($_SESSION['id_them_vao_gio']))
          {
            
          for($i=0;$i<count($_SESSION['id_them_vao_gio']);$i++)
          {
          $so_luong=$so_luong+$_SESSION['sl_them_vao_gio'][$i];
          
          
          
          }
          
          }
          
          ?>
        <div class="col-md-3 col-xs-9 col-sm-2 top-cart">
          <div class="top-cart-contain">
            <div class="mini-cart"><a href="index.php?t=giohang/giohang">
              <div class="basket dropdown-toggle"> 
                <div class="cart-icon"><i class="fa fa-shopping-cart"></i></div>
                <div class="shoppingcart-inner hidden-xs hidden-sm"><span class="cart-title">Giỏ hàng</span> <span class="cart-total"><?php echo $so_luong; ?> món </span></div>
                </a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>