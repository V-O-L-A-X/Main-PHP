<div class="col-md-3 col-sm-4 col-xs-12">
<style type="text/css" >
div.slideshow img {width:100%}
</style>

<div class="slideshow" id="slideshow" >

<?php
$sql="SELECT * FROM quangcao WHERE vitri=1";
$kq = mysqli_query($conn, $sql);
while($row=mysqli_fetch_array($kq)){
 
  echo'<img src="../hinh/quangcao/'.$row['hinh'].'">';

}
?>

</div>

<script type="text/javascript" >
var i_img=0;
var div_slideshow=document.getElementById("slideshow");
var img_slideshow=div_slideshow.getElementsByTagName("img");
for(var i=0;i<img_slideshow.length;i++)
{
img_slideshow[i].style.display="none";
}
img_slideshow[0].style.display="block";
setInterval(function(){
img_slideshow[i_img].style.display="none";
i_img=i_img+1;
if(i_img>=img_slideshow.length){i_img=0;}
img_slideshow[i_img].style.display="block";
},5000);
</script></div>