
<?php
include './action/dbconnection.php';
//include './errorHandling.php';

$query = "SELECT * FROM hotel_category";
$result = $connection->query($query);


?>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
        <meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
        <meta name="author" content="FREEHTML5.CO" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  
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
    <body> 
      
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        <div style="background-image: url(homeimg/fading-blue-background.jpg);" class="container-fluid">
            <div style="margin-top: 100px; padding-bottom: 50px; max-width: 400px;" align="center" class="container-sm">   <h1 style="color: white; font-weight: 600" align="center">JOIN WITH US & REGISTER YOUR PLACE</h1><br><br>

          
                    <!-- Content here -->
                    <form class="row g-3" action="action/hotelreg.php" method="post" enctype="multipart/form-data">

                        <span style="color: white; font-size: 15px; font-weight: 600" for="validationServer01" class="form-label">Hotel Name</span>
                        <span>  <input style="font-size: 15px;" type="text" name="inHotelName" class="form-control is-valid" id="inHotelName"  required></span>
                        <span style="color: white; font-size: 15px; font-weight: 600" for="validationServer02" class="form-label">City</span>
                        <span><input style="font-size: 15px;" type="text" name="inCity" class="form-control is-valid" id="inCity" required></span><br>
                        <span style="color: white; font-size: 15px; font-weight: 600" for="validationServer02" class="form-label">Discription</span>
                        <span><input style="font-size: 15px;" type="text" name="inDiscription" class="form-control is-valid" id="inDiscription" required></span><br>

                        <span style="color: white; font-size: 15px; font-weight: 600" for="validationServer02" class="form-label">Category</span>
                        <select class="form-select" name="inCategory" aria-label="Default select example">
                            <?php
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    ?>
                                    <option style="font-size: 15px;" value="<?php echo $row['id_hotel_category'] ?>"><?php echo $row ['category_name'] ?></option>
                                    <?php
                                }
                            }
                            ?>
                        </select>
             


                <span style="color: white; font-size: 15px; font-weight: 600" for="validationServer01" class="form-label">Enter Your Hotel Image here</span>
                <span><input style="font-size: 15px;" type="file" name="inImage" class="form-control is-valid" id="inImage"  required></span>
                <span style="color: white; font-size: 15px; font-weight: 600" for="validationServer01" class="form-label">location</span>
                <span><input style="font-size: 15px;" type="url" name="inLocation" class="form-control is-valid" id="inLocation"  required></span>
                <span style="color: white; font-size: 15px; font-weight: 600" for="validationServer01" class="form-label">Contact number</span>
                <span><input style="font-size: 15px;" type="text" name="inContactNo" class="form-control is-valid" id="inContactNo"  required></span>
                <span style="color: white; font-size: 15px; font-weight: 600" for="validationServer01" class="form-label">Email</span>
                <span><input style="font-size: 15px;" type="text" name="inEmail" class="form-control is-valid" id="inEmail"  required></span>
                <span style="color: white; font-size: 15px; font-weight: 600" for="validationServer01" class="form-label">Address</span>
                <span><input type="text" name="inAddress" class="form-control is-valid" id="inAddress"  required></span>


                
              <button type="submit"  style="font-size: 15px;" class="btn btn-success" value="save hotel" >Submit</button>
              

                </form>
            </div>

        </div>

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

    </body>
</html>
