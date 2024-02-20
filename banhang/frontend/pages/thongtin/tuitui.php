<div class="main container">
 
     <div class="about-page">
        
          
          <h1>Chúng tôi là <span class="text_color">Modern</span></h1>
          <p>Hiện tại chuyên về các mặt hàng nội thất với đa dạng các loại. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras lacus metus, convallis ut leo nec, tincidunt eleifend justo. Ut felis orci, hendrerit a pulvinar et, gravida ac lorem. Sed vitae molestie sapien, at sollicitudin tortor.<br>
            <br>
            Duis id volutpat libero, id vestibulum purus.Donec euismod accumsan felis, <a href="#">egestas lobortis velit tempor</a> vitae. Integer eget velit fermentum, dignissim odio non, bibendum velit.</p>
        </div>
        
      
  </div>
  
  <div class="our-team"> 

    
   
      
    <div class="container"> <div class="page-header">
        <h2>Chúng tôi bao gồm</h2>
    </div>
      <div class="row">
      <?php
        $sqll="SELECT * FROM users WHERE quyen=1";
        $kql = mysqli_query($conn, $sqll);
        while($row=mysqli_fetch_array($kql)){
        
        echo'
        <div class="col-xs-6 col-sm-3 col-md-3">
          <div class="wow bounceInUp" data-wow-delay="0.2s">
            <div class="team">
              <div class="inner">
                <div class="avatar"><img src="../hinh/user/'.$row['hinh'].'" alt="" class="img-responsive img-circle" /></div>
                <h5>'.$row['ten'].'</h5>
                <p class="subtitle">Nhân viên</p>
              </div>
            </div>
          </div>
        </div>';}?>

     
  </div>

