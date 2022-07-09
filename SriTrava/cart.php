<?php
session_start();
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

 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <script src="js/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        <?php
        include './header.php';
        ?>
        <div style="background-image: url(homeimg/fading-blue-background.jpg);" class="container-fluid">
            <div style="margin-top: 100px;" class="container-md" align="center">
                <h1 style="color: white; font-weight: 600">RESERVE YOUR DREAM JURNEY </h1>
                <table style="background-color: #ffcccc" border="0">
                    <?php
                    $totalAmu = 0.0;
                    $isHotel = false;

                    if (isset($_SESSION['cart'])) {
                        $cart = $_SESSION['cart'];                //cartitem[0]=hotel_id
                        foreach ($cart as $cartItem) {             //cartitem[1]=qty
                            $hotelQuery = "SELECT * FROM hotels WHERE id = '" . $cartItem[0] . "'";
                            $result = $connection->query($hotelQuery);

                            if ($result->num_rows > 0) {
                                $row = $result->fetch_assoc();
                                $rowAmu = ($row['hotel_price'] * $cartItem[1]);
                                $totalAmu = $totalAmu + $rowAmu;
                                $isHotel = true;
                                ?>

                                <div class="card mb-3">
                                    <img src="action/<?php echo $row["imageurl"]; ?>" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <p class="card-text"><?php echo $row['hotel_name']; ?>.</p>
                                        <h5 class="card-title"><?php echo $row["hotel_disc"]; ?>.</h5>
                                        
                                        <p class="card-text"><?php echo $cartItem[1]; ?></p>
                                        <p class="card-text"><small class="text-muted">$<?php echo $row["hotel_price"]; ?> *<?php echo $cartItem[1]; ?></small></p>
                                    </div>
                                    <h2 style="color: #990000">total:<?php echo $totalAmu; ?> LKR </h2>
                                </div>
                               <a href="action/removeFromCart.php?hid=<?php echo $cartItem[0]; ?>">
                                    <input style="font-size: 18px;" class="btn btn-danger" type="button" value="Cancel Reservation" /></a>
                                <?php
                            }
                        }
                    }
                    if (!$isHotel) {
                        echo 'cart empty';
                    }
                    ?>
                </table>
                
                
                <a href="chechout.php"> <input style="font-size: 18px;" class="btn btn-success" type="submit" value="checkout" name="Checkout"/></a>

            </div>
        </div>
        <?php include './includes/footer_1.php'; ?>
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
