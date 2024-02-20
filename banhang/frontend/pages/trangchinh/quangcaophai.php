<div class="col-md-4 col-sm-12 col-xs-12">
<div class="jtv-banner">
<div class="upper">

              <style type="text/css" >
div.slideshow3 img {width:100%}
</style>

<div class="slideshow3" id="slideshow3" >

<?php
$sql="SELECT * FROM quangcao WHERE vitri=2";
$kq = mysqli_query($conn, $sql);
while($row=mysqli_fetch_array($kq)){
 
  echo'<img src="../hinh/quangcao/'.$row['hinh'].'">';

}
?>

</div>

<script type="text/javascript" >
var i_img3=0;
var div_slideshow3=document.getElementById("slideshow3");
var img_slideshow3=div_slideshow3.getElementsByTagName("img");
for(var i=0;i<img_slideshow3.length;i++)
{
img_slideshow3[i].style.display="none";
}
img_slideshow3[0].style.display="block";
setInterval(function(){
img_slideshow3[i_img3].style.display="none";
i_img3=i_img3+1;
if(i_img3>=img_slideshow3.length){i_img3=0;}
img_slideshow3[i_img3].style.display="block";
},5000);
</script>
              </div>
            </div>
          </div>
        </div>