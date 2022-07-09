
<?php
include './action/dbconnection.php';
//include './errorHandling.php';
?>
<html class="no-js"> <!--<![endif]-->

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Sri-Trava &mdash; Select your dream hotel</title>
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

        <?php
        $keywords = "";
        $category = "";
        if (isset($_GET['keywords'])) {
            $keywords = $_GET['keywords'];
        }
        if (isset($_GET['selectedCategory'])) {
            $category = $_GET['selectedCategory'];
        }
        ?>
    </head>
    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

        <div id="fh5co-wrapper">
            <div id="fh5co-page">
                <div id="fh5co-header">
                    <?php include './header.php'; ?>

                </div>
                <!-- end:fh5co-header -->
                <div class="fh5co-parallax" style="background-image: url(action/hotels/shangrila.jpg);" data-stellar-background-ratio="0.5">
                    <div class="overlay"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
                                <div class="fh5co-intro fh5co-table-cell">
                                    <h1 class="text-center">Choose Our Hotel</h1>
                                    <p>Made with love by the fine folks at <a href="#"></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="wrap">
                    <div class="container">
                        <div class="row">
                            <div id="availability">
                                <form method="get" action="hotel.php">

                                    <div class="a-col">
                                        <section>
                                            <select name="selectedCategory" class="cs-select cs-skin-border">

                                                <option value="">ALL Categories</option>
                                                <?php
                                                $queryCat = "SELECT * FROM hotel_category";
                                                $resultCat = $connection->query($queryCat);
                                                if ($resultCat->num_rows > 0) {

                                                    while ($row = $resultCat->fetch_assoc()) {
                                                        ?>
                                                        <option <?php
                                                        if ($category == $row['id_hotel_category']) {
                                                            echo 'selected';
                                                        }
                                                        ?> 
                                                            value="<?php echo $row['id_hotel_category'] ?>"><?php echo $row ['category_name'] ?></option>
                                                            <?php
                                                        }
                                                    }
                                                    ?>

                                            </select>
                                        </section>
                                    </div>
                                    <div class="a-col alternate">
                                        <div class="input-field">
                                            <label for="date-start">Check In</label>
                                            <input type="text" class="form-control" id="date-start" />
                                        </div>
                                    </div>
                                    <div class="a-col alternate ">
                                        <div class="input-field">
                                            <label for="date-end">Check Out</label>
                                            <input type="text" class="form-control" id="date-end" />
                                        </div>
                                    </div>
                                    <div class="a-col alternate ">
                                        <div class="input-field">

                                            <input style="width: 80%" type="text" name="keywords" id="keywords" class="form-control" placeholder="Search here" />
                                        </div>
                                    </div>

                                    <input type="submit" class="btn btn-warning" value="Search"/>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>






                <div id="fh5co-hotel-section">
                    <div class="container">
                        <div class="row">
                            <?php
                            $query = "SELECT * FROM hotels h"
                                    . " join hotel_category c on h.hotel_category = c.id_hotel_category"
                                    . " WHERE hotel_name LIKE '%" . $keywords . "%' OR city LIKE '%" . $keywords . "%'";

                            if ($category != "") {
                                $query = $query . " and  h.hotel_category = '" . $category . "'";
                            }

                            $result = $connection->query($query);

                            while ($row = $result->fetch_assoc()) {
                                ?>
                                <div class="col-md-4">



                                    <div class="hotel-content">
                                        <div class="hotel-grid" style="background-image: url(action/<?php echo $row["imageurl"]; ?>);">
                                            <div class="price"><small>For as low as</small><span>$100/night</span></div>
                                            <a class="book-now text-center" href="view_hotel.php?hid=<?php echo $row["id"] ?>"><i class="ti-calendar"></i>View More</a>
                                        </div>
                                        <div class="desc">
                                            <h3><a href="#"><?php echo $row["hotel_name"]; ?></a></h3>
                                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                        </div>
                                    </div>

                                </div>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>





                <?php include './includes/footer_1.php'; ?>

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