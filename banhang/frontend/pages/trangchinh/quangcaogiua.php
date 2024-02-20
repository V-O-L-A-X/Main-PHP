<div class="container" >
  <p>
<style type="text/css" >
div.slideshow2 img {width:100%;height:300px;}
</style>

<div class="slideshow2" id="slideshow2" >

<?php
$sql="SELECT * FROM quangcao WHERE vitri=3";
$kq = mysqli_query($conn, $sql);
while($row=mysqli_fetch_array($kq)){
 
  echo'<img src="../hinh/quangcao/'.$row['hinh'].'">';

}
?>

</div>

<script type="text/javascript" >
var i_img2=0;
var div_slideshow2=document.getElementById("slideshow2");
var img_slideshow2=div_slideshow2.getElementsByTagName("img");
for(var i=0;i<img_slideshow2.length;i++)
{
img_slideshow2[i].style.display="none";
}
img_slideshow2[0].style.display="block";
setInterval(function(){
img_slideshow2[i_img2].style.display="none";
i_img2=i_img2+1;
if(i_img2>=img_slideshow2.length){i_img2=0;}
img_slideshow2[i_img2].style.display="block";
},7000);
</script>
</p>
</div>
