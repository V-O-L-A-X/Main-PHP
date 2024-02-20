<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bài Tập Ứng Dụng</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">
        <div class="h1 text-center bg-primary-subtle text-primary-emphasis fw-bold p-3">ALBUM ẢNH TRỰC TUYẾN</div>

        <!-- Nút liệt kê thú cưng -->
        <div class="dropdown">
        <button class="btn btn-danger dropdown-toggle" type="button" data-bs-toggle="dropdown" >
            Thú Cưng
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?trang=cho">Chó</a></li>
            <li><a class="dropdown-item" href="?trang=chim">Chim</a></li>
            <li><a class="dropdown-item" href="?trang=ca">Cá</a></li>
        </ul>
        

        <!-- Nút liệt kê PCVN -->
        
        <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" >
            Phong Cảnh Việt Nam
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?trang=vqg">Vườn Quốc Gia Tràm Chim</a></li>
            <li><a class="dropdown-item" href="?trang=nt">Nha Trang</a></li>
            <li><a class="dropdown-item" href="?trang=vhl">Vịnh Hạ Long</a></li>
        </ul>
        

        <!-- Nút liệt kê PTDC -->
        
        <button class="btn btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown">
            Phương Tiện Di Chuyển
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?trang=xd">Xe Đạp</a></li>
            <li><a class="dropdown-item" href="?trang=xm">Xe Máy</a></li>
            <li><a class="dropdown-item" href="?trang=xot">Xe Ô Tô</a></li>
        </ul>
        </div>

        <!-- Nội dung -->
        <div>
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
              case "cho"   : include("infor/cho.php"); break;
              case "chim"   : include("infor/chim.php"); break;
              case "ca"   : include("infor/ca.php"); break;

              case "vqg"   : include("infor/tramchim.php"); break;
              case "nt"   : include("infor/nhatrang.php"); break;
              case "vhl"   : include("infor/vinhhalong.php"); break;

              case "xd"   : include("infor/xedap.php"); break;
              case "xm"   : include("infor/xemay.php"); break;
              case "xot"   : include("infor/xeoto.php"); break;

              
           
          }	   
		?>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>