<!DOCTYPE html>
<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
include 'connect.php';


$stmt = $con->prepare("select * from detail  where username = ?");
$stmt->execute(array($_SESSION['username']));
// $stmt->execute();
$rows = $stmt->fetchAll();
?>


<html lang="en">
  <head>
    <title>Volunteer works</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Overpass:300,400,400i,600,700" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="works.php">Volunteer</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="home.php" class="nav-link">Home</a></li>
          <li class="nav-item active"><a href="works.php" class="nav-link">Works</a></li>
            <?php
                        include 'connect.php';
                       
                        $stmt1 = $con->prepare("select * from messages where to1 =? and priority=1");
                        $stmt1->execute(array($_SESSION['username']));
                       
                        $count10 = $stmt1->rowcount();
                        if($count10 >0){
                            echo ' <li class="nav-item active"> <a href="messages.php" class="nav-link" style="color: yellow;"> messages</a></li>';
   
                        } else {
                             echo ' <li class="nav-item active"> <a href="messages.php" class="nav-link"> messages</a></li>';
                        }
                        
                        ?>

          

        </ul>
         <div class="top-header">
                                            <div class="container h-100">
                                                <div class="row h-100">
                                                    <div class="col-12 h-100">
                                                        <div class="header-content h-100 d-flex align-items-center justify-content-between">
                                                            <div class="academy-logo">
                                                                <a href="works.php"><img src="img/core-img/logo.png" alt=""></a>
                                                            </div>
                                                            <div class="login-content">
                                                                <a href="regeister.html">Register </a>
                                                                <a href="Login.html"> / Login</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
    </div>
  </nav>
    <!-- END nav -->
    
    <div class="hero-wrap" style="background-image: url('images/bg_7.jpg');" data-stellar-background-ratio="0.5">
    </div>


    <section class="ftco-section-3 img"  style="background-color:#2E2E2E"  >
      
        <div class="container center"  align="center" >
        
        <div class="col-md-6 volunteer pl-md-5 ftco-animate center">
          <h1 class="mb-3" style="color: white">List Of Works</h1>
          
          
          <?php

foreach ($rows as $row) {
    echo "<div class='card bg-light mb-3'  style='max-width: 30rem;'  >";
    echo " <h5 class='card-header' >" ."Work Name :"."&nbsp". $row["name"] . "</h5>";
    echo "<div class='card-body '>";
    echo "<h5 class='card-title'>" ."Location of work : "."&nbsp". $row["location"] . "</h5>";
    echo "<h5 class='card-title'>" ."Link Location of work : "."&nbsp" .$row["linklocation"] . "</h5>";
    echo "<h5 class='card-title'>" ."Type of work : "."&nbsp" . $row["kind"] . "</h5>";
    echo "<h5 class='card-title'>" ."Number of volunteers required : "."&nbsp". $row["number"] . "</h5>";
    echo "<h5 class='card-text'>" ."Skills : "."&nbsp" . $row["skils"] . "</h5>";
    echo "<h5 class='card-text'>" ."Requirements : "."&nbsp". $row["requerment"] . "</h5>";

    echo "<h5 class='card-text'   >" ."Number of volunteer who submitted : "."&nbsp". $row["counter"] . "</h5>";
    echo "<a  href='show.php?id=" . $row["id"] . "' class='btn btn-warning' id='agree' >Show</a><br><br>";
    echo "</div></div>";
    
}
    ?>     
        </div>
        </div>
    </section>
    <footer class="ftco-footer ftco-section img">
      <p align="center">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >omara team</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
</footer>

   
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>