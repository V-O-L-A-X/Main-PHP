<?php
session_start();
if(!isset($_SESSION['email']))
{
   header('Location: login.php');
   die();
}
?>
<!DOCTYPE html>
<html lang="en">
   <head>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Quản lý Admin</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
      <link rel="icon" href="../admin_html/pluto-1.0.0/images/fevicon.png" type="../admin_html/pluto-1.0.0/image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="../admin_html/pluto-1.0.0/css/bootstrap.min.css" />
      <!-- site css -->
      <link rel="stylesheet" href="../admin_html/pluto-1.0.0/style.css" />
      <!-- responsive css -->
      <link rel="stylesheet" href="../admin_html/pluto-1.0.0/css/responsive.css" />
      <!-- color css -->

      <!-- select bootstrap -->
      <link rel="stylesheet" href="../admin_html/pluto-1.0.0/css/bootstrap-select.css" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="../admin_html/pluto-1.0.0/css/perfect-scrollbar.css" />
      <!-- custom css -->
      <link rel="stylesheet" href="../admin_html/pluto-1.0.0/css/custom.css" />
      <!-- calendar file css -->

    <!-- fancy box js -->
    <link rel="stylesheet" href="../admin_html/pluto-1.0.0/css/jquery.fancybox.css" />

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />



    


      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->


   </head>
   <body class="inner_page tables_page">
      <div class="full_container">
         <div class="inner_container">
            <!-- Sidebar  -->
<?php 
include_once("layouts/menu.php");
?>
            <!-- end sidebar -->
            <!-- right content -->
<div id="content">



               <!-- topbar -->
<?php 
include_once("layouts/header.php");
?>
               <!-- end topbar -->
               <!-- dashboard inner -->
 <div class="midde_cont">

<?php
$page=$_GET['p'];
require_once('pages/view/'.$page.'.php');
?>
                  <!-- footer -->
<?php 
include_once("layouts/footer.php");
?>
</div>

               </div>
               <!-- end dashboard inner --> 
            </div>
         </div>
      </div>
      <!-- jQuery -->
      <script src="../admin_html/pluto-1.0.0/js/jquery.min.js"></script>
      <script src="../admin_html/pluto-1.0.0/js/popper.min.js"></script>
      <script src="../admin_html/pluto-1.0.0/js/bootstrap.min.js"></script>
      <!-- wow animation -->
      <script src="../admin_html/pluto-1.0.0/js/animate.js"></script>
      <!-- select country -->
      <script src="../admin_html/pluto-1.0.0/js/bootstrap-select.js"></script>
      <!-- owl carousel -->
      <script src="../admin_html/pluto-1.0.0/js/owl.carousel.js"></script> 
      <!-- chart js -->
      <script src="../admin_html/pluto-1.0.0/js/Chart.min.js"></script>
      <script src="../admin_html/pluto-1.0.0/js/Chart.bundle.min.js"></script>
      <script src="../admin_html/pluto-1.0.0/js/utils.js"></script>
      <script src="../admin_html/pluto-1.0.0/js/analyser.js"></script>
      <!-- nice scrollbar -->
      <script src="../admin_html/pluto-1.0.0/js/perfect-scrollbar.min.js"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="../admin_html/pluto-1.0.0/js/custom.js"></script>
      <script src="../../admin_html/pluto-1.0.0/js/chart_custom_style1.js"></script>
      <!-- fancy box js -->
      <script src="../admin_html/pluto-1.0.0/js/jquery-3.3.1.min.js"></script>
      <script src="../admin_html/pluto-1.0.0/js/jquery.fancybox.min.js"></script>

      
	    <!-- calendar file css -->


	    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>

       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

       <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>



       




       <script>
         $(document).ready( function () {
    $('#myTable').DataTable();
} );
       </script>




   </body>
</html>