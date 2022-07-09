<!DOCTYPE html>

<?php
include './action/dbconnection.php';

?>
<html class="no-js"> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Sri-Trava &mdash; Sri Lanka's Number one Hotel Booking Site</title>
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
        <!-- FOR IE9 below -->
        <!--[if lt IE 9]>
        <script src="js/respond.min.js"></script>
        <![endif]-->
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
        <div id="fh5co-wrapper">
            <div id="fh5co-page">
           <?php 
        include './header.php';
        ?>
                <!-- end:fh5co-header -->
                <aside id="fh5co-hero" class="js-fullheight">
                    <div class="flexslider js-fullheight">
                        <ul class="slides">
                            <li style="background-image: url(homeimg/aerial-view-rocks-turquoise-water.jpg);">
                                <div class="overlay-gradient"></div>
                                <div class="container">
                                    <div class="col-md-12 col-md-offset-0 text-center slider-text">
                                        <div class="slider-text-inner js-fullheight">
                                            <div class="desc">
                                                <p><span>Five Star Hotels</span></p>
                                                <h2>Reserve Room for Family Vacation</h2>
                                                <p>
                                                    <a href="hotel.php" class="btn btn-primary btn-lg">Book Now</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li style="background-image: url(homeimg/aerial-top-view-sea-meeting-rocky-shore-with-green-trees.jpg);">
                                <div class="overlay-gradient"></div>
                                <div class="container">
                                    <div class="col-md-12 col-md-offset-0 text-center slider-text">
                                        <div class="slider-text-inner js-fullheight">
                                            <div class="desc">
                                                <p><span>Holiday Resorts</span></p>
                                                <h2>Make Your Vacation Comfortable</h2>
                                                <p>
                                                    <a href="hotel.php" class="btn btn-primary btn-lg">Book Now</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li style="background-image: url(homeimg/caves-sea-area-alanya-turkey.jpg);">
                                <div class="overlay-gradient"></div>
                                <div class="container">
                                    <div class="col-md-12 col-md-offset-0 text-center slider-text">
                                        <div class="slider-text-inner js-fullheight">
                                            <div class="desc">
                                                <p><span>Luxury Bunglows</span></p>
                                                <h2>A Best Place To Enjoy Your Life</h2>
                                                <p>
                                                    <a href="hotel.php" class="btn btn-primary btn-lg">Book Now</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                </aside>
                <div class="wrap">
                    <div class="container">
                        <div class="row">
                            <div id="availability">
                                
                            </div>
                        </div>
                    </div>
                </div>

                <div id="fh5co-counter-section" class="fh5co-counters">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 text-center">
                                <span class="fh5co-counter js-counter" data-from="0" data-to="20356" data-speed="5000" data-refresh-interval="50"></span>
                                <span class="fh5co-counter-label">User Access</span>
                            </div>
                            <div class="col-md-3 text-center">
                                <span class="fh5co-counter js-counter" data-from="0" data-to="15501" data-speed="5000" data-refresh-interval="50"></span>
                                <span class="fh5co-counter-label">Hotels</span>
                            </div>
                            <div class="col-md-3 text-center">
                                <span class="fh5co-counter js-counter" data-from="0" data-to="8200" data-speed="5000" data-refresh-interval="50"></span>
                                <span class="fh5co-counter-label">Transactions</span>
                            </div>
                            <div class="col-md-3 text-center">
                                <span class="fh5co-counter js-counter" data-from="0" data-to="8763" data-speed="5000" data-refresh-interval="50"></span>
                                <span class="fh5co-counter-label">Rating &amp; Review</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="featured-hotel" class="fh5co-bg-color">
                    <div class="container">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-title text-center">
                                    <h2>Featured Hotels</h2>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="feature-full-1col">
                                <div class="image" style="background-image: url(homeimg/hotel-1831072.jpg);">
                                    <div class="descrip text-center">
                                        <p><small>For as low as</small><span>$200/night</span></p>
                                    </div>
                                </div>
                                <div class="desc">
                                    <h3>Luxury Hotels</h3>
                                    <p>Pellentesque habitant morbi tristique senectus et netus ett mauada fames ac turpis egestas. Etiam euismod tempor leo, in suscipit urna condimentum sed. Vivamus augue enim, consectetur ac interdum a, pulvinar ac massa. Nullam malesuada congue </p>
                                    <p><a href="hotel.php" class="btn btn-primary btn-luxe-primary">Book Now <i class="ti-angle-right"></i></a></p>
                                </div>
                            </div>

                            <div class="feature-full-2col">
                                <div class="f-hotel">
                                    <div class="image" style="background-image: url(homeimg/lobby-398845.jpg);">
                                        <div class="descrip text-center">
                                            <p><small>For as low as</small><span>$99/night</span></p>
                                        </div>
                                    </div>
                                    <div class="desc">
                                        <h3>Holiday Resorts</h3>
                                        <p>Pellentesque habitant morbi tristique senectus et netus ett mauada fames ac turpis egestas. Etiam euismod tempor leo, 
                                            in suscipit urna condimentum sed. </p>
                                        <p><a href="hotel.php" class="btn btn-primary btn-luxe-primary">Book Now <i class="ti-angle-right"></i></a></p>
                                    </div>
                                </div>
                                <div class="f-hotel">
                                    <div class="image" style="background-image: url(homeimg/villa-3804175.jpg);">
                                        <div class="descrip text-center">
                                            <p><small>For as low as</small><span>$99/night</span></p>
                                        </div>
                                    </div>
                                    <div class="desc">
                                        <h3>Five Star hotels</h3>
                                        <p>Pellentesque habitant morbi tristique senectus et netus ett mauada fames ac turpis egestas. Etiam euismod tempor leo, in suscipit urna condimentum sed. </p>
                                        <p><a href="hotel.php
                                              " class="btn btn-primary btn-luxe-primary">Book Now <i class="ti-angle-right"></i></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div id="hotel-facilities">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-title text-center">
                                    <h2>Hotel Facilities</h2>
                                </div>
                            </div>
                        </div>

                        <div id="tabs">
                            <nav class="tabs-nav">
                                <a href="#" class="active" data-tab="tab1">
                                    <i class="flaticon-restaurant icon"></i>
                                    <span>Restaurant</span>
                                </a>
                                <a href="#" data-tab="tab2">
                                    <i class="flaticon-cup icon"></i>
                                    <span>Bar</span>
                                </a>
                                <a href="#" data-tab="tab3">

                                    <i class="flaticon-car icon"></i>
                                    <span>Pick-up</span>
                                </a>
                                <a href="#" data-tab="tab4">

                                    <i class="flaticon-swimming icon"></i>
                                    <span>Swimming Pool</span>
                                </a>
                                <a href="#" data-tab="tab5">

                                    <i class="flaticon-massage icon"></i>
                                    <span>Spa</span>
                                </a>
                                <a href="#" data-tab="tab6">

                                    <i class="flaticon-bicycle icon"></i>
                                    <span>Gym</span>
                                </a>
                            </nav>
                            <div class="tab-content-container">
                                <div class="tab-content active show" data-tab-content="tab1">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <img src="homeimg/dinner-table-with-foods-soft-drinks-restaurant.jpg" class="img-responsive" alt="Image">
                                            </div>
                                            <div class="col-md-6">
                                                <span class="super-heading-sm">World Class</span>
                                                <h3 class="heading">Restaurant</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias officia perferendis modi impedit, rem quasi veritatis. Consectetur obcaecati incidunt, quae rerum, accusamus sapiente fuga vero at. Quia, labore, reprehenderit illum dolorem quae facilis reiciendis quas similique totam sequi ducimus temporibus ex nemo, omnis perferendis earum fugit impedit molestias animi vitae.</p>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam neque blanditiis eveniet nesciunt, beatae similique doloribus, ex impedit rem officiis placeat dignissimos molestias temporibus, in! Minima quod, consequatur neque aliquam.</p>
                                                <p class="service-hour">
                                                    <span>Service Hours</span>
                                                    <strong>7:30 AM - 8:00 PM</strong>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-content" data-tab-content="tab2">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <img src="homeimg/filtered-beer-with-foam.jpg" class="img-responsive" alt="Image">
                                            </div>
                                            <div class="col-md-6">
                                                <span class="super-heading-sm">World Class</span>
                                                <h3 class="heading">Bars</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias officia perferendis modi impedit, rem quasi veritatis. Consectetur obcaecati incidunt, quae rerum, accusamus sapiente fuga vero at. Quia, labore, reprehenderit illum dolorem quae facilis reiciendis quas similique totam sequi ducimus temporibus ex nemo, omnis perferendis earum fugit impedit molestias animi vitae.</p>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam neque blanditiis eveniet nesciunt, beatae similique doloribus, ex impedit rem officiis placeat dignissimos molestias temporibus, in! Minima quod, consequatur neque aliquam.</p>
                                                <p class="service-hour">
                                                    <span>Service Hours</span>
                                                    <strong>7:30 AM - 8:00 PM</strong>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-content" data-tab-content="tab3">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <img src="homeimg/elegant-business-woman-sitting-car-working-laptop.jpg" class="img-responsive" alt="Image">
                                            </div>
                                            <div class="col-md-6">
                                                <span class="super-heading-sm">World Class</span>
                                                <h3 class="heading">Pick Up</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias officia perferendis modi impedit, rem quasi veritatis. Consectetur obcaecati incidunt, quae rerum, accusamus sapiente fuga vero at. Quia, labore, reprehenderit illum dolorem quae facilis reiciendis quas similique totam sequi ducimus temporibus ex nemo, omnis perferendis earum fugit impedit molestias animi vitae.</p>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam neque blanditiis eveniet nesciunt, beatae similique doloribus, ex impedit rem officiis placeat dignissimos molestias temporibus, in! Minima quod, consequatur neque aliquam.</p>
                                                <p class="service-hour">
                                                    <span>Service Hours</span>
                                                    <strong>7:30 AM - 8:00 PM</strong>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-content" data-tab-content="tab4">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <img src="homeimg/portrait-beautiful-young-asian-woman-relax-happy-smile-leisure-around-outdoor-swimming-pool.jpg" class="img-responsive" alt="Image">
                                            </div>
                                            <div class="col-md-6">
                                                <span class="super-heading-sm">World Class</span>
                                                <h3 class="heading">Swimming Pool</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias officia perferendis modi impedit, rem quasi veritatis. Consectetur obcaecati incidunt, quae rerum, accusamus sapiente fuga vero at. Quia, labore, reprehenderit illum dolorem quae facilis reiciendis quas similique totam sequi ducimus temporibus ex nemo, omnis perferendis earum fugit impedit molestias animi vitae.</p>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam neque blanditiis eveniet nesciunt, beatae similique doloribus, ex impedit rem officiis placeat dignissimos molestias temporibus, in! Minima quod, consequatur neque aliquam.</p>
                                                <p class="service-hour">
                                                    <span>Service Hours</span>
                                                    <strong>7:30 AM - 8:00 PM</strong>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-content" data-tab-content="tab5">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <img src="homeimg/beautiful-young-woman-lying-waiting-her-massage-spa-concept.jpg" class="img-responsive" alt="Image">
                                            </div>
                                            <div class="col-md-6">
                                                <span class="super-heading-sm">World Class</span>
                                                <h3 class="heading">Spa</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias officia perferendis modi impedit, rem quasi veritatis. Consectetur obcaecati incidunt, quae rerum, accusamus sapiente fuga vero at. Quia, labore, reprehenderit illum dolorem quae facilis reiciendis quas similique totam sequi ducimus temporibus ex nemo, omnis perferendis earum fugit impedit molestias animi vitae.</p>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam neque blanditiis eveniet nesciunt, beatae similique doloribus, ex impedit rem officiis placeat dignissimos molestias temporibus, in! Minima quod, consequatur neque aliquam.</p>
                                                <p class="service-hour">
                                                    <span>Service Hours</span>
                                                    <strong>7:30 AM - 8:00 PM</strong>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-content" data-tab-content="tab6">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <img src="homeimg/woman-working-out-gym.jpg" class="img-responsive" alt="Image">
                                            </div>
                                            <div class="col-md-6">
                                                <span class="super-heading-sm">World Class</span>
                                                <h3 class="heading">Gym</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias officia perferendis modi impedit, rem quasi veritatis. Consectetur obcaecati incidunt, quae rerum, accusamus sapiente fuga vero at. Quia, labore, reprehenderit illum dolorem quae facilis reiciendis quas similique totam sequi ducimus temporibus ex nemo, omnis perferendis earum fugit impedit molestias animi vitae.</p>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam neque blanditiis eveniet nesciunt, beatae similique doloribus, ex impedit rem officiis placeat dignissimos molestias temporibus, in! Minima quod, consequatur neque aliquam.</p>
                                                <p class="service-hour">
                                                    <span>Service Hours</span>
                                                    <strong>7:30 AM - 8:00 PM</strong>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="testimonial">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-title text-center">
                                    <h2>Happy Customer Says...</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="testimony">
                                    <blockquote>
                                        &ldquo;If youâ€™re looking for a top quality hotel look no further. We were upgraded free of charge to the Premium Suite, thanks so much&rdquo;
                                    </blockquote>
                                    <p class="author"><cite>John Doe</cite></p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="testimony">
                                    <blockquote>
                                        &ldquo;Me and my wife had a delightful weekend get away here, the staff were so friendly and attentive. Highly Recommended&rdquo;
                                    </blockquote>
                                    <p class="author"><cite>Rob Smith</cite></p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="testimony">
                                    <blockquote>
                                        &ldquo;If youâ€™re looking for a top quality hotel look no further. We were upgraded free of charge to the Premium Suite, thanks so much&rdquo;
                                    </blockquote>
                                    <p class="author"><cite>Jane Doe</cite></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div id="fh5co-blog-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-title text-center">
                                    <h2>Our Blog</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="blog-grid" style="background-image: url(homeimg/campfire-1846142.jpg);">
                                    <div class="date text-center">
                                        <span>20</span>
                                        <small>Jan</small>
                                    </div>
                                </div>
                                <div class="desc">
                                    <h3><a href="#">Hiking and Camping Experience</a></h3>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="blog-grid" style="background-image: url(homeimg/glasses-919071.jpg);">
                                    <div class="date text-center">
                                        <span>19</span>
                                        <small>Sept</small>
                                    </div>
                                </div>
                                <div class="desc">
                                    <h3><a href="#">1st Anniversary of Luxe Hotel</a></h3>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="blog-grid" style="background-image: url(homeimg/rafting-4353428.jpg);">
                                    <div class="date text-center">
                                        <span>10</span>
                                        <small>Aprl</small>
                                    </div>
                                </div>
                                <div class="desc">
                                    <h3><a href="#">Discover New Adventure</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php 
                
 include './includes/footer_1.php';?>

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