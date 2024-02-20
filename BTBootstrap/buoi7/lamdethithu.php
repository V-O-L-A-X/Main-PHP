<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Đề Thi Thử</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div id="chayhinh" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#chayhinh" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#chayhinh" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#chayhinh" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#chayhinh" data-bs-slide-to="3" aria-label="Slide 4"></button>
              <button type="button" data-bs-target="#chayhinh" data-bs-slide-to="4" aria-label="Slide 5"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="hinh/canh1.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="hinh/canh2.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="hinh/canh3.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="hinh/canh4.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="hinh/canh5.png" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#chayhinh" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#chayhinh" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
             
            </button>
        </div>

        <ul class="nav nav-pills nav-fill ">
            <li class="nav-item bg-black">
              <a class="nav-link text-white" href="?trang=gt">GIỚI THIỆU</a>
            </li>
            <li class="nav-item bg-black ms-5 me-4">
              <a class="nav-link text-white" href="?trang=kh">Khách Hàng</a>
            </li>
            <li class="nav-item bg-black ms-4 me-5">
              <a class="nav-link text-white" href="?trang=sp">Sản Phẩm</a>
            </li>
            <li class="nav-item bg-black">
              <a class="nav-link text-white" href="?trang=lh">Liên Hệ</a>
            </li>
        </ul>

        <p style="border: 1px black solid;">

            <?php
            if (isset($_GET["trang"]))
            {
               $chon = $_GET["trang"];
            }
            else
            {
                $chon = "";
            }
     
            switch($chon)
            {
                case "gt"   : include_once("gt.php"); break;
                case "kh"   : include_once("kh.php"); break;
                case "sp"   : include_once("sp.php"); break;
                case "lh"   : include_once("lh.php"); break;
                default : include_once("gt.php");
                             
             
            }	   
          ?>
        
        </p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>