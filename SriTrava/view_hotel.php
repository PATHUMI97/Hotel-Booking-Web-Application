<?php
include './action/dbconnection.php';
//include './errorHandling.php';

$hid = "";

if (isset($_GET['hid'])) {
    $hid = $_GET['hid'];
}

if ($hid == "") {
    header("Location:./hotel.php");
    die();
}

$query = "SELECT * FROM hotels WHERE id='" . $hid . "'";
$result = $connection->query($query);

$hotel_name;
$description;
$price;
$imageURL;
$location;
$hid;
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $hotel_name = $row["hotel_name"];
    $description = $row['hotel_disc'];
    //$price= $row["sell_price"];
    $imageURL = $row["imageurl"];
    $location = $row["locationurl"];
} else {
    header("Location:./hotel.php?msg=product not found");
}
?>
<html class="no-js"> <!--<![endif]-->

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Sri-Trava &mdash; Start your jurney</title>

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

    </head>
    <body>
        <div id="fh5co-wrapper">
            <div id="fh5co-page">
                <div id="fh5co-header">
                    <?php include './header.php'; ?>

                </div>
                <?php
                $query = "SELECT * FROM hotels";
                $result = $connection->query($query);
                ?>
                <!-- end:fh5co-header -->
                <div class="fh5co-parallax" style="background-image: url(action/<?php echo $imageURL ?>);" data-stellar-background-ratio="0.5">
                    <div class="overlay"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
                                <div class="fh5co-intro fh5co-table-cell ">
                                    <h1 class="text-center"><?php echo $hotel_name ?></h1>
                                    <p>Made with love by the fine folks at <a href="#"></a></p>
                                  
                                    <form method="GET" action="action/addToCart.php">
                                        <input type="hidden" name="hid" value="<?php echo $hid; ?>"/>
                                        <input style="color: white;" class="btn btn-primary btn-lg" type="submit"  value="Book Now" />
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="wrap">
                    <div class="container">
                        <div class="row">
                            <div id="availability">

                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <section>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.6482631315635!2d79.84473779999999!3d6.932576399999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae259132e85493d%3A0x9d5e04ea64814a8!2sHilton%20Colombo!5e0!3m2!1sen!2slk!4v1612158848765!5m2!1sen!2slk" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </section>
                </div>








                
                <?php ?>

                <footer id="footer" class="fh5co-bg-color">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="copyright">
                                    <p><small>&copy; 2016 Free HTML5 Template. <br> All Rights Reserved. <br>
                                            Designed by <a href="http://freehtml5.co" target="_blank">FreeHTML5.co</a> <br> Demo Images: <a href="http://unsplash.com/" target="_blank">Unsplash</a></small></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-3">
                                        <h3>Company</h3>
                                        <ul class="link">
                                            <li><a href="#">About Us</a></li>
                                            <li><a href="#">Hotels</a></li>
                                            <li><a href="#">Customer Care</a></li>
                                            <li><a href="#">Contact Us</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-3">
                                        <h3>Our Facilities</h3>
                                        <ul class="link">
                                            <li><a href="#">Resturant</a></li>
                                            <li><a href="#">Bars</a></li>
                                            <li><a href="#">Pick-up</a></li>
                                            <li><a href="#">Swimming Pool</a></li>
                                            <li><a href="#">Spa</a></li>
                                            <li><a href="#">Gym</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <h3>Subscribe</h3>
                                        <p>Sed cursus ut nibh in semper. Mauris varius et magna in fermentum. </p>
                                        <form action="#" id="form-subscribe">
                                            <div class="form-field">
                                                <input type="email" placeholder="Email Address" id="email">
                                                <input type="submit" id="submit" value="Send">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <ul class="social-icons">
                                    <li>
                                        <a href="#"><i class="icon-twitter-with-circle"></i></a>
                                        <a href="#"><i class="icon-facebook-with-circle"></i></a>
                                        <a href="#"><i class="icon-instagram-with-circle"></i></a>
                                        <a href="#"><i class="icon-linkedin-with-circle"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </footer>

            </div>
            <!-- END fh5co-page -->

        </div>
        <!-- END fh5co-wrapper -->

        <!-- Javascripts -->
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