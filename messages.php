<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'connect.php';
session_start();

$stmt = $con->prepare("select * from messages where to1 =? ");
$stmt->execute(array($_SESSION['username']));
$rows = $stmt->fetchAll();
$stmt1 = $con->prepare("update messages set priority=2 where to1 =? ");
$stmt1->execute(array($_SESSION['username']));
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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>

        <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
            <div class="container">
                <a class="navbar-brand" href="home.php">Volunteer </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="oi oi-menu"></span> Menu
                </button>

                <div class="collapse navbar-collapse" id="ftco-nav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active"><a href="home.php" class="nav-link">Home</a></li>
                        <li class="nav-item active"> <a href="messages.php" class="nav-link"> messages</a></li>
                    </ul>

                    <div class="top-header" >
                        <div class="container h-100">
                            <div class="row h-100">
                                <div class="col-12 h-100">
                                    <div class="header-content h-100 d-flex align-items-center justify-content-between">
                                        <div class="academy-logo">
                                            <a href="home.php"><img src="img/core-img/logo.png" alt=""></a>
                                        </div>
                                        <div class="login-content">
                                            <a href="regeister.html">Register </a>
                                            <a href="login.html"> / Login</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    </nav>
                    <!-- END nav -->

                    <div class="hero-wrap" style="background-image: url('images/bg_7.jpg');" data-stellar-background-ratio="0.5">
                        <div class="overlay"></div>
                        <div class="container">
                            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                                <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                                    <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Volunteer In Jeddah</h1>

                                </div>
                            </div>
                        </div>
                    </div>



                    <h1 class="text-center"> List of message </h1>
                    <div class="container">
                        <div class="table-responsive">
                            <table class="main-table text-center table table-bordered">
                                <tr style="background-color: black; color: white">
                                    <td>from</td>
                                    <td>Message</td>
                                </tr>

<?php
foreach ($rows as $row) {
    echo "<tr>";
    echo "<td>" . $row["from1"] . "</td>";
    echo "<td>" . $row["disc"] . "</td>";
    echo "<td> <a href='replay.php?id=" . $row['id'] . "'class='btn btn-success'> Replay </a>";
    echo "</td>";
    echo "</tr>";
}
?>
                            </table>

                        </div>
                    </div>

                </div>
               <footer class="ftco-footer ftco-section img">
      <p align="center">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >omara team</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
</footer>

        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/jquery-migrate-3.0.1.min.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.stellar.min.js"></script>
        <script src="js/jquery.countdown.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/bootstrap-datepicker.min.js"></script>
        <script src="js/aos.js"></script>

        <script src="js/main.js"></script>

</body>
</html>

