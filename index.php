

<html>
<head>
 <title> Index </title>
<style>
    
#images{
    margin: 30px;
}

/*slide show cript*/
<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
/* slid show cript */








</style>





</style>

</head>

<body>
 <?php include 'header.php';?>
<br>
</br>
<table>
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 8</div>
  <img src="slid images/1.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 8</div>
  <img src="slid images/2.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 8</div>
  <img src="slid images/3.jpg" style="width:100%">
  <div class="text" color=green"; ></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 8</div>
  <img src="slid images/4.jpg" style="width:100%">
  <div class="text"></div>
</div>



<div class="mySlides fade">
  <div class="numbertext">5 / 8</div>
  <img src="slid images/5.jpg" style="width:100%">
  <div class="text"></div>
</div>


<div class="mySlides fade">
  <div class="numbertext">6 / 8</div>
  <img src="slid images/6.jpg" style="width:100%">
  <div class="text"></div>
</div>


<div class="mySlides fade">
  <div class="numbertext">7 / 8</div>
  <img src="slid images/7.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">8 / 8</div>
  <img src="slid images/8.jpg" style="width:100%">
  <div class="text"></div>
</div>



</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
  
</div>

<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
<br> <br>
</table>


<center>


<table>
<tr>

<td><img src="images/certify.jpg"  width="300" height="90"> </td>

</tr>
</table>
<br>
<table>

    <th> <a href="airduct.php">   <img src="images/products/pro7.png" ></a> <p style="font-size:80%;"> Air Connector UL<br> Listed 181 Class 1</P></th>   
      <th> <a href="flexibleduct.php">   <img src="images/products/pro9.png" ></a> <p style="font-size:80%;">Insulated Flexible Duct,<br> UL 723 Aluminum Jacket</P></th>
    <th> <a href="flexible181.php">   <img src="images/products/pro10.png" ></a> <p style="font-size:80%;">Insulated Flexible Air Duct<br> UL Listed 181 Class 1,<br> Aluminum Inner Core & Jacket</P></th> 
  
    <th> <a href="inso.php">   <img src="images/products/pro6.png" height="205" width="200"/></a> <p style="font-size:80%;">Arm O Flex Insulation Tubing <br> <br></P></th>


</table>
<br>
<table>
<tr id="images">

    <th> <a href="stand.php">   <img src="images/products/pro1.png" height="200" width="200"/></a>  <p style="font-size:80%;">Heat Pump Floor Stand</P></th>
    <th> <a href="stand.php">   <img src="images/products/pro5.png" height="200" width="200"/></a> <p style="font-size:80%;">Aluminum Adjustable <br> heat pump floor stand</P></th>
    <th> <a href="wallmb.php"> <img src="images/products/pro4.png" height="200" width="200"/></a> <p style="font-size:80%;">Heat Pump Wall<br>Mounting Brackets</P></th>
    <th> <a href="lbracket.php"> <img src="images/products/pro2.png" height="200" width="200"/></a> <p style="font-size:80%;">L Series Blak Brackets</P></th>
    <th> <a href="ubracket.php"> <img src="images/products/pro3.png" height="200" width="200"/></a>  <p style="font-size:80%;">U  Series Brackets</P></th>
    <th> <a href="anchor.php">   <img src="images/products/pro8.png" ></a> <p style="font-size:80%;">Concrete Anchor Bolt</P></th>  
   
   
 </tr>
</table>   





<br>
</br>
    <?php include'footer.php';?> 

</center>

</body>
</html>