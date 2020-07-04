<!DOCTYPE html>
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
                <a class="navbar-brand" href="home.php">Volunteer </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="oi oi-menu"></span> Menu
                </button>

                <div class="collapse navbar-collapse" id="ftco-nav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active"><a href="home.php" class="nav-link">Home</a></li>
                        <li class="nav-item active"><a href="works.php" class="nav-link" >Works</a></li>
                        <?php
                        include 'connect.php';
                        session_start();

                        $stmt = $con->prepare("select * from messages where to1 =? and priority=1");
                        $stmt->execute(array($_SESSION['username']));
                        $rows = $stmt->fetchAll();
                        $count = $stmt->rowcount();
                        if($count >0){
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
                                            <a href="index.html"><img src="img/core-img/logo.png" alt=""></a>

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

                </div>
        </nav>
        <!-- END nav -->

        <div class="hero-wrap" style="background-image: url('images/bg_7.jpg');" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                    <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                        <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }" >Volunteer </h1>

                    </div>
                </div>
            </div>
        </div>





        <section class="ftco-section-3 img" style="background-color:#2E2E2E" >

            <div class="container" align="center">

                <div class="col-md-6 volunteer pl-md-5 ftco-animate">
                    <h3 class="mb-3">Add work</h3>
                    <form action="detaile.php" class="volunter-form" method="post">
                        <div class="form-group" align="left">
                            <label  for="namefield">Workname</label>
                            <input type="text" class="form-control" placeholder="work Name" name="workname">
                        </div>
                        <div class="form-group" align="left" >
                            <label for="namefield">Location of Neighborhoods </label>
                                
                            
                          
                            <select class="form-control" name="location" id="location" style="background-color:#2E2E2E;" >
                                <option value="" style="background-color: gray;">أحياء جدة</option>
                                                              <option style="background-color: gray;">حي الصفا </option>
                                                              <option style="background-color: gray;">حي العزيزية </option>
                                                              <option style="background-color: gray;">حي النسيم</option>
                                                              <option style="background-color: gray;">حي بني مالك</option>
                                                              <option style="background-color: gray;">جدة التاريخية</option>
                                                              <option style="background-color: gray;">الحرازات</option>
                                                              <option style="background-color: gray;">حي الشاطئ</option>
                                                              <option style="background-color: gray;">حي المحمدية</option>
                                                              <option style="background-color: gray;">حي المرجان</option>
                                                              <option style="background-color: gray;">حي البساتين</option>
                                                              <option style="background-color: gray;">حي الاندلس</option>
                                                              <option style="background-color: gray;">حي الكورنيش الشمالي</option>
                                                              <option style="background-color: gray;">حي النهضة</option>
                                                              <option style="background-color: gray;">حي الرحاب</option>
                                                              <option style="background-color: gray;">حي البغدادية الشرقية</option>
                                                              <option style="background-color: gray;">حي الشرفية</option>
                                                              <option style="background-color: gray;">حي المطار القديم</option>
                                                              <option style="background-color: gray;">حي البلد</option>
                                                              <option style="background-color: gray;">حي الوزيريه</option>
                                                              <option style="background-color: gray;">حي الهنداوية</option>
                                                              <option style="background-color: gray;">حي السالمية الشرقية</option>
                                                              <option style="background-color: gray;">حي النزلة اليمانية</option>
                                                              <option style="background-color: gray;">حي المدينة الصناعية</option>
                                                              <option style="background-color: gray;">حي الاسكان الجنوبي</option>
                                                              <option style="background-color: gray;">حي مدينة السلطان</option>
                                                              <option style="background-color: gray;">حي الفيصلية</option>
                                                              <option style="background-color: gray;">حي الزهراء</option>
                                                              <option style="background-color: gray;">حي ابحر الجنوبية</option>
                                                              <option style="background-color: gray;">حي النزهة</option>
                                                              <option style="background-color: gray;">حي النعيم</option>
                                                              <option style="background-color: gray;">حي البوادي</option>
                                                              <option style="background-color: gray;">حي الخالدية</option>
                                                              <option style="background-color: gray;">حي الحمدانية</option>
                                                              <option style="background-color: gray;">حي الكندرة</option>
                                                              <option style="background-color: gray;">حي السلامة</option>
                                                              <option style="background-color: gray;">حي بريمان</option>
                                                              <option style="background-color: gray;">حي المروة</option>
                                                              <option style="background-color: gray;">حي الحمدانية</option>
                                                              <option style="background-color: gray;">حي العمارية</option>
                                                              <option style="background-color: gray;">حي عبيد</option>
                                                              <option style="background-color: gray;">حي حارة البحر</option>
                                                              <option style="background-color: gray;">حي حارة الشام</option>
                                                              <option style="background-color: gray;">حي حارة المظلوم</option>
                                                              <option style="background-color: gray;">حي حارة اليمن</option>
                                                              <option style="background-color: gray;">حي قويزة</option>
                                                              <option style="background-color: gray;">حي القريات</option>
                                                              <option style="background-color: gray;">حي المحجر</option>
                                                        </select>
                           
                           
                        </div>
                        <div class="form-group" align="left" >
                            <label  for="namefield">Add Link location</label>
                            <input type="text" class="form-control" placeholder="Link Of Location" name="linklocation">
                        </div>
                        <div class="form-group" align="left">
                            <label  for="namefield">Type</label>
                            <input type="text" class="form-control" placeholder="type of work" name="kind">
                        </div>
                        <div class="form-group" align="left">
                            <label  for="namefield">Number</label>
                            <input type="text" class="form-control" placeholder="number of volunteers required" name="number">
                        </div>

                        <div class="form-group"  align="left">
                            <label  for="namefield">Skills</label>
                            <textarea   name="skils" cols="30" rows="3" class="form-control" placeholder="skills of volunteers"></textarea>
                        </div>
                        <div class="form-group"  align="left">
                            <label  for="namefield">Requirement</label>
                            <textarea   name="requerment" cols="30" rows="3" class="form-control" placeholder="Requirement of volunteers"></textarea>
                        </div>
                        <div class="form-group">

                            <input type="submit" value="Add" class="btn btn-white py-3 px-5">
                        </div>
                    </form>
                </div>    			
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