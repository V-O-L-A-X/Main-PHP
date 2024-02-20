<?php
session_start();
include_once("layouts/ham.php");
include_once('../connect/connectDB.php');
if(isset($_POST['thongtinkh']))
{
include("pages/giohang/thanhtoan.php");
}
if(isset($_POST['capnhat']))
{
 include("pages/giohang/capnhat.php");
 trang_truoc();
}



?>
<!DOCTYPE html>
<html lang="vi">

<!-- Mirrored from htmlmodern.justthemevalley.com/Version2/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Sep 2023 12:41:29 GMT -->
<head>
<!-- Basic page needs -->
<meta charset="utf-8">
<!--[if IE]>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <![endif]-->
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Cửa hàng trực tuyến</title>
<meta name="description" content="Explore the live preview of the professional Modern - Multi Purpose eCommerce Website Template get yourself knowledgeable about this theme prior to buying it. Browse through the pages, check out the images, click the buttons, explore the features.">
<meta name="keywords" content="bootstrap, ecommerce, fashion, layout, responsive, responsive template, responsive template download, responsive theme, retail, shop, shopping, store, Premium website templates, web templates, Multi-Purpose Responsive HTML5 Template"/>

<!-- Mobile specific metas  -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Favicon  -->
<link rel="shortcut icon" type="../template/Version2/image/x-icon" href="favicon.ico">


<!-- CSS Style -->

<!-- Bootstrap CSS -->
<link rel="stylesheet" type="text/css" href="../template/Version2/css/bootstrap.min.css">

<!-- font-awesome & simple line icons CSS -->
<link rel="stylesheet" type="text/css" href="../template/Version2/css/font-awesome.css" media="all">
<link rel="stylesheet" type="text/css" href="../template/Version2/css/simple-line-icons.css" media="all">

<!-- owl.carousel CSS -->
<link rel="stylesheet" type="text/css" href="../template/Version2/css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="../template/Version2/css/owl.theme.css">
<link rel="stylesheet" type="text/css" href="../template/Version2/css/owl.transitions.css">

<!-- animate CSS  -->
<link rel="stylesheet" type="text/css" href="../template/Version2/css/animate.css" media="all">

<!-- flexslider CSS -->
<link rel="stylesheet" type="text/css" href="../template/Version2/css/flexslider.css" >

<!-- jquery-ui.min CSS  -->
<link rel="stylesheet" type="text/css" href="../template/Version2/css/jquery-ui.css">

<!-- Revolution Slider CSS -->
<link href="../template/Version2/css/revolution-slider.css" rel="stylesheet">

<!-- style CSS -->
<link rel="stylesheet" type="text/css" href="../template/Version2/css/style.css" media="all">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />




  
</head>

<body class="cms-index-index cms-home-page">

<!--[if lt IE 8]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]--> 


<div id="page"> 
  
  <!-- Header -->
<?php
include_once('layouts/header.php');
?>
  <!-- end header --> 
  
  <!-- Navbar -->
  <?php
include_once('layouts/menu.php');
?>
  <!-- end nav --> 
  
  <!-- Home Slider Start -->
  
  <?php
$trang=$_GET['t'];
require_once('pages/'.$trang.'.php');
?>





  
  
  <!-- service section -->
  
  <?php
include_once('layouts/dichvu.php');
?>
  
  <!-- Footer -->
  <?php
include_once('layouts/footer.php');
?>

  <!-- End Footer --> 

  
</div>

<!-- JS --> 

<!-- jquery js --> 
<script type="text/javascript" src="../template/Version2/js/jquery.min.js"></script> 

<!-- bootstrap js --> 
<script type="text/javascript" src="../template/Version2/js/bootstrap.min.js"></script> 

<!-- Slider Js --> 
<script type="text/javascript" src="../template/Version2/js/revolution-slider.js"></script> 

<!-- owl.carousel.min js --> 
<script type="text/javascript" src="../template/Version2/js/owl.carousel.min.js"></script> 

<!-- bxslider js --> 
<script type="text/javascript" src="../template/Version2/js/jquery.bxslider.js"></script> 

<!-- megamenu js --> 
<script type="text/javascript" src="../template/Version2/js/megamenu.js"></script> 
<script type="text/javascript">
  /* <![CDATA[ */   
  var mega_menu = '0';
  
  /* ]]> */
  </script> 

