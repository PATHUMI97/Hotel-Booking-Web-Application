<?php
session_start();
include './action/dbconnection.php';
$orderID = "";
if (isset($_SESSION['current_invoice_id'])) {
    $orderID = $_SESSION['current_invoice_id'];
}
if ($orderID == "") {
    header("Location:./cart.php?msg=please login or register before continue");
    die();
}

$userId = "";
if (isset($_SESSION['userid'])) {
    $userId = $_SESSION['userid'];
}
if ($userId == "") {
    header("Location:./cart.php?msg=please login or register before continue");
    die();
}
?>
<html>
    <head>
          <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Sri-Trava &mdash; Confirm your reservation</title>
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
        <div><?php include './header.php';?></div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
       
        <div style="background-image: url(homeimg/fading-blue-background.jpg);" class="container-fluid">
            <div style="margin-top: 100px; padding-bottom: 50px;" align="center" class="container-md">
             <form method="post" action="https://sandbox.payhere.lk/pay/checkout">   
                
                <input type="hidden" name="merchant_id" value="1216535">    <!-- Replace your Merchant ID -->
                <input type="hidden" name="return_url" value="http://sample.com/return">
                <input type="hidden" name="cancel_url" value="http://sample.com/cancel">
                <input type="hidden" name="notify_url" value="http://sample.com/notify"> 
                <h1 style="color: white; font-weight: 600"> CONFIRM THE RESERVATION </h1>
                <br><br><h2 style="color: white; font-weight: 600">Reservation Details</h2><br>
                <input style=" font-size: 12px;" type="text" name="order_id" value="<?php echo $orderID; ?>"><br><br>
                
                <?php
                $paymentItems = "";
                $items = "SELECT * FROM invoice_item INNER JOIN hotels  ON invoice_item.product_id =hotels.id WHERE invoice_item.invoice_id='" . $orderID . "' ";
                $result = $connection->query($items);


                $total = 0;
                if ($result == true && $result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        ?>
                        <label style=" font-size: 12px;color: white; font-weight: 600">Hotel Name : <?php
                            $total = $total + ($row['line_unit_price'] * $row['line_qty']);
                            $paymentItems = $paymentItems . ", " . $row['hotel_name'] . ":" . $row['line_qty'];
                            echo $row['hotel_name']
                            ?></label><br>


                        <?php
                    }
                }
                ?>
                <input type="hidden" name="items" value="<?php echo $paymentIems; ?>"><br>
                <input style=" font-size: 12px;" type="text" name="currency" value="LKR">
                <input style=" font-size: 12px;" type="text" name="amount" value="<?php echo $total; ?>">  
                <br><br>Customer Details<br>
                <?php
                $query2 = "SELECT * FROM user WHERE id='" . $userId . "'";
                $resultUser = $connection->query($query2);

                if ($resultUser == TRUE && $resultUser->num_rows > 0) {
                    while ($record = $resultUser->fetch_assoc()) {
                        ?>
                        <input style=" font-size: 12px;" type="text" name="first_name" value="<?php echo $record['name']; ?>">
                        <input style=" font-size: 12px;" type="text" name="last_name" value="-"><br>
                        <input style=" font-size: 12px;" type="text" name="email" value="<?php echo $record['email']; ?>">
                        <input style=" font-size: 12px;" type="text" name="phone" value="<?php echo $record['contact_no']; ?>"><br>
                        <input style=" font-size: 12px;" type="text" name="address" value="-">
                        <input style=" font-size: 12px;" type="text" name="city" value="<?php echo $record['city']; ?>">
                        <input type="hidden" name="country" value="Sri Lanka"><br><br> 
                        <input style="font-size: 18px;" class="btn btn-success" type="submit" value="Buy Now">   
                    </form>
                    <?php
                }
            }
            ?>
        </div>
</div>
<?php
    include './includes/footer_1.php';
?>
    </body>
</html>
