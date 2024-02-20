<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bài Tập 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
    <div class="display-1">ĐỊNH DẠNG VĂN BẢN</div>  
    <h4 style="line-height: 1.6;"> 
    <mark>Hoá học</mark>: Nước H<sub>2</sub>O - Axit Sunfuric: H<sub>2</sub>SO<sub>4</sub><br>
    <mark>Toán học</mark>: <abbr title="Phương Trình Bậc 2">PTB2</abbr>: ax<sup>2</sup> + bx + c = 0<br>
    <mark>Tin học</mark>: Vòng lặp For:
    </h4> 
        <pre>
           int tong=0;
           for(int i=0; i<=10; i++)
           {
                    tong = tong + i;
           }
           printf("Tổng các phần tử từ 1 => 10 %d\", tong);
        </pre>
        <h4>Vòng lặp While</h4>
        <pre>
           int tich=1;
           int i=1;
           while (i<=10)
           {
                    tich = tich * i;
                    i = i + 1;
           }
           printf("Tích các phần tử từ 1 => %d\n", tich);
        </pre>
    
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>