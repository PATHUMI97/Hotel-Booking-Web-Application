<?php
if (session_id() == '') {
    session_start();
}
include './action/dbconnection.php';
$is_login = false;
$user_type = "";
$userID = "";
if (isset($_SESSION['is_login'])) {
    $is_login = $_SESSION['is_login'];
}


if (isset($_SESSION['user_type'])) {
    $user_type = $_SESSION['user_type'];
}

if (isset($_SESSION['userid'])) {
    $userID = $_SESSION['userid'];
}
?>
<html class="no-js">
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
 



    </head>
    <body>

        <div id="fh5co-header">
            <header id="fh5co-header-section">
                <div class="container">
                    <div class="nav-header">
                        <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
                        <h1 id="fh5co-logo"><a href="index.php">Sri-Trava</a></h1>
                        <nav id="fh5co-menu-wrap" role="navigation">
                            <ul class="sf-menu" id="fh5co-primary-menu">
                                <li><a href="index.php">Home</a></li>
                                <li>
                                    <a href="hotel.php" class="fh5co-sub-ddown">Hotel</a>

                                </li>
                                <li><a class="" href="services.php">Services</a></li>
                                <li><a href="contact.php">Contact</a></li>
                                <li><a href="blog.php">blog</a></li>

                                <?php
                                $query = "SELECT * FROM user WHERE id = '" . $userID . "'";
                                $result = $connection->query($query);
                                $name;
                                if ($result->num_rows > 0) {
                                   $row = $result->fetch_assoc();
                                $name = $row["name"]; 
                                }
                                
                                if ($is_login) {
                                    ?>  
                                <li><a style="font-weight: 1000; color: #ff66ff" href="#"><i class="fas fa-user-circle"></i><?php echo $name; ?></a></li>
                                    <?php
                                } else {
                                    ?>
                                <li><a href="login.php">Login</a></li>
                                    <?php
                                }
                                ?>
                            </ul>
                        </nav>
                    </div>
                </div>
            </header>
            
        </div>






        <!-- END fh5co-wrapper -->

        <!-- Javascripts -->
<script src="https://kit.fontawesome.com/192e014de4.js" crossorigin="anonymous"></script>
  

    </body>
</html>