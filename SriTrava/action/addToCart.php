<?php

session_start();

$hotelId = "";

if (isset($_GET['hid'])) {
    $hotelId = $_GET['hid'];
}
if (isset($_POST['hid'])) {
    $hotelId = $_POST['hid'];
}

if ($hotelId == "") {
    header("Location:../hotel.php?msg=invalid hotel id");
    die();
}
//define the cart
$cart;
//assign cart
$isInTheCart = FALSE;
if (isset($_SESSION['cart'])) {
    $cart = $_SESSION['cart'];

foreach ($cart as $key =>$value) {
    if ($value[0]==$hotelId) {
        $currentQty=$value[1];
        unset($cart[$key]);
        $cartItem = array($hotelId,$currentQty+1);
        array_push($cart, $cartItem);
        $isInTheCart=true;
    }
}
} else {
    $cart = array();
}
if (!$isInTheCart) {
     //parm 0-> product id param 1->1
$cartItem = array($hotelId,1);

array_push($cart, $cartItem);  }

 

$_SESSION['cart'] = $cart;

header("Location: ../cart.php");
?>
  