<!-- jquery.mobile-menu js --> 
<script type="text/javascript" src="../template/Version2/js/mobile-menu.js"></script> 

<!--jquery-ui.min js --> 
<script type="text/javascript" src="../template/Version2/js/jquery-ui.js"></script> 

<!-- main js --> 
<script type="text/javascript" src="../template/Version2/js/main.js"></script> 

<!-- countdown js --> 
<script type="text/javascript" src="../template/Version2/js/countdown.js"></script> 

<!-- Revolution slider --> 

<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>



       




       <script>
         $(document).ready( function () {
            $('#myTable').DataTable();
            $('#myTable1').DataTable({
            pageLength : 2,
            lengthMenu: [[2, 5, 7, -1], [2, 5, 7, "All"]]
         });

         $('#myTable2').DataTable({
            pageLength : 5,
            lengthMenu: [[5, 10, 15, 20, 30, 50, -1], [5, 10, 15, 20, 30, 50, "All"]]
         });
                     
         } );
       </script>

       
<script>var tpj=jQuery;            
var bannerslide;
tpj(document).ready(function() {
    if(tpj("#banner-slide").revolution == undefined){
        revslider_showDoubleJqueryError("#banner-slide");
    }else{
        bannerslide = tpj("#banner-slide").show().revolution({
            sliderType:"standard",
            sliderLayout:"auto",
            dottedOverlay:"none",
            delay:9000,
            navigation: {
                keyboardNavigation:"off",
                keyboard_direction: "horizontal",
                mouseScrollNavigation:"off",
                mouseScrollReverse:"default",
                onHoverStop:"off",
                touch:{
                    touchenabled:"on",
                    swipe_threshold: 75,
                    swipe_min_touches: 1,
                    swipe_direction: "horizontal",
                    drag_block_vertical: false
                }
                ,
                arrows: {
                    enable: false,
                    style: 'erinyen',
                    tmp: '',
                    rtl: false,
                    hide_onleave: false,
                    hide_onmobile: true,
                    hide_under: 0,
                    hide_over: 9999,
                    hide_delay: 200,
                    hide_delay_mobile: 1200,
             
                    left: {
                        container: 'slider',
                        h_align: 'left',
                        v_align: 'center',
                        h_offset: 20,
                        v_offset: 0
                    },
             
                    right: {
                        container: 'slider',
                        h_align: 'right',
                        v_align: 'center',
                        h_offset: 20,
                        v_offset: 0
                    }
                },

                bullets: {
 
                    enable: true,
                    style: 'uranus',
                    tmp: '<span class="tp-bullet-inner"></span>',
                    direction: 'horizontal',
                    rtl: false,
             
                    container: 'slider',
                    h_align: 'center',
                    v_align: 'bottom',
                    h_offset: 0,
                    v_offset: 20,
                    space: 5,
             
                    hide_onleave: false,
                    hide_onmobile: false,
                    hide_under: 0,
                    hide_over: 9999,
                    hide_delay: 200,
                    hide_delay_mobile: 1200
             
                }                         
            },
            viewPort: {
                enable:true,
                outof:"pause",
                visible_area:"80%",
                presize:false
            },
            responsiveLevels:[1240,1024,778,480],
            visibilityLevels:[1240,1024,778,480],
            gridwidth:[1240,1024,778,480],
            gridheight:[700,600,500,400],
            lazyType:"none",
            parallax: {
                type:"mouse",
                origo:"slidercenter",
                speed:2000,
                levels:[2,3,4,5,6,7,12,16,10,50,46,47,48,49,50,55],
                type:"mouse",
            },
            shadow:0,
            spinner:"off",
            stopLoop:"off",
            stopAfterLoops:-1,
            stopAtSlide:-1,
            shuffle:"off",
            autoHeight:"off",
            hideThumbsOnMobile:"off",
            hideSliderAtLimit:0,
            hideCaptionAtLimit:0,
            hideAllCaptionAtLilmit:0,
            debugMode:false,
            fallbacks: {
                simplifyAll:"off",
                nextSlideOnWindowFocus:"off",
                disableFocusListener:false,
            }
        });
    }
}); /*ready*/</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

<!-- Mirrored from htmlmodern.justthemevalley.com/Version2/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Sep 2023 12:42:59 GMT -->
</html>
