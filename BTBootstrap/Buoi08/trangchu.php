<?php
   $conn = mysqli_connect("localhost", "root", "", "kiemtra");
   if (! $conn)
   {
      die("Kết nối thất bại");
      //  echo "Kết nối thất bại";
      //  exit();
   }
   
   $caulenh = "Select * from loaisanpham";
   



   $dulieu = mysqli_query($conn, $caulenh);
   
   

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Thi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-3 border border-2 border-dark">
        
          


            <div class="list-group list-group-numbered ">
              <div class="bg-dark text-white p-2 text-center fw-bold" >
                DOANH MỤC LOẠI
              </div>


              <?php

              while($row = mysqli_fetch_assoc($dulieu))
              {
                      
              echo '<a href="?trang=sp&loai='.$row['ma'].'" class="list-group-item list-group-item-action border-0">' .$row["ten"] . '</a>';
                      
              }
              mysqli_close($conn);

        
              ?>
        
            </div>
            <div class="list-group list-group-numbered ">
              <div class="bg-dark text-white p-2 text-center fw-bold" >
                HỆ THỐNG
              </div>
              <a href="?trang=gt" class="list-group-item list-group-item-action border-0">Giới Thiệu</a>
              <a href="?trang=lh" class="list-group-item list-group-item-action border-0">Liên Hệ</a>
              </div>

          

        </div>
        <div class="col-md-9 border border-start-0 border-2 border-dark">


          <img src="hinh/logo.png"  class="rounded-circle img-fluid w-25 mx-auto d-block mb-2">

          <h1 class="text-center mb-2">KHÁCH HÀNG LÀ THƯỢNG ĐẾ</h1>



          <div id="chayhinh" class="carousel slide carousel-fade mb-3" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#chayhinh" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#chayhinh" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#chayhinh" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#chayhinh" data-bs-slide-to="3" aria-label="Slide 4"></button>
             
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
              
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#chayhinh" data-bs-slide="prev">
              
              
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#chayhinh" data-bs-slide="next">
              
             
            </button>
        </div>


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
                case "sp"   : include_once("mucluc.php"); break;
        
                case "gt"   : include_once("gt.php"); break;
                case "lh"   : include_once("lh.php"); break;
                default : include_once("gt.php");
                            
                                         
             
            }    
          ?>
        </div>
      </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>