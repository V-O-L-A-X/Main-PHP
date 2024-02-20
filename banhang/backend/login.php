<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Đăng nhập Admin</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
      <link rel="icon" href="../admin_html/pluto-1.0.0/images/fevicon.png" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="../admin_html/pluto-1.0.0/css/bootstrap.min.css" />
      <!-- site css -->
      <link rel="stylesheet" href="../admin_html/pluto-1.0.0/style.css" />
      <!-- responsive css -->
      <link rel="stylesheet" href="../admin_html/pluto-1.0.0/css/responsive.css" />
      <!-- color css -->
      <link rel="stylesheet" href="../admin_html/pluto-1.0.0/css/colors.css" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="../admin_html/pluto-1.0.0/css/bootstrap-select.css" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="../admin_html/pluto-1.0.0/css/perfect-scrollbar.css" />
      <!-- custom css -->
      <link rel="stylesheet" href="../admin_html/pluto-1.0.0/css/custom.css" />
      <!-- calendar file css -->
      <link rel="stylesheet" href="../admin_html/pluto-1.0.0/js/semantic.min.css" />
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body class="inner_page login">
      <div class="full_container">
         <div class="container">
            <div class="center verticle_center full_height">
               <div class="login_section">
                  <div class="logo_login">
                     <div class="center">
                        <img width="210" src="../admin_html/pluto-1.0.0/images/logo/logo.png" alt="#" />
                     </div>
                  </div>
                  <div class="login_form">
                     <form method="POST" action="xulylogin.php">
                        <fieldset>
                           <div class="field">
                              <label class="label_field">Email</label>
                              <input type="email" name="email" placeholder="E-mail" required/>
                           </div>
                           <div class="field">
                              <label class="label_field">Mật khẩu</label>
                              <input type="password" name="password" placeholder="nhập mật khẩu" required/>
                           </div>
                           <div class="field">
                              <label class="label_field hidden">hidden label</label>
                              <label class="form-check-label"><input type="checkbox" class="form-check-input"> Ghi nhớ đăng nhập</label>
                              <a class="forgot" href="">Quên Mật Khẩu?</a>
                           </div>
                           <div class="field margin_0">
                              <label class="label_field hidden">hidden label</label>
                              <button class="main_bt">Đăng Nhập</button>
                           </div>
                        </fieldset>
                     </form>
                     
                  </div>
               </div>
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
      <!-- nice scrollbar -->
      <script src="../admin_html/pluto-1.0.0/js/perfect-scrollbar.min.js"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="../admin_html/pluto-1.0.0/js/custom.js"></script>
   </body>
</html>