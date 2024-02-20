<section class="main-container col1-layout">
    <div class="main container">
      <div class="row">
        <section class="col-main col-sm-12">
          
          <div id="contact" class="page-content page-contact">
          <div class="page-title">
            <h2>Liên lạc</h2>
          </div>
            <div id="message-box-conact">Chúc tôi luôn sẵn sàng hỗ trợ bạn mọi lúc!</div>
            <div class="row">
              <div class="col-xs-12 col-sm-6" id="contact_form_map">
                <h3 class="page-subheading">Các hình thức liên lạc</h3>
                

                <br/>
                <ul class="store_info">
                <?php

                        $sql="SELECT * FROM lienhe";
                        $kq = mysqli_query($conn, $sql);
                        while($row=mysqli_fetch_array($kq)){
                        
                        
                        echo'
                  <li><i class="fa fa-home"></i>'.$row['diachi'].'</li>
                  <li><i class="fa fa-phone"></i><span>'.$row['dienthoai'].'</span></li>
                 
                  <li><i class="fa fa-envelope"></i>Email: '.$row['email'].'</li>
                  <li>Trang : <br>'.$row['mangxahoi'].'</li>';}?>
                </ul>
              </div>
              <div class="col-sm-6">
                <h3 class="page-subheading">Phản hồi tại đây</h3>
                <div class="contact-form-box">
                    <form action="pages/thongtin/xulythemph.php" method="POST" id="myform">
                  <div class="form-selector">
                    <label>Tên</label>
                    <input type="text" class="form-control input-sm" id="name" name="ten" />
                  </div>
                  <div class="form-selector">
                    <label>Email</label>
                    <input type="text" class="form-control input-sm" id="email" name="email" />
                  </div>
                  <div class="form-selector">
                    <label>Số điện thoại</label>
                    <input type="text" class="form-control input-sm" id="phone" name="dt" />
                  </div>
                  <div class="form-selector">
                    <label>Lời nhắn</label>
                    <textarea class="form-control input-sm" rows="10" id="message" name="ln"></textarea>
                  </div>
                  <div class="form-selector">
                    <button class="button" type="submit" name="them"><i class="fa fa-send"></i>&nbsp; <span>Gửi</span></button>
                    &nbsp; <a href="javascript:document.getElementById('myform').reset();"  class="button">Huỷ</a> </div>
                    </form>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </section>