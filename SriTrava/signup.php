<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include './action/dbconnection.php';
?>
<html>
    <head>
       <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Luxe &mdash; 100% Free Fully Responsive HTML5 Template by FREEHTML5.co</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
        <meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
        <meta name="author" content="FREEHTML5.CO" />


        <meta property="og:title" content=""/>
        <meta property="og:image" content=""/>
        <meta property="og:url" content=""/>
        <meta property="og:site_name" content=""/>
        <meta property="og:description" content=""/>
        <meta name="twitter:title" content="" />
        <meta name="twitter:image" content="" />
        <meta name="twitter:url" content="" />
        <meta name="twitter:card" content="" />


        <link rel="shortcut icon" href="favicon.ico">

        <link rel="stylesheet" href="css/superfish.css">

        <link rel="stylesheet" href="css/bootstrap-datepicker.min.css">

        <link rel="stylesheet" href="css/cs-select.css">
        <link rel="stylesheet" href="css/cs-skin-border.css">


        <link rel="stylesheet" href="css/themify-icons.css">

        <link rel="stylesheet" href="css/flaticon.css">

        <link rel="stylesheet" href="css/icomoon.css">

        <link rel="stylesheet" href="css/flexslider.css">


        <link rel="stylesheet" href="css/style.css">


        <script src="js/modernizr-2.6.2.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link type="text/css" rel="stylesheet" href="login.css">



    </head>
    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
       
       <?php 
       include './header.php';
        ?>
        
 <form class="row g-3" action="action/doregister.php" method="POST">
        <div style="background-image: url(homeimg/fading-blue-background.jpg);" class="container-fluid">
            <div style="margin-top: 100px; padding-bottom: 50px; max-width: 400px;" align="center" class="container-sm">
                <!-- Content here -->
                               <h1 style="color: white; font-weight: 600">SIGN UP FOR CONTINUE</h1>

                    <span style="color: white; font-size: 15px; font-weight: 600" for="validationServer01" class="form-label">Name</span>
                    <span>  <input style="font-size: 15px;" type="text" name="inName" class="form-control is-valid" id="inName"  required></span><br>
                    <span style="color: white; font-size: 15px; font-weight: 600" for="validationServer01" class="form-label">Username</span>
                    <span> <input style="font-size: 15px;" type="text" name="inUsername" class="form-control is-valid" id="inUsername"  required></span><br>
                    <span style="color: white; font-size: 15px; font-weight: 600" for="validationServer01" class="form-label">Birthday</span>
                    <span><input style="font-size: 15px;" type="text" name="inBirthday" class="form-control is-valid" id="inBirthday"  required></span><br>
                    <span style="color: white; font-size: 15px; font-weight: 600" for="validationServer01" class="form-label">Contact Number</span>
                    <span><input style="font-size: 15px;" type="text" name="inContactNo" class="form-control is-valid" id="inContactNo"  required></span><br>
                    <span style="color: white; font-size: 15px; font-weight: 600" for="validationServer01" class="form-label">Email</span>
                    <span><input style="font-size: 15px;" type="email" name="inEmail" class="form-control is-valid" id="inEmail"  required></span><br>
                    <span style="color: white; font-size: 15px; font-weight: 600" for="validationServer01" class="form-label">Password</span>
                    <span><input style="font-size: 15px;" type="password" name="inPassword" class="form-control is-valid" id="inPassword"  required></span><br>
                    <span style="color: white; font-size: 15px; font-weight: 600" for="validationServer01" class="form-label">City</span>
                    <span><input style="font-size: 15px;" type="text" name="inCity" class="form-control is-valid" id="inCity"  required></span><br>
                    <span style="color: white; font-size: 15px; font-weight: 600" for="validationServer01" class="form-label">Account Type</span>
                    <div class="container-sm container-fluid" style="background-color: white">
                        <div class="form-check">
                            <input value="1" class="form-check-input" type="radio" name="userType" id="flexRadioDefault1">
                            <label style="font-size: 15px;" class="form-check-label" for="flexRadioDefault1">
                                Bussiness
                            </label>
                        </div>
                        <div class="form-check">
                            <input value="2" class="form-check-input" type="radio" name="userType" id="flexRadioDefault2" checked>
                            <label style="font-size: 15px;" class="form-check-label" for="flexRadioDefault2">
                                User
                            </label>
                        </div>
                    </div>

                    <br>





                    <div class="col-12">
                        <button style="font-size: 15px;" class="btn btn-success" type="submit">Submit form</button>
                    </div>
               
            </div>
        </div>
 </form>



<?php 
include './includes/footer_1.php';
?>
         <script src="js/jquery-2.1.4.min.js"></script>
        <!-- Dropdown Menu -->
        <script src="js/hoverIntent.js"></script>
        <script src="js/superfish.js"></script>
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Waypoints -->
        <script src="js/jquery.waypoints.min.js"></script>
        <!-- Counters -->
        <script src="js/jquery.countTo.js"></script>
        <!-- Stellar Parallax -->
        <script src="js/jquery.stellar.min.js"></script>
        <!-- Owl Slider -->
        <!-- // <script src="js/owl.carousel.min.js"></script> -->
        <!-- Date Picker -->
        <script src="js/bootstrap-datepicker.min.js"></script>
        <!-- CS Select -->
        <script src="js/classie.js"></script>
        <script src="js/selectFx.js"></script>
        <!-- Flexslider -->
        <script src="js/jquery.flexslider-min.js"></script>

        <script src="js/custom.js"></script>
    </body>
</html>
