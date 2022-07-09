<?php
session_start();
include './action/dbconnection.php';

$user_Id = "";
if (isset($_SESSION['userid'])) {
    $user_Id = $_SESSION['userid'];
}

$is_login = false;
if (isset($_SESSION['is_login'])) {
    $is_login = $_SESSION['is_login'];
}


$name = "";

$city = "";
$contactNo = "";
$Username = "";
$birthday = "";
if ($is_login) {
    $query2 = "select * from user where id = '" . $user_Id . "'";
    $result = $connection->query($query2);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $name = $row["name"];

        $city = $row["city"];
        $contactNo = $row["contact_no"];
        $Username = $row["username"];
        $birthday = $row["birthday"];
    }
}
?>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Sri-Trava &mdash; checkout the order</title>
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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    </head>
    <body >
        <div><?php include './header.php'; ?></div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>


        <div style="background-image: url(homeimg/fading-blue-background.jpg);" class="container-fluid">
            <div style="margin-top: 100px; padding-bottom: 50px; max-width: 400px;" align="center" class="container-sm">

                <h1 style="color: white; font-weight: 600">CHECKOUT</h1>
                <form method="POST" action="action/checkoutAction.php">


                    <b style="color: white; font-weight: 600"> Billing and delivery details</b> 
                    <table style="border: none" class="table table-sm table-bordered border-primary">

                        <br><br> <br>
                        <tr>
                            <td style=" font-size: 15px; color: white; padding: 25px 40px;">Name</td>
                            <td><input type="text" name="name" value="<?php echo $name; ?>" /></td>
                        </tr>

                        <tr>
                            <td style=" font-size: 15px; color: white; padding: 25px 40px;">BirthDay</td>
                            <td><input type="text" name="birthday" value="<?php echo $birthday; ?>"></td>
                        </tr>
                        <tr>
                            <td style=" font-size: 15px; color: white; padding: 25px 40px;">City</td>
                            <td><input type="text" name="city" value="<?php echo $city; ?>"></td>
                        </tr>
                        <tr>
                            <td style=" font-size: 15px; color: white; padding: 25px 40px;">Username</td>
                            <td><input type="text" name="username" value="<?php echo $Username; ?>"  /></td>
                        </tr>


                        <tr>
                            <td style=" font-size: 15px; color: white; padding: 25px 40px;">contact number</td>
                            <td><input type="text" name="contactNumber" value="<?php echo $contactNo; ?>" /></td>
                        </tr>
<?php if (!$is_login) {
    ?>
                            <tr>
                                <td style=" font-size: 15px; color: white; padding: 25px 40px;">Email</td>
                                <td><input type="text" name="email" value="" /></td>
                            </tr>
                            <tr>
                                <td style=" font-size: 15px; color: white; padding: 25px 40px;">password</td>
                                <td><input type="text" name="password" /></td>
                            </tr>

<?php } ?>
                        
 
                    </table><br><br> <br>
      <input style="font-size: 18px;" class="btn btn-success" type="submit" value="Update Billing Details" />
                </form>
            </div>
        </div>
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

