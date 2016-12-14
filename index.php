<?php
session_start();
if (!isset($_SESSION['user_login'])) {
	header('location: login.php');
}
?>
<?php
$serverIP = $_SERVER['HTTP_HOST'];
?>
<!DOCTYPE html>
<html>
<head>
  <!-- Site made with Mobirise Website Builder v3.9.2, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v3.9.2, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/images/ic-dialog-128x128-35.png" type="image/x-icon">
  <meta name="description" content="">
  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;subset=latin">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
  <link rel="stylesheet" href="assets/bootstrap-material-design-font/css/material.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/animate.css/animate.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>
<section id="ext_menu-i">

    <nav class="navbar navbar-dropdown bg-color transparent navbar-fixed-top">
        <div class="container">

            <div class="mbr-table">
                <div class="mbr-table-cell">

                    <div class="navbar-brand">
                        <a href="http://<?php echo "$serverIP" ?>" class="navbar-logo"><img src="assets/images/ic-dialog-128x128-35.png" alt="Mobirise"></a>
                        <a class="navbar-caption" href="http://<?php echo "$serverIP" ?>">AWAN-PI</a>
                    </div>

                </div>
                <div class="mbr-table-cell">

                    <button class="navbar-toggler pull-xs-right hidden-md-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="hamburger-icon"></div>
                    </button>

                    <ul class="nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-sm" id="exCollapsingNavbar"><li class="nav-item"><a class="nav-link link" href="http://<?php echo "$serverIP" ?>/cam">WebCam</a></li><li class="nav-item"><a class="nav-link link" href="http://<?php echo "$serverIP" ?>/monit">System Info</a></li><li class="nav-item"><a class="nav-link link" href="https://192.168.1.1/">Router</a></li><li class="nav-item nav-btn"><a class="nav-link btn btn-info" href="logout.php">LOGUOT</a></li></ul>
                    <button hidden="" class="navbar-toggler navbar-close" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="close-icon"></div>
                    </button>

                </div>
            </div>

        </div>
    </nav>

</section>

<section class="mbr-section article mbr-parallax-background mbr-after-navbar" id="msg-box8-k" style="background-image: url(assets/images/sno-2000x1333-48.png); padding-top: 120px; padding-bottom: 120px;">

    <div class="mbr-overlay" style="opacity: 0.8; background-color: rgb(34, 34, 34);">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-xs-center">
                <h3 class="mbr-section-title display-2"><span style="font-size: 3rem; line-height: 1.1;">Raspberry Pi Web Interface v1</span><br></h3>
                <div class="lead"><p><span style="font-size: 1.07rem; line-height: 1.5;">Selamat Datang di Raspberry Pi Web Inteface</span><br></p><p>Ini merupakan halaman Control untuk Raspberry Pi, yang terdiri dari menu:</p><p><span style="font-size: 1.07rem; line-height: 1.5;">WebCam: Menampilkan Live Stream dan meng-capture gambar dari webcam.</span></p><p>System Info: Menampilkan informasi sistem seperti Memory, CPU dll,</p><p>Router: Menampilkan web-gui router OpenWrt.</p><p>By Ryan Gani Dharmawan//awanjp - 2016</p></div>
                
            </div>
        </div>
    </div>

</section>

<footer class="mbr-small-footer mbr-section mbr-section-nopadding" id="footer1-t" style="background-color: rgb(50, 50, 50); padding-top: 1.75rem; padding-bottom: 1.75rem;">
    
    <div class="container">
        <p class="text-xs-center">Copyright (c) 2016 Ryan Gani Dharmawan // github.com/awanjp.</p>
    </div>
</footer>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/SmoothScroll.js"></script>
  <script src="assets/viewportChecker/jquery.viewportchecker.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touchSwipe/jquery.touchSwipe.min.js"></script>
  <script src="assets/jarallax/jarallax.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
  <input name="animation" type="hidden">
  </body>
</html>