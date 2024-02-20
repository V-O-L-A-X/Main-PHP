<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bài Tập 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>


  <?php
$a=""; $b=""; $c="";$x1="";$x2="";$kq="";$x="";
if(isset($_POST["gpt"]))
{
    $a=$_POST["a"];
    $b=$_POST["b"];
    $c=$_POST["c"];

    if(is_numeric($a) && is_numeric($b) && is_numeric($c)){
        $delta = ($b*$b)-(4*$a*$c);
        if($delta<0){
            $kq= "Phương Trình Vô Nghiệm";

        }
        
        if($delta > 0){
            $x1 = (-$b + sqrt($delta))/(2*$a);
            $x2 = (-$b - sqrt($delta))/(2*$a);
            $kq = "Hai Nghiệm Phân Biệt: x1 = " . $x1 . ", x2 = " . $x2;

        }
        else{
            $x= (-$b)/(2*$a);
            $kq= "Phương Trình Có Nghiệm Kép: x1 = x2 =" . $x;

        }
    }
}
?>


    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>

            <div class="col-md-6 mt-2">

            

                <form action="" method="post" class="form-group bg-warning-subtle" >
                <div class="h3 bg-warning text-center text-danger p-2">GIẢI PHƯƠNG TRÌNH BẬC HAI</div>
                <div class="row p-2 ">
                    <label class="col-md-3 col-form-label mb-2">Phương trình</label>
                    <div class="col-md-2">
                        <input type="text" class="form-control" placeholder="số" name="a" value="<?php echo $a; ?>">
                    </div>
                    <label class="col col-form-label">x<sup>2</sup> +</label>
                    <div class="col-md-2">
                        <input type="text" class="form-control" placeholder="số" name="b" value="<?php echo $b; ?>">
                    </div>
                    <label class="col col-form-label">x +</label>
                    <div class="col-md-2">
                        <input type="text" class="form-control" placeholder="số" name="c" value="<?php echo $c; ?>">
                    </div>
                    <label class="col col-form-label">= 0</label>

                    <label class="col-md-3 col-form-label mb-3">Nghiệm</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" placeholder="lời giải" name="kq" value="<?php echo $kq; ?> " readonly>
                    </div>
                    <div class="col-md-4"></div>

                    <input type="submit" name="gpt" value=" Giải Phương Trình " class="btn btn-success col-md-4">
                    <div class="col-md-4"></div>

                </div>
                    
                </form>

            </div>

            <div class="col-md-3"></div>


        </div>
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>