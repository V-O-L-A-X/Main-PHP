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
      case "lmd"   : include("loimodau.php"); break;
      case "onghut"  : include("naturalonghut.php"); break;
      case "tui"   : include("tuivai.php"); break;
      case "xaphong": include("soaptunhien.php"); break;
      case "hop"  : include("hopbamia.php"); break;
      case "binh" : include("binhkimloai.php"); break;
      default     : include("loimodau.php");
   }	   
?>