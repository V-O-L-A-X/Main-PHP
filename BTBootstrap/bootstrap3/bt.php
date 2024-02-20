<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bài Tập</title>
    <style>
        .caption{
            color: white;
            font-size: 20px;
            font-weight: bold;
            position:absolute;
            bottom:0%;
            background: rgba(0,0,0,0.5);
            padding: 10px;

        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
  <body>

    <div class="container">
        <div class="row">
            <div class="col-md-3 mt-2">

                <div class="card  bg-primary text-white">
                    <div class="card-header">
                        <i class="fa-solid fa-hotel fa-xl"></i>
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Khách sạn</h5>
                      <p class="card-text">Khách sạn tốt nhất tại các địa điểm du lịch nổi tiếng.</p>                     
                    </div>
                  </div>

            </div>
            <div class="col-md-3 mt-2">

                <div class="card  bg-danger text-white">
                    <div class="card-header">
                        <i class="fa-solid fa-car fa-xl"></i>
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Thuê xe</h5>
                      <p class="card-text">Dịch vụ thuê xe giá tốt từ các nhà xe uy tín và chu đáo.</p>                     
                    </div>
                  </div>

            </div>
            <div class="col-md-3 mt-2">

                <div class="card  bg-warning text-white">
                    <div class="card-header">
                        <i class="fa-solid fa-passport fa-xl"></i>
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">VISA</h5>
                      <p class="card-text">Dịch vụ Visa nhanh , rẻ. Visa trọn gói, thủ tục trọn gói. </p>                     
                    </div>
                  </div>

            </div>
            <div class="col-md-3 mt-2">

                <div class="card  bg-dark text-white">
                    <div class="card-header">
                        <i class="fa-solid fa-plane fa-xl"></i>
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Vé máy bay</h5>
                      <p class="card-text">Vé máy bay giá rẻ nhất, nhiều khuyến mãi hấp dẫn.</p>                     
                    </div>
                  </div>

            </div>
        </div>

        <div id="hinh" class="carousel slide mt-2">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#hinh" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#hinh" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#hinh" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#hinh" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="hinh/1.png" class="d-block w-100" alt="Cánh đồng hoa hướng dương">
              </div>
              <div class="carousel-item">
                <img src="hinh/2.png" class="d-block w-100" alt="Ruộng bậc thang">
              </div>
              <div class="carousel-item">
                <img src="hinh/3.png" class="d-block w-100" alt="Vịnh Hạ Long">
              </div>
              <div class="carousel-item">
                <img src="hinh/4.png" class="d-block w-100" alt="Hang Sơn Đoòng">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#hinh" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#hinh" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              
            </button>
        </div>

        <div class="row ">
            <div class="col-md-4 mt-2">

                <div class="card">
                    <div style="position:relative;">
                        <img src="hinh/5.png" class="card-img-top" alt="khách sạn 1" >
                        <div class="caption" >  Từ Hồ Chí Minh</div>
                    </div>
                   
                    
                    <div class="card-header fw-bold bg-dark-subtle">
                        Combo du lịch Sapa Khách Sạn BB Sapa 3N2Đ
                    </div>
                    <div class="card-body">
                        <div class="card-text">

                            <div class="row mx-auto">
                                <div class="col-md-6 ">
                                    <i class="fa-regular fa-clock"></i> 3 ngày 2 đêm<br>
                                    <i class="fa-regular fa-calendar-check"></i> 01-30/06/2021 
                                </div>
                                <div class="col-md-6">
                                    <br>
                                    <span class="text-danger fw-bold fs-5">4,199,000đ</span>
                                </div>
                            </div>
                        

                        </div>
                    </div>
                  </div>

            </div>

            <div class="col-md-4 mt-2">

                <div class="card">
                    <div style="position:relative;">
                        <img src="hinh/6.png" class="card-img-top" alt="khách sạn 1" >
                        <div class="caption" >  Từ Hồ Chí Minh</div>
                    </div>
                   
                    
                    <div class="card-header fw-bold bg-dark-subtle">
                        Combo du lịch Sapa Khách Sạn Pao's Sapa
                    </div>
                    <div class="card-body">
                        <div class="card-text">

                            <div class="row mx-auto">
                                <div class="col-md-6 ">
                                    <i class="fa-regular fa-clock"></i> 3 ngày 2 đêm<br>
                                    <i class="fa-regular fa-calendar-check"></i> 01-30/06/2021 
                                </div>
                                <div class="col-md-6">
                                    <br>
                                    <span class="text-danger fw-bold fs-5">2,199,000đ</span>
                                </div>
                            </div>
                        

                        </div>
                    </div>
                  </div>

            </div>

            <div class="col-md-4 mt-2">

                <div class="card">
                    <div style="position:relative;">
                        <img src="hinh/7.png" class="card-img-top" alt="khách sạn 1" >
                        <div class="caption" >  Từ Hồ Chí Minh</div>
                    </div>
                   
                    
                    <div class="card-header fw-bold bg-dark-subtle">
                        Combo du lịch Sapa 3N2Đ Khách Sạn Pao's Sapa
                    </div>
                    <div class="card-body">
                        <div class="card-text">

                            <div class="row mx-auto">
                                <div class="col-md-6 ">
                                    <i class="fa-regular fa-clock"></i> 3 ngày 2 đêm<br>
                                    <i class="fa-regular fa-calendar-check"></i> 01-30/06/2021 
                                </div>
                                <div class="col-md-6">
                                    <br>
                                    <span class="text-danger fw-bold fs-5">4,199,000đ</span>
                                </div>
                            </div>
                        

                        </div>
                    </div>
                  </div>

            </div>

            <div class="col-md-4 mt-2">

                <div class="card">
                    <div style="position:relative;">
                        <img src="hinh/8.png" class="card-img-top" alt="khách sạn 1" >
                        <div class="caption" >  Từ Hồ Chí Minh</div>
                    </div>
                   
                    
                    <div class="card-header fw-bold bg-dark-subtle">
                        Combo du lịch Sapa Khách Sạn Amazing Sapa
                    </div>
                    <div class="card-body">
                        <div class="card-text">

                            <div class="row mx-auto">
                                <div class="col-md-6 ">
                                    <i class="fa-regular fa-clock"></i> 3 ngày 2 đêm<br>
                                    <i class="fa-regular fa-calendar-check"></i> 01-30/06/2021 
                                </div>
                                <div class="col-md-6">
                                    <br>
                                    <span class="text-danger fw-bold fs-5">1,899,000đ</span>
                                </div>
                            </div>
                        

                        </div>
                    </div>
                  </div>

            </div>

            <div class="col-md-4 mt-2">

                <div class="card">
                    <div style="position:relative;">
                        <img src="hinh/9.png" class="card-img-top" alt="khách sạn 1" >
                        <div class="caption" >  Từ Hồ Chí Minh</div>
                    </div>
                   
                    
                    <div class="card-header fw-bold bg-dark-subtle">
                        Combo du lịch Sapa 3N2Đ Khách Sạn Amazing Sapa
                    </div>
                    <div class="card-body">
                        <div class="card-text">

                            <div class="row mx-auto">
                                <div class="col-md-6 ">
                                    <i class="fa-regular fa-clock"></i> 3 ngày 2 đêm<br>
                                    <i class="fa-regular fa-calendar-check"></i> 01-30/06/2021 
                                </div>
                                <div class="col-md-6">
                                    <br>
                                    <span class="text-danger fw-bold fs-5">3,799,000đ</span>
                                </div>
                            </div>
                        

                        </div>
                    </div>
                  </div>

            </div>

            <div class="col-md-4 mt-2">

                <div class="card">
                    <div style="position:relative;">
                        <img src="hinh/10.png" class="card-img-top" alt="khách sạn 1" >
                        <div class="caption" >  Từ Hồ Chí Minh</div>
                    </div>
                   
                    
                    <div class="card-header fw-bold bg-dark-subtle">
                        Combo du lịch Sapa Khách Sạn Bambo Sapa
                    </div>
                    <div class="card-body">
                        <div class="card-text">

                            <div class="row mx-auto">
                                <div class="col-md-6 ">
                                    <i class="fa-regular fa-clock"></i> 3 ngày 2 đêm<br>
                                    <i class="fa-regular fa-calendar-check"></i> 01-30/06/2021 
                                </div>
                                <div class="col-md-6">
                                    <br>
                                    <span class="text-danger fw-bold fs-5">1,799,000đ</span>
                                </div>
                            </div>
                        

                        </div>
                    </div>
                  </div>

            </div>

            

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>