<!DOCTYPE html>

<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

session_start();
include 'connect.php';

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
   
          
        <div class="top-header" >
                                            <div class="container h-100">
                                                <div class="row h-100">
                                                    <div class="col-12 h-100">
                                                        <div class="header-content h-100 d-flex align-items-center justify-content-between">
                                                            
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
            
          
          </div>
        </div>
      </div>
    </div>

   

    


    <?php
    include 'connect.php';
    
    $id = $_GET["id"];

    $stmt = $con->prepare("select * from detail where id=?");
    $stmt->execute(array($id));
    $row = $stmt->fetch();
    $count = $stmt->rowcount();
    if ($count > 0) {
        ?>
        <h1 class="text-center">Send Massage</h1>
        <div class="container">
            <form class="form-horizontal" action="send.php" method="POST">
                <input type="hidden" name="userid" value=""/>
                <div class="form-group form-group-lg">
                    <label class="control-label col-sm-2">Name</label>
                    <div class="col-sm-10">
                        <input type="text" name="username" class="form-control " value="<?php echo $row["name"]; ?>">
                    </div>
                </div>
               
                <div class="form-group form-group-lg" >
                    <label class="control-label col-sm-2">Email</label>
                    <div class="col-sm-10">
                        <input type="email" name="email" class="form-control" value="<?php echo $row["username"]; ?>">
                    </div>
                </div>
                <div class="form-group form-group-lg">
                    <label class="control-label col-sm-2">Your Message</label>
                    <div class="col-sm-10">
                        <input type="text" name="desc" class="form-control" value="">
                    </div>
                </div>
                <div class="form-group form-group-lg">
                    <div class="col-sm-10 col-lg-offset-2">
                        <input type="submit" value="send" class="btn btn-success btn-lg">
                    </div>
                </div>


            </form>
        </div>
    <?php
} else {
    echo 'no id';
}
?>
        
       






   
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

