<?php 
session_start();
?>
<!DOCTYPE html>
<!--
Template Name: Bronea
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>ALWANIH & Co.</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<style type="text/css">
  * {box-sizing:border-box}

/* Slideshow container */
.slideshow-container {
  width: 120%;
  position: relative;
  margin: auto;
  margin-left: -10%;
}

.mySlides {
    display: none;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
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
  cursor:pointer;
  height: 13px;
  width: 13px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 3.5s;
  animation-name: fade;
  animation-duration: 3.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

.samping{
  width: 30px;
    right: 0;
    position: fixed;
    top: 33%;
    height: 230px;
    margin-right:10px;
   }
</style>
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="bgded overlay" style="//background-image:url('images/demo/backgrounds/01.png');" > 
  <!-- ################################################################################################ -->
  <!-- <div class="wrapper row0">
    <div id="topbar" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <!-- <div class="fl_left">
        <ul class="nospace">
          <li><a href="#"><i class="fa fa-lg fa-home"></i></a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="#">Login</a></li>
          <li><a href="#">Register</a></li>
        </ul>
      </div>
      <div class="fl_right">
        <ul class="nospace">
          <li><i class="fa fa-phone"></i> +00 (123) 456 7890</li>
          <li><i class="fa fa-envelope-o"></i> info@domain.com</li>
        </ul>
      </div> -->
      <!-- ################################################################################################ -->
    <!-- </div>
  </div> -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <?php include('header.php'); ?>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper">
    <div id="pageintro" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div class="slideshow-container">
        <div class="mySlides fade">
          <div class="numbertext">1 / 7</div>
          <img src="images/slide/1.png" style="width:100%">
          <div class="text"></div>
        </div>

        <div class="mySlides fade">
          <div class="numbertext">2 / 7</div>
          <img src="images/slide/2.png" style="width:100%">
          <div class="text"></div>
        </div>

        <div class="mySlides fade">
          <div class="numbertext">3 / 7</div>
          <img src="images/slide/3.png" style="width:100%">
          <div class="text"></div>
        </div>

        <div class="mySlides fade">
          <div class="numbertext">4 / 7</div>
          <img src="images/slide/4.png" style="width:100%">
          <div class="text"></div>
        </div>

        <div class="mySlides fade">
          <div class="numbertext">5 / 7</div>
          <img src="images/slide/5.png" style="width:100%">
          <div class="text"></div>
        </div>

        <div class="mySlides fade">
          <div class="numbertext">6 / 7</div>
          <img src="images/slide/6.png" style="width:100%">
          <div class="text"></div>
        </div>

        <div class="mySlides fade">
          <div class="numbertext">7 / 7</div>
          <img src="images/slide/7.png" style="width:100%">
          <div class="text"></div>
        </div>

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
      </div>
      <br>

      <div style="text-align:center">
        <!-- <span class="dot" onclick="currentSlide(1)"></span> 
        <span class="dot" onclick="currentSlide(2)"></span> 
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
        <span class="dot" onclick="currentSlide(5)"></span>
        <span class="dot" onclick="currentSlide(6)"></span>  -->
      </div>
      <!-- ################################################################################################ -->
    </div>
  </div>

  <div class="samping" >
   <a target="_blank" href="https://www.youtube.com/channel/UCwUdno3oyowqSlwi_S1ijTw"><img src="images/logo/6-2-youtube-png-picture.png" ></a>
    <a target="_blank" href="https://www.facebook.com/alwanihadvokat/?fref=ts"><img src="images/logo/facebook-icon-5.png" style="margin-top:10px;" ></a>
    <a target="_blank" href="https://twitter.com/al_advocate"><img src="images/logo/twitter-bird-icon-logo-vector-400x400.png" style="margin-top:10px;" ></a>
    <a target="_blank" href="https://plus.google.com/101720369054740362192?hl=id"><img src="images/logo/74d327d3628e4f14800301f1c61013b0.png" style="margin-top:10px;" ></a>
    <a target="_blank" href="https://www.instagram.com/al_counsellor/"><img src="images/logo/instagram-Logo-PNG-Transparent-Background-download.png" style="margin-top:10px;" ></a>
  </div>

  <!-- ################################################################################################ -->
</div>
<!-- End Top Background Image Wrapper -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">copyright &copy; 2019 - all rights reserved ALWANIH & Co. </p>
    <p class="fl_right">Visited : <b><?php echo number_format($aa,0,",",".");?></b></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>

<script type="text/javascript">
  //var slideIndex = 1;
//showSlides(slideIndex);

function plusSlides(n) {
  showSlidesnya(slideIndex += n);
}

function currentSlide(n) {
  showSlidesnya(slideIndex = n);
}

function showSlidesnya(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1} 
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none"; 
  }

  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block"; 
  dots[slideIndex-1].className += " active";
}

var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none"; 
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1} 
    slides[slideIndex-1].style.display = "block"; 
    setTimeout(showSlides, 5000); // Change image every 2 seconds
}
</script>

</body>
</html>